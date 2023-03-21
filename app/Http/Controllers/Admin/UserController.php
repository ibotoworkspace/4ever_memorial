<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UserTemplateHelper;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.index');

    }
    public function getUsers($id = 0){
        $user = User::orderby('id','asc')->select('*')->get();
        $userData['data'] = $user;

        echo json_encode($userData);

    }
    public function add_user(){
        $user_helper = new UserTemplateHelper();
        $user_web = $user_helper->save_memorial_user($user);
        $user_web->save()
        return;
    }
}
