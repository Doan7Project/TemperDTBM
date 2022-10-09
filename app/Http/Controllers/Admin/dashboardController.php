<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dashboardController extends Controller
{
    
    protected $productservice;

    public function __construct(ProductService $productService)
    {
        $this->productservice = $productService;
    }
    public function index()
    {
        return view('Admin.pages.index',[
            'title' => 'Danh sach moi',
            'rs' => $this->productservice->getAll()

        ]);
    }

}
