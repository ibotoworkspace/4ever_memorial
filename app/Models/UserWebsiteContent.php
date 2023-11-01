<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserWebsiteContent extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='user_website_content';
}
