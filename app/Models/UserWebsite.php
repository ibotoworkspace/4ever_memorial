<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Styling;

class UserWebsite extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='user_website';

    protected function getWebVariableAttribute($value)
    {
        $web_variable = $value;
        $web_variable = json_decode($web_variable,true);   
        return $web_variable;        
    }

    protected function getVariableHtmlAttribute($value)
    {
        $json_var = json_decode($value,true);   
        return $json_var;        
    }

    public function style(){
         return $this->hasOne(Styling::class, 'id', 'style_id');
    }
    public function user(){
         return $this->hasOne(User::class, 'id', 'user_id');
    }
}
