<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRegisterRequest;

class UserRegisterController extends Controller
{
    // register form
    public function UserRegisterForm(){
                      if(auth::id()){
            return redirect()->route('home');
           }
           else{
            return view('clientarea.register');
           }
        }

        // User Store
        public function UserRegisterStore(UserRegisterRequest $request){
        $users=$request->all();
        $users['user_type']="user";
        $users['password']=Hash::make($request->password);
        User::create($users);
        return redirect('user-login');
        }

}
