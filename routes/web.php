<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TemplateController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('admin/login', 'Admin\AdminController@index');
// Route::post('admin/checklogin', 'Admin\AdminController@checklogin');
// Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('logout', 'AdminController@logout')->name('logout');

Route::get(
    '/admin/login',
    [AdminController::class, 'index']
)->name('admin.index');

Route::post(
    '/admin/checklogin',
    [AdminController::class, 'checklogin']
)->name('admin.checklogin');
Route::get(
    '/admin/dashboard',
    [AdminController::class, 'dashboard']
)->name('dashboard');
Route::get(
    '/admin/logout',
    [AdminController::class, 'logout']
)->name('admin.logout');

//////////////user

Route::get(
    '/user',
    [User_UserController::class, 'index']
)->name('user.index');

Route::get(
    '/user/aboutus',
    [User_UserController::class, 'aboutus']
)->name('user.aboutus');

Route::get(
    '/user/contactus',
    [User_UserController::class, 'contactus']
)->name('user.contactus');

Route::get(
    '/user/blog',
    [User_UserController::class, 'blog']
)->name('user.blog');

Route::get('template',[Admin_UserController::class, 'template']);






Route::get('admin/user/',[Admin_UserController::class, 'index'])->name('admin.user.index');
Route::get('admin/user/getUsers', [Admin_UserController::class, 'getUsers'])->name('admin.user.getUsers');
// Route::get('/user/aboutus',[Admin_UserController::class, 'aboutus'])->name('user.aboutus');
// Route::get('/user/contactus',[Admin_UserController::class, 'contactus'])->name('user.contactus');
// Route::get('/user/blog',[Admin_UserController::class, 'blog'])->name('user.blog');
Route::get('template',[Admin_UserController::class, 'template']);



/////////template
Route::get('admin/template',[TemplateController::class, 'index']);
Route::get('admin/template/template1',[TemplateController::class, 'template_1']);
Route::get('admin/template/template2',[TemplateController::class, 'template_2']);
Route::get('admin/template/template3',[TemplateController::class, 'template_3']);
Route::get('admin/template/template4',[TemplateController::class, 'template_4']);
