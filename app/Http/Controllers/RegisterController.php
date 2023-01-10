<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Registrasi'
        ]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'max:255'],
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'email' => ['required', 'unique:users'],
                'password' => ['required', 'min:3', 'max:255']
            ]
        );

        User::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );
        $user = User::whereUsername($request->username)->first();
        Auth::login($user);
        Session::flash('success', 'Registrasi Berhasil');
        return redirect()->intended('/home');
        // return redirect('login');
    }
}