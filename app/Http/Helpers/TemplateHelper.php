<?php

namespace App\Http\Helpers;

use App\Models\WebsiteTemplate;

class TemplateHelper
{
    public $afterstr='{!!{';
    public $beforestr='}!!}';
    public $template;
    public $variable_html;
    public $web_variable;
    public $web_html;
    public $depth = 1;

    public function __construct($template,$web_variable){// $style
        $this->template = $template;
        // $this->variable_html = json_decode($template->variable_html,true);
        
        $this->variable_html =    $template->variable_html;
        // dd($this->variable_html);
        // $this->web_variable = $style->web_variable;
        $this->web_variable = $web_variable;
        

        $this->web_html = $template->web_html;
        // dd($web_variable);
        // dd($template,$web_variable);
    }
    public function create_html(){
        $html = $this->web_html;
        $html = $this->replace_variables($html);
        return $html;
    }

    public function replace_htmlarr_variables_from_html($html,$html_arr){
        // $html_arr = $this->get_custom_variables_list($html,'_htmlarr');

        foreach($html_arr as $index=>$html_index){
            $website_index = str_replace('_htmlarr','_arr',$index);
            $website_index = $this->remove_var_identity($website_index);

   

            if(!isset($this->variable_html[$index])){
                dd($this->variable_html,$index);
            }
            $web_html_val = $this->variable_html[$index];


            if(!isset($this->web_variable[$website_index])){
                dd('index not found',$this->web_variable,$website_index);
                continue;
            }
            $web_values_arr = $this->web_variable[$website_index];
            $html_arr_list = '';
            foreach($web_values_arr as $web_value){
                $html_arr_list .=$this->remove_var_variables_from_html($web_html_val,$website_index,$web_value);
            }
            // if($index == 'story_tab_htmlarr'){//story_tab_arr
            //     dd($html_index,$html_arr_list,$html);
            //     // dd($website_index,$web_values_arr,$this->web_variable);
            // }

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
                if(!isset($this->variable_html[$index])){
                    dd($html_vars,$index,$this->variable_html);
                    // dd($this->variable_html[$index]);
                }
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
            $variables_arr = $this->web_variable;
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
                        $replace_val = '';                        
                        // continue;                        
                    }
                    else{                        
                        $replace_val = $value[$i];
                    }
                    
                    $value = $replace_val;                  
                }
                if(!is_array($value)){        
                    $html = str_replace($var,$value,$html);                    
                }                
            }
        }
        return $html;
    }
}
