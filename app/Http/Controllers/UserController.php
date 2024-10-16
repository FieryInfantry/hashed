<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);

        
        $salt = bin2hex(random_bytes(16));

        
        $saltedPassword = $request->password . $salt;

        
        $hashedPassword = Hash::make($saltedPassword);

        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hashedPassword; 
        $user->salt = $salt; 
        $user->salted_password = $saltedPassword; 
        $user->save();

       
        return redirect()->route('registration.success')->with([
            'email' => $request->email,
            'hashed_password' => $hashedPassword, 
            'salt' => $salt, 
        ]);
    }
}
