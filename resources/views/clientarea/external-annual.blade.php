<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-BEBtUHCoFI4zDoBc5tmTB37d4sDO+4xX5Z7Ye2J4pX+XcuY8un47DTSHB1OYlOz6/zsuZW7AM0Kltbp5qKhNEA==" crossorigin="anonymous" />
  <title>External Annual Audit</title>
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
        <h3>External Annual Audit</h3>
      </div>
      <div class="card-body  mt-3">

        <form action="{{route('ExternalAnnualStore')}}" method="post">
          @csrf
         
          <!-- row start -->
          <div class="row justify-content-end">
            <div class="col-12  col-lg-6 mt-2 ">
              <select name="company_status" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
              <option class="option" disabled selected value="">Company Status</option>  
              <option class="option" value="singleMember">Single Member Company</option>
                <option class="option" value="privateLimited">Private Limited Company</option>
                <option class="option" value="publicUnlisted">Public Unlisted Company</option>
                <option class="option" value="publicListed">Public Listed Company</option>
                <option class="option" value="trust">Trust</option>
                <option class="option" value="nonProfit">Non-Profit Organization</option>
                <option class="option" value="ngo">NGO</option>
              </select>

              @error('company_status')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror

            </div>
            </div>        
            <!-- row end -->
            

            
            <!-- row start -->
<div class="row">
<div class="col-12 mt-3">
<h4 class="font-italic">Company Financials</h4>
</div>

            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-0 mb-1 ">Share Capital</label>
              <input type="text" name="share_capital" class="form-control personal-ntn-bottom-borders text-truncate " placeholder="Share Capital">
              @error('share_capital')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>

            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-0 mb-1 ">Annual Turnover</label>
              <input type="text" name="annual_turnover" class="form-control personal-ntn-bottom-borders text-truncate " placeholder="Annual Turnover">
              @error('annual_turnover')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>

            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-3 mb-1 ">Annual Profit</label>
              <input type="text" name="annual_profit" class="form-control personal-ntn-bottom-borders text-truncate " placeholder="Annual Profit">
              @error('annual_profit')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>
            
            <div class="col-12 col-lg-6">
              <label for="" class="form-label mt-3 mb-1 ">Current Auditor</label>
              <input type="text" name="current_auditor" class="form-control personal-ntn-bottom-borders text-truncate " placeholder="Current Auditor">
              @error('current_auditor')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>

            <div class="col-12 col-lg-6">
              <label for="" class="form-label mt-3 mb-1 ">Reason of change of Auditor</label>
              <input type="text" name="reason_change_auditor" class="form-control personal-ntn-bottom-borders text-truncate " placeholder="Reason of change of Auditor">
                  @error('reason_change_auditor')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>

            <div class="col-12 col-lg-6">
              <label for="" class="form-label mt-3 mb-1 ">Companies incorporation year</label>
              <input type="text" name="companies_incorporation_year" class="form-control personal-ntn-bottom-borders text-truncate " placeholder="Companies incorporation year">
              @error('companies_incorporation_year')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
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