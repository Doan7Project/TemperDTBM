<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    private $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    public function account(){
        return view('User.pages.account.account',[        
            'category'=>$this->productservice->getCategoryName(),
           ]);
    }

    

}
