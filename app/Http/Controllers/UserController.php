<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validation = $request->validate([
            'name'=>"required|unique:users,name",
            "email"=>"required|email|unique:users,email",
            "password"=>"required|min:8"
        ]);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:8"
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect("/");
        }
        return redirect()->back();
    }
}
