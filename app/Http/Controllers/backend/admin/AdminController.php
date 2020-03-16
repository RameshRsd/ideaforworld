<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $title ='Admin Panel - IDEA FOR WORLD';
        return view('backend.admin.dashboard',compact('title'));
    }
    public function fmButton()
    {
        return view('backend.admin.fmButton.fmButton');
    }

}
