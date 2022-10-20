<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    #. 1 Hiển thị danh sách
    public function ContactList()
    {
        return view('Admin.pages.contact.Contact_list');
    }
    # 2. Hiển thị bảng thêm thông tin
    public function ContactCreate()
    {
        return view('Admin.pages.contact.Contact_create');
    }
    # 3. Thực hiện lệnh thêm thông tin
    public function ContactCreateProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
    # 4. Hiển thị bảng sửa thông tin
    public function ContactUpdate()
    {
    }
    # 5. Thực hiện lệnh sửa thông tin
    public function ContactUpdateProcess()
    {
    }
    # 6. Thực hiện lệnh xóa
    public function ContactDelete()
    {
    }
}
