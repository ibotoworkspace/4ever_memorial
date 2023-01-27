<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
