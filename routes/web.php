<?php

use App\Http\Controllers\Admin\dashboardController;
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

Route::controller(dashboardController::class)->group(function(){

Route::get('/','index');
Route::get('Admin/pages/Category_list','CategoryList');
Route::get('Admin/pages/Category_create','CategoryCreate');

Route::get('Admin/pages/Product_list','ProductList');
Route::get('Admin/pages/Product_create','ProductCreate');

Route::get('Admin/pages/Thumb_list','ThumbList');
Route::get('Admin/pages/Thumb_create','ThumbCreate');

Route::get('Admin/pages/About_list','AboutList');
Route::get('Admin/pages/About_create','AboutCreate');

Route::get('Admin/pages/Contact_list','ContactList');
Route::get('Admin/pages/Contact_create','ContactCreate');

Route::get('Admin/pages/Slider_list','SliderList');
Route::get('Admin/pages/Slider_create','SliderCreate');

Route::get('Admin/pages/Order_list','OrderList');

Route::get('Admin/pages/Feedback_list','FeedbackList');

});
