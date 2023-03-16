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
        // dd($template->website_variable);
        // $this->variable_html = json_decode($template->variable_html,true);
        $this->variable_html =    $template->variable_html;
        $this->website_variable = $template->web_variable;
        

        $this->website_html = $template->web_html;
        // dd($template->web_html);
    }
    public function create_html(){
        // dd($this->website_variable);
        // dd($this->variable_html,$this->website_variable,$this->website_html);
        $html = $this->website_html;
        // dd($this->variable_html);
        $html = $this->replace_variables($html,1);
        // dd($html);
        // $html = $this->get_html_variables($template,$html);

        return $html;


    }

    public function replace_htmlarr_variables_from_html($html,$html_arr){
        // $html_arr = $this->get_custom_variables_list($html,'_htmlarr');

        foreach($html_arr as $index=>$html_index){
            $website_index = str_replace('_htmlarr','_arr',$index);
            $website_index = $this->remove_var_identity($website_index);

            $web_html_val = $this->variable_html[$index];

            if(!isset($this->website_variable[$website_index])){
                dd($this->website_variable,$website_index);
            }
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
        $pattern = '/'.$this->afterstr.'.*?'.$this->beforestr.'/';//.$end_types

        if(preg_match_all($pattern,$html,$m)){
            if(isset($m[0])){
                $result_arr = [];

                foreach($m[0] as $i){
                    if ($end_types && !str_contains($i, $end_types.$this->beforestr)) { 
                        continue;
                    }
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
                if($i == $prefix){
                    continue;
                }
                if(is_array($value)){
                    if(!isset($value[$i])){
                        continue;
                        // dd($value,$i,$index,$vars);
                    }
                    $value = $value[$i];                  
                }
                if(!is_array($value)){                    
                    $html = str_replace($var,$value,$html);                    
                }                
            }
        }
        return $html;
    }
}
