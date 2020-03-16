<?php

namespace App\Http\Controllers\frontend\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $title = 'Our Team - IDEA FOR WORLD';
        return view('frontend.pages.team.index',compact('title'));
    }

}
