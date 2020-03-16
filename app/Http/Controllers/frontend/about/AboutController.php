<?php

namespace App\Http\Controllers\frontend\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About Us - IDEA FOR WORLD';
        return view('frontend.pages.about.index',compact('title'));
    }

}
