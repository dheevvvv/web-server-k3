<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    
    

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        

        return redirect('/login')->with('pesanberhasildaftar', 'Selamat ! Registrasi Akun Baru Telah Berhasil ! Silahkan Masuk');
    }  
}
