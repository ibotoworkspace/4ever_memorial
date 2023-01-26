<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
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



Route::get(
    '/user/index',
    [AdminController::class, 'index']
)->name('user.index');

Route::get(
    '/user/aboutus',
    [AdminController::class, 'aboutus']
)->name('user.aboutus');

Route::get(
    '/user/contactus',
    [AdminController::class, 'contactus']
)->name('user.contactus');

Route::get(
    '/user/blog',
    [AdminController::class, 'blog']
)->name('user.blog');

Route::get('template',[UserController::class, 'template']);