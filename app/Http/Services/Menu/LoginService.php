<?php


namespace App\Http\Services\Menu;

use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class LoginService
{
    public function GetInfo()
    {   
        return Customer::all();
    }
}
