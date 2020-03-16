<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        $title = 'Login - Idea For World';
        return view('frontend.auth.login',compact('title'));
    }
    public function postLogin(){
        $this->validate(request(),[
            'name'=>'required',
            'password'=>'required'
        ]);
        $field = filter_var(request('name'),FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (Auth::attempt([$field => request('name'), 'password' => request('password')])) {
            if (Auth::check()) {
                if (Auth::user()->type == 'admin') {
                    return redirect('admin');
                }
                if (Auth::user()->type == 'staff') {
                    return redirect('staff');
                }
                if (Auth::user()->type == 'users') {
                    return redirect('user');
                }
            }
        }
        return redirect('login')->withErrors(['email'=>'Invalid Email/Username','password'=>'Wrong Password'])->withInput(request()->only('name'));
    }

}
