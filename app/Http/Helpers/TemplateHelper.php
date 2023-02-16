<?php

namespace App\Http\Helpers;

use App\Models\WebsiteTemplate;

class TemplateHelper
{
    public $afterstr='';
    public $beforestr='';

    public function __construct(){
        $this->afterstr = '{!!{';
        $this->beforestr = '}!!}';
    }
    public function create_html($template){
        $html = $template->website_html;
        $html = $this->replace_variables($template,$html);
        // $html = $this->get_html_variables($template,$html);

        $temp_json = json_decode($template->website_variable);


    }

    public function replace_variables($template,$html){
        $variable_html = json_decode($template->variable_html,true);
        $website_variable = json_decode($template->website_variable,true);

        $html_vars = $this->get_custom_variables_list($html,'_htmlvar');
        foreach($html_vars as $index=>$html_var){
            $html = str_replace($html_var,$variable_html[$index],$html);
        }
        $vars = $this->get_custom_variables_list($html,'_var');
        foreach($vars as $index=>$var){
            $index_arr = explode('.',$index);
            $web_val = $website_variable;
            foreach($index_arr as $i){
                // if($i == 'image_show_var'){
                //     dd($index);
                // }
                $web_val = $web_val[$i];
            }
            // dd($website_variable,$vars,$index,$index_arr);
            $html = str_replace($var,$web_val,$html);

        }
        // dd($vars);
            dd($website_variable,$html);

    }
    public function get_html_variables($template,$html){
        $html = '';
        // $create_recent_update_html = str_replace('{!!{date}!!}',$recent_updates->date,$recent_updates_show_values_html_arr);

    }

    public function get_custom_variables_list($html,$end_types=''){
        $pattern = '/'.$this->afterstr.'.*?'.$end_types.$this->beforestr.'/';
        if(preg_match_all($pattern,$html,$m)){
            if(isset($m[0])){
                $result_arr = [];
                foreach($m[0] as $i){
                    $index = str_replace($this->afterstr,'',$i);
                    $index = str_replace($this->beforestr,'',$index);
                    $result_arr[$index] = $i;
                }
                return $result_arr;
            }
        }
        return [];
    }
}
