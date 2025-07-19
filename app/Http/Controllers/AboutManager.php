<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutManager extends Controller
{
    function about(){
        return view("about");
    }
}
