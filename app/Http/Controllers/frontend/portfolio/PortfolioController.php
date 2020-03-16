<?php

namespace App\Http\Controllers\frontend\portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $title = 'Portfolio - IDEA FOR WORLD';
        return view('frontend.pages.portfolio.index',compact('title'));
    }

}
