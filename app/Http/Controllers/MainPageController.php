<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function getHeaderTest(){
        return view('headerTest');
    }
}
