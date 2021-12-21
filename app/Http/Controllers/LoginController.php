<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('home');
    }

    

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('logingagal', 'Masuk gagal! Silahkan masukan email dan kata sandi dengan benar!');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
