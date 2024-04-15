<?php

namespace App\Http\Controllers;

use App\Models\formSubmitAlert;
use App\Models\UserEnter;
use Illuminate\Http\Request;

class alertController extends Controller
{
    // user enter first time
    public function Alert(){
        return view('admin.alerts.user-enter');
    }

    public function AlertStore(Request $request){
    $data=$request->all();
    $data['status']='status';
    UserEnter::create($data);
    return back();
    }
    
    
    // update alert user enter first time
    public function AlertUpdate(){
        $find=UserEnter::where("status",'status')->first();
        return view('admin.alerts.user-enter-update',compact('find'));
    }

    public function AlertUpdateStore(Request $request){
        
    $find=UserEnter::where("status",'status')->first();

    if($find){
            $find->fill($request->only(['title', 'text']));
$find->save();

}
    return back();
    }



    // after form submittin this popo will be shown
    public function AlertFormSubmit(){
        return view('admin.alerts.form-submit');
    }

    public function AlertFormSubmitStore(Request $request){
    $data=$request->all();
    $data['status']='status';
    formSubmitAlert::create($data);
    return back();
    }
    
    
    // update this after form submittin this popo will be shown
    public function AlertFormSubmitUpdate(){
        $find=formSubmitAlert::where("status",'status')->first();
        return view('admin.alerts.form-submit-update',compact('find'));
    }

    public function AlertFormSubmitUpdateStore(Request $request){
        
    $find=formSubmitAlert::where("status",'status')->first();

    if($find){
            $find->fill($request->only(['title', 'text']));
$find->save();

}
    return back();
    }


}
