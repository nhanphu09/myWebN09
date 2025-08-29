<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webn09a extends Controller
{
    public function test (){

        $test = "ad";
        echo $test;

        return view('ad');

    }
}