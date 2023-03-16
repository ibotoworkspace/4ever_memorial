<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\TemplateHelper;
use App\Models\Stylings;
use App\Models\Styling;
use App\Models\WebsiteTemplate;
use Illuminate\Http\Request;
use stdClass;

class StylingsController extends Controller
{

    public function index()
    {
        return view('admin/stylings/stylings');
    }
}


?>