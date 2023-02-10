<?php

namespace App\Http\Helpers;


class TemplateHelper
{
    public function create_html($template){
        $html = $template->website_html;
        $temp_json = json_decode($template->website_variable);dd($temp_json);
        $memorial_user_name = $temp_json['memorial_user']->full_name;
        $html = str_replace('{!$!memorial_user.full_name!$!}',$memorial_user_name,$html);
        dd($html);
    }
}
