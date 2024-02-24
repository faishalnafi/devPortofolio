<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    public function login(Request $request){
        $credentials = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }
        return back()->with('loginError','salah');
    }
}
