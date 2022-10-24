<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    public function product(){
        return view('User.pages.product.product',[        
            'menu'=>$this->productservice->getCategoryName(),
            'menuchild'=>$this->productservice->getAll(),
           ]);
    }

}
