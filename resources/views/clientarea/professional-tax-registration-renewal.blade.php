<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/allcss/home.css">
  <title>Professional Tax Registration / renewal</title>

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

    /* .file-list8 {
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
    } */
  </style>

</head>

<body>
  @include('clientarea.navbar')
  @section('content')


  <!-- container start -->
  <div class="container  mt-5 mb-5">

    <div class="card  mx-auto border-0 w-75">

      <div class="card-header bg-dark text-white">
        <h3>Professional Tax Registration / renewal</h3>
      </div>
      <div class="card-body  mt-1">

        <form action="{{route('ProfessionalTaxRegistrationRenewalStore')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- row start -->
          <div class="row justify-content-end">
            <div class="col-12 col-lg-6">


              <select name="select_tatus" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                <option class="bg-white" value="" selected disabled>Select Legal Status</option>

                <option class="bg-white" value="publicLimited">Public Limited Company</option>
                <option class="bg-white" value="privateLimited">Private limited company</option>

                <option class="bg-white" value="foreignCompany">Foreign Company</option>
                <option class="bg-white" value="modarabaMutualFund">Modaraba Mutual Fund</option>

                <option class="bg-white" value="partnership">Partnership</option>
                <option class="bg-white" value="soleProprietor">Sole Proprietor</option>

                <option class="bg-white" value="others">Others</option>
              </select>
              @error('select_tatus')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
            </div>
          </div>

          <!-- row end -->

          <!-- filesContainer starts -->
          <div class="filesContainer" id="filesContainer">
            <div class="row" id="cloneData">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-3 mb-1">Attach Certificate of incorporation (for company)</label>


                <div class="dropdown" id="dropdown1">
                  <button class="text-start form-control text-truncate personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Attach Certificate of incorporation (for company)
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1">


                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group ll ">
                          <div class="custom-file form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image" name="certificate_incorporation[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder" name="certificate_incorporation[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>
                @error('certificate_incorporation.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('certificate_incorporation')
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
                <label for="" class="form-label mt-0 mb-1">Attach NTN Certificate</label>


                <div class="dropdown" id="dropdown2">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Attach NTN Certificate
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton2">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image2"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image2" name="ntn_certificate[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder2"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder2" name="ntn_certificate[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('ntn_certificate')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror

                @error('ntn_certificate.*')
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
                <label for="" class="form-label mt-0 mb-1">Attach Copy of Audited Financial Statements (for company)</label>


                <div class="dropdown" id="dropdown3">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                    Attach Copy of Audited Financial Statements (for company)</button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton3">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image3"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image3" name="audited_financial_statements[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder3"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder3" name="audited_financial_statements[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('audited_financial_statements')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror

                @error('audited_financial_statements.*')
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
                <label for="" class="form-label  mb-1">Attach Copy of last paid challan of professional tax, if any</label>


                <div class="dropdown" id="dropdown4">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                    Attach Copy of last paid challan of professional tax, if any
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton4">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image4"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" name="last_paid_challan[]" class="custom-file-input  w-100" id="input-image4" multiple>
                          </div>
                        </div>
                      </a>
                    </li>




                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder4"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" name="last_paid_challan[]" class="custom-folder-input w-100" id="uploadfolder4" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('last_paid_challan')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>

              @error('last_paid_challan.*')
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
                <label for="" class="form-label mt-2 mb-1">Attach list of contractor/suppliers</label>


                <div class="dropdown" id="dropdown5">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                    Attach list of contractor/suppliers

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton5">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image5"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="15"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image5" name="list_contractor[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder5"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="15"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder5" name="list_contractor[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('list_contractor.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('list_contractor')
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
                <label for="" class="form-label mt-0 mb-1">Attach Income Tax Returns</label>


                <div class="dropdown" id="dropdown6">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                    Attach Income Tax Returns

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton6">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image6"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="16"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image6" name="income_tax_returns[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder6"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="16"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder6" name="income_tax_returns[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('income_tax_returns.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('income_tax_returns')
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
                <label for="" class="form-label mt-0 mb-1">Attach List containing names and numbers of owners</label>


                <div class="dropdown" id="dropdown7">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false">
                    Attach List containing names and numbers of owners

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton7">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                        <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image7"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="16"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image7" name="list_containing_names_numbers_owners[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>



                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder7"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="16"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder7" name="list_containing_names_numbers_owners[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('list_containing_names_numbers_owners.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror


                @error('list_containing_names_numbers_owners')
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

      const dropdownMenuButton1 = document.querySelector("#dropdownMenuButton1");
      const dropdownMenuButton2 = document.querySelector("#dropdownMenuButton2");
      const dropdownMenuButton3 = document.querySelector("#dropdownMenuButton3");
      const dropdownMenuButton4 = document.querySelector("#dropdownMenuButton4");
      const dropdownMenuButton5 = document.querySelector("#dropdownMenuButton5");
      const dropdownMenuButton6 = document.querySelector("#dropdownMenuButton6");
      const dropdownMenuButton7 = document.querySelector("#dropdownMenuButton7");

      
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


  <script src="/addnewfiles/professionaltaxregistrationrenewal-add.js"></script>
  <script src="/javascriptfiles/professionaltaxregistrationrenewal.js"></script>
  
</body>

</html>