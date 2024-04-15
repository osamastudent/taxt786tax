<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practiceController extends Controller
{
    public function reverse(){
        return view('reverse');
    }

    public function named(){
        return view('named');
    }
}
