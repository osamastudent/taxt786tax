<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Models\selectassetsexpenseavailablefromlist;
use App\Http\Requests\selectassetsexpenseavailablefromlistRequest;

class selectassetsexpenseavailablefromlistController extends Controller
{
    // Assets Expense Available form

    public function AssetsExpenseAvailable()
    {
      $popup="AssetsExpenseAvailable";
      $userEnterMessage=UserEnter::where("status",'status')->get();
      $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
            session()->flash('enterUser', $userEnterMessage);
            return view('clientarea.incometaxfilingindividual.assetsexpenseavailable',compact('popup','userEnterMessage','formSubmitAlert'));
    }


    // Assets Expense Available store into database
    public function AssetsExpenseAvailableStore(selectassetsexpenseavailablefromlistRequest $request){
        $data = $request->all();
      
        $fileFields=[
          'bank_statement',
          'properties_purchased',
        ];
        foreach($fileFields as $field){
        if($request->hasFile($field)){
        $fileArray=[];
        foreach($request->file($field) as $file){
        $originalName=$file->getClientOriginalName();
        $file->move("Iincometaxfilingindividual/businessincomefiles/",$originalName);
        $fileArray[]=$originalName;
        }
        $data[$field]=implode(',',$fileArray);
        }else{
          $data[$field]=null;
        }   
        }
        $data['user_email']=auth()->user()->email;
        selectassetsexpenseavailablefromlist::create($data);  
    
        $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('success',$formSubmitAlert);

              return redirect()->route('AssetsExpenseAvailable');        
                    
        }
        
  
        


    }
