<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppslandController extends Controller
{
    //
    public function index(){
        return view('appsland_layout.master');
    }
    
}
