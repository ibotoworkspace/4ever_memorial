<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\UserTemplateHelper;
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

        
        $style = Styling::with('website_template')->first();
        $user_helper = new UserTemplateHelper();
        $user_web = $user_helper->save_memorial_user($request, $user, $style);

        // $memorial = new UserWebsite();
        // $memorial->user_id = $user->id;
        // $memorial->f_name = $request->f_name;
        // $memorial->m_name = $request->m_name;
        // $memorial->l_name = $request->l_name;
        // $memorial->gender = $request->gender;
        // $memorial->relation = $request->relation;
        // $memorial->b_day = $request->b_date;
        // $memorial->b_city = $request->b_city;
        // $memorial->b_state = $request->b_state;
        // $memorial->b_country = $request->b_country;
        // $memorial->p_day = $request->p_date;
        // $memorial->p_city = $request->p_city;
        // $memorial->p_state = $request->p_state;
        // $memorial->p_country = $request->p_country;
        // $memorial->email = $request->memorial_name.'@4evermemorial.com';
        // $memorial->comment = $request->comment_box;
        // $memorial->person_life = $request->person_life;
        // $memorial->memorial_designation = $request->memorial_designation;
        // $memorial->all_visitors_can_view = $request->all_visitors_can_view;


        // $memorial->deceasedProfileImage = $request->deceasedProfileImage;
        // $memorial->save();
        return $this->sendResponse(200, $user_web);
    }
    function get_templates(Request $request)
    {
        // $user = $request->attributes->get("user");

        $templates = Styling::get(['id','name','template_image']);

        return $this->sendResponse(200, $templates);
    }
}
