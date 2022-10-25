<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    private $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    public function register(){
        return view('User.pages.register.register',[        
            'category'=>$this->productservice->getCategoryName(),
           ]);
    }

}
