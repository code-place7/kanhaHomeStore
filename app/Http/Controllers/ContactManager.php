<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactManager extends Controller
{
    function contact(){
        return view("contact");
    }
}
