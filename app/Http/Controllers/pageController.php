<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function homePage()
    {
        return view('welcome');
    }
    
    public function bioPage()
    {
        return view('bio');
    }
}
