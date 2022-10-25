<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClearSessionController extends Controller
{
    //
    public function clearsession(){
        // Session()->flush();
        Session()->forget('category_id');
        return redirect()->route('product');
    }
}
