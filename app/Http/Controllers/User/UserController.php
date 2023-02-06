<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Models\Template;
use App\Models\Template as ModelsTemplate;
use Illuminate\Http\Request;

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
    public function contactus(){
        return view('user.contactus');
    }
    public function blog(){
        return view('user.blog');
    }
    public function template(){
        // $template  = ModelsTemplate::find(1);
        // return view('user.template',compact('template'));
    }
}
