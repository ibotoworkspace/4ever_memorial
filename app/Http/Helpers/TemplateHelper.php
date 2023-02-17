<?php

namespace App\Http\Helpers;

use App\Models\WebsiteTemplate;

class TemplateHelper
{
    public $afterstr='{!!{';
    public $beforestr='}!!}';
    public $template;
    public $variable_html;
    public $website_variable;
    public $website_html;
    public $depth = 1;

    public function __construct($template){
        $this->template = $template;
        $this->variable_html = json_decode($template->variable_html,true);
        $this->website_variable = json_decode($template->website_variable,true);
        $this->website_html = json_decode($template->website_html,true);
    }
    public function create_html(){
        $html = $this->template->website_html;
        $html = $this->replace_variables($html,1);
        // $html = $this->get_html_variables($template,$html);

        return $html;


    }

    public function replace_htmlarr_variables_from_html($html,$html_arr){
        // $html_arr = $this->get_custom_variables_list($html,'_htmlarr');


        foreach($html_arr as $index=>$html_index){
            $website_index = str_replace('_htmlarr','_arr',$index);
            $website_index = $this->remove_var_identity($website_index);

            $web_html_val = $this->variable_html[$index];

            $web_values_arr = $this->website_variable[$website_index];
            $html_arr_list = '';
            foreach($web_values_arr as $web_value){
                $html_arr_list .=$this->remove_var_variables_from_html($web_html_val,$website_index,$web_value);
            }

            $html = str_replace($html_index,$html_arr_list,$html);
        }
        return $html;
    }
    public function replace_variables($html){
        $variable_replaced = false;
        $this->depth = $this->depth +1;
        $html_arr = $this->get_custom_variables_list($html,'_htmlarr');


        if($html_arr){
            $html= $this->replace_htmlarr_variables_from_html($html,$html_arr);
            $variable_replaced = true;
        }
        $html_vars = $this->get_custom_variables_list($html,'_htmlvar');
        if($html_vars){
            foreach($html_vars as $index=>$html_var){
                $html = str_replace($html_var,$this->variable_html[$index],$html);
            }
            $html = $this->remove_var_variables_from_html($html);
            $variable_replaced = true;
        }
        if($variable_replaced){
            $html = $this->replace_variables($html);
        }
        return $html;

    }

    public function get_custom_variables_list($html,$end_types=''){
        $pattern = '/'.$this->afterstr.'.*?'.$end_types.$this->beforestr.'/';
        if(preg_match_all($pattern,$html,$m)){
            if(isset($m[0])){
                $result_arr = [];
                if($this->depth > 2){
                    // dd('asd',$this->depth,$this->variable_html,$result_arr);
                    dd($html);
                }
                foreach($m[0] as $i){
                    $index = $this->remove_var_identity($i);
                    $result_arr[$index] = $i;
                }

                return $result_arr;
            }
        }
        return [];
    }
    public function remove_var_identity($var){
        $var = str_replace($this->afterstr,'',$var);
        $var = str_replace($this->beforestr,'',$var);
        return $var;
    }

    public function remove_var_variables_from_html($html,$prefix='',$variables_arr = []){
        if(!$variables_arr){
            $variables_arr = $this->website_variable;
        }
        $vars = $this->get_custom_variables_list($html,'_var');
        foreach($vars as $index=>$var){
            $value = $variables_arr;
            $index_arr = explode('.',$index);
            foreach($index_arr as $i){
                if($i == "image_show_var"){
                    // dd($vars,$index,$variables_arr,$i);
                }
                if($i == $prefix){
                    continue;
                }
                if(is_array($variables_arr)){
                    $value = $value[$i];
                }
                if(!is_array($value)){
                    $html = str_replace($var,$value,$html);
                }
            }
        }
        // dd('aaa',$var,$value,$html);
        return $html;
    }
}
