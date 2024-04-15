<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-BEBtUHCoFI4zDoBc5tmTB37d4sDO+4xX5Z7Ye2J4pX+XcuY8un47DTSHB1OYlOz6/zsuZW7AM0Kltbp5qKhNEA==" crossorigin="anonymous" />
  <title>786Tax Payment</title>
  <style>
    .quantity-box {
      border-radius: 0px !important;
      box-shadow: none !important;
    }

    .increase-btn {
      border-radius: 0px !important;
      box-shadow: none !important;
    }

    .delete-btn {
      opacity: 0.7;
      font-size: 20px !important;
      margin-top: -15px !important;
      margin-left: -23px;
      box-shadow: none !important;
    }

    .delete-btn:hover {
      color: green !important;
      font-size: 23px !important;
    }

    .mycard {
      width: 40%;
      border-radius: 8px !important;
      box-shadow: 0 1px 2px #00000029 !important;
      cursor: pointer;
      /* height: 94px; */
      margin-block: 1rem;
    }

    .empty-card {
      width: 40%;
      border-radius: 8px !important;
      box-shadow: 0 1px 2px #00000029 !important;
      height: 74px;
      margin-block: 1rem;
      font-size: 16px;
      font-weight: 500;
      opacity: 0.8;
    }

    .empty-disabled-card {
      width: 40%;
      border-radius: 8px !important;
      box-shadow: 0 1px 2px #00000029 !important;
      cursor: pointer;
      height: 100px;
      margin-block: 1rem;
    }

    .label {
      font-size: 12px;
      font-weight: 600;
    }

    .price {
      font-size: 13px;
      font-weight: 700;
    }

    .total {
      font-size: 15px;
      font-weight: 800;
    }

    @media screen and (max-width:768px) {
      .mycard {
      width: 90%;
      border-radius: 8px !important;
      box-shadow: 0 1px 2px #00000029 !important;
      cursor: pointer;
      /* height: 94px; */
      margin-block: 1rem;
    }
    
    .empty-card {
      width: 90%;
    }
    .empty-disabled-card {
      width: 90%;
    }

  }
  </style>
</head>

<body>
  @include('clientarea.navbar')
  @section('content')


  <!-- container start -->
  <div class="container">

    <div class="alert w-100 text-center">
      <h5 class="">My Cart</h5>
    </div>

    @if($personalntnregistration)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-6">
              <span><span class="label ">Personal NTN Registration</span>
            </div>
            <div class="col-6 text-end">
              <input type="hidden" name="personalntnregistration" value="personalntnregistration">
              <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasepersonalntnregistration" value="decreaseincreasepersonalntnregistration" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$personalntnregistration}}" class="form-control quantity-box">
          <button type="submit" name="increasepersonalntnregistration" value="increaseincreasepersonalntnregistration" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($personalntntotal)}}</span>
      </div>
    </div>
    @endif


    @if($soleproprietorbusinessntnregistration)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Sole Proprietor Business NTN Registration</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="soleproprietorbusinessntnregistration" value="soleproprietorbusinessntnregistration">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasesoleproprietorbusinessntnregistration" value="decreasesoleproprietorbusinessntnregistration" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$soleproprietorbusinessntnregistration}}" class="form-control quantity-box">
          <button type="submit" name="increasesoleproprietorbusinessntnregistration" value="increasesoleproprietorbusinessntnregistration" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($soleprototal)}}</span>
      </div>
    </div>
    @endif

   

   


    @if($selectassetsexpenseavailablefromlist)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Select Assets/expense available from list</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="selectassetsexpenseavailablefromlist" value="selectassetsexpenseavailablefromlist">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseselectassetsexpenseavailablefromlist" value="decreaseselectassetsexpenseavailablefromlist" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$selectassetsexpenseavailablefromlist}}" class="form-control quantity-box">
          <button type="submit" name="increaseselectassetsexpenseavailablefromlist" value="increaseselectassetsexpenseavailablefromlist" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($selectassetstotal)}}</span>
      </div>
    </div>
    @endif

   
    @if($incomepartnershipcompany)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Income Tax Filing – Partnership & Company</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="incomepartnershipcompany" value="incomepartnershipcompany">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseincomepartnershipcompany" value="decreaseincomepartnershipcompany" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$incomepartnershipcompany}}" class="form-control quantity-box">
          <button type="submit" name="increaseincomepartnershipcompany" value="increaseincomepartnershipcompany" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($incomepartnershipcompanytotal)}}</span>
      </div>
    </div>
    @endif

    @if($quarterlyannualwithholding)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Quarterly & Annual Withholding Tax Statement Filing</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="quarterlyannualwithholding" value="quarterlyannualwithholding">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasequarterlyannualwithholding" value="decreasequarterlyannualwithholding" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$quarterlyannualwithholding}}" class="form-control quantity-box">
          <button type="submit" name="increasequarterlyannualwithholding" value="increasequarterlyannualwithholding" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($quarterlyannualwithholdingtotal)}}</span>
      </div>
    </div>
    @endif

    @if($federalsalestaxregistration)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Federal Sales Tax Registration</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="federalsalestaxregistration" value="federalsalestaxregistration">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasefederalsalestaxregistration" value="decreasefederalsalestaxregistration" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$federalsalestaxregistration}}" class="form-control quantity-box">
          <button type="submit" name="increasefederalsalestaxregistration" value="increasefederalsalestaxregistration" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($federalsalestaxregistrationtotal)}}</span>
      </div>
    </div>
    @endif

    @if($individual)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Individual</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="individual" value="individual">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseindividual" value="decreaseindividual" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$individual}}" class="form-control quantity-box">
          <button type="submit" name="increaseindividual" value="increaseindividual" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($individualtotal)}}</span>
      </div>
    </div>
    @endif

    @if($FirmPartnership)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Firm/Partnership</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="FirmPartnership" value="FirmPartnership">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseFirmPartnership" value="decreaseFirmPartnership" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$FirmPartnership}}" class="form-control quantity-box">
          <button type="submit" name="increaseFirmPartnership" value="increaseFirmPartnership" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($FirmPartnershiptotal)}}</span>
      </div>
    </div>
    @endif

    @if($SecpCompanyInProvincial)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">SECP Company</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="SecpCompanyInProvincial" value="SecpCompanyInProvincial">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseSecpCompanyInProvincial" value="decreaseSecpCompanyInProvincial" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$SecpCompanyInProvincial}}" class="form-control quantity-box">
          <button type="submit" name="increaseSecpCompanyInProvincial" value="increaseSecpCompanyInProvincial" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($SecpCompanyInProvincialtotal)}}</span>
      </div>
    </div>
    @endif


    @if($salestaxmonthlyfiling)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Sales Tax Monthly Filing</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="salestaxmonthlyfiling" value="salestaxmonthlyfiling">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasesalestaxmonthlyfiling" value="decreasesalestaxmonthlyfiling" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$salestaxmonthlyfiling}}" class="form-control quantity-box">
          <button type="submit" name="increasesalestaxmonthlyfiling" value="increasesalestaxmonthlyfiling" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($salestaxmonthlyfilingtotal)}}</span>
      </div>
    </div>
    @endif
  
    @if($monthlytaxretainership)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Monthly Tax Retainership</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="monthlytaxretainership" value="monthlytaxretainership">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasemonthlytaxretainership" value="decreasemonthlytaxretainership" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$monthlytaxretainership}}" class="form-control quantity-box">
          <button type="submit" name="increasemonthlytaxretainership" value="increasemonthlytaxretainership" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($monthlytaxretainershiptotal)}}</span>
      </div>
    </div>
    @endif
  
    @if($taxnoticesreplyrepresentaion)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Tax Notices Reply & Representaion</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="taxnoticesreplyrepresentaion" value="taxnoticesreplyrepresentaion">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasetaxnoticesreplyrepresentaion" value="decreasetaxnoticesreplyrepresentaion" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$taxnoticesreplyrepresentaion}}" class="form-control quantity-box">
          <button type="submit" name="increasetaxnoticesreplyrepresentaion" value="increasetaxnoticesreplyrepresentaion" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($taxnoticesreplyrepresentaiontotal)}}</span>
      </div>
    </div>
    @endif
    
  
    @if($taxconsultancy)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Tax Consultancy</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="taxconsultancy" value="taxconsultancy">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete this cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasetaxconsultancy" value="decreasetaxconsultancy" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$taxconsultancy}}" class="form-control quantity-box">
          <button type="submit" name="increasetaxconsultancy" value="increasetaxconsultancy" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($taxconsultancytotal)}}</span>
      </div>
    </div>
    @endif
    
    
  
    @if($secpcompanyformation)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">SECP Company Formation</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="secpcompanyformation" value="secpcompanyformation">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
              
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasesecpcompanyformation" value="decreasesecpcompanyformation" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$secpcompanyformation}}" class="form-control quantity-box">
          <button type="submit" name="increasesecpcompanyformation" value="increasesecpcompanyformation" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($secpcompanyformationtotal)}}</span>
      </div>
    </div>
    @endif
    
    
  
    @if($secpAnnualCompliance)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">SECP Annual Compliance</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="secpAnnualCompliance" value="secpAnnualCompliance">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasesecpAnnualCompliance" value="decreasesecpAnnualCompliance" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$secpAnnualCompliance}}" class="form-control quantity-box">
          <button type="submit" name="increasesecpAnnualCompliance" value="increasesecpAnnualCompliance" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($secpAnnualCompliancetotal)}}</span>
      </div>
    </div>
    @endif
    
    
    
  
    @if($SecpAnnualExternalAnnualAudit)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">External Annual Audit</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="SecpAnnualExternalAnnualAudit" value="SecpAnnualExternalAnnualAudit">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseSecpAnnualExternalAnnualAudit" value="decreaseSecpAnnualExternalAnnualAudit" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$SecpAnnualExternalAnnualAudit}}" class="form-control quantity-box">
          <button type="submit" name="increaseSecpAnnualExternalAnnualAudit" value="increaseSecpAnnualExternalAnnualAudit" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($SecpAnnualExternalAnnualAudittotal)}}</span>
      </div>
    </div>
    @endif
    
    
    
  
    @if($PswImportExportLicense)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">PSW Import/Export license</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="PswImportExportLicense" value="PswImportExportLicense">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasePswImportExportLicense" value="decreasePswImportExportLicense" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$PswImportExportLicense}}" class="form-control quantity-box">
          <button type="submit" name="increasePswImportExportLicense" value="increasePswImportExportLicense" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($PswImportExportLicensetotal)}}</span>
      </div>
    </div>
    @endif
    
    
  
    @if($IndividualWithoutBusinessName)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Individual Without Business Name</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="IndividualWithoutBusinessName" value="IndividualWithoutBusinessName">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseIndividualWithoutBusinessName" value="decreaseIndividualWithoutBusinessName" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$IndividualWithoutBusinessName}}" class="form-control quantity-box">
          <button type="submit" name="increaseIndividualWithoutBusinessName" value="increaseIndividualWithoutBusinessName" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($IndividualWithoutBusinessNametotal)}}</span>
      </div>
    </div>
    @endif
  
    @if($individualWithBusinessName)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Individual With Business Name</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="individualWithBusinessName" value="individualWithBusinessName">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseindividualWithBusinessName" value="decreaseindividualWithBusinessName" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$individualWithBusinessName}}" class="form-control quantity-box">
          <button type="submit" name="increaseindividualWithBusinessName" value="increaseindividualWithBusinessName" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($individualWithBusinessNametotal)}}</span>
      </div>
    </div>
    @endif
    
  
    @if($TrustNgoRegistration)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Trust / NGO Registration</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="TrustNgoRegistration" value="TrustNgoRegistration">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseTrustNgoRegistration" value="decreaseTrustNgoRegistration" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$TrustNgoRegistration}}" class="form-control quantity-box">
          <button type="submit" name="increaseTrustNgoRegistration" value="increaseTrustNgoRegistration" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($TrustNgoRegistrationtotal)}}</span>
      </div>
    </div>
    @endif
    
    
  
    @if($intellectualPropertyRegistration)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">intellectual Property Registration</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="intellectualPropertyRegistration" value="intellectualPropertyRegistration">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseintellectualPropertyRegistration" value="decreaseintellectualPropertyRegistration" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$intellectualPropertyRegistration}}" class="form-control quantity-box">
          <button type="submit" name="increaseintellectualPropertyRegistration" value="increaseintellectualPropertyRegistration" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($intellectualPropertyRegistrationtotal)}}</span>
      </div>
    </div>
    @endif
    
    
  
    @if($ProfessionalTaxRegistrationRenewal)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Professional Tax Registration / renewal</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="ProfessionalTaxRegistrationRenewal" value="ProfessionalTaxRegistrationRenewal">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseProfessionalTaxRegistrationRenewal" value="decreaseProfessionalTaxRegistrationRenewal" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$ProfessionalTaxRegistrationRenewal}}" class="form-control quantity-box">
          <button type="submit" name="increaseProfessionalTaxRegistrationRenewal" value="increaseProfessionalTaxRegistrationRenewal" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($ProfessionalTaxRegistrationRenewaltotal)}}</span>
      </div>
    </div>
    @endif
    
    
  
    @if($AccountingBookKeepingService)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Accounting & Book keeping Services</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="AccountingBookKeepingService" value="AccountingBookKeepingService">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseAccountingBookKeepingService" value="decreaseAccountingBookKeepingService" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$AccountingBookKeepingService}}" class="form-control quantity-box">
          <button type="submit" name="increaseAccountingBookKeepingService" value="increaseAccountingBookKeepingService" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($AccountingBookKeepingServicetotal)}}</span>
      </div>
    </div>
    @endif
    
    
    
  
    @if($incomeTaxation)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Income Taxation</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="incomeTaxation" value="incomeTaxation">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increaseincomeTaxation" value="decreaseincomeTaxation" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$incomeTaxation}}" class="form-control quantity-box">
          <button type="submit" name="increaseincomeTaxation" value="increaseincomeTaxation" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($incomeTaxationtotal)}}</span>
      </div>
    </div>
    @endif
    
  
    @if($salesTaxation)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Sales  Taxation</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="salesTaxation" value="salesTaxation">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasesalesTaxation" value="decreasesalesTaxation" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$salesTaxation}}" class="form-control quantity-box">
          <button type="submit" name="increasesalesTaxation" value="increasesalesTaxation" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($salesTaxationtotal)}}</span>
      </div>
    </div>
    @endif
    
  
    @if($companyFormation)
    <div class="card mx-auto mt-2 mycard">
      <div class="card-body px-2 py-1">
        <form action="{{route('deleteCart')}}" method="GET">
          @csrf
          <div class="row">
            <div class="col-10">
              <span><span class="label ">Company Formation</span>
            </div>
            <div class="col-2 text-end">
            <input type="hidden" name="companyFormation" value="companyFormation">  
            <button type="submit" class="btn delete-btn  px-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete This Cart">x</button>
            </div>
          </div>
        </form>
        </span>
        <form action="{{route('increaseCart')}}" method="post" class="d-flex ">
          @csrf
          <button type="submit" name="increasecompanyFormation" value="decreasecompanyFormation" class="btn btn-danger increase-btn">-</button>
          <input type="text" name="" value="{{$companyFormation}}" class="form-control quantity-box">
          <button type="submit" name="increasecompanyFormation" value="increasecompanyFormation" class="btn btn-danger increase-btn ">+</button>
        </form>

        <span class="price d-block">Rs. {{number_format($companyFormationtotal)}}</span>
      </div>
    </div>
    @endif
    
    

    @if($total)
    <div class="card mx-auto mt-2  empty-disabled-card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span class="total">Total</span>
          <h6 class="text-end d-inline-block">Rs.{{number_format($total)}}</h6>
        </div>
        <a href="{{route('Checkout')}}" class="btn btn-danger mt-1 form-control">Proceed To Checkout</a>
      </div>
    </div>
    @endif



    @if($total==0)
    <div class="card mx-auto mt-2 w-25 empty-card">
      <div class="card-body">

        <span>Your Cart is empty</span>
      </div>
    </div>
    @endif


    @if($total==0)
    <div class="card mx-auto mt-2 w-25 empty-disabled-card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span class="total">Total</span>
          <h6 class="text-end d-inline-block">Rs.0</h6>
        </div>
        <button class="btn btn-danger mt-1 form-control disabled">Proceed To Checkout</button>
      </div>
    </div>
    @endif
  </div><!-- container end -->



</body>

</html>