<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StylingsController;
use App\Http\Controllers\Admin\MemorialFormController;
use App\Http\Controllers\reports\MemorialController;
use App\Http\Controllers\Admin\UserController as Admin_UserController;
use App\Http\Controllers\User\CommonServicesController;
use App\Http\Controllers\User\UserController as User_UserController;
use Illuminate\Support\Facades\Route;


//////////////user
Route::post('cropper/crop_image', [CommonServicesController::class, 'crop_image'])->name('crop.image');

Route::post('user/register', [User_UserController::class, 'register'])->name('user.register');
Route::post('user/login', [User_UserController::class, 'login'])->name('user.login');
Route::get('user/logout', [User_UserController::class, 'logout'])->name('user.logout');

Route::get('/', [User_UserController::class, 'index'])->name('user.index');
Route::get('/user/aboutus',[User_UserController::class, 'aboutus'])->name('user.aboutus');
Route::get('/user/privacy_policy',[User_UserController::class, 'privacy_policy'])->name('user.privacy_policy');
Route::get('/user/service_term',[User_UserController::class, 'service_term'])->name('user.service_term');
Route::get('/user/testimonials',[User_UserController::class, 'testimonials'])->name('user.testimonials');
Route::get('/user/plans',[User_UserController::class, 'plans'])->name('user.plans');
Route::get('/user/contactus',[User_UserController::class, 'contactus'])->name('user.contactus');
Route::get('/user/blog',[User_UserController::class, 'blog'])->name('user.blog');
Route::get('/user/my_memorials',[User_UserController::class, 'my_memorials'])->name('user.my_memorials');
Route::get('template',[Admin_UserController::class, 'template']);

Route::get('admin/login',[AdminController::class, 'index']);
Route::post('admin/checklogin',[AdminController::class, 'checklogin']);
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
Route::get('admin/logout',[AdminController::class, 'logout']);



// saave_memorial_user *********
Route::get('user/memorialform',[User_UserController::class, 'memorialform'])->name('user.memorialform'); //index
// Route::get('user/memorialform_save', [User_UserController::class, 'memorialform_save'])->name('memorialform.save');; //save
Route::get('user/get_memorial/{user_email}',[User_UserController::class, 'get_memorial']); 


//save story
Route::post('user/storyform',[User_UserController::class, 'storyform'])->name('user.storyform'); //add story
Route::post('user/tributeform',[User_UserController::class, 'tributeform'])->name('user.tributeform'); //add story

Route::get('user/get_tribute',[User_UserController::class, 'get_tribute'])->name('user.get_tribute'); //add story





Route::get('admin/user/',[Admin_UserController::class, 'index'])->name('admin.user.index');
Route::get('admin/user/getUsers', [Admin_UserController::class, 'getUsers'])->name('admin.user.getUsers');
// Route::get('/user/aboutus',[Admin_UserController::class, 'aboutus'])->name('user.aboutus');
// Route::get('/user/contactus',[Admin_UserController::class, 'contactus'])->name('user.contactus');
// Route::get('/user/blog',[Admin_UserController::class, 'blog'])->name('user.blog');
Route::get('template',[Admin_UserController::class, 'template']);



Route::get('admin/memorials/',[MemorialController::class, 'index'])->name('admin.memorials.index');
Route::get('admin/memorials/getUsers', [MemorialController::class, 'getUsers'])->name('admin.memorials.getUsers');
// Route::get('/user/aboutus',[MemorialController::class, 'aboutus'])->name('user.aboutus');
// Route::get('/user/contactus',[MemorialController::class, 'contactus'])->name('user.contactus');
// Route::get('/user/blog',[MemorialController::class, 'blog'])->name('user.blog');
Route::get('template',[MemorialController::class, 'template']);



/////////template
Route::get('admin/template',[TemplateController::class, 'index']);
Route::get('admin/template/template1',[TemplateController::class, 'template_1']);
Route::get('admin/template/template2',[TemplateController::class, 'template_2']);
Route::get('admin/template/template3',[TemplateController::class, 'template_3']);
Route::get('admin/template/template4',[TemplateController::class, 'template_4']);
// Route::get('admin/template/select_template',[TemplateController::class, 'select_template']); //testing
Route::get('user/template/select_template',[TemplateController::class, 'select_template']); //testing
Route::get('user/template/select_template/{user_website}',[TemplateController::class, 'select_template']); //testing


Route::post('user/adduser',[User_UserController::class, 'add_user'])->name('admin.user.add_user');
Route::get('user/testing',[User_UserController::class, 'index1111'])->name('admin.user.add_user');
Route::get('user/testing2',[User_UserController::class, 'index2'])->name('admin.user.add_user');
Route::get('user/testing3',[User_UserController::class, 'index3'])->name('admin.user.add_user');    
// Route::post('admin/user/plan/{id}',[Admin_UserController::class, 'plan'])->name('admin.user.plan');
Route::post('user/memorial/update_plan',[User_UserController::class, 'update_plan'])->name('user.plan.update');
Route::post('user/memorial/privacy',[User_UserController::class, 'privacy'])->name('user.memorial.privacy');
Route::post('user/memorial/save_css',[User_UserController::class, 'save_css'])->name('user.memorial.save_css');


/////////category
Route::get('admin/category',[CategoryController::class, 'index']);

/////////stylings
Route::get('admin/stylings',[StylingsController::class, 'index']);


Route::post('search/memorial',[User_UserController::class, 'search_memorial'])->name('user.search_memorial'); //search
Route::post('user/upload_gallery',[User_UserController::class, 'upload_gallery'])->name('user.upload_gallery_audio'); //search
