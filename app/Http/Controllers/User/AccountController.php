<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\AccountService;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    private $productservice;
    private $accountservice;
    public function __construct(ProductService $productservice, AccountService $accountService)
    {
        $this->productservice = $productservice;
        $this->accountservice = $accountService;
    }
    public function account(){
        return view('User.pages.account.account',[        
            'category'=>$this->productservice->getCategoryName(),
            'accinfo' =>$this->accountservice->GetAccountInfo(),
           ]);
    }

    

}
