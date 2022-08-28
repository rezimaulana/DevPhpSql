<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function landing(){
        return view('contents/landing');
    }
    public function info(){
        return view('contents/info');
    }
    public function student(){
        return view('contents/student');
    }
}
