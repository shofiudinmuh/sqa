<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Welcome'
        ]);
    }

    public function loginEmail()
    {
        return view('loginEmail', [
            'title' => 'Login'
        ]);
    }
    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }
    public function editAkun()
    {
        return view('editUser', [
            'title' => 'Edit Akun'
        ]);
    }
}