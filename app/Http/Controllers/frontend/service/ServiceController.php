<?php

namespace App\Http\Controllers\frontend\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $title = 'Services - IDEA FOR WORLD';
        return view('frontend.pages.service.index',compact('title'));
    }
}
