<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ThumbController;
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
# 1. Trang chủ
Route::controller(dashboardController::class)->group(function () {
    Route::get('/', 'index');
});
# 2. Trang Category
Route::controller(CategoryController::class)->group(function () {
    Route::get('Admin/pages/Category_list', 'CategoryList');
    Route::get('Admin/pages/Category_create', 'CategoryCreate');
 
});
# 3. Trang Product
Route::controller(ProductController::class)->group(function () {
    Route::get('Admin/pages/Product_list', 'ProductList');
    Route::get('Admin/pages/Product_create', 'ProductCreate');
});
# 4. Trang Thumb
Route::controller(ThumbController::class)->group(function () {

    Route::get('Admin/pages/Thumb_list', 'ThumbList');
    Route::get('Admin/pages/Thumb_create', 'ThumbCreate');
});
# 5. Trang About
Route::controller(AboutController::class)->group(function () {

    Route::get('Admin/pages/About_list', 'AboutList');
    Route::get('Admin/pages/About_create', 'AboutCreate');
});
# 6. Trang Contact
Route::controller(ContactController::class)->group(function () {
    Route::get('Admin/pages/Contact_list', 'ContactList');
    Route::get('Admin/pages/Contact_create', 'ContactCreate');
});
# 7. Trang Slider
Route::controller(SliderController::class)->group(function () {
    Route::get('Admin/pages/Slider_list', 'SliderList');
    Route::get('Admin/pages/Slider_create', 'SliderCreate');
});
# 8. Trang Order
Route::controller(OrderController::class)->group(function () {

    Route::get('Admin/pages/Order_list', 'OrderList');
});
# 9. Trang Feedback
Route::controller(FeedbackController::class)->group(function () {

    Route::get('Admin/pages/Feedback_list', 'FeedbackList');
});
