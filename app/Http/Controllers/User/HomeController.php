<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use App\Http\Services\Menu\slideService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productservice;
    private $slideservice;
    public function __construct(ProductService $productservice, slideService $slideService)
    {
        $this->productservice = $productservice;
        $this->slideservice = $slideService;
    }

    public function index(){

        return view('User.pages.home.index',[        
            'menu'=>$this->productservice->getCategoryName(),
            'menuchild'=>$this->productservice->getAll(),
            'slide'=>$this->slideservice->getAll(),
           ]);
    }

}
