<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Auth;
use App\Models\PswImportExportLicense;
use App\Http\Requests\PswImportExportLicenseRequest;

class PswImportExportLicenseController extends Controller
{
    // PSW Import/Export license
  public function PSWImportExportLicense(Request $request)
  {
    
    if (Auth::check()) {
      $popup=$request->PSWImportExportLicense;
$userEnterMessage=UserEnter::where("status",'status')->get();
$formSubmitAlert=formSubmitAlert::where("status",'status')->get();
      session()->flash('enterUser', $userEnterMessage);
      return view('clientarea.psw-import-export',compact('popup','userEnterMessage','formSubmitAlert'));
    } else {
      return redirect('user-login');
    }
  }

    // PSW Import/Export license store into database
  public function PSWImportExportLicenseStore(PswImportExportLicenseRequest $request)
  {
    // PswImportExportLicenseRequest
    $data=$request->all();
    $files=[];
    if($request['cnic_copy']){
        foreach($request['cnic_copy'] as $filesValues){
$originalName=$filesValues->getClientOriginalName();
$filesValues->move('pswimportexport/',$originalName);;
$files[]=$originalName;
        }
        $data['cnic_copy']=implode(',',$files);
       }
       else{
        $data['cnic_copy']=null;
        }
        $data['user_email']=auth()->user()->email;
        PswImportExportLicense::create($data);
        $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
    return redirect()->route('PSWImportExportLicense');
    
  }
}
