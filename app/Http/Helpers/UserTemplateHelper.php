<?php

namespace App\Http\Helpers;

use App\Models\Life_Tab_Arr;
use App\Models\UserWebsite;
use App\Models\Styling;

use App\Models\User;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTemplateHelper
{
       public function save_memorial_user(Request $request,$user,$style){
        
        $user = Auth::user();
        // $user->save();

        $user_memorial = new User();

        // $user_memorial->save();
        $user_website = new UserWebsite();
        // $user_website->user_id = $user->id;        
        $user_website->style_id = $style->id;
        $user_website->web_html = $style->website_template->web_html;



        $user_website->style_id = $style->id;
        $user_website->web_variable = json_encode($style->web_variable);
        $user_website->variable_html = json_encode($style->variable_html);
        $user_website->save();

        $web_variable = $style->web_variable;
// dd($web_variable);
        // $user 
        $web_variable['owner_user_var']['name_var'] = $user->name;
        $web_variable['owner_user_var']['full_name_var'] = $request->ad_name.' '.$request->ad_lastname;
        $web_variable['owner_user_var']['birth_var']= $request->b_year;

        
        $web_variable['memorial_user_var']['name_var'] = $request->f_name;
        $web_variable['memorial_user_var']['full_name_var'] = $request->f_name.' '.$request->m_name.' '.$request->l_name;
        $web_variable['memorial_user_var']['birth_var'] = $request->b_year;
        $web_variable['memorial_user_var']['death_var'] = $request->p_year;
        $web_variable['memorial_user_var']['father_name_var'] = $request->l_name;

// dd($web_variable);

        $user_website->web_variable = json_encode($web_variable);
        $user_website->variable_html = $style->variable_html; // json_encode
        $user_website->ad_name = $request->ad_name;
        $user_website->user_id = $user->id;
        $user_website->website_user_id = $user_memorial->id;
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
        $user_website->email = $request->email.'@forevermemorial.com';
        $user_website->visible_to_all = $request->visible_to_all;
        // dd($user_website);
        $user_website->save();

        $user_website_life = new Life_Tab_Arr();
        $user_website_life->details_show_var = $request->life_tab_arr;
        $user_website_life->save();

        return $user_website;

      }
}
