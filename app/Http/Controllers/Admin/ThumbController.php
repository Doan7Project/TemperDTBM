<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThumbController extends Controller
{

    # 1 Hiển thị danh sách Category
    public function ThumbList()
    {
        return view('Admin.pages.thumb.Thumb_list');
    }
    # 2 Hiển thị bảng thêm dữ liệu
    public function ThumbCreate()
    {
        return view('Admin.pages.thumb.Thumb_create');
    }
    # 3 Thực hiện lệnh thêm dữ liệu
    public function ThumbCreateProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
    # 4 Hiển thị bảng sửa dữ liệu
    public function ThumbUpdate()
    {
    }
    # 5 Thực hiện lệnh sửa dữ liệu
    public function ThumbUpdateProcess()
    {
    }
    # 6 Thực hiện lệnh xóa dữ liệu
    public function ThumbDelete()
    {
    }
}
