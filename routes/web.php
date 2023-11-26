<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/project',[ProjectController::class,'project']);
Route::get('/blog',[BlogController::class,'blog']);
Route::get('/blog-post',[BlogController::class,'blog_post']);
Route::get('/contact',[ContactController::class,'contact']);
// Admin Dashboard
Route::group(['middleware' => 'admin'], function(){
Route::get('/admin/dashboard',[DashboardController::class,'dashboard']);
Route::get('/admin/home',[DashboardController::class,'admin_home']);
Route::post('admin/home/post',[DashboardController::class,'admin_home_post']);
Route::get('/admin/about',[DashboardController::class,'admin_about']);
Route::get('/admin/project',[DashboardController::class,'admin_project']);
Route::get('/admin/blog',[DashboardController::class,'admin_blog']);
Route::get('/admin/contact',[DashboardController::class,'admin_contact']);
});

Route::get('/login',[AuthController::class,'login']);
Route::post('/login_admin',[AuthController::class,'login_admin']);
Route::get('/forgot',[AuthController::class,'forgot']);
Route::post('/forgot_admin',[AuthController::class,'forgot_admin']);
Route::get('/logout',[AuthController::class,'logout']);