<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story_Tab_Arr extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='story_tab_arr';
}
