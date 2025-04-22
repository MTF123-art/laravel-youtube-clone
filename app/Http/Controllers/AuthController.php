<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth-page.register');
    }

    public function register(RegisterRequest $request)
    {
        $newuser = $request->validated();
        $newuser['password'] = Hash::make($newuser['password']);

        User::create($newuser);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat!');
    }

    public function showLoginForm()
    {
        return view('auth-page.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;
            return redirect()
                ->route($role . '.dashboard')
                ->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Login gagal, silahkan cek email dan password anda!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah Logout!');
    }
}
