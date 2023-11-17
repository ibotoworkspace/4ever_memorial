<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Styling;
use App\Models\UserWebsite;
use Illuminate\Http\Request;

class MemorialController extends Controller
{
    function my_memorials(Request $request)
    {
        $user = $request->attributes->get("user");

        $memorials = UserWebsite::where("user_id", $user->id)->get();

        return $this->sendResponse(200, $memorials);
    }

    function create_memorial(Request $request)
    {
        $user = $request->attributes->get("user");

        $memorial = new UserWebsite();
        $memorial->user_id = $user->id;
        $memorial->f_name = $request->f_name;
        $memorial->m_name = $request->m_name;
        $memorial->l_name = $request->l_name;
        $memorial->gender = $request->gender;
        $memorial->relation = $request->relation;
        $memorial->b_date = $request->b_date;
        $memorial->b_city = $request->b_city;
        $memorial->b_area = $request->b_area;
        $memorial->b_country = $request->b_country;
        $memorial->p_date = $request->p_date;
        $memorial->p_city = $request->p_city;
        $memorial->p_area = $request->p_area;
        $memorial->b_date = $request->b_date;
        $memorial->p_country = $request->p_country;
        $memorial->memorial_name = $request->memorial_name;
        $memorial->comment_box = $request->comment_box;
        $memorial->person_life = $request->person_life;
        $memorial->memorial_designation = $request->memorial_designation;
        $memorial->all_visitors_can_view = $request->all_visitors_can_view;
        $memorial->deceasedProfileImage = $request->deceasedProfileImage;
        $memorial->save();
        return $this->sendResponse(200, $memorial);
    }
    function get_templates(Request $request)
    {
        // $user = $request->attributes->get("user");

        $templates = Styling::get(['id','name','template_image']);

        return $this->sendResponse(200, $templates);
    }
}
