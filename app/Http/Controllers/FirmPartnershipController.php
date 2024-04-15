<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\FirmPartnership;
use App\Models\formSubmitAlert;
use App\Http\Requests\FirmPartnershipRequest;

class FirmPartnershipController extends Controller
{
    
    // firm partnership form
    public function FirmPartnership()
    {
        
        $popup="FirmPartnership";
  $userEnterMessage=UserEnter::where("status",'status')->get();
  $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
        session()->flash('enterUser', $userEnterMessage);
        return view('clientarea.provincial.firmpartnership',compact('popup','userEnterMessage','formSubmitAlert'));
    }

    // firm partnership form
    public function FirmPartnershipStore(Request $request)
    {
        
        $data = $request->all();
        // File upload handling
    $fileFields = [
        'copy_firm_ntn',
        'cnic_copy_partners',
         'form_c',
        'partnership_deed',
        'paid_electricity_bill',
        'tenancy_agreement_ownership',
        'documents_business_premises',
        'bank_maintenance_certificate',
    ];
    foreach ($fileFields as $field) {
        if ($request->hasFile($field)) {
            $fileArray = [];

            foreach ($request->file($field) as $file) {
                $originalName = $file->getClientOriginalName();
                $file->move('provincialsalestaxregistration/firmpartnership/', $originalName);
                $fileArray[] = $originalName;
            }

            $data[$field] = implode(',', $fileArray);
        } else {
            $data[$field] = null;
        }
    }
    
    // Store data in the database
    
    $data['user_email']=auth()->user()->email;
    FirmPartnership::create($data);
    // Flash message and redirection
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
return redirect()->route('FirmPartnership'); 

    }
}
