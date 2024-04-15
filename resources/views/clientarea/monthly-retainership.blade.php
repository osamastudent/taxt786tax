<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <title>Monthly Tax Retainership</title>

  <style>
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

    <div class="card w-75 mx-auto border-0">

      <div class="card-header bg-dark text-white">
        <h3>Monthly Tax Retainership</h3>
      </div>
      <div class="card-body px-5 mt-3">

        <form action="{{route('MonthlyRetainershipStore')}}" method="post">
          @csrf
          <!-- row start -->
          <div class="row">
            <div class="col-6">

              <label for="" class="form-label mt-3 mb-1">Name </label>
              <input type="text" name="name" class="form-control personal-ntn-bottom-borders  text-truncate" placeholder="Name">
              @error('name')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
            </div>

            <div class="col-6">
              <label for="" class="form-label mt-3 mb-1">Email </label>
              <input type="text" name="email" class="form-control personal-ntn-bottom-borders  text-truncate" placeholder="Email">
              @error('email')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
            </div>

            <div class="col-12">
              <label for="" class="form-label mt-3 mb-1">Phone No</label>
              <input type="tel" name="mobile_no" class="form-control personal-ntn-bottom-borders  text-truncate" placeholder="Phone No">
              @error('mobile_no')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
            </div>

            <div class="col-12">
              <label for="" class="form-label mt-3 mb-1">Address</label>
              <textarea name="address" class="form-control personal-ntn-bottom-borders  text-truncate" rows="3" placeholder="Address"></textarea>
              @error('address')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
              <div class="col-12">






                <div class="col-12 mt-3">
                  <strong>Select Services (Check Boxes)</strong>
                </div>

                <div class="col-12 mt-1">
                  <div class="div">
                    <input type="checkbox" id="fbr_sales" name="fbr_sales" value="FBR Sales Tax Monthly Filing">
                    <label class="form-label " for="fbr_sales">FBR Sales Tax Monthly Filing</label>
                  </div>

                  <div class="div">
                    <input type="checkbox" id="srb_sales" name="srb_sales" value="SRB Sales Tax Monthly Filing">
                    <label class="form-label " for="srb_sales">SRB Sales Tax Monthly Filing</label>
                  </div>

                  <div class="div">
                    <input type="checkbox" id="pra_sales" name="pra_sales" value="PRA Sales Tax Monthly Filing">
                    <label class="form-label " for="pra_sales">PRA Sales Tax Monthly Filing</label>
                  </div>

                  <div class="div">
                    <input type="checkbox" id="kpra_sales" name="kpra_sales" value="KPRA Sales Tax Monthly Filing">
                    <label class="form-label " for="kpra_sales">KPRA Sales Tax Monthly Filing</label>
                  </div>


                  <div class="div">
                    <input type="checkbox" id="bra_sales" name="bra_sales" value="BRA Sales Tax Monthly Filing">
                    <label class="form-label " for="bra_sales">BRA Sales Tax Monthly Filing</label>
                  </div>

                  <div class="div">
                    <input type="checkbox" id="fbr_withholding" name="fbr_withholding" value="FBR Withholding Tax Challan Preparation">
                    <label class="form-label " for="fbr_withholding">FBR Withholding Tax Challan Preparation</label>
                  </div>

                  <div class="div">
                    <input type="checkbox" id="quarterly_withholding" name="quarterly_withholding" value="Quarterly Withholding Tax Statement Filing">
                    <label class="form-label " for="quarterly_withholding">Quarterly Withholding Tax Statement Filing</label>
                  </div>

                  <div class="div">
                    <input type="checkbox" id="income_sales_planning" name="income_sales_planning" value="Income and Sales Tax Planning for tax savings">
                    <label class="form-label " for="income_sales_planning">Income and Sales Tax Planning for tax savings</label>
                  </div>



                  <div class="div">
                    <input type="checkbox" id="queries_tax_matters" name="queries_tax_matters" value="Queries on Tax matters">
                    <label class="form-label " for="queries_tax_matters">Queries on Tax matters</label>
                  </div>


                </div>
              </div>
              <!-- row end -->



              <button type="submit" name="" class="btn btn-dark mt-3">Add To Cart</button>
        </form>

      </div>
    </div>


  </div><!-- container end -->

 
  <!-- this script is for arrow -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const dropdown = document.querySelector("#dropdown1");
      const dropdown2 = document.querySelector("#dropdown2");
      const dropdown3 = document.querySelector("#dropdown3");
      const dropdownMenuButton1 = document.querySelector("#dropdownMenuButton1");
            const dropdownMenuButton2 = document.querySelector("#dropdownMenuButton2");
            const dropdownMenuButton3 = document.querySelector("#dropdownMenuButton3");

      dropdown.addEventListener("change", function() {
        dropdown.classList.toggle("show");
        $(dropdownMenuButton1).dropdown('toggle');
      });

      dropdown2.addEventListener("change", function() {
        dropdown2.classList.toggle("show2");
        $(dropdownMenuButton2).dropdown('toggle');
      });
      dropdown3.addEventListener("change", function() {
        dropdown3.classList.toggle("show3");
        $(dropdownMenuButton3).dropdown('toggle');
      });

    });
  </script>



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