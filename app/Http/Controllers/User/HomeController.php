<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }

    public function index(){

        return view('User.pages.home.index',[        
            'menu'=>$this->productservice->getCategoryName(),
            'menuchild'=>$this->productservice->getAll(),
           ]);
    }

}
