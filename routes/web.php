<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ThumbController;
use App\Http\Controllers\Admin\UploadController;
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
    Route::get('/', 'index')->name('index');
});
# 2. Trang Category
Route::controller(CategoryController::class)->group(function () {
    Route::get('Admin/pages/Category_list', 'CategoryList')->name('categorylist');
    Route::get('Admin/pages/Category_create', 'CategoryCreate')->name('category');
    Route::post('Admin/pages/Category_create', 'CategoryCreateProcess')->name('form.store');
    Route::get('Admin/pages/Category_update/{menu}', 'CategoryUpdate');
    Route::post('Admin/pages/Category_update/{menu}', 'CategoryUpdateProcess');
    Route::get('Admin/pages/delete/{id}', 'CategoryDelete');
    // Route::post('Admin/pages/save','store')->name('form.store');
    Route::get('category/view/{menu}','view')->name('view');
});

# 3. Trang Product
Route::controller(ProductController::class)->group(function () {
    #1. Hiển thị danh sách tất cả sản phẩm
    Route::get('product/list', 'list')->name('list');
    #2. Hiển thị form tạo sản phẩm
    Route::get('product/create', 'create');
    #3. Thực hiện lữu dữ liệu
    Route::post('product/create', 'store');
    #4. Hiển thị thông tin sản phẩm theo ID
    Route::get('product/show/{data}', 'show')->name('show');
    #5. Thực hiện chỉnh sữa dữ liệu
    Route::post('product/show/{data}', 'edit');
    #6. Thực hiện xóa dữ liệu
    Route::get('product/destroy/{id}', 'destroy')->name('destroy');
    #7 Search
    Route::get('/search', 'search');
    #8 view
    Route::get('product/view/{data}', 'view');
});

Route::post('upload-images', [UploadController::class,'store'])->name('store-images');

#4. Product_image

Route::controller(ProductImageController::class)->group(function(){

    #1. Hiển thị danh sách tất cả sản phẩm
    Route::get('image/list', 'list')->name('listimage');
    #2. Hiển thị form tạo sản phẩm
    Route::get('image/create', 'create');
    #3. Thực hiện lữu dữ liệu
    Route::post('image/create', 'store');
    #4. Hiển thị thông tin sản phẩm theo ID
    Route::get('image/show/{data}', 'show')->name('show');
    #5. Thực hiện chỉnh sữa dữ liệu
    Route::post('image/show/{data}', 'edit');
    #6. Thực hiện xóa dữ liệu
    Route::get('image/destroy/{data}', 'destroy')->name('destroy');
    #7 Search
    Route::get('/search', 'search');
    #8 view
    Route::get('image/view/{data}', 'view');

});


// # 4. Trang Thumb
// Route::controller(ThumbController::class)->group(function () {

//     Route::get('Admin/pages/Thumb_list', 'ThumbList');
//     Route::get('Admin/pages/Thumb_create', 'ThumbCreate');
// });
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
