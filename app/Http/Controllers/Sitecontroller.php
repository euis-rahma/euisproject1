<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sitecontroller extends Controller
{
    public function index(){
        return view( 'site/index' );
    }
}