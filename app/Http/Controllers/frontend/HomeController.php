<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = 'Idea For World - Home Page';
        $sliders = Slider::where('status','public')->get();
        return view('frontend.welcome',compact('title','sliders'));
    }
}
