<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('Admin.pages.index');
    }

    #. 1 Category List
    public function CategoryList()
    {
        return view('Admin.pages.Category_list');
    }
    public function CategoryCreate()
    {
        return view('Admin.pages.Category_create');
    }
    public function CategoryCreateProcess()
    {
        // return view('Admin.pages.Category_create');
    }

    #. 2 Category List
    public function ProductList()
    {
        return view('Admin.pages.Product_list');
    }
    public function ProductCreate()
    {
        return view('Admin.pages.Product_create');
    }
    public function ProductCreateProcess()
    {
        // return view('Admin.pages.Product_create');
    }
    
    #. 3 Thumb List
    public function ThumbList()
    {
        return view('Admin.pages.Thumb_list');
    }
    public function ThumbCreate()
    {
        return view('Admin.pages.Thumb_create');
    }
    public function ThumbCreateProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }

    #. 4 About List
    public function AboutList()
    {
        return view('Admin.pages.About_list');
    }
    public function AboutCreate()
    {
        return view('Admin.pages.About_create');
    }
    public function AboutCreateProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
    #. 5 Contact List
    public function ContactList()
    {
        return view('Admin.pages.Contact_list');
    }
    public function ContactCreate()
    {
        return view('Admin.pages.Contact_create');
    }
    public function ContactCreateProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
    #. 6 Slider List
    public function SliderList()
    {
        return view('Admin.pages.Slider_list');
    }
    public function SliderCreate()
    {
        return view('Admin.pages.Slider_create');
    }
    public function SliderDeleteProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
    #. 7 Order List
    public function OrderList()
    {
        return view('Admin.pages.Order_list');
    }
    public function OrderCreateProcess()
    {
        // return view('Admin.pages.Thumb_create');
    }
        #. 7 Order List
        public function FeedbackList()
        {
            return view('Admin.pages.Feedback_list');
        }
        public function FeedbackDeleteProcess()
        {
            // return view('Admin.pages.Thumb_create');
        }
}
