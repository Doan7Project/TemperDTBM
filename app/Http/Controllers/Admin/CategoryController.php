<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    # 1 Hiển thị danh sách Category
    public function CategoryList()
    {
        return view('Admin.pages.category.Category_list');
    }
    # 2 Hiện thị bảng tạo thông tin
    public function CategoryCreate()
    {
        return view('Admin.pages.category.Category_create');
    }
    # 3 Thực hiện lệnh thêm dữ liệu
    public function CategoryCreateProcess()
    {
    }
    # 4 Truy vấn lấy dữ liệu từ DB vào form và hiển thị bảng update
    public function CategoryUpdate()
    {
        return view('Admin.pages.category.Category_update');
    }
    # 5 Thực hiện lệnh chỉnh sữa dữ liệu
    public function CategoryUpdateProcess()
    {
    }
    # 6 Thực hiện lệnh delete
    public function CategoryDelete()
    {
    }
}
