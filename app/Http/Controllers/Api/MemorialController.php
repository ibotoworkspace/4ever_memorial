<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserWebsite;
use Illuminate\Http\Request;

class MemorialController extends Controller
{
    function my_memorials(Request $request){
        $user = $request->attributes->get("user");

        $memorials = UserWebsite::where("user_id",$user->id)->get();

        return $this->sendResponse(200,$memorials);

    }
}
