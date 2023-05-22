<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tributes_Arr extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='tributes_arr';
    
    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
