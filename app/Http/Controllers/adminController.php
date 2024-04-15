<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function admin(){
    if(Auth::id()){
        return view('admin.index');
    }
    else{
        return view('clientarea.login');
    }
    }

    public function master(){
    return view('admin.masterfile');
    }
}
