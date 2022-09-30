<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontrol extends Controller
{
    function getData(Request $req){
        return $req->input();
    }
}
