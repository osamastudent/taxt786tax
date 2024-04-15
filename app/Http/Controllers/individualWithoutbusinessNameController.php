<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use App\Models\IndividualWithoutBusinessName;
use App\Http\Requests\individualWithoutbusinessNameRequest;

class individualWithoutbusinessNameController extends Controller
{
    // Individual without business name
    public function individualWithOutBusinessName()
    {

        
  $popup='individualWithOutBusinessName';
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.psebregitration.individual-without-business',compact('popup','userEnterMessage','formSubmitAlert'));
    
    }

    // Individual without business name  store into database
    public function individualWithOutBusinessNameStore(individualWithoutbusinessNameRequest $request)
    {
        // individualWithoutbusinessNameRequest
        $data = $request->all();
        // Process suggested names
        // $data['suggested_name'] = implode(',', $request->input('suggested_name', []));
        // File upload handling
        $fileFields = [
            'personal_ntn', 'cnic_both_sides', 'account_letter_certificate',
        ];
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $fileArray = [];

                foreach ($request->file($field) as $file) {
                    $originalName = $file->getClientOriginalName();
                    $file->move('individualWithoutbusinessName/', $originalName);
                    $fileArray[] = $originalName;
                }

                $data[$field] = implode(',', $fileArray);
            } else {
                $data[$field] = null;
            }
        }
        // Store data in the database
        $data['user_email']=auth()->user()->email;
        IndividualWithoutBusinessName::create($data);
        

        // Flash message and redirection
        $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
        return redirect()->route('individualWithOutBusinessName');
    }
}
