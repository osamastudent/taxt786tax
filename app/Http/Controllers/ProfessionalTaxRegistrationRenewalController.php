<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfessionalTaxRegistrationRenewal;
use App\Http\Requests\ProfessionalTaxRegistrationRenewalRequest;

class ProfessionalTaxRegistrationRenewalController extends Controller
{
    
    // Professional Tax Registration Renewal
  public function ProfessionalTaxRegistrationRenewal(Request $request)
  {
    if (Auth::check()) {
      $popup=$request->ProfessionalTaxRegistrationRenewal;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.professional-tax-registration-renewal',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }
    // Professional Tax Registration Renewal
  public function ProfessionalTaxRegistrationRenewalStore(ProfessionalTaxRegistrationRenewalRequest $request)
  {
    // ProfessionalTaxRegistrationRenewalRequest
    $data=$request->all();
$fileFields=[
    'certificate_incorporation','ntn_certificate','audited_financial_statements','last_paid_challan','list_contractor','income_tax_returns','list_containing_names_numbers_owners',
];

foreach($fileFields as $field){
if($request->hasFile($field)){
    $fileArray=[];
    foreach($request->file($field) as $file){
    $originalName=$file->getClientOriginalName();
    $file->move('ProfessionalTaxRegistrationRenewal/',$originalName);
    $fileArray[]=$originalName;
    }
    $data[$field] = implode(',', $fileArray);
} else {
    $data[$field] = null;
}
}
$data['user_email']=auth()->user()->email;
   ProfessionalTaxRegistrationRenewal::create($data);
   $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
return redirect()->route('ProfessionalTaxRegistrationRenewal');
  }

}


