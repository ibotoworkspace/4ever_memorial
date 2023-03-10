<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\TemplateHelper;
use App\Models\Category;
use App\Models\Styling;
use App\Models\WebsiteTemplate;
use Illuminate\Http\Request;
use stdClass;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin/category/category');
    }
}


?>