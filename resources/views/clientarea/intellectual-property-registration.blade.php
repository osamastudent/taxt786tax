<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/allcss/home.css">
  <title>intellectual Property Registration</title>

  <style>
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
      text-transform: capitalize;
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

    .dropdown.show1 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .dropdown.show2 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .dropdown.show3 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .dropdown.show4 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .dropdown.show5 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .dropdown.show6 .dropdown-toggle::after {
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

    .folder-container2 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name2 {
      padding: 10px;
      cursor: pointer;
      background-color: #f4f4f4;
    }

    .folder-container3 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name3 {
      padding: 10px;
      cursor: pointer;
      background-color: #f4f4f4;
    }


    .folder-container5 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name5 {
      padding: 10px;
      cursor: pointer;
      background-color: #f4f4f4;
    }

    .folder-container6 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name6 {
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

    .file-list2 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list2 p {
      margin: 0;
      padding: 5px;
    }


    .file-list5 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list5 p {
      margin: 0;
      padding: 5px;
    }

    .file-list6 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list6 p {
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
        <h3>intellectual Property Registration</h3>
      </div>
      <div class="card-body  mt-3">

        <form action="{{route('IntellectualPropertyRegistrationStore')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-12">
              <h3>Type of intellectual Property</h3>
            </div>
          </div>

          <!-- row start -->
          <div class="row">
            <div class="col-12">
              <div class="div">
                <input type="checkbox" id="trademark" name="trademark" value="trademark">
                <label class="form-label fw-bold" for="trademark">Trademark</label>
              </div>

              <div class="div">
                <input type="checkbox" id="copyright" name="copyright" value="copyright">
                <label class="form-label fw-bold" for="copyright">Copyright</label>
              </div>
            
              <div class="div">
                <input type="checkbox" id="patent" name="patent" value="patent">
                <label class="form-label fw-bold" for="patent">Patent</label>
              </div>

              <div class="div">
                <input type="checkbox" id="iso_certification" name="iso_certification" value="iso_certification">
                <label class="form-label fw-bold" for="iso_certification">ISO Certification</label>
              </div>


              <div class="div">
                <input type="checkbox" id="halal_certification" name="halal_certification" value="halal_certification">
                <label class="form-label fw-bold" for="halal_certification">Halal Certification</label>
              </div>


              <div class="div">
                <input type="checkbox" id="other_certification_approval" name="other_certification_approval" value="other_certification_approval">
                <label class="form-label fw-bold" for="other_certification_approval">Other Certification/Approval</label>
              </div>
            </div>
          </div>
          
          
            
          <!-- row end -->


          <!-- row start -->
          <div class="row ">


            <div class="col-12 col-lg-12 ">
              <label for="" class="form-label mt-3 mb-1">Business Name</label>
              <input type="text" name="business_name" class=" form-control personal-ntn-bottom-borders  " placeholder="Business Name">
              @error('business_name')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
                

            </div>


            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-3 mb-1">Yearly Revenue</label>
              <input type="text" name="yearly_revenue" class=" form-control personal-ntn-bottom-borders  " placeholder="Yearly Revenue">
              @error('yearly_revenue')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>
         

            <div class="col-12 col-lg-6 ">
              <label for="" class="form-label mt-3 mb-1">Yearly Profit</label>
              <input type="text" name="yearly_profit" class=" form-control personal-ntn-bottom-borders  " placeholder="Yearly Profit">
              @error('yearly_profit')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>
  </div>
  <!-- rwo end -->
              
            

   <!-- filesContainer starts -->
   <div class="filesContainer" id="filesContainer">
            <div class="row" id="cloneData">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-4 mb-1">NTN Copy</label>


                <div class="dropdown" id="dropdown1">
                  <button class="text-start form-control text-truncate personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    NTN Copy
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1">


                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group ll ">
                          <div class="custom-file form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image" name="ntn_copy[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>
                    
            
            


                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder" name="ntn_copy[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>
                @error('ntn_copy.*')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('ntn_copy')
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

          <!-- filesContainer2 starts -->
          <div class="filesContainer2" id="filesContainer2">
            <div class="row" id="cloneData2">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-0 mb-1">Visiting Card</label>


                <div class="dropdown" id="dropdown2">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Visiting Card
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton2">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image2"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image2" name="visiting_card[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder2"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder2" name="visiting_card[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('visiting_card.*')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('visiting_card')
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
                <div id="file-list2"></div>
                <p id="file-summary2"></p>
                <div id="folder-list2"></div>
              </div>


              <div class="col-12 col-lg-8 text-end">
                <button type="button" id="AddNewFile2" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer2 end -->




<!-- row start -->
<div class="row">
            <div class="col-12 ">
              <label for="" class="form-label mt-2 mb-1">Products</label>
              <input type="text" name="products" class=" form-control personal-ntn-bottom-borders  " placeholder="Products">
              @error('products')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>

            <div class="col-12">
              <label for="" class="form-label mt-3 mb-1">Business Description</label>
              <textarea name="business_description" class=" form-control personal-ntn-bottom-borders  " id="" cols="30" rows="3" placeholder="Business Description"></textarea>

              @error('business_description')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>
            </div>
            <!-- row end -->
            
             <!-- filesContainer5 starts -->
          <div class="filesContainer5" id="filesContainer5">
            <div class="row" id="cloneData5">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-3 mb-1">PICS of working area</label>


                <div class="dropdown" id="dropdown5">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                    PICS of working area

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton5">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image5"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="15"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image5" name="pics_working_area[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder5"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="15"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder5" name="pics_working_area[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('pics_working_area.*')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('pics_working_area')
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
                <div id="file-list5"></div>
                <p id="file-summary5"></p>
                <div id="folder-list5"></div>
              </div>


              <div class="col-12 col-lg-8 text-end">
                <button type="button" id="AddNewFile5" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer5 end -->


          <!-- filesContainer6 starts -->
          <div class="filesContainer6" id="filesContainer6">
            <div class="row" id="cloneData6">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-0 mb-1">Tax return</label>


                <div class="dropdown" id="dropdown6">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                    Tax return

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton6">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image6"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="16"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image6" name="tax_return[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder6"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="16"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder6" name="tax_return[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('tax_return.*')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('tax_return')
                <span class="text-danger error-style">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row px-0">

              <div class="col-12 col-lg-4">
                <div id="file-list6"></div>
                <p id="file-summary6"></p>
                <div id="folder-list6"></div>
              </div>


              <div class="col-12 col-lg-8 text-end">
                <button type="button" id="AddNewFile6" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer6 end -->


          <button type="submit" name="" class="btn btn-dark mt-3">Add To Cart</button>
        </form>
      </div>
    </div>


  </div><!-- container end -->

  

  <!-- this script is for arrow -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const dropdown1 = document.querySelector("#dropdown1");
      const dropdown2 = document.querySelector("#dropdown2");
      const dropdown5 = document.querySelector("#dropdown5");
      const dropdown6 = document.querySelector("#dropdown6");
      


      const dropdownMenuButton1 = document.querySelector("#dropdownMenuButton1");
      const dropdownMenuButton2 = document.querySelector("#dropdownMenuButton2");
      const dropdownMenuButton5 = document.querySelector("#dropdownMenuButton5");
     const dropdownMenuButton6 = document.querySelector("#dropdownMenuButton6");
      


      dropdown1.addEventListener("change", function() {
        dropdown1.classList.toggle("show1");
        $(dropdownMenuButton1).dropdown('toggle');
      });

      dropdown2.addEventListener("change", function() {
        dropdown2.classList.toggle("show2");
        $(dropdownMenuButton2).dropdown('toggle');
      });
      
      dropdown5.addEventListener("change", function() {
        dropdown5.classList.toggle("show5");
        $(dropdownMenuButton5).dropdown('toggle');
      });
      dropdown6.addEventListener("change", function() {
        dropdown6.classList.toggle("show6");
        $(dropdownMenuButton6).dropdown('toggle');
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

<script src="/javascriptfiles/secp-company.js"></script>
<script src="/addnewfiles/secp-company-add.js"></script>

</body>

</html>