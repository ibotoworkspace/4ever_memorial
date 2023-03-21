<?php

namespace App\Http\Helpers;

use App\Models\UserWebsite;
use Illuminate\Support\Facades\Request;

class UserTemplateHelper
{
       public function save_memorial_user(Request $request){
        $user = new UserWebsite();

        $user->ad_name = $request->ad_name;
        $user->ad_lastname = $request->ad_lastname;
        $user->ad_email = $request->ad_email;
        $user->ad_pwd = $request->ad_pwd;

        $user->f_name = $request->f_name;
        $user->m_name = $request->m_name;
        $user->l_name = $request->l_name;
        $user->gender = $request->gender;
        $user->relation = $request->relation;
        $user->memorial_designation = $request->memorial_designation;
        $user->b_year = $request->b_year;
        $user->b_city = $request->b_city;
        $user->b_month = $request->b_month;
        $user->b_state = $request->b_state;
        $user->b_day = $request->b_day;
        $user->b_country = $request->b_country;        
        $user->p_year = $request->p_year;
        $user->p_city = $request->p_city;
        $user->p_month = $request->p_month;
        $user->p_state = $request->p_state;
        $user->p_day = $request->p_day;
        $user->p_country = $request->p_country;
        $user->email = $request->email;

        $user->visible_to_all = $request->visible_to_all;
        $user->save();

      }
}
