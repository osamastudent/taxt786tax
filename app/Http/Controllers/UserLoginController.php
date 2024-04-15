<?php

namespace App\Http\Controllers;

use session;
use Exception;
use App\Models\User;
use Illuminate\Support\Str;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserLoginRequest;
use App\Models\personalntnregistration;
use Laravel\Socialite\Facades\Socialite;

class UserLoginController extends Controller
{


    // login form
    public function LoginForm()
    {
        if (auth::id()) {
            return redirect()->route('home');
        } else {
            return view('clientarea.login');
        }
    }


    // user login
    // public function UserLogin(UserLoginRequest $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $remember = $request->remember;
    //     if (Auth::attempt($credentials, $remember)) {
    //         return redirect('home');
    //     }
    //     $user=User::where('email',$credentials['email'])->first();
    //     if($user){
    //     return back()->with('invalidpassword','Password Is Not Match');
    //     }
    //     else{
    //         return back()->with('invalidemail','User Is Not Registered');
    //     }
    // }



    // user login
    public function UserLogin(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $email = $request->session()->put('email', $request->email);
        // dd($request->email);
        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            $user = auth()->user();

            if ($user->user_type == 'admin') {
                return redirect()->route('admin'); 
            } elseif ($user->user_type == 'user') {
                return redirect()->route('home'); 
            }
        }

        // If the authentication attempt fails
        $user = User::where('email', $credentials['email'])->first();
        if ($user) {
            return back()->with('invalidpassword', 'Password Is Not Match');
        } else {
            return back()->with('invalidemail', 'User Is Not Registered');
        }



        // if (User::where('email', $credentials['email'])->exists()) {
        //     return back()->with('invalidpassword', 'Password is not correct');
        // } else {
        //     return back()->with('invalidemail', 'User is not registered');
        // }
    }






    public function Logout()
    {
        auth()->logout();
        return redirect('user-login');
    }


    function Cart()
    {
        if (Auth::check()) {

            // $cart =null;
            return view('clientarea.navbar');
            // return view('clientarea.navbar', compact('cart'));
        }
        return redirect('user-login');
    }
}



// if (!$findUser) {
//     // Create a new user if not found
//     $findUser = new User();
//     $findUser->name = $user->name;
//     $findUser->user_type = "user";
//     $findUser->email = $user->email;
//     $findUser->mobile_no = $user->phone ?? 'N/A';
//     $findUser->password = bcrypt(Str::random(16));
//     // $findUser->password = "CHoose123"; // Secure password storage
//     $findUser->save();
    
// }
// Session()->put('id',$findUser->id);
// Session()->put('user_type',$findUser->user_type);
// return redirect('/');
// }
// catch(Exception $e){
// dd($e->getMessage());
// }
// }