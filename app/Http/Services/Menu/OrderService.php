<?php


namespace App\Http\Services\Menu;

use App\Models\order_master;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Contracts\Session\Session;

class OrderService
{

    public function getInfoOrderMaster(){

        return order_master::all();
    }

}