<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UserTemplateHelper;
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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function index1111(){
        return view('admin.templates.template_1.index-orignal');
    }
    public function aboutus(){
        return view('user.aboutus');
    }
    public function testimonials(){
        return view('user.testimonials');
    }
    public function plans(){
        return view('user.plan_features');
    }
    public function contactus(){
        return view('user.contactus');
    }
    public function blog(){
        return view('user.blog');
    }
    
    public function register(Request $request){

        $validator =  Validator::make(['email' => $request->email], [
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
            'email'  => $request->get('email'),
            'password' => $request->get('password'),
            // 'role_id' => 2
        ]);
        return redirect()->back();
    }
    public function login(Request $request){

        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:6'
        ]);
        $user_data = array(
            'email'  => $request->get('email'),
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
    public function memorialform(){
        $user = Auth::user();
        return view('user.memorialform');
    }
    public function add_user(Request $request){
        $user = Auth::user();
        $style = Styling::with('website_template')->first();
        $user_helper = new UserTemplateHelper();
        $user_web = $user_helper->save_memorial_user($request,$user,$style);
        $response = new \stdClass();
        $response->status = true;
        $response->user_memorial = $user_web;
        $response->all_request = $request->all();
        return $this->sendResponse(200,$response);
    }
    public function update_plan(Request $request){
        $plan=UserWebsite::find($request->memorial_id);
        $plan->plan_id = $request->plan_id;
        $plan->save();

    }
    public function privacy(Request $request){
        $memorial_id = $request->memorial_id;
        $user_web = UserWebsite::with('style.website_template')->find($memorial_id);
        $user_web->visible_to_all = $request->all_visitors ?? '0';
        $user_web->agreement = $request->agreement ?? '0';
        $user_web->save();
        $styles = Styling::get();
        $default_style = $user_web->style;
        $template_helper = new TemplateHelper($user_web,$user_web->web_variable);
        // dd($user_web,$user_web->web_variable);
        $html = $template_helper->create_html();
        $styles_json = urlencode(json_encode($styles));
        
        return view('user/dynamic_template/index', compact('html','styles_json','styles','default_style','memorial_id'));

    }
    public function save_css(Request $request){
        $user_website=UserWebsite::find($request->user_website_id);
        $user_website->style_id = $request->css_style_id;
        $style = Styling::find($request->css_style_id);
        $web_html = $style->website_template->web_html;

        $web_html = str_replace('{!!{memorial_style_var.style_script_var}!!}',$style->css_files,$web_html);
        $user_website->web_html = $web_html;


        $user_website->save();
        $res = new \stdClass();
        $res->status = true;
        $res->redirect = asset('user/get_memorial/'.$user_website->email);
        return $this->sendResponse(200,$res);
        // return redirect('user/get_memorial/'.$user_website->email);

    }

    public function get_memorial(Request $request,$user_email){
        $website_template_email = $user_email;
        $user_website = UserWebsite::with('style')->where('email',$website_template_email)->first();
        // dd($user_website->web_variable);
        $tributes = Tributes_Arr::where('memorial_id',$user_website->id)->get()->toArray();
        // dd($tributes->toArray());
        $web_variable = $user_website->web_variable;
        $web_variable['tributes_arr'] = $this->set_attribute_arr_pics($tributes);//$tributes;
        // set_attribute_arr_pics($tributes);
        $template_helper = new TemplateHelper($user_website,$web_variable);
        $html = $template_helper->create_html();
        return view('user/dynamic_template/user_page', compact('html','user_website'));
    }
    public function storyform(Request $request){
        $user = Auth::user();
        $story = new Story_Tab_Arr();
        $story->user_name_show_var = $request->story_title_n;
        $story->details_show_var = $request->story_details_n;
        $story->memorial_id = $request->memorial_id;
        $story->image_show_var = $request->image;
        $story->date_show_var = date(" jS  F Y");
        $story->user_id = $user->id;
        $story->save();
    }
    public function tributeform(Request $request){
        $user = Auth::user();
        $tribute = new Tributes_Arr();
        $tribute->details_show_var = $request->details_show_var;
        $tribute->type_var = $request->type_var;
        $tribute->memorial_id = $request->memorial_id;
        $tribute->user_id = $user->id;
        // $user_trib = Tributes_Arr::with('user')->select('*')->get();
        $tribute->user_name_show_var =$user->first_name;
        $tribute->date_show_var = date(" jS  F Y");
        $tribute->save();
    }


    

    public function my_memorials(){
        $memorials = UserWebsite::with('style')->orderBy('created_at', 'DESC')->get();
        // $template = Styling::orderBy('created_at', 'DESC')->get();
        return view('user.my_memorials', compact('memorials'));

    }

}
