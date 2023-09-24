<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('Admin.login');
    }

    public function login(Request $request){
        //dd(Hash::make('admin'));
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
    
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
    
        return back()->withErrors([
            'email' => 'Email invalide',
            'password' => 'Mot de passe invalide',
        ]);
        
    }
}
