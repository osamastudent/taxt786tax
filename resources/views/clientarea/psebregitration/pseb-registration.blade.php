<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <title>PSEB Registration</title>
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
      font-size: 14px !important;
      font-weight: 400 !important;
    }

    .form-select {
      font-size: 14px !important;
      text-transform: capitalize !important;
      font-weight: 600 !important;
      /* color: rgb(118, 118, 118) !important; */
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

    .custom-file-input::-webkit-file-upload-button {
      visibility: hidden;
      display: none;
    }

    .custom-file-input {
      color: transparent;
      border: none !important;
    }

    .custom-folder-input::-webkit-file-upload-button {
      visibility: hidden;
      display: none;
    }

    .custom-folder-input {
      color: transparent;
      border: none !important;
    }

    .custom-file-input::before {
      content: 'Upload File';
      display: inline-block;
      /* background-color: yellow; */
      background-color: #FFFEFA;
      color: #1e2125;
      /* Change the text color as needed */
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 0px !important;
      font-weight: 600;
      font-size: 14px;
    }

    .custom-file:hover {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
    }

    .upload-file-label {
      background-color: #FFFEFA !important;
    }

    .input-group:hover .upload-file-label {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
      /* Add any other styles you want for the hover state */
    }

    .custom-file:hover label::before {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
    }

    .custom-file:hover input[type="file"]::before {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
      /* Add any other styles you want for the input[type="file"]::before on hover */
    }

    .custom-folder-input::before {
      content: 'Upload Folder';
      display: inline-block;
      /* background-color: yellow; */
      background-color: #FFFEFA;
      color: #1e2125;
      /* Change the text color as needed */
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: 600;
      font-size: 14px;
    }

    .custom-folder:hover {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
    }

    .upload-folder-label {
      background-color: #FFFEFA !important;
      font-weight: 800;
      font-size: 14px;
    }

    .input-group:hover .upload-folder-label {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
      /* Add any other styles you want for the hover state */
    }

    .custom-folder:hover label::before {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
    }

    .custom-folder:hover input[type="file"]::before {
      background-color: #e9ecef !important;
      color: #1e2125 !important;
      /* Add any other styles you want for the input[type="file"]::before on hover */
    }





    .form-label {
      font-size: 13px;
    }

    .dropdown button {
      font-size: 13px;
      color: rgb(118, 118, 118);
    }


    .dropdown-toggle::after {
      content: "\25BC";
      /* Unicode character for down arrow */
      margin-top: 9px;
      float: right;
      font-size: 20px;
      transition: transform 0.3s ease;
      /* Add a transition for smooth animation */
    }

    .dropdown.show .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }
  </style>
</head>

<body>
  @include('clientarea.navbar')
  @section('content')


  <!-- container start -->
  <div class="container mt-5 mb-5">

    <div class="card  mx-auto border-0 w-75 ">

      <div class="card-header bg-dark text-white">
        <h4>PSEB Registration</h4>
      </div>
      <div class="card-body  mt-3">

        <form action="{{route('PsebRegistrationStore')}}" method="post" class="mx-5 p-5 mb-3">
          @csrf

          <!-- row start -->
          <div class="row">
            <div class="col-12">
              <select name="registration_type" id="statusSelect" onchange="selectStatus()" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example" style="background-color: transparent; position: relative; z-index: 2;">

                <option class="bg-white" value="" selected disabled>Type of registration</option>
                <option class="bg-white" value="Individual WithOut Business Name"> Individual WithOut Business Name</option>
                <option class="bg-white" value="Individual With Business Name"> Individual with business name / Company / Partnership
              </select>
              @error('registration_type')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
            </div>
          </div><!-- row end -->


          <!-- row start -->
          <div class="row">
            <div class="col-12 mt-3 d-flex justify-content-end">
              <a href="{{route('home')}}" class="back btn mx-1">Back</a>
              <button type="submit" href="#" id="nextButton" class="next btn disabled">Next</button>

            </div>
          </div>
          <!-- row end -->

        </form>
      </div>
    </div>


  </div><!-- container end -->

  <script>
    function selectStatus() {
      var selectElement = document.getElementById("statusSelect");
      var nextButton = document.getElementById("nextButton");
      var selectedValue = selectElement.value;

      if (selectedValue === "Individual WithOut Business Name") {
        nextButton.classList.remove("disabled");

      } else if (selectedValue === "Individual With Business Name") {
        nextButton.classList.remove("disabled");
      } else {
        console.log("no route Find");
      }
    }
  </script>

</body>

</html>