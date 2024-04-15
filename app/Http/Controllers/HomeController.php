<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\personalntnregistration;
use App\Models\soleproprietorbusinessntnregistration;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            $user=Auth::user();
                $email=$user->email;
            
            // $cart2=personalntnregistration::where('email',$email)->count();
            // $cart1=soleproprietorbusinessntnregistration::where('email',$email)->count();
            // $cart=$cart1+$cart2;
        return view('home');
        }
        else{
            return redirect('user-login');
        }
    }
}
