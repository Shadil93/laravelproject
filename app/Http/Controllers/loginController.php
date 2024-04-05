<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginController 
{
    //
  
    public function login(){
        return view('admin.login');
    }
    public function do_login(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::guard('admin')->attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->route('admin');
        }
       return redirect()->route('login');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return view('admin.login');
    }
    public function loginuser(){
        return view('user.loginuser');
    }
    public function do_loginuser(Request $request,){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->route('indexpage');
        }
       return redirect()->route('login');
    }
    public function logoutindex(){
        Auth::logout();
        return redirect()->route('loginuser');
    }
}
