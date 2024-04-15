<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-BEBtUHCoFI4zDoBc5tmTB37d4sDO+4xX5Z7Ye2J4pX+XcuY8un47DTSHB1OYlOz6/zsuZW7AM0Kltbp5qKhNEA==" crossorigin="anonymous" />
  <title> USA / UAE / UK / Canada / Australia Services</title>
  <style>
    .next.btn {
      background-color: #ff6d00 !important;
      color: white !important;
    }

    .next.btn:hover {
      background-color: #ffb300 !important;
      color: black !important;
    }

    .back {
      background-color: black !important;
      color: white !important;
    }

    .back:hover {
      background-color: brown !important;
      color: white !important;
    }

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

    <div class="card  mx-auto   border-0 w-75">

      <div class="card-header bg-dark text-white">
        <h3> USA / UAE / UK / Canada / Australia Services</h3>
      </div>
      <div class="card-body  mt-3">

        <form action="{{route('USAUAEUKCanadaAustraliaServicesStore')}}" method="post">
          @csrf

          <!-- row start -->
          <div class="row justify-content-end">
            <div class="col-12">
              <label for="" class="form-label ">Select Region</label>
              <select name="select_region" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                <option class="bg-white" value="" selected disabled>Select Region</option>
                <option class="bg-white" value="USA">USA</option>
                <option class="bg-white" value="UAE">UAE</option>
                <option class="bg-white" value="UK">UK</option>
                <option class="bg-white" value="Canada">Canada</option>
                <option class="bg-white" value="Australia">Australia</option>
              </select>
            </div>
          </div>
          <!-- row end -->


          <!-- row start -->
          <div class="row">
            <div class="col-12 mt-3">
              <h3> Personal Information</h3>
            </div>
          </div>
          <!-- row end -->

          <!-- row start -->
          <div class="row ">

            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-0 mb-1">Name</label>
              <input type="text" name="name" class=" form-control personal-ntn-bottom-borders  " placeholder="Name">
            </div>


            

            
            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-0 mb-1">Phone Number</label>
              <input type="text" name="mobile_no" class=" form-control personal-ntn-bottom-borders  " placeholder="Phone Number">
              @error('mobile_no')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
            </div>

            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-3 mb-1">Email</label>
              <input type="text" name="email" class=" form-control personal-ntn-bottom-borders  " placeholder="Email">
              @error('email')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
            </div>

            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-3 mb-1">Social Security Number or Tax Number</label>
              <input type="text" name="social_security_no_tax_no" class=" form-control personal-ntn-bottom-borders  " placeholder="Social Security Number..">
              @error('social_security_no_tax_no')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
            </div>



            <div class="col-12 col-lg-12 ">
              <label for="" class="form-label mt-3 mb-1">Address</label>
              <textarea name="address" class="form-control" cols="30" rows="3" placeholder="Address"></textarea>
              @error('address')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
            </div>
          </div>
          <!-- row end -->






          <!-- row start -->
          <div class="row justify-content-end">
            
          <div class="col-12 col-lg-6 mt-3">
              <label for="" class="form-label mb-1">Date of Birth</label>
              <input type="date" name="data_birth" class=" form-control personal-ntn-bottom-borders  " placeholder="Social Security Number or Tax ID Number">
              @error('data_birth')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
            </div>
            <div class="col-6 mt-3">
              <label for="" class="form-label ">Select Type of Service</label>
              <select id="selectedservice" onclick="DisabledFun()" name="select_type_service" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                <option class="bg-white" value="" selected disabled>Select Type of Service</option>
                <option class="bg-white" value="incomeTaxation">Income Taxation</option>
                <option class="bg-white" value="salesTaxation">Sales Taxation</option>
                <option class="bg-white" value="companyFormation">Company Formation</option>
              </select>

              @error('select_type_service')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
            </div>
          </div>
          <!-- row end -->
          
          <!-- <input type="submit" name="" class="btn btn-secondary mt-3"> -->


          <!-- row start -->
          <div class="row">
            <div class="col-12 mt-5 d-flex justify-content-end">
              <a href="{{route('home')}}" class="back btn mx-1">Back</a>
              <button type="submit" href="#" id="nextButton" class="next btn disabled">Next</button>
            </div>
          </div>
          <!-- row end -->
        </form>
        <!-- form end -->



      </div>
    </div>



  </div><!-- container end -->

  <script>
    function DisabledFun() {

      var selectedservice = document.getElementById("selectedservice");
      var nextButton = document.getElementById("nextButton");
      var selectedvalue = selectedservice.value;

      if (selectedvalue === "incomeTaxation" || selectedvalue === "salesTaxation" || selectedvalue === "companyFormation") {
        nextButton.classList.remove("disabled");
      }


    }
  </script>

</body>

</html>