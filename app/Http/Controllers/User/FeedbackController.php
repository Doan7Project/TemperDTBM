<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function feedback(){
        return view('User.pages.feedback.feedback');
    }
}
