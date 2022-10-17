<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dashboardController extends Controller
{
    public function index()
    {
        return view('Admin.pages.index');
    }

}
