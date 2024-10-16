<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    
    $saltedPassword = $request->password . $user->salt;

    if (Hash::check($saltedPassword, $user->password)) {
        Auth::login($user);
        return redirect()->intended('/login-success');
    }

    return redirect()->back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

}
