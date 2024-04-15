<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <title>SECP Annual Compliance</title>
  <style>
    .checkbox-text {
      font-family: 'Open Sans', sans-serif !important;
      font-size: 15px !important;
      line-height: 1.2 !important;
    }

    .error-style {
      font-size: 13px !important;
      font-weight: 400 !important;
    }

    .form-select {
      font-size: 13px !important;
      text-transform: capitalize !important;
      font-weight: 600 !important;
    }

    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      padding-top: 20px;

    }

    form {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

      padding: 20px;

    }

    /* .swal2-cancel {
        margin-left: 10px;
        } */
    .ok-button-class {
      margin-left: 30px !important;
    }

    .form-label {
      margin-left: 5px;

    }
  </style>

</head>

<body>
  @include('clientarea.navbar')
  @section('content')


  <!-- container start -->
  <div class="container mt-5 mb-5">

    <div class="card  mx-auto border-0 w-75">

      <div class="card-header bg-dark text-white">
        <h3>SECP Annual Compliance</h3>
      </div>
      <div class="card-body  mt-3">

        <form action="{{route('SECPAnnualStore')}}" method="post">
          @csrf
          <!-- row start -->
          <div class="row ">

            <div class="mt-1 col-md-4 col-12">
              <label for="" class="form-label mt-3 mb-1 ">Name of company</label>
              <input type="text" name="company_name" class="form-control personal-ntn-bottom-borders " placeholder="Name of company">
              @error('company_name')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
            </div>
          

          <div class="mt-1 col-md-4 col-12">
            <label for="" class="form-label mt-3 mb-1 ">Name of Contact Person</label>
            <input type="text" name="name" class="form-control personal-ntn-bottom-borders " placeholder="Name of Contact Person">
            @error('name')
            <span class="text-danger error-style">
              <i class="fas fa-exclamation-triangle"></i>
              {{$message}}
            </span>
            @enderror
          </div>

          <div class="mt-1 col-md-4 col-12">
            <label for="" class="form-label mt-3 mb-1 ">Status of Company</label>
            <select name="company_status" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
              <option class="bg-white" value="" selected disabled>Status of Company</option>
              <option class="bg-white" value="active">Active</option>
              <option class="bg-white" value="inactive">Inactive</option>
            </select>
            @error('company_status')
            <span class="text-danger error-style">
              <i class="fas fa-exclamation-triangle"></i>
              {{$message}}
            </span>
            @enderror
          </div>


          <div class="col-12 mt-1">
            <label for="" class="form-label mt-3 mb-1 ">Address & Location of company</label>
            <textarea name="address" id="" cols="30" rows="3" class="form-control personal-ntn-bottom-borders " placeholder="Address & Location of company"></textarea>
            @error('address')
            <span class="text-danger error-style">
              <i class="fas fa-exclamation-triangle"></i>
              {{$message}}
            </span>
            @enderror
          </div>


          <div class="mt-2 col-md-6 col-12">
            <label for="" class="form-label mt-3 mb-1 ">NTN Number</label>
            <input type="text" name="ntn_number" class="form-control personal-ntn-bottom-borders " placeholder="NTN Number">

            @error('ntn_number')
            <span class="text-danger error-style">
              <i class="fas fa-exclamation-triangle"></i>
              {{$message}}
            </span>
            @enderror
          </div>

          <div class="mt-2 col-md-6 col-12">
            <label for="" class="form-label mt-3 mb-1 ">Mobile Number</label>
            <input type="tel" name="mobile_no" class="form-control personal-ntn-bottom-borders " placeholder="Mobile Number">
            @error('mobile_no')
            <span class="text-danger error-style">
              <i class="fas fa-exclamation-triangle"></i>
              {{$message}}
            </span>
            @enderror
          </div>

          <div class="mt-3 col-12">
            <h4>Tick mark the services required</h4>
          </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row  ">
        <div class="mt-3 col-1">
          <input type="checkbox" id="filling_annual_return" name="filling_annual_return" value="Filling of Annual Return (Form A)">
        </div>

        <div class="mt-3 col-11">
          <div class="div ">

            <label class="checkbox-text" for="filling_annual_return">
              Filling of Annual Return (Form A) - All companies are required to file an annual return (Form A) with the SECP within 30 days
              from the date of the annual general meeting (AGM). The form contains information such as the company's financial statements,
              auditor's report, and details of the company's directors and officers
            </label>
          </div>
        </div>
      </div>
      <!-- row end -->


      <!-- row start -->
      <div class="row mt-3">
        <div class="mt-3 col-1">
          <input type="checkbox" id="filling_balance_sheet_profit_loss" name="filling_balance_sheet_profit_loss" value="Filling of Balance Sheet and Profit and Loss Account">
        </div>

        <div class="mt-3 col-11">
          <div class="div">

            <label class="checkbox-text" for="filling_balance_sheet_profit_loss">
              Filling of Balance Sheet and Profit and Loss Account: Every company is required to file its balance sheet and profit and loss
              account with the SECP within 30 days from the date of the annual general meeting
            </label>
          </div>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row mt-3">
        <div class="mt-3 col-1">
          <input type="checkbox" id="filling_form_twentynine" name="filling_form_twentynine" value="Filling of Form 29">
        </div>

        <div class="mt-3 col-11">
          <div class="div">

            <label class="checkbox-text" for="filling_form_twentynine">
              Filling of Form 29: Every company is required to file Form 29 with the SECP within 14 days of any changes made in the company's
              shareholding or directorship.
            </label>
          </div>
        </div>
      </div>
      <!-- row end -->


      <!-- row start -->
      <div class="row mt-3">
        <div class="mt-3 col-1">
          <input type="checkbox" id="filling_income_tax_returns" name="filling_income_tax_returns" value="Filling of Income Tax Returns">

        </div>
        <div class="mt-3 col-11">
          <div class="div">
            <label class="checkbox-text" for="filling_income_tax_returns">
              Filling of Income Tax Returns: All companies are required to file their income tax returns with the Federal Board of Revenue (FBR)
              by the due date.
            </label>
          </div>
        </div>
      </div>
      <!-- row end -->


      <!-- row start -->
      <div class="row mt-3">
        <div class="mt-3 col-1">
          <input type="checkbox" id="filling_sales_tax_returns" name="filling_sales_tax_returns" value="Filing of Sales Tax Returns">
        </div>
        <div class="mt-3 col-11">
          <div class="div">

            <label class="checkbox-text" for="filling_sales_tax_returns">
              Filing of Sales Tax Returns: Companies that are registered for sales tax are required to file monthly or quarterly withholding tax
              statements with the Federal Board of Revenue.
            </label>
          </div>
        </div>
      </div>
      <!-- row end -->



      <!-- row start -->
      <div class="row mt-3">
        <div class="mt-3 col-1">
          <input type="checkbox" id="compliance_with_companies_act" name="compliance_with_companies_act" value="Compliance with Companies Act, 2017">
        </div>
        <div class="mt-3 col-11">
          <div class="div">

            <label class="checkbox-text" for="compliance_with_companies_act">
              Compliance with Companies Act, 2017: All companies are required to comply with the provisions of the Companies Act, 2017,
              which includes maintaining proper books of accounts, holding annual general meetings, appointing auditors, and making timely
              filings with the SECP.
            </label>
          </div>
        </div>
      </div>
      <!-- row end -->


      <!-- row start -->
      <div class="row mt-3">
        <div class="col-1">
          <input type="checkbox" id="compliance_with_securities" name="compliance_with_securities" value="Compliance with Securities and Exchange Commission of Pakistan (SECP) Rules and Regulations">
        </div>
        <div class="col-11 p ">
          <div class="div">

            <label class="checkbox-text" for="compliance_with_securities">
              Compliance with Securities and Exchange Commission of Pakistan (SECP) Rules and Regulations: Companies are also required to
              comply with the SECP rules and regulations, which includes obtaining necessary approvals for various transactions, complying
              with disclosure requirements, and maintaining proper records.
            </label>
          </div>
        </div>
      </div>
      <!-- row end -->



      <button type="submit" name="" class="btn btn-dark mt-3">Add To Cart</button>
      </form>
    </div>
  </div>


  </div><!-- container end -->

  

<!-- After form submitted -->
@if(session('success'))
@foreach($formSubmitAlert as $formSubmitAlertValues)
    <script>
        if (window.performance.navigation.type !== 2) {

            Swal.fire({
                title: '{{$formSubmitAlertValues->title}}',
                text: "{{ $formSubmitAlertValues->text}}",
                icon: 'success',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Add To Cart',
                allowOutsideClick: false,
                customClass: {
                    title: 'swal-title',
                      text: 'swal-text-class',
                    showCancelButton: 'show-cancel-button',
                    popup: 'custom-popup',
                    closeButton: 'custom-close-button',
                    confirmButton: 'ok-button-class',
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    // Handle the logic when the "OK" button is clicked
                    window.location.href = '{{route("home")}}';
                } else {
                    // Redirect to your custom URL when the "Add To Cart" button is clicked
                    window.location.href = '{{route("Cart")}}';
                }
            });
        }
    </script>
    @endforeach
@elseif($errors->any())
    <!-- Validation errors -->
    <!-- @foreach ($errors->all() as $error)
        <div class="row">
            <div class="col-12">
                <span class="text-danger">
                    <i class="fas fa-exclamation-triangle"></i>
                    {{ $error }}
                </span>
            </div>
        </div>
    @endforeach -->
@else
    <!-- User's first time on the form -->
    @if($popup && session('enterUser'))  
    @foreach($userEnterMessage as $userEnterMessageValues)
    
        <script>
            if (window.performance.navigation.type !== 2) {

                Swal.fire({
                    title: '{{$userEnterMessageValues->title}}',
                    text: "{{$userEnterMessageValues->text}}",
                    // icon: 'warning',
                    // showCancelButton: true,
                    showCloseButton: true,
                    confirmButtonText: 'OK',
                    // cancelButtonText: 'Add To Cart',
                    allowOutsideClick: false,
                    customClass: {
                        title: 'swal-title',
                          text: 'swal-text-class',
                        showCancelButton: 'show-cancel-button',
                        popup: 'custom-popup',
                        closeButton: 'custom-close-button',
                        confirmButton: 'ok-button-class',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Handle the logic when the "OK" button is clicked
                        // window.location.href = '{{route("home")}}';
                    } else {
                        // Redirect to your custom URL when the "Add To Cart" button is clicked
                        // window.location.href = 'http://127.0.0.1:8000';
                        // window.location.href = '{{route("Cart")}}';
                    }
                });
            }
        </script>
        @endforeach
    @endif
@endif

</body>
</html>