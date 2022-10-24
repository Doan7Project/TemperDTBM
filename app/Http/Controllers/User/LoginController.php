<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    private $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    public function login(){
        return view('User.pages.login.login',[        
            'menu'=>$this->productservice->getCategoryName(),
            'menuchild'=>$this->productservice->getAll(),
           ]);
    }

}
