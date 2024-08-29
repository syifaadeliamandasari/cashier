<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class loginadminController extends Controller
// {
//     public function loginadmin()
//     {
//     return view('login.loginadmin');
//     }

//     public function login(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|string|email',
//             'password' => 'required|string',
//         ]);

//         if (Auth::attempt($request->only('email', 'password'))) {
//             return redirect()->route('dashboard');
//         }

//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }
// }
