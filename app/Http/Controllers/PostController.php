<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $messages = [
            'name.required' => 'wala pang name',
            'name.max' => 'mahaba ang name',
            'email.required' => 'wala pang email',
            'email.email' => 'mali ang email',
            'password.required' => 'wala pang password',
            'password.min' => 'kulang ang password',
        ];

        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], $messages);

        session(['name' => $request->name]);
        session(['email' => $request->email]);
        session(['password' => $request->password]);

        return redirect('/login');
    }

    public function show_reg()
    {
        return view('registration');
    }

    public function show_login()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $messages = [
            'email.required' => 'wala pang email',
            'email.email' => 'mali ang email',
            'password.required' => 'wala pang password',
            'password.min' => 'kulang ang password',
        ];

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], $messages);

        $email = $request->email;
        $password = $request->password;

        if ($email == session('email') && $password == session('password')) {
            session(['user_email' => $email]);
            return view('/index', [
                'email' => $email,
                'password' => $password,
            ]);
        } else {
            return redirect()->back()->with('error', 'Incorrect Email or Password');
        }
    }

    public function show_index()
    {
        return view('/index');
    }

    public function logout()
    {
        session()->forget(['user_email']);
        return redirect('/login')->with('success', 'You have been logged out successfully!');
    }
}
