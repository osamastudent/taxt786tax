<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\personalntnregistration;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Monolog\Handler\IFTTTHandler;

class PersonalNtnRegistrationController extends Controller
{
  // personal ntn registratin form
  public function PersonalNtnRegistration()
  {
    if (Auth::check()) {

      $cart = personalntnregistration::count('id');

      return view('clientarea.personal-ntn-registration', compact('cart'));
    } else {
      return redirect('user-login');
    }
  }


  // Sole Proprietor Business NTN Registration
  public function SoleProprietorBusinessNTNRegistration()
  {
    if (Auth::check()) {
      $cart = personalntnregistration::count('id');
      return view('clientarea.sole-proprietor', compact('cart'));
    } else {
      return redirect('user-login');
    }
  }


  // Income Tax Filing – Partnership & Company
  public function PartnershipCompany()
  {
    return view('clientarea.partnership-company');
  }

  // Quarterly & Annual Withholding Tax Statement Filing

  public function QuarterlyAnnual()
  {
    return view('clientarea.quarterly-annual');
  }

  // Federal Sales Tax Registration
  public function FederalSales()
  {
    return view('clientarea.federal-sales');
  }

  // Provincial Sales Tax Registration
  public function ProvincialSales()
  {
    return view('clientarea.provincial-sales');
  }


  // Sales Tax Monthly Filing
  public function SalesTax()
  {
    return view('clientarea.sales-tax');
  }

  // Monthly Tax Retainership
  public function MonthlyRetainership()
  {
    return view('clientarea.monthly-retainership');
  }


  // Tax Notices Reply & Representaion

  public function TaxNotices()
  {
    return view('clientarea.tax-notices');
  }

  // Tax Consultancy
  public function TaxConsultancy()
  {
    return view('clientarea.tax-consultancy');
  }

  // SECP Company Formation
  public function SECPCompany()
  {
    return view('clientarea.secp-company');
  }

  // External Annual Audit
  public function ExternalAnnual()
  {
    return view('clientarea.external-annual');
  }

  // SECP Annual Compliance
  public function SECPAnnual()
  {
    return view('clientarea.secp-annual');
  }


  // PSW Import/Export license
  public function PSWImportExportLicense()
  {
    return view('clientarea.psw-import-export');
  }

  // PSEB Registration 
  public function PSEBRegistration()
  {
    return view('clientarea.pseb-registration');
  }


  // Trust / NGO Registration 
  public function TrustNGORegistration()
  {
    return view('clientarea.trust-ngo-registration');
  }

  // intellectual-Property-Registration

  public function IntellectualPropertyRegistration()
  {
    return view('clientarea.intellectual-property-registration');
  }


  // Professional Tax Registration Renewal
  public function ProfessionalTaxRegistrationRenewal()
  {
    return view('clientarea.professional-tax-registration-renewal');
  }


  // Accounting & Book keeping Services

  public function AccountingBookkeepingServices()
  {
    return view('clientarea.accounting-book-keeping-services');
  }

  // USA / UAE / UK / Canada / Australia Services (Least Priority)

  public function USAUAEUKCanadaAustraliaServices()
  {
    return view('clientarea.USAUAEUKCanadaAustraliaServices');
  }


  // Income Tax Filing – Individual
  public function IncomeTaxFiling()
  {
    return view('clientarea.income-tax-filing');
  }






  //           public function  PersonalNtnRegistrationStore(Request $request){
  // $data=$request->all();
  // $file=$request->file('postal_address');
  // $originalname=$file->getClientOriginalName();
  // $file->move('myfilesfolder/',$originalname);
  // $data['postal_address']=$originalname;
  // personalntnregistration::create($data);
  // return "data has saved";
  //           }

  public function PersonalNtnRegistrationStore(Request $request)
  {
    // Alert::success('Welcome back!', 'Welcome to Laravel SweetAlert By Rashid Ali!');
    // return back();

    // $data = $request->all();
    // // personalntnregistration::create($data);

    // // Handle multiple file uploads  
    // $files = $request->file('postal_address');
    // $fileNames = [];
    // foreach ($files as $file) {
    //   $originalName = $file->getClientOriginalName();
    //   $file->move('myfilesfolder/', $originalName);
    //   $fileNames[] = $originalName;
    // }

    // // Save file names as an array in the JSON column
    // // $data['postal_address'] = $fileNames;
    // // personalntnregistration::create($data);

    // $filess = json_encode($fileNames);

    // personalntnregistration::create(array_merge($data, ['postal_address' => $filess]));
    // return back()->with('success', 'your data has submitted');
    // Display a warning message with SweetAlert
    //  Alert::warning('your data has submitted successfukky')->persistent(true)->autoClose(5000);


    

    $data = $request->all();
     

    // Handle multiple file uploads
    $files = $request->file('postal_address');
    $fileNames = [];

    foreach ($files as $file) {
      $originalName = $file->getClientOriginalName();
      $file->move('myfilesfolder/', $originalName);
      $fileNames[] = $originalName;
    }

    // Save file names as an array in the JSON column
    $filess = json_encode($fileNames);
    // dd($filess);
    // Merge the file names with other form data and store in the database
    personalntnregistration::create(array_merge($data, ['postal_address' => $filess]));

    // return back()->with('success', 'Your data has been submitted');

    // alert

    
    // Check if the alert has already been shown
    // if (!$request->session()->has('alert_shown')) {

    //   $request->session()->put('alert_shown', true);
    // }

    // Redirect to the same page without keeping the data in the session
    session()->flash('success', 'Your response has been received. You will be assigned our agent and contacted. You can view your waitlist number by following this link. For urgent queries, please contact 03203207960 / 03139331111 / 03341283218.');
    // return redirect()->route('Individual');
    // return redirect()->route('FirmPartnerzzzzzship');
    return redirect()->route('PersonalNtnRegistration');
    // session()->flush();
  }

  public function show()
  {
    alert()->warning('Sweet Alert with warning.');

    $data = personalntnregistration::all();
    return view('clientarea.show', compact('data'));
  }


  // delete
  public function delete($id)
  {
    $delete = personalntnregistration::find($id);
    $data = personalntnregistration::all();
    $delete->delete();
    return back();
  }

  //    public function IncomeTaxFilingStored(Request $request)
  // {
  //   $selectedValues = $request->input('selectedValues', []);
  //   $salaryincomename = $request->salaryincomename;
  //   $rentincomename = $request->rentincomename;
  //   $businessincomename = $request->businessincomename;
  //   $sharescapitalgainname = $request->sharescapitalgainname;
  //   $otherincomename = $request->otherincomename;
  //   $withholdingadjustablename = $request->withholdingadjustablename;
  //   // dd($rentincomename);

  //   // Store the selected values in the session
  //   Session::put('selectedValues', $selectedValues);
  //   Session::put('salaryincomename', $salaryincomename);
  //   Session::put('rentincomename', $rentincomename);
  //   Session::put('businessincomename', $businessincomename);
  //   Session::put('sharescapitalgainname', $sharescapitalgainname);
  //   Session::put('otherincomename', $otherincomename);
  //   Session::put('withholdingadjustablename', $withholdingadjustablename);

  //   // return  $request->salaryincomename;
  //   //     if (
  //   //        $request->rentincomename == "rent_income" || $request->businessincomename == "business_income" || $request->sharescapitalgainname == "shares_capital_gain" || $request->otherincomename == "other_income" || $request->withholdingadjustablename == "withholding_adjustable_or_final_tax" && $request->salaryincomename == "salary_income") {
  //   //       return redirect()->route('SalaryIncome');
  //   //     } elseif ($request->businessincomename == "business_income" || $request->sharescapitalgainname == "shares_capital_gain" || $request->otherincomename == "other_income" &&  $request->rentincomename == "rent_income" || $request->withholdingadjustablename == "withholding_adjustable_or_final_tax"){
  //   // return "rent";
  //   //       // return redirect()->route('RentIncome');
  //   //     }
  //   //     return "something went wrong";
  //   //   }
  //   if ($request->salaryincomename == "salary_income") {
  //     return redirect()->route('SalaryIncome');
  //     // return view('clientarea.incometaxfilingindividual.salary-income', compact('withholdingadjustablename'));
  //   } elseif ($request->rentincomename == "rent_income") {
  //     return redirect()->route('RentIncome');
  //   } elseif ($request->businessincomename == "business_income") {
  //     return redirect()->route('BusinessIncome');
  //   } elseif ($request->sharescapitalgainname == "shares_capital_gain") {
  //     return redirect()->route('SharesCapitalGain');
  //   } elseif ($request->otherincomename == "other_income") {
  //     return redirect()->route('OtherIncome');
  //   } elseif ($request->withholdingadjustablename == "withholding_adjustable_or_final_tax") {
  //     return redirect()->route('WithholdingAdjustable');
  //   }

  //   return "something went wrong";
  // }
  //   if ($request->salaryincomename == "salary_income") {
  //     return redirect()->route('SalaryIncome');
  //   } elseif ($request->salaryincomename == "rent_income") {
  //     return redirect()->route('RentIncome');
  //   } elseif ($request->salaryincomename == "business_income") {
  //     return redirect()->route('BusinessIncome');
  //   } elseif ($request->salaryincomename == "shares_capital_gain") {
  //     return redirect()->route('SharesCapitalGain');
  //   } elseif ($request->salaryincomename == "other_income") {
  //     return redirect()->route('OtherIncome');
  //   } elseif ($request->salaryincomename == "withholding_adjustable_or_final_tax") {
  //     return redirect()->route('WithholdingAdjustable');
  //   }

  //   return "something went wrong";
  // }



  // public function SalaryIncome()
  // {
  //   $selectedValues = Session::get('selectedValues');
  //   $name = Session::get('name');
  //   // dd($selectedValues);
  //   // dd($name);
  //   return view('clientarea.incometaxfilingindividual.salary-income', compact('selectedValues', 'name'));
  // }

 


 

  // provincial
  public function Individual()
  {
    return view('clientarea.provincial.individual');
  }
  public function FirmPartnership()
  {
    return view('clientarea.provincial.firmpartnership');
  }
  public function SECPCompanyInProvincial()
  {
    return view('clientarea.provincial.secpcompany');
  }


  // provincial stored functions
  public function ProvincialStored(Request $request)
  {
    // Store the selectedOptionsSessionValues in the session
    // session(['selectedOptionsSessionValues' => $all]);

    Session()->put('selectedOptions', $request->selectedOptions);
    Session()->put('srb', $request->SRB);
    Session()->put('pra', $request->PRA);
    Session()->put('kpra', $request->KPRA);
    Session()->put('bra', $request->BRA);
    // Session()->flush();
    if ($request['selectedOptions'] == "Individual") {
      
      return redirect()->route('Individual');
    } else if ($request['selectedOptions'] == "Fir_Partnership") {
      return redirect()->route('FirmPartnership');
    } else if ($request['selectedOptions'] == "SECP_Company") {
      return redirect()->route('SECPCompanyInProvincial');
    } else {
      return redirect()->back();
    }
    //  return view('clientarea.provincial.individual',compact('selectedOptions'));

  }

  public function IndividualStored(Request $request)
  {
    // $re


    // Check if the alert has already been shown
    if (!$request->session()->has('alert_shown')) {

      $request->session()->put('alert_shown', true);
    }

    // Redirect to the same page without keeping the data in the session
    session()->flash('success', 'Your response has been received. You will be assigned our agent and contacted. You can view your waitlist number by following this link. For urgent queries, please contact 03203207960 / 03139331111 / 03341283218.');
    // return redirect()->route('Individual');
    // return redirect()->route('FirmPartnerzzzzzship');
    return redirect()->route('SECPCompanyInProvincial');
    session()->flush();
  }
}
