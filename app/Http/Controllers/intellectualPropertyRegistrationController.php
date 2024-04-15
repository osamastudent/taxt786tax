<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\intellectualPropertyRegistration;
use App\Http\Requests\intellectualPropertyRegistrationRequest;

class intellectualPropertyRegistrationController extends Controller
{
    // intellectual-Property-Registration

    public function intellectualPropertyRegistration(Request $request)
    {
        if (Auth::check()) {
            $popup=$request->intellectualPropertyRegistration;
      $userEnterMessage=UserEnter::where("status",'status')->get();
      $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
            session()->flash('enterUser', $userEnterMessage);
            return view('clientarea.intellectual-property-registration',compact('popup','userEnterMessage','formSubmitAlert'));
          } else {
            return redirect('user-login');
          }
    }


    // intellectual-Property-Registration store into database
    public function IntellectualPropertyRegistrationStore(intellectualPropertyRegistrationRequest $request)
    {
        // intellectualPropertyRegistrationRequest
        $data = $request->all();
        // Process suggested names
        // $data['suggested_name'] = implode(',', $request->input('suggested_name', []));
        // File upload handling
        $fileFields = [
            'ntn_copy', 'visiting_card', 'pics_working_area', 'tax_return',

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
        intellectualPropertyRegistration::create($data);

        // Flash message and redirection
        $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
        return redirect()->route('intellectualPropertyRegistration');
    }
}
