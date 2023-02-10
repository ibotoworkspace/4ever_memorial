<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\TemplateHelper;
use App\Models\WebsiteTemplate;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    // public function index(){
    //     return view('admin/templates/template_index/index');
    // }
    // public function template_1(){
    //     return view('admin/templates/template_1/index');
    // }
    // public function template_2(){
    //     return view('admin/templates/template_2/index');
    // }
    // public function template_3(){
    //     return view('admin/templates/template_3/index');
    // }
    // public function template_4(){
    //     return view('admin/templates/template_4/index');
    // }
    public function template_1(){
        $temp = WebsiteTemplate::where('name','template_1')->first();
        $template_helper = new TemplateHelper();
        $template_helper = $template_helper->create_html($temp);


    //    dd($temp);
        return view('admin/templates/template_1/index', compact('temp'));
    }
}
