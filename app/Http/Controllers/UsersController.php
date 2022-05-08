<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('users.home');
    }
    public function creat(){
        return view('users.creat');
    }
    public function store(){

    }

    public function edit($id)
    {

    }
    public function update($id){
        return view('users.update');
    }

    public function delete($id){
        return view('users.delete');
    }
}
