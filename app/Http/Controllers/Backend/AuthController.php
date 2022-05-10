<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login()
    {
        if (Auth::guard('admin')->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ])){
            return redirect()->route('backend.dashboard');
        }
        return redirect()->back()->with('notification_error', 'Đăng nhập không thành công')->withInput();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('backend.login.get');
    }

}
