<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function view()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }
    public function autenticate(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::whereUsername($request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect()->intended('/home');
            }
        }
        return back()->with('loginError', 'Login Failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}