<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UserTemplateHelper;
use App\Models\Gallery;
use App\Models\Life_Tab_Arr;
use App\Models\Models\Template;
use App\Http\Helpers\TemplateHelper;
use App\Models\Story_Tab_Arr;
use App\Models\Styling;
use App\Models\Tributes_Arr;
use App\Models\WebsiteTemplate;
use App\Models\Template as ModelsTemplate;
use App\Models\User;
use App\Models\UserWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Mail\InviteEmail;
use DB;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function index1111()
    {
        return view('admin.templates.template_1.index-orignal');
    }
    public function index2()
    {
        $memorials = UserWebsite::with('style')->orderBy('created_at', 'DESC')->get();
        return view('user.memorial_search', compact('memorials'));
    }
    public function index3()
    {
        $memorials = UserWebsite::with('style')->orderBy('created_at', 'DESC')->get();
        return view('user.view_memorial', compact('memorials'));
    }
    public function aboutus()
    {
        return view('user.aboutus');
    }
    public function privacy_policy()
    {
        return view('user.privacy');
    }
    public function service_term()
    {
        return view('user.service_term');
    }
    public function testimonials()
    {
        return view('user.testimonials');
    }
    public function plans()
    {
        return view('user.plan_features');
    }
    public function contactus()
    {
        return view('user.contactus');
    }
    public function blog()
    {
        return view('user.blog');
    }

    public function register(Request $request)
    {

        $validator = Validator::make(['email' => $request->email], [
            'email' => ['required', 'email', \Illuminate\Validation\Rule::unique('users')] //->ignore($users->id)
        ]);
        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }
        $user = new User();
        $user->first_name = $request->name;
        $user->email = $request->email;
        $user->role_id = 2;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            // 'role_id' => 2
        ]);
        return redirect()->back();
    }
    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:6'
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role_id' => 2
        );

        if (Auth::attempt($user_data)) {
            return redirect('/')->with('success', 'ThankYou ! You are successfully logged in');
        } else {
            return redirect()->back()->with('login_error', 'Wrong Login Details');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    // public function template(){
    //     $template  = ModelsTemplate::find(1);
    //     return view('user.template',compact('template'));
    // }
    public function memorialform()
    {
        $user = Auth::user();
        return view('user.memorialform');
    }
    public function add_user(Request $request)
    {
        $user = Auth::user();
        $style = Styling::with('website_template')->first();
        $user_helper = new UserTemplateHelper();
        $user_web = $user_helper->save_memorial_user($request, $user, $style);
        $response = new \stdClass();
        $response->status = true;
        $response->user_memorial = $user_web;
        $response->all_request = $request->all();
        return $this->sendResponse(200, $response);
    }
    public function update_plan(Request $request)
    {
        $plan = UserWebsite::find($request->memorial_id);
        $plan->plan_id = $request->plan_id;
        $plan->save();

    }
    public function privacy(Request $request)
    {
        $memorial_id = $request->memorial_id;
        $user_web = UserWebsite::with('style.website_template')->find($memorial_id);
        $user_web->visible_to_all = $request->all_visitors ?? '0';
        $user_web->agreement = $request->agreement ?? '0';
        $user_web->save();
        $styles = Styling::get();
        $default_style = $user_web->style;
        // dd($user_web->web_variable);
        // dd($default_style);
        // dd($user_web);
        $template_helper = new TemplateHelper($user_web, $user_web->web_variable);
        // dd($user_web,$user_web->web_variable);
        $html = $template_helper->create_html();
        // dd($html);
        $styles_json = urlencode(json_encode($styles));
        // $styles_json = json_encode($styles[0]);
        // dd($styles_json);

        return view('user/dynamic_template/index', compact('html', 'styles_json', 'styles', 'default_style', 'memorial_id'));

    }
    public function save_css(Request $request)
    {
        $user_website = UserWebsite::find($request->user_website_id);
        $user_website->style_id = $request->css_style_id;
        $style = Styling::find($request->css_style_id);
        $web_html = $style->website_template->web_html;

        $web_html = str_replace('{!!{memorial_style_var.style_script_var}!!}', $style->css_files, $web_html);
        $user_website->web_html = $web_html;


        $user_website->save();
        $res = new \stdClass();
        $res->status = true;
        $res->redirect = asset('user/get_memorial/' . $user_website->email);
        return $this->sendResponse(200, $res);
        // return redirect('user/get_memorial/'.$user_website->email);

    }

    public function get_memorial(Request $request, $user_email)
    {
        $website_template_email = $user_email;
        $user_website = UserWebsite::with('style')->where('email', $website_template_email)->first();
        $web_variable = $user_website->web_variable;
        
        $user_website->total_views = $user_website->total_views+1;
        $user_website->save();
        $tributes = Tributes_Arr::where('memorial_id', $user_website->id)->get()->toArray();
        $web_variable['tributes_arr'] = $this->set_attribute_arr_pics($tributes); //$tributes;

        $tributes_side = Tributes_Arr::where('memorial_id', $user_website->id)->orderBy('created_at', 'ASC')->select('*')->get();
        $trib_side = $tributes_side ->count();

        $gal_side = Gallery::where('memorial_id', $user_website->id)->orderBy('created_at', 'ASC')->select('*')->get();
        // $gal_side = $gallery_side ->count();

        $stories = Story_Tab_Arr::where('memorial_id', $user_website->id)->orderbydesc('id')->get()->toArray();
        $web_variable['story_arr'] = $stories; //$tributes;

        $life_arr = Life_Tab_Arr::where('memorial_id', $user_website->id)->orderbydesc('id')->get()->toArray();
        $web_variable['life_tab_arr'] = $life_arr;

        $gallery = Gallery::where('memorial_id', $user_website->id);


        $latest_gallery = $gallery->select(DB::raw('Date(created_at) as selected_date'),DB::raw('count(id)'),'type')->groupByRaw('Date(created_at),type')->orderByRaw('Date(created_at)')->get();

        $recent_updates_show_arr = [];

        foreach ($latest_gallery as $key => $value) {
            $msg = '';
            // dd($value); 
            $msg = $value->count.' '.$value->type.' added' ;
            // $recent_updates_show_arr[$key] = new \stdClass();
            // $recent_updates_show_arr[$key]->date_var = $value->selected_date;
            // $recent_updates_show_arr[$key]->type_var = $value->type;
            // $recent_updates_show_arr[$key]->message_var = $msg;

            
            // $recent_updates_show_arr[$key] = new \stdClass();
            $recent_updates_show_arr[$key]['date_var'] = $value->selected_date;
            $recent_updates_show_arr[$key]['type_var'] = $value->type;
            $recent_updates_show_arr[$key]['message_var'] = $msg;
        }


        // dd($user_website->id,$gallery,$recent_updates_show_arr);

        $gallery_image = Gallery::where('memorial_id', $user_website->id)->where('type','photo')
        ->orderbydesc('id')->get()->toArray();
        // $gallery_image = $gallery->where('type','photo')
        // ->orderbydesc('id')->get();
        $web_variable['gallery_photo_arr'] = $gallery_image;
        // $web_variable['gallery_photo_arr'] = $gallery_image->toArray();
// dd($web_variable['gallery_photo_arr']);
        $gallery_video = Gallery::where('memorial_id', $user_website->id)->where('type','video')
        ->orderbydesc('id')->get()->toArray();
        // $gallery_video = $gallery->where('type','video')
        // ->orderbydesc('id')->get();
        $web_variable['gallery_video_arr'] = $gallery_video;

        $gallery_audio = Gallery::where('memorial_id', $user_website->id)->where('type','audio')
        ->orderbydesc('id')->get()->toArray();
        
        // $gallery_audio = $gallery->where('type','audio')
        // ->orderbydesc('id')->get();
        $web_variable['gallery_audio_arr'] = $gallery_audio;

        $web_variable['recent_updates_show_arr'] = $recent_updates_show_arr;

        $template_helper = new TemplateHelper($user_website, $web_variable);
        $html = $template_helper->create_html();
        // dd($web_variable);
        return view('user/dynamic_template/user_page', compact('html','trib_side', 'gal_side', 'web_variable','user_website'));
    }
    public function storyform(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $story = new Story_Tab_Arr();
        $story->user_name_show_var = $user->first_name;
        $story->story_title_show_var = $request->story_title_n;
        $story->details_show_var = $request->story_details_n;
        $story->memorial_id = $request->memorial_id;
        $story->image_show_var = $request->story_image;
        $story->date_show_var = date(" jS  F Y");
        $story->user_id = $user->id;
        $story->save();
        return $this->sendResponse(200, $story);

    }
    public function tributeform(Request $request)
    {
        $user = Auth::user();
        $tribute = new Tributes_Arr();
        $tribute->details_show_var = $request->details_show_var;
        $tribute->type_var = $request->type_var;
        $tribute->image_show_var = $request->image_tribute;
        $tribute->image_tribute = $request->image_tribute;
        $tribute->memorial_id = $request->memorial_id;
        $tribute->user_id = $user->id;
        $tribute->user_name_show_var = $user->first_name;
        $tribute->date_show_var = date(" jS  F Y");
        $tribute->save();
        return $this->sendResponse(200, $tribute);
    }
    public function get_tribute(Request $request)
    {

        $tributes = Tributes_Arr::orderBy('created_at', 'ASC')->select('*')->get();
        $tributesData['data'] = $tributes;
        echo json_encode($tributesData);

    }
    public function get_tribute_side(Request $request)
    {

        $tributes_side = Tributes_Arr::orderBy('created_at', 'ASC')->select('*')->get();
        $trib_side = $tributes_side ->count();
        // dd($tributes_side);
        return $this->sendResponse(200, $trib_side);

    }



    public function my_memorials()
    {        $authuser = Auth::user();
        $aut_id = $authuser->id;
        // dd($aut_id);


        $memorials = UserWebsite::with('style')->where('user_id', $aut_id)->orderBy('created_at', 'DESC')->get();
        // $template = Styling::orderBy('created_at', 'DESC')->get();
        // dd($memorials);

        return view('user.my_memorials', compact('memorials'));

    }
    public function search_memorial(Request $request)
    {
        // $memorials = UserWebsite::with('style')->orderBy('created_at', 'DESC')->get();
        $email = $request->email ?? '';
        // dd($email);
        $memorials = UserWebsite::where('email', 'like', '%' . $email . '%')->get();
        $search_memorial = UserWebsite::where('email', 'like', '%' . $email . '%')->get();
        // $template = Styling::orderBy('created_at', 'DESC')->get();

        // Session()->put($search_memorial, "Your Data Save Successfully !");  
// dd($memorials);
        // dd( Session()->get(1, $search_memorial));
        return view('user.view_memorial', compact('search_memorial', 'memorials'));
    }


    public function upload_gallery(Request $request)
    {
        $user = Auth::user();
        $gallery_aud = new Gallery();
        $gallery_aud->memorial_id = $request->memorial_id;
        if ($request->hasFile('upload_file')) {
            $avatar = $request->upload_file;
            $root = $request->root();
            $gallery_aud->image_show_var = $this->move_img_get_path($avatar, $root, 'upload_file');
        } else {
            $gallery_aud->image_show_var = $request->upload_file;
        }
        $gallery_aud->type = $request->media_type;
        $gallery_aud->date_show_var = date(" jS  F Y");
        $gallery_aud->name_show_var = $user->first_name;
        $gallery_aud->user_id = $user->id;
        $gallery_aud->save();
        return $this->sendResponse(200, $gallery_aud);


    }
    
    public function destroy_undestroy($id)
    {
        $category = Gallery::find($id);
        if ($category) {
            Gallery::destroy($id);
            $new_value = 'Activate';
        } else {
            Gallery::withTrashed()->find($id)->restore();
            $new_value = 'Delete';
        }
        $response = Response::json([
            "status" => true,
            'action' => Config::get('constants.ajax_action.delete'),
            'new_value' => $new_value
        ]);
        return $response;
    }


    public function send_invite(Request $request){
       
        $mail_data = UserWebsite::find($request->memorial_id);
        $invite_emails = $request->to_emails;


 
        $details = [
            'to' => $request->to_emails,
        
            'user_id' => $request->memorial_id,
            'from' => 'ameer.maavia@gmail.com',
            // 'from' => 'info@4_ever_memories.com',
            'title' => '4Ever',
            'subject' => 'INVITATION ',
            "dated"  => date('d F, Y (l)'),
            'deceased_data' => $mail_data
        ];
        Mail::to($request->to_emails)->send(new InviteEmail($details));
    }
}