<?php


namespace App\Http\Services\Menu;

use App\Models\slide_show;
use Exception;

class slideService
{

    public function getAll(){

       return slide_show::all();
    }
}