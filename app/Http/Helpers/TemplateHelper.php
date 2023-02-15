<?php

namespace App\Http\Helpers;

use App\Models\WebsiteTemplate;

class TemplateHelper
{
    public function create_html($template){
        $html = $template->website_html;
        $tribute_template_html = $template->tribute;

        $temp_json = json_decode($template->website_variable);


        // $vars = $this->identify_variables($html);

        $memorial_user = $temp_json->memorial_user;
        $owner_user = $temp_json->owner_user;
        $recent_updates_html_show = $temp_json->recent_updates_html_show;
        $recent_updates_html_show_values = $temp_json->recent_updates_html_show_values;
        $user_memorial_tribute = $temp_json->user_memorial_tribute;
        $tributes_values = $temp_json->tributes;
        $life = $temp_json->life;
        $gallery_video = $temp_json->gallery_video;
        $stories = $temp_json->stories;
        $gal_main = $template->gallery;
        $life_main = $template->life;
        $story_main = $template->stories;
        // dd($gal_main);



        $recent_update_html = '';
        $message = '';
        foreach($recent_updates_html_show_values as $recent_updates){
            $create_recent_update_html = str_replace('{{date}}',$recent_updates->date,$recent_updates_html_show);
            $message = 'added a '.$recent_updates->type;

            if($recent_updates->number > 1){
                $message = 'added '.$recent_updates->number.' '.$recent_updates->type.'s';
            }
            $create_recent_update_html = str_replace('{{message}}',$message,$create_recent_update_html);

            // $recent_update_html = $recent_update_html . $create_recent_update_html;
            $recent_update_html .=  $create_recent_update_html;
        }

        $html = str_replace('{{recent_updates_html_show}}',$recent_update_html,$html);
        $tributes_html = '';


        foreach($tributes_values as $trbute_value){

            $create_tribute_html = str_replace('{{user_memorial_tribute}}',$temp_json->user_memorial_tribute,$tribute_template_html);
            $create_tribute_html = str_replace('{{user_memorial_tribute}}',$temp_json->user_memorial_tribute,$tribute_template_html);
            $tributes_html .= $create_tribute_html;
        }


        $html = str_replace('{{gallary_tributes_main}}',$tributes_html,$html);

        // $html = str_replace('{{tributes.user_name_show}}',$tributes->user_name_show,$html);
        // $html = str_replace('{{tributes.type}}',$tributes->type,$html);
        // $html = str_replace('{{tributes.date_show}}',$tributes->date_show,$html);
        // $html = str_replace('{{tributes.details_show}}',$tributes->details_show,$html);
        // $html = str_replace('{{tributes.date}}',$tributes->date,$html);
        // $html = str_replace('{{tributes.image_show}}',$tributes->image_show,$html);

        // $html = str_replace('{{life.image_show}}',$life->image_show,$html);
        // $html = str_replace('{{life.details_show}}',$life->details_show,$html);

        // $html = str_replace('{{gallery_video.image_show}}',$gallery_video->image_show,$html);

        // $html = str_replace('{{stories.user_name_show}}',$stories->user_name_show,$html);
        // $html = str_replace('{{stories.date_show}}',$stories->date_show,$html);
        // $html = str_replace('{{stories.image_show}}',$stories->image_show,$html);
        // $html = str_replace('{{stories.details_show}}',$stories->details_show,$html);

        // $html = str_replace('{{gallary_tributes_main}}',$gal_main,$html);
        // dd($gal_main);
        $life_main_html = str_replace('{{memorial_user.name}}',$memorial_user->name,$life_main);
        $html = str_replace('{{life_main}}',$life_main_html,$html);
        $html = str_replace('{{Gallary_stories_main}}',$story_main,$html);


        $html = str_replace('{{memorial_user.full_name}}',$memorial_user->full_name,$html);
        $html = str_replace('{{memorial_user.name}}',$memorial_user->name,$html);
        $html = str_replace('{{memorial_user.birth}}',$memorial_user->birth,$html);
        $html = str_replace('{{memorial_user.death}}',$memorial_user->death,$html);
        $html = str_replace('{{memorial_user.father_name}}',$memorial_user->father_name,$html);
        $html = str_replace('{{memorial_user.image}}',$memorial_user->image,$html);

        $html = str_replace('{{owner_user.name}}',$owner_user->name,$html);
        $html = str_replace('{{owner_user.full_name}}',$owner_user->full_name,$html);
        $html = str_replace('{{owner_user.birth}}',$owner_user->birth,$html);
        $html = str_replace('{{owner_user.death}}',$owner_user->death,$html);
        $html = str_replace('{{owner_user.father_name}}',$owner_user->father_name,$html);
        $html = str_replace('{{owner_user.image}}',$owner_user->image,$html);

        $html = str_replace('{{total_views}}',$temp_json->total_views,$html);





        // foreach($vars as $v){

        //     $html = str_replace('{{'.$v.'}}',"Peter",$html);

        // }

        echo $html;
        die();

        // dd($vars);
        // $memorial_user_name = $temp_json['memorial_user']->full_name;
        // $html = str_replace('{{memorial_user.full_name}}',$memorial_user_name,$html);
        dd($temp_json);
        echo $html;
        die();
        dd($html);
    }

    public function identify_variables($str){
        $afterstr = '{{';
        $beforestr = '}}';
        // if (preg_match('/'.$afterstr.'(.*?)'.$beforestr.'/', $str, $match) == 1) {
            // preg_match_all('/\['.$afterstr.'\](.*?)\['.$beforestr.'\]/s', $str, $match);
            // preg_match_all('/\[startstring\](.*?)\[endstring\]/', $input, $matches);
            // preg_match_all('/\['.$afterstr.'\](.*?)\['.$beforestr.'\]/', $str, $matches);
            // echo $match[1];
        // }

        foreach (explode($afterstr, $str) as $key => $value) {
            if(strpos($value, $beforestr) !== FALSE){
                 $matches[] = trim(substr($value, 0, strpos($value, $beforestr)));
            }
        }
        return $matches;


        // dd($matches);
        // $str = 'before-str-after';
        // if (preg_match('/before-(.*?)-after/', $str, $match) == 1) {
        //     echo $match[1];
        // }
    }
}
