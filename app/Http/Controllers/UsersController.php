<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home(){
        return view('users.home');
    }
    public function creat(){
        return view('users.creat');
    }
    public function update(){
        return view('users.update');
    }
}
