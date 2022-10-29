<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\ProductService;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    private $productservice;
    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    public function login()
    {
        return view('User.pages.login.login', [
            'category' => $this->productservice->getCategoryName(),
        ]);
    }
    public function signin(Request $request)
    {

        //   return  $request->input();



        $this->validate($request, [

            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        $userInfo = Customer::where('email', '=', $request->email)->first();

        if (!$userInfo) :
            return back()->with('fail', 'We do not recognize you email address');
        else :
            if ($request->password == $userInfo->password) :
                $request->session()->put('LoggedUser',$userInfo->email);
                return redirect()->route('userIndex');
            else :
                return back()->with('fail', 'Incorrect password');
            endif;
        endif;
        // if (Auth::attempt([

        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')

        // ], $request->input('remember'))) :
        //     $request->session()->put('user', $request->input('email'));
        //     return redirect()->route('index');
        // else :
        //     session()->flash('error', 'Email or password is incorrect');
        //     return redirect()->back();
        // endif;
    }
}
