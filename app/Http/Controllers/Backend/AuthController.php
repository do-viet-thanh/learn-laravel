<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::attempt([
            'email' => request('email'),
            'password' => request('password'),
        ])){
            return view('backend.users.index');
        }
        return redirect()->back()->with('notification_error','Đăng nhập không thành công');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        return view('auth.login');
    }

}
