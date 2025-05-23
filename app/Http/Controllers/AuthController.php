<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

   
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('products.index');
        }

        return back()->with('error', 'Email atau password salah');
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

