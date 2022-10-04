<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    #. 1 Hiển thị danh sách feedback
    public function FeedbackList()
    {
        return view('Admin.pages.feedback.Feedback_list');
    }
    #. 2 Hiển thị trang danh sách chi tiết
    public function FeedbackView()
    {
    }
    #. 3 Thực hiện lệnh xóa
    public function FeedbackDeleteProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
}
