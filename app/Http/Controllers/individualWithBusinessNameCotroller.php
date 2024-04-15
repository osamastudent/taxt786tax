<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\individualWithBusinessName;
use App\Http\Requests\individualWithBusinessNameRequest;

class individualWithBusinessNameCotroller extends Controller
{
     // Individual with business name / Company / Partnership

  public function individualWithBusinessName()
  {

    
        $popup='individualWithBusinessName';
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.psebregitration.individual-with-business',compact('popup','userEnterMessage','formSubmitAlert'));
    
  }
  
  // Individual with business name  store into database
  public function individualWithBusinessNameStore(individualWithBusinessNameRequest $request)
  {
    // individualWithBusinessNameRequest
    
    $data = $request->all();
        // File upload handling
    $fileFields = [
        'business_ntn', 'cnic_all_directors', 'passports_directors','memorandum_articles','form_twentynine','incorporation_certificate','partnership_deed','firm_registration_certificate','business_bank_statement',
    ];
    foreach ($fileFields as $field) {
        if ($request->hasFile($field)) {
            $fileArray = [];

            foreach ($request->file($field) as $file) {
                $originalName = $file->getClientOriginalName();
                $file->move('individualWithbusinessName/', $originalName);
                $fileArray[] = $originalName;
            }

            $data[$field] = implode(',', $fileArray);
        } else {
            $data[$field] = null;
        }
    }
    // Store data in the database
    $data['user_email']=auth()->user()->email;
    individualWithBusinessName::create($data);

    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('individualWithBusinessName');
  }

}
