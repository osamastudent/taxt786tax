<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProvincialSalesTaxRegistration;

class ProvincialSalesTaxRegistrationController extends Controller
{
     // Provincial Sales Tax Registration
  public function ProvincialSales()
  {
    return view('clientarea.provincial-sales');
  }


   // Provincial Sales Tax Registration store ito database
   public function ProvincialSalesStore(Request $request)
   {
     $data=$request->all();
     ProvincialSalesTaxRegistration::create($data);
     Session()->put('srb', $request->SRB);
     Session()->put('pra', $request->PRA);
     Session()->put('kpra', $request->KPRA);
     Session()->put('bra', $request->BRA);
     // Session()->flush();
     if ($request['select-status'] == "Individual") {
       
       return redirect()->route('Individual');
     } else if ($request['select-status'] == "Fir_Partnership") {
       return redirect()->route('FirmPartnership');
     } else if ($request['select-status'] == "SECP_Company") {
       return redirect()->route('SECPCompanyInProvincial');
     } else {
       return redirect()->back();
     }
 
   }
 

}
