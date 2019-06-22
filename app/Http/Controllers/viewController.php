<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    function index(){
        return view("index");
    }
    function admin(){
        return view("admin");
    }
    function user(){
        return view("user");
    }
}
