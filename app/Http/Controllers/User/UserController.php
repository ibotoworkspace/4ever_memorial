<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UserTemplateHelper;
use App\Models\Models\Template;
use App\Http\Helpers\TemplateHelper;
use App\Models\Styling;
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
    public function my_memorials(){
        return view('user.my_memorials');
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
    // public function template(){
    //     $template  = ModelsTemplate::find(1);
    //     return view('user.template',compact('template'));
    // }
    public function memorialform(){
        // $style = Styling::with('website_template')->first();
        // dd($style);
        return view('user.memorialform');
    }
    public function add_user(Request $request){
        $user = Auth::user();
        // dd($request->all());
        $style = Styling::with('website_template')->first();
        $user_helper = new UserTemplateHelper();
        $user_web = $user_helper->save_memorial_user($request,$user,$style);
        $response = new \stdClass();
        $response->status = true;
        $response->user_memorial = $user_web;
        return json_encode($response);
        // dd('saved');
        
        
    }
    public function update_plan(Request $request){
        // echo('asdasdasdasdasd');
        // dd($request->all(),'asasasas');
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
        // $temp = WebsiteTemplate::first();
        $styles = Styling::get(); 
        $default_style = $user_web->style;
        $user_website_template = $default_style->website_template;
        $user_website_template->web_variable = $user_web->website_variable;
// dd($styles);
        $template_helper = new TemplateHelper($user_website_template,$user_web->style);
        $html = $template_helper->create_html();
        $styles_json = urlencode(json_encode($styles));
        
        return view('user/dynamic_template/index', compact('html','styles_json','styles','default_style','memorial_id'));

    }
    public function save_css(Request $request){
        $user_website=UserWebsite::find($request->user_website_id);
        $user_website->style_id = $request->css_style_id;
        $style = Styling::find($request->css_style_id);

        
        $user_website->website_html = $style->website_template->web_html;
        $user_website->website_variable = $style->web_variable;
        $user_website->variable_html = $style->variable_html;


        $user_website->save();
        $res = new \stdClass();
        $res->status = true;
        $res->redirect = asset('user/get_memorial/'.$user_website->email);
        return $this->sendResponse(200,$res);
        // return redirect('user/get_memorial/'.$user_website->email);

    }

    public function get_memorial(Request $request,$user_email){
        // 11DFSn@mail.com
        $website_template_email = $user_email;
        $temp = WebsiteTemplate::first();
        $user_website = UserWebsite::with('style')->where('email',$website_template_email)->first();
        // $user_website->style->web_variable = $user_website->website_variable; 
        $style = new \stdClass();
        $style->web_variable = $user_website->website_variable; 
        // dd($style);
        $template_helper = new TemplateHelper($temp,$style);
        // $template_helper = new TemplateHelper($temp,$user_website->style);
        $html = $template_helper->create_html();
        return view('user/dynamic_template/user_page', compact('html'));
    }
}
