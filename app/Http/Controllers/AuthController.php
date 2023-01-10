<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;


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
        $user = User::find(Auth::id());
        return view('home', [
            'title' => 'Home',
            'user' => $user
        ]);
    }
    public function view()
    {
        $user = User::find(Auth::id());
        // dd($user);
        return view('editUser', [
            'user' => $user,
            'title' => 'Edit Profil'
        ]);
    }
    public function editAkun(Request $request)
    {
        $user = User::find(Auth::id());
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'tgl_lahir' => $request->tgl,
            'alamat' => $request->alamat,
            'bio' => $request->bio,
            'password' => Hash::make($request->password)
        ]);
        Session::flash('success', 'Update data berhasil');
        return redirect('home');
    }
    public function destroy(Request $request)
    {
        try {
            $user = User::findOrFail(Auth::id());
            $user->delete();
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
        } catch (\Exception $e) {
            return redirect()->route('home');
        }
    }
    // public function editAkun(Request $request)
    // {
    //     // $id = Auth::all();
    //     // $data = $request->validate(
    //     //     [
    //     //         'name' => ['required', 'max:255'],
    //     //         'username' => ['required', 'min:3', 'max:255', 'unique:users'],
    //     //         'email' => ['required', 'email:dns', 'unique:users'],
    //     //         'password' => ['required', 'min:3', 'max:255'],
    //     //         'alamat' => ['min:3', 'max:255'],
    //     //         'tgl' => ['required'],
    //     //         'bio' => ['min:3', 'max:255']
    //     //     ]
    //     // );
    //     // $validateData =
    //     //     [
    //     //         'name' => $request->name,
    //     //         'username' => $request->username,
    //     //         'email' => $request->email,
    //     //         'password' => Hash::make($request->password),
    //     //         'alamat' => $request->alamat,
    //     //         'tgl' => $request->tgl,
    //     //         'bio' => $request->bio
    //     //     ];
    //     // dd($data);
    //     // User::update(
    //     //     [
    //     //         'name' => $request->name,
    //     //         'username' => $request->username,
    //     //         'email' => $request->email,
    //     //         'password' => Hash::make($request->password),
    //     //         'alamat' => $request->alamat,
    //     //         'tgl' => $request->tgl,
    //     //         'bio' => $request->bio
    //     //     ]
    //     // );

    //     // Session::flash('success', 'Update data berhasil');
    //     // return redirect('home');
    // }
}