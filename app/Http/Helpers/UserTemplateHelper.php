<?php

namespace App\Http\Helpers;

use App\Models\UserWebsite;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;


class UserTemplateHelper
{
       public function save_memorial_user(Request $request,$user,$style){
        $user_website = new UserWebsite();
        $user_website->user_id = $user->id;        
        $user_website->ad_name = $request->ad_name;
        $user_website->ad_lastname = $request->ad_lastname;
        $user_website->ad_email = $request->ad_email;
        $user_website->ad_pwd = $request->ad_pwd;
        $user_website->f_name = $request->f_name;
        $user_website->m_name = $request->m_name;
        $user_website->l_name = $request->l_name;
        $user_website->gender = $request->gender;
        $user_website->relation = $request->relation;
        $user_website->memorial_designation = $request->memorial_designation;
        $user_website->b_year = $request->b_year;
        $user_website->b_city = $request->b_city;
        $user_website->b_month = $request->b_month;
        $user_website->b_state = $request->b_state;
        $user_website->b_day = $request->b_day;
        $user_website->b_country = $request->b_country;        
        $user_website->p_year = $request->p_year;
        $user_website->p_city = $request->p_city;
        $user_website->p_month = $request->p_month;
        $user_website->p_state = $request->p_state;
        $user_website->p_day = $request->p_day;
        $user_website->p_country = $request->p_country;
        $user_website->email = $request->email;
        $user_website->visible_to_all = $request->visible_to_all;
        $user_website->save();





        return $user_website;

      }
}
