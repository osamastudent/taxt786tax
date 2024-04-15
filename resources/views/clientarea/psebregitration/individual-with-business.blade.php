<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <title>Individual With Business Name</title>
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

    .dropdown.show7 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .dropdown.show8 .dropdown-toggle::after {
      transform: rotate(180deg);
      /* Rotate the up arrow */
    }

    .dropdown.show9 .dropdown-toggle::after {
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

    .folder-container4 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name4 {
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

    .folder-container7 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name7 {
      padding: 10px;
      cursor: pointer;
      background-color: #f4f4f4;
    }

    .folder-container8 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name8 {
      padding: 10px;
      cursor: pointer;
      background-color: #f4f4f4;
    }

    .folder-container9 {
      border: 1px solid #ccc;
      margin-bottom: 5px;
      background-color: #f4f4f4;
    }

    .folder-name9 {
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

    .file-list3 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list3 p {
      margin: 0;
      padding: 5px;
    }

    .file-list4 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list4 p {
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

    .file-list7 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list7 p {
      margin: 0;
      padding: 5px;
    }

    .file-list8 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list8 p {
      margin: 0;
      padding: 5px;
    }

    .file-list9 {
      display: none;
      padding: 10px;
      background-color: #fff;
    }

    .file-list9 p {
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

    <div class="card w-75 mx-auto border-0">

      <div class="card-header bg-dark text-white">
        <h3> Individual With Business Name / Company / Partnership</h3>
      </div>
      <div class="card-body px-5 mt-3">


        <form action="{{route('individualWithBusinessNameStore')}}" method="post" class=" mb-3" enctype="multipart/form-data">
          @csrf

          <div class="row">
            <div class="col-12 mt-3">
              <h3>Scanned Copies of:</h3>
            </div>
          </div>
          <!-- row start -->



          <!-- filesContainer starts -->
          <div class="filesContainer" id="filesContainer">
            <div class="row" id="cloneData">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-4 mb-1">Business NTN</label>


                <div class="dropdown" id="dropdown1">
                  <button class="text-start form-control text-truncate personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Business NTN
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1">


                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group ll ">
                          <div class="custom-file form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image" name="business_ntn[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder" name="business_ntn[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>
                @error('business_ntn.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('business_ntn')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row ">

              <div class="col-12 col-lg-6">
                <div id="file-list"></div>
                <p id="file-summary"></p>
                <div id="folder-list"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
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
                <label for="" class="form-label mt-0 mb-1">CNIC of all Directors / Shareholders / Partners / Proprietor (Both sides)</label>


                <div class="dropdown" id="dropdown2">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    CNIC of all Directors / Shareholders / Partners / Proprietor (Both sides)
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton2">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image2"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image2" name="cnic_all_directors[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder2"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder2" name="cnic_all_directors[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('cnic_all_directors')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror

                @error('cnic_all_directors.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror



              </div>


            </div>

            <!-- row start -->
            <div class="row ">

              <div class="col-12 col-lg-6">
                <div id="file-list2"></div>
                <p id="file-summary2"></p>
                <div id="folder-list2"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
                <button type="button" id="AddNewFile2" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer2 end -->



          <!-- filesContainer3 starts -->
          <div class="filesContainer3" id="filesContainer3">
            <div class="row" id="cloneData3">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-0 mb-1">Passports of Directors / Shareholders / Partners (for foreign nationals only)
                </label>


                <div class="dropdown" id="dropdown3">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                    Passports of Directors / Shareholders / Partners (for foreign nationals only)

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton3">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image3"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image3" name="passports_directors[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder3"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder3" name="passports_directors[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('passports_directors')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror

                @error('passports_directors.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


              </div>


            </div>

            <!-- row start -->
            <div class="row ">

              <div class="col-12 col-lg-6">
                <div id="file-list3"></div>
                <p id="file-summary3"></p>
                <div id="folder-list3"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
                <button type="button" id="AddNewFile3" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer3 end -->



          <!-- filesContainer4 starts -->
          <div class="filesContainer4" id="filesContainer4">
            <div class="row" id="cloneData4">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label  mb-1">Memorandum and Articles of Association (for SECP registered companies only)</label>


                <div class="dropdown" id="dropdown4">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                    Memorandum and Articles of Association (for SECP registered companies only)

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton4">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image4"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" name="memorandum_articles[]" class="custom-file-input  w-100" id="input-image4" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder4"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" name="memorandum_articles[]" class="custom-folder-input w-100" id="uploadfolder4" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('memorandum_articles')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>

              @error('memorandum_articles.*')
              <span class="text-danger">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror




            </div>

            <!-- row start -->
            <div class="row ">

              <div class="col-12 col-lg-6">
                <div id="file-list4"></div>
                <p id="file-summary4"></p>
                <div id="folder-list4"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
                <button type="button" id="AddNewFile4" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer4 end -->


          <!-- filesContainer5 starts -->
          <div class="filesContainer5" id="filesContainer5">
            <div class="row" id="cloneData5">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-3 mb-1">Form 29 (for SECP registered companies only)</label>


                <div class="dropdown" id="dropdown5">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                    Form 29 (for SECP registered companies only)

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton5">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image5"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="15"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image5" name="form_twentynine[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder5"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="15"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder5" name="form_twentynine[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('form_twentynine.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('form_twentynine')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row ">

              <div class="col-12 col-lg-6">
                <div id="file-list5"></div>
                <p id="file-summary5"></p>
                <div id="folder-list5"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
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
                <label for="" class="form-label mt-0 mb-1">Incorporation certificate (for SECP registered companies only)</label>


                <div class="dropdown" id="dropdown6">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                    Incorporation certificate (for SECP registered companies only)

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton6">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image6"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="16"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image6" name="incorporation_certificate[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder6"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="16"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder6" name="incorporation_certificate[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('incorporation_certificate.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('incorporation_certificate')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row px-0">

              <div class="col-12 col-lg-6">
                <div id="file-list6"></div>
                <p id="file-summary6"></p>
                <div id="folder-list6"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
                <button type="button" id="AddNewFile6" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer6 end -->





          <!-- filesContainer7 starts -->
          <div class="filesContainer7" id="filesContainer7">
            <div class="row" id="cloneData7">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-0 mb-1">Partnership deed (for Partnership based firms)</label>


                <div class="dropdown" id="dropdown7">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false">
                    Partnership deed (for Partnership based firms)

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton7">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image7"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="1"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image7" name="partnership_deed[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder7"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="16"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder7" name="partnership_deed[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('partnership_deed.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('partnership_deed')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row px-0">

              <div class="col-12 col-lg-6">
                <div id="file-list7"></div>
                <p id="file-summary7"></p>
                <div id="folder-list7"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
                <button type="button" id="AddNewFile7" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer7 end -->


          <!-- filesContainer8 starts -->
          <div class="filesContainer8" id="filesContainer8">
            <div class="row" id="cloneData8">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-0 mb-1">Firm registration certificate (for registered firms)</label>


                <div class="dropdown" id="dropdown8">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-expanded="false">
                    Firm registration certificate (for registered firms)

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton8">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image8"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="16"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image8" name="firm_registration_certificate[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder8"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="16"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder8" name="firm_registration_certificate[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('firm_registration_certificate.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('firm_registration_certificate')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row px-0">

              <div class="col-12 col-lg-6">
                <div id="file-list8"></div>
                <p id="file-summary8"></p>
                <div id="folder-list8"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
                <button type="button" id="AddNewFile8" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer8 end -->




          <!-- filesContainer9 starts -->
          <div class="filesContainer9" id="filesContainer9">
            <div class="row" id="cloneData9">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-2 mb-1">Business Bank Statement of the preceding six months OR Business Bank Account Letter/Certificate (In case of new)</label>


                <div class="dropdown" id="dropdown9">
                  <button class="text-start  form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false">
                    Business Bank Statement of the preceding six months OR Business Bank Account Letter/Certificate (In case of new)

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton9">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image9"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="16"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image9" name="business_bank_statement[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder9"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="16"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder9" name="business_bank_statement[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('business_bank_statement.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('business_bank_statement')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>


            </div>

            <!-- row start -->
            <div class="row px-0">

              <div class="col-12 col-lg-6">
                <div id="file-list9"></div>
                <p id="file-summary9"></p>
                <div id="folder-list9"></div>
              </div>


              <div class="col-12 col-lg-6 text-end">
                <button type="button" id="AddNewFile9" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer9 end -->


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
      const dropdown3 = document.querySelector("#dropdown3");
      const dropdown4 = document.querySelector("#dropdown4");
      const dropdown5 = document.querySelector("#dropdown5");
      const dropdown6 = document.querySelector("#dropdown6");
      const dropdown7 = document.querySelector("#dropdown7");
      const dropdown8 = document.querySelector("#dropdown8");
      const dropdown9 = document.querySelector("#dropdown9");

      const dropdownMenuButton1 = document.querySelector("#dropdownMenuButton1");
            const dropdownMenuButton2 = document.querySelector("#dropdownMenuButton2");
            const dropdownMenuButton3 = document.querySelector("#dropdownMenuButton3");
            const dropdownMenuButton4 = document.querySelector("#dropdownMenuButton4");
            const dropdownMenuButton5 = document.querySelector("#dropdownMenuButton5");
            const dropdownMenuButton6 = document.querySelector("#dropdownMenuButton6");
            const dropdownMenuButton7 = document.querySelector("#dropdownMenuButton7");
            const dropdownMenuButton8 = document.querySelector("#dropdownMenuButton8");
            const dropdownMenuButton9 = document.querySelector("#dropdownMenuButton9");


      dropdown1.addEventListener("change", function() {
        dropdown1.classList.toggle("show1");
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
      dropdown4.addEventListener("change", function() {
        dropdown4.classList.toggle("show4");
        $(dropdownMenuButton4).dropdown('toggle');
      });
      dropdown5.addEventListener("change", function() {
        dropdown5.classList.toggle("show5");
        $(dropdownMenuButton5).dropdown('toggle');
      });
      dropdown6.addEventListener("change", function() {
        dropdown6.classList.toggle("show6");
        $(dropdownMenuButton6).dropdown('toggle');
      });
      dropdown7.addEventListener("change", function() {
        dropdown7.classList.toggle("show7");
        $(dropdownMenuButton7).dropdown('toggle');
      });
      dropdown8.addEventListener("change", function() {
        dropdown8.classList.toggle("show8");
        $(dropdownMenuButton8).dropdown('toggle');
      });
      dropdown9.addEventListener("change", function() {
        dropdown9.classList.toggle("show9");
        $(dropdownMenuButton9).dropdown('toggle');
      });
    });
  </script>
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

  <script src="/javascriptfiles/individual-with-business.js"></script>
  <script src="/addnewfiles/individual-with-business-add.js"></script>
</body>

</html>