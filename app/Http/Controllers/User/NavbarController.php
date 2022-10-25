<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    //
    private $productservice;

    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }

    public function link(Product $id)
    {
        return view('User.pages.product.product', [
            'category'=>$this->productservice->getCategoryName(),
            'product'=>$this->productservice->getAll(),
            'data' => $id,
            session()->flash('linkdata',$id->product_name)
        ]);
     
    }
}
