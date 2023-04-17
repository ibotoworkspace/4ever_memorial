<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\WebsiteTemplate as WTE;

class Styling extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = 'styling';

    public function getWebVariableAttribute($value)
    {
        $web_variable = $value;
        $web_variable = json_decode($web_variable,true);   
        return $web_variable;        
    }

    public function website_template(){
        // return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
        // return $this->hasOne(WTE::class, 'id', 'website_template_id');
        return $this->hasOne('App\Models\WebsiteTemplate','id','website_template_id');
    }
}
