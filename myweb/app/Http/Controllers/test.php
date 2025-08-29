<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function index(){

        $phu = "Phu say Hello ";

        echo $phu;
        return view('test');
    }
}
