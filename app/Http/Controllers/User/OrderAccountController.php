<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\OrderService;
use App\Http\Services\Menu\ProductService;
use Illuminate\Http\Request;

class OrderAccountController extends Controller
{
    //
    private $productservice;
    protected $orderservice;
    public function __construct(OrderService $orderService,ProductService $productservice)
    {
        $this->orderservice = $orderService;
        $this->productservice = $productservice;
    }

    public function order()
    {
        return view('User.pages.cart.order', [
            'category' => $this->productservice->getCategoryName(),
        ]);
    }

}
