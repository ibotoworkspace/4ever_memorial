<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Models\Template;
use App\Models\Template as ModelsTemplate;
use App\Models\User;
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
        return view('user.memorialform');
    }
}
