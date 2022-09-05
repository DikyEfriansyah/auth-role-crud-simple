<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginpage(){
        return view('pages.login');
    }

    public function storelogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
