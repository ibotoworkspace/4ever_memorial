<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StylingsController;
use App\Http\Controllers\Admin\MemorialFormController;
use App\Http\Controllers\Admin\UserController as Admin_UserController;
use App\Http\Controllers\User\UserController as User_UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get( '/admin/login',[AdminController::class, 'index'])->name('admin.index');

Route::post('/admin/checklogin', [AdminController::class, 'checklogin'])->name('admin.checklogin');
Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

//////////////user

Route::get('/', [User_UserController::class, 'index'])->name('user.index');
Route::get('/user/aboutus',[User_UserController::class, 'aboutus'])->name('user.aboutus');
Route::get('/user/testimonials',[User_UserController::class, 'testimonials'])->name('user.testimonials');
Route::get('/user/plans',[User_UserController::class, 'plans'])->name('user.plans');
Route::get('/user/contactus',[User_UserController::class, 'contactus'])->name('user.contactus');
Route::get('/user/blog',[User_UserController::class, 'blog'])->name('user.blog');
Route::get('template',[Admin_UserController::class, 'template']);
Route::get('/user/memorialform',[User_UserController::class, 'memorialform'])->name('user.memorialform');






Route::get('admin/user/',[Admin_UserController::class, 'index'])->name('admin.user.index');
Route::get('admin/user/getUsers', [Admin_UserController::class, 'getUsers'])->name('admin.user.getUsers');
// Route::get('/user/aboutus',[Admin_UserController::class, 'aboutus'])->name('user.aboutus');
// Route::get('/user/contactus',[Admin_UserController::class, 'contactus'])->name('user.contactus');
// Route::get('/user/blog',[Admin_UserController::class, 'blog'])->name('user.blog');
Route::get('template',[Admin_UserController::class, 'template']);



/////////template
Route::get('admin/template',[TemplateController::class, 'index']);
Route::get('admin/template/template',[TemplateController::class, 'template']);
Route::get('admin/template/template2',[TemplateController::class, 'template_2']);
Route::get('admin/template/template3',[TemplateController::class, 'template_3']);
Route::get('admin/template/template4',[TemplateController::class, 'template_4']);
Route::get('admin/template/template_5',[TemplateController::class, 'template_5']); //testing




/////////category
Route::get('admin/category',[CategoryController::class, 'index']);

/////////stylings
Route::get('admin/stylings',[StylingsController::class, 'index']);