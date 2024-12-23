<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.loginForm',['title' => 'Login']);
    }
    public function login(Request $request){
        $validated = $request->validate([
            'username' => 'required|string|min:3',
            'password' => 'required|min:3'
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return redirect()->back()->with('error','Username atau password tidak sesuai');
    }
    public function regisForm(){
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => '123',
            'role' => 'admin'
        ]);
    }
    // perbaiki logout
    public function logout(){
        Auth::logout();
        return redirect()->to(route('auth.login'));
    }
    
}
