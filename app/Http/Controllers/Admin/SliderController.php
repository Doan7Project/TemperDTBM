<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    #. 1 Hiển thị danh sách Slider
    public function SliderList()
    {
        return view('Admin.pages.slider.Slider_list');
    }
    #. 2 Hiển thị bảng thêm dữ liệu
    public function SliderCreate()
    {
        return view('Admin.pages.slider.Slider_create');
    }
    #. 3 Thực hiện lệnh thêm dữ liệu
    public function SliderCreateProcess()
    {
    }
    #. 4 Hiển thị bảng sửa dữ liệu
    public function SliderUpdate()
    {
    }
    #. 5 Thực hiện lệnh sửa dữ liệu
    public function SliderUpdateProcess()
    {
    }
    #. 6 Thực hiện lệnh xóa dữ liệu
    public function SliderDeleteProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
}
