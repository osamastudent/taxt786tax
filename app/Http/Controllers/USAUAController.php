<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsaUaeUkService;
use App\Http\Requests\UsaUaeUkServiceRequest;

class USAUAController extends Controller
{
   
   

    
 // USA / UAE / UK / Canada / Australia Services (Least Priority)

 public function USAUAEUKCanadaAustraliaServices()
 {
   return view('clientarea.USAUAEUKCanadaAustraliaServices');
 }
 
    public function USAUAEUKCanadaAustraliaServicesStore(Request $request)
    {
        // UsaUaeUkServiceRequest
        $data=$request->all();
        // dd($data);
        UsaUaeUkService::create($data);
    // session()->flash('success', 'Your response has been received. You will be assigned our agent and contacted. You can view your waitlist number by following this link. For urgent queries, please contact 03203207960 / 03139331111 / 03341283218.');
    // return redirect()->route('AccountingBookkeepingServices');

        if ($request['select_type_service'] == "incomeTaxation") {
            return redirect()->route('IncomeTaxation');
        } else if ($request['select_type_service'] == "salesTaxation") {
            return redirect()->route('SalesTaxation');
        } else if ($request['select_type_service'] == "companyFormation") {
            return redirect()->route('CompanyFormation');
        }
        else{
            return back();
        }
    }
}
