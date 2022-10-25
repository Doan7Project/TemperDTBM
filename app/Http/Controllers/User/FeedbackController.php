<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    private $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    public function feedback(){
        return view('User.pages.feedback.feedback',[        
            'category'=>$this->productservice->getCategoryName(),
           ]);
    }
}
