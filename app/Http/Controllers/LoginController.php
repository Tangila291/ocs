<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view ('login');
    }

public function dologin(Request $request){
   // dd($request->all());
   $credential =$request -> except('_token');
    //  dd($credential);

    $check= Auth::attempt($credential);

    if($check){
        return redirect()->route ('home');

    }

    else{
        return redirect()-> back();
    }
}

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}


