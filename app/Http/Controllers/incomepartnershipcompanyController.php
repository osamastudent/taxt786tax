<?php

namespace App\Http\Controllers;

use App\Models\UserEnter;
use Illuminate\Http\Request;
use App\Models\formSubmitAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\incomepartnershipcompany;
use App\Http\Requests\incomepartnershipcompanyRequest;

class incomepartnershipcompanyController extends Controller
{
  // Income Tax Filing – Partnership & Company
  public function PartnershipCompany(Request $request)
  {

    if (Auth::check()) {
    $popup=$request->PartnershipCompany;
    $userEnterMessage=UserEnter::where("status",'status')->get();
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
          session()->flash('enterUser', $userEnterMessage);
          return view('clientarea.partnership-company',compact('popup','userEnterMessage','formSubmitAlert'));
        } else {
          return redirect('user-login');
        }

    
  }
    

    public function PartnershipCompanyStore(incomepartnershipcompanyRequest $request){
        // incomepartnershipcompanyRequest
        
        $data=$request->all();
              $bankstatementfiles=[];
        $financialstatementfiles=[];
        $businessassetsfiles=[];
        
        
        if($request['bank_statement']){
            foreach($request['bank_statement'] as $picturebusinesspremisesValues ){
                $originalNameFirst=$picturebusinesspremisesValues->getClientOriginalName();
                $picturebusinesspremisesValues->move('incomepartnershipcompanyfiles/',$originalNameFirst);
                $bankstatementfiles[]=$originalNameFirst;
                }
                $data['bank_statement']=implode(',',$bankstatementfiles);
        }
        else{
            $data['bank_statement']=null;
        }
        
        if($request['financial_statement']){
            foreach($request['financial_statement'] as $picturebusinesspremisesValues ){
                $originalNameSecond=$picturebusinesspremisesValues->getClientOriginalName();
                $picturebusinesspremisesValues->move('incomepartnershipcompanyfiles/',$originalNameSecond);
                $financialstatementfiles[]=$originalNameSecond;
                }
                $data['financial_statement']=implode(',',$financialstatementfiles);
        }
        else{
            $data['financial_statement']=null;
        }
        if($request['business_assets']){
            foreach($request['business_assets'] as $picturebusinesspremisesValues ){
                $originalNameThird=$picturebusinesspremisesValues->getClientOriginalName();
                $picturebusinesspremisesValues->move('incomepartnershipcompanyfiles/',$originalNameThird);
                $businessassetsfiles[]=$originalNameThird;
                }
                $data['business_assets']=implode(',',$businessassetsfiles);
        }
        else{
            $data['business_assets']=null;
        }

        incomepartnershipcompany::create($data);      
        
    $formSubmitAlert=formSubmitAlert::where("status",'status')->get();
    session()->flash('success',$formSubmitAlert);
        return redirect()->route('PartnershipCompany');
    }

}
