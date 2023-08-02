<?php

namespace App\Http\Controllers\reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemorialController extends Controller
{
    public function index(){
        return view('admin.memorial_report.index');

    }
    public function getUsers($id = 0){
        $memorial = UserWebsite::orderby('id','asc')->select('*')->get();
        $memorialData['data'] = $memorial;

        echo json_encode($memorialData);
                     
    }
}
