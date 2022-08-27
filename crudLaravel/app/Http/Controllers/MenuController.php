<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function landing(){
        return view('landing');
    }
    public function info(){
        return view('info');
    }
    public function student(){
        return view('student');
    }
}
