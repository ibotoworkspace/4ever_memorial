<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Life_Tab_Arr extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='life_tab_arr';

}
