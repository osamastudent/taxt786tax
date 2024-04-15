<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/allcss/home.css">
  <title> Company Formation</title>
  <style>
     .back {
      background-color: black !important;
      color: white !important;
    }

    .back:hover {
      background-color: brown !important;
      color: white !important;
    }
    .add-new-file {
            font-size: 12px !important;
            padding: 3px 5px 3px 5px !important;
        }

        .delete-btn {
            font-size: 12px !important;
            padding: 3px 5px 3px 5px !important;
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

    .dropdown.show2 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .folder-container {
      border: 1px solid #ccc;
      margin-bottom: 5px;
    }

    .folder-name {
      padding: 10px;
      cursor: pointer;
      background-color: #f4f4f4;
    }

    

    .file-list {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list p {
      margin: 0;
      padding: 5px;
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
        <h3> Company Formation</h3>
      </div>
      <div class="card-body  mt-3">

      <form action="{{route('CompanyFormationStore')}}" method="post" enctype="multipart/form-data">
          @csrf
          
           <!-- row start -->
 <div class="row">
            <div class="col-12 mt-3">
            <h3>Business Information</h3>
            </div>
          </div>
          <!-- row end -->

          
          
          <!-- row start -->
          <div class="row ">
            <div class="col-12 col-lg-4 ">
              <label for="" class="form-label mt-0 mb-1"> Name</label>
              <input type="text" name="name" class=" form-control personal-ntn-bottom-borders  " placeholder="Name">
              @error('name')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror 
            </div>

           
            <div class="col-12 col-lg-4">
              <label for="" class="form-label mt-0 mb-1">Phone Number</label>
              <input type="text" name="mobile_no" class=" form-control personal-ntn-bottom-borders  " placeholder="Phone Number">
              @error('mobile_no')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror 
            </div>

            <div class="col-12 col-lg-4 ">
              <label for="" class="form-label mt-0 mb-1">Email</label>
              <input type="text" name="email" class=" form-control personal-ntn-bottom-borders  " placeholder="Email">
              @error('email')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror 
            </div>


         
            <div class="col-12 mt-3 ">
              <label for="" class="form-label mt-0 mb-1"> Address</label>
             <textarea name="address" id="" cols="30" rows="3" class=" form-control personal-ntn-bottom-borders  "></textarea>
             @error('address')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror  
            </div>
        
            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-3 mb-1">Proposed Business Activit</label>
              <input type="text" name="proposed_business_activity" class=" form-control personal-ntn-bottom-borders  " placeholder="Proposed Business Activit">
              @error('proposed_business_activity')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror  
            </div>

           
            <div class="col-12 col-lg-6">
            <label for="" class="form-label mt-3 mb-1">Select Business Type</label>
              <select name="select_business_type" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                <option class="bg-white" value="" selected disabled>Select Business Type</option>
                <option class="bg-white" value="soleproprietorship">Sole Proprietorship</option>
                <option class="bg-white" value="partnership">Partnership</option>
                <option class="bg-white" value="corporation">Corporation</option>
                <option class="bg-white" value="llc">LLC</option>
                <option class="bg-white" value="proposed business name">Proposed Business Name</option>
                      </select> 
                      @error('initial_capital_contribution')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror  
            </div>  
            
            
          </div>
          <!-- row end -->

         
 <!-- row start -->
 <div class="row">
            <div class="col-12 mt-4">
            <h3> Attach Ownership Information</h3>
            </div>
          </div>
          <!-- row end -->

 <!-- filesContainer starts -->
 <div class="filesContainer mt-0 " id="filesContainer">
            <div class="row" id="cloneData">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-0 mb-1">Attach Ownership information document containing Names and addresses of all business owners, percentage of ownership for</label>


                <div class="dropdown" id="dropdown1">
                  <button class="text-start form-control text-truncate personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    each owner, and citizenship or residency status of each owner
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1">


                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group ll ">
                          <div class="custom-file form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image" name="ownership_inf_document[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>
                    



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder" name="ownership_inf_document[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>
                @error('ownership_inf_document.*')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('ownership_inf_document')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row ">

              <div class="col-12 col-lg-4">
                <div id="file-list"></div>
                <p id="file-summary"></p>
                <div id="folder-list"></div>
              </div>


              <div class="col-12 col-lg-8 text-end">
                <button type="button" id="AddNewFile" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer end -->



          <!-- row start -->
 <div class="row mt-3">
            <div class="col-12  mb-0">
            <h3> Financial Information</h3>
            </div>
          </div>
          <!-- row end -->

            <!-- row start -->
 <div class="row ">
            <div class="col-12  ">
            <label for="" class="form-label mt-0 mb-1">Initial Capital Contribution</label>
            <input type="text" name="initial_capital_contribution" class=" form-control personal-ntn-bottom-borders  " placeholder="Initial Capital Contribution">
            @error('initial_capital_contribution')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror  
          </div>
          
            <div class="col-12 mt-2 ">
            <label for="" class="form-label mb-1"> Proposed Funding Sources</label>
            <textarea name="proposed_funding_sources" id="" cols="30" rows="3"class=" form-control personal-ntn-bottom-borders  " placeholder=" Proposed Funding Sources"></textarea>
            @error('proposed_funding_sources')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror  
          </div>
          </div>
          <!-- row end -->

          <button type="submit" name="" class="btn btn-dark mt-4">Add To Cart</button>

<div class="row">
  <div class="col-12 mt-3 d-flex justify-content-end">
    <a href="#" onclick="goBack(event)" class="back btn mx-1" id="bgoBack">Back</a>
  </div>
</div>
        </form>
      </div>
    </div>


  </div><!-- container end -->

<!-- sweet alert -->


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
  <script>
    function goBack(e) {
      window.history.back();
    }
  </script>

  <!-- this script is for arrow -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const dropdown = document.querySelector("#dropdown1");
      const dropdownMenuButton1 = document.querySelector("#dropdownMenuButton1");

      dropdown.addEventListener("change", function() {
        dropdown.classList.toggle("show");
        $(dropdownMenuButton1).dropdown('toggle');
      });
    });
  </script>

<script src="/javascriptfiles/company-formation.js"></script>
    <script src="/addnewfiles/company-formation-add.js"></script>
</body>
</html>