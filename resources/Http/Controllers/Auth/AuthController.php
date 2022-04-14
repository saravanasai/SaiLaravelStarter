<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
       return view('Auth.Login');
    }


    public function authenticate(LoginRequest $request)
    {
         if(Auth::attempt([
          'phonenumber'=>$request->phonenumber,
         'password'=>$request->password],
           $remember=$request->has('remember')?true:false))
         {
            return redirect()->route('dashboard');
         }
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

}
