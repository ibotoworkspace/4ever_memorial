<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class WebsiteTemplate extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='website_template';


    protected function getWebVariableAttribute($value)
    {
        $web_variable = $value;
        if(is_string($web_variable)){
            $web_variable = json_decode($web_variable,true);
        }
        return $web_variable;        
    }
    
    protected function getVariableHtmlAttribute($value)
    {
        $web_variable = $value;
        $web_variable = json_decode($web_variable,true);   
        return $web_variable;        
    }
    // protected function setWebVariableAttribute($value)
    // {
    //     $web_variable = preg_replace( "/<br>|\n/", "",$value);
    //     $web_variable = json_encode($web_variable);
    //     $this->attributes['web_variable'] = strtolower($web_variable);      
    // }
}
?>