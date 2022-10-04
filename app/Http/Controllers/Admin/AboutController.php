<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    # 1 Hiển thị danh sách About
    public function AboutList()
    {
        return view('Admin.pages.about.About_list');
    }
    # 2 Hiển thị bảng thêm dữ liệu
    public function AboutCreate()
    {
        return view('Admin.pages.about.About_create');
    }
    # 3 Thực hiện lệnh thêm dữ liệu
    public function AboutCreateProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
    # 4 Hiển thị bảng sửa dữ liệu
    public function AboutUpdate()
    {
    }
    # 5 Thực hiện lệnh sửa dữ liệu
    public function AboutUpdateProcess()
    {
    }
    # 6 Thực hiện lệnh xóa dữ liệu
    public function AboutDelete()
    {
    }
}
