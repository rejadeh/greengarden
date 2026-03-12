<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function login() {
        return view('login',); 
    }

    public function garden() {
        return view('green_garden',); 
    }
}
