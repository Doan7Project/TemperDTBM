<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    # 1 Hiển thị danh sách product
    public function ProductList()
    {
        return view('Admin.pages.product.Product_list');
    }
    # 2 Hiện thị bảng tạo thông tin
    public function ProductCreate()
    {
        return view('Admin.pages.product.Product_create');
    }
    # 3 Thực hiện lệnh thêm dữ liệu
    public function ProductCreateProcess()
    {
        // return view('Admin.pages.Product_create');
    }
    # 4 Truy vấn lấy dữ liệu từ DB vào form và hiển thị bảng update
    public function ProductUpdate()
    {
        return view('Admin.pages.product.Product_update');
    }
    # 5 Thực hiện lệnh chỉnh sữa dữ liệu
    public function ProductUpdateProcess()
    {
    }
    # 6 Thực hiện lệnh delete
    public function productDelete()
    {
    }
}
