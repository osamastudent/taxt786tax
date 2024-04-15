<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="allcss/home.css">
    <title> Sole Proprietor Business NTN Registration</title>
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
    </style>

</head>

<body>
    @include('clientarea.navbar')
    @section('content')

    <!-- container start -->
    <div class="container mt-5 mb-5">

        <div class="card w-75 mx-auto border-0">

            <div class="card-header bg-dark text-white">
                <h4> Sole Proprietor Business NTN Registration</h4>
            </div>
            <div class="card-body px-5 mt-3">

                <form action="{{route('SoleProprietorBusinessNTNRegistrationStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- row start -->
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="" class="form-label mb-1 ">CNIC Number</label>
                            <input type="text" name="cnic_number" class="form-control personal-ntn-bottom-borders " placeholder="CNIC Number">
                            @error('cnic_number')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror
                        </div>



                        <div class="col-md-6 col-12">
                            <label for="" class="form-label mb-1">Mobile Number</label>
                            <input type="text" name="mobile_no" class="form-control personal-ntn-bottom-borders " placeholder="Mobile Number">
                            @error('mobile_no')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror
                        </div>



                        <div class="col-md-6 col-12">
                            <label for="" class="form-label mt-3 mb-sm-0 mb-md-0">Mobile Network</label>
                            <div class="div" style="background: linear-gradient(#ebebeb, rgba(235, 235, 235, 255)) !important; position: relative;">
                                <select name="mobile_network" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                                    <option value="" selected>Open this select menu</option>
                                    <option value="jazz"> jazz</option>
                                    <option value="warid">warid</option>
                                    <option value="telenor">telenor</option>
                                    <option value="ufone">ufone</option>
                                    <option value="zong">zong</option>
                                </select>
                            </div>
                            @error('mobile_network')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror
                        </div>




                        <div class="col-md-6 col-12">
                            <label for="" class="form-label mt-3 mb-sm-0 mb-md-0">Email ID </label>
                            <input type="text" name="email" class="form-control personal-ntn-bottom-borders  " placeholder="Email ID">
                            @error('email')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror
                        </div>



                        <div class="col-md-6 col-12">
                            <label for="" class="form-label mt-3 mb-sm-0 mb-md-0  ">Business Name </label>
                            <input type="text" name="business_name" class="form-control personal-ntn-bottom-borders " placeholder="Business Name">
                            @error('business_name')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12">
                            <label for="" class="form-label mt-3 mb-sm-0 mb-md-0  ">Start date</label>
                            <input type="date" name="start_date" class="form-control personal-ntn-bottom-borders ">
                            @error('start_date')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="" class="form-label mt-3 mb-sm-0 mb-md-0  ">Business Activity description</label>
                            <textarea name="business_activity_description" id="" cols="30" rows="3" class="form-control personal-ntn-bottom-borders " placeholder="Type Here..."></textarea>
                            @error('business_activity_description')
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
                                <label for="" class="form-label mt-3 mb-1">Picture of business premises Attach or capture picture</label>


                                <div class="dropdown" id="dropdown1">
                                    <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Picture of business premises Attach or capture picture
                                    </button>

                                    <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1" id="dropdown-menu1">


                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group ll ">
                                                    <div class="custom-file form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                                                        <input type="file" class="custom-file-input  w-100" id="input-image" name="picture_business_premises[]" multiple>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group input-group-copy ">
                                                    <div class="custom-folder form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                                                        <input type="file" class="custom-folder-input w-100" id="uploadfolder" name="picture_business_premises[]" multiple webkitdirectory folder>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>


                                    </ul>
                                </div>




                                @error('picture_business_premises')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror

                                @error('picture_business_premises.*')
                                <span class="text-danger error-style">
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
                                <button type="button" id="AddNewFile" class="btn mt-1 btn-danger add-new-file">Add New File</button>
                            </div>



                        </div>
                        <!-- row end -->
                    </div>
                    <!-- filesContainer end -->


                    <!-- filesContainer starts -->
                    <div class="filesContainer2" id="filesContainer2">
                        <div class="row" id="cloneData2">

                            <div class="col-12 col-lg-12">
                                <label for="" class="form-label mt-4 mb-1">Paid Utility Bill Not Older Than 3 Months Attach/Upload</label>


                                <div class="dropdown" id="dropdown2">
                                    <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        Paid Utility Bill Not Older Than 3 Months Attach/Upload
                                    </button>

                                    <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton2" id="dropdown-menu2">
                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group  ">
                                                    <div class="custom-file form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image2"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                                                        <input type="file" class="custom-file-input  w-100" id="input-image2" name="paid_utility_bill[]" multiple>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group input-group-copy ">
                                                    <div class="custom-folder form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder2"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                                                        <input type="file" class="custom-folder-input w-100" id="uploadfolder2" name="paid_utility_bill[]" multiple webkitdirectory folder>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>


                                @error('paid_utility_bill')
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror

                                @error('paid_utility_bill.*')
                                <span class="text-danger error-style">
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
                                <button type="button" id="AddNewFile2" class="btn mt-1 btn-danger add-new-file">Add New File</button>
                            </div>



                        </div>
                        <!-- row end -->
                    </div>
                    <!-- filesContainer2 end -->







                    <div class="row">
                        <div class="col-12">
                            <label for="" class="form-label mt-2 mb-sm-0 ">Business Address at which electricity bill available</label>
                            <textarea name="business_address_electricity_bill" id="" cols="" rows="3" class="mt-0 form-control " placeholder="Type Here..."></textarea>

                            @error('business_address_electricity_bill')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror
                        </div>



                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="form-label mt-3 mb-1  ">Sales Tax Registration required? – separate charges (yes/No)</label>
                                <select name="sales_tax_registration_required" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                                    <option selected disabled value="">Open this select menu</option>
                                    <option value="yes"> Yes</option>
                                    <option value="no"> No</option>

                                </select>


                            </div>


                            @error('sales_tax_registration_required')
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                            @enderror


                        </div>

                        <div class="col-12">
                            <button type="submit" name="" class="btn btn-dark mt-3">Add To Cart</button>
                        </div>
                    </div>
                    <!-- row end -->

                </form>
            </div>
        </div>



        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const dropdown1 = document.querySelector("#dropdown1");
                const dropdown2 = document.querySelector("#dropdown2");
                const dropdownMenuButton1 = document.querySelector("#dropdownMenuButton1");
                const dropdownMenuButton2 = document.querySelector("#dropdownMenuButton2");
                const dropdownMenu1 = document.querySelector("#dropdown-menu1");
                const dropdownMenu2 = document.querySelector("#dropdown-menu2");
                // const mydrop2=document.querySelector("#mydrop2");

                dropdown1.addEventListener("click", function() {
                    dropdown1.classList.toggle("show");
                });

                // Add event listener to the file input
                dropdownMenu1.addEventListener("change", function() {
                    // Hide the dropdown menu when a file is selected
                    dropdown1.classList.remove("show");
                    // Close the dropdown using Bootstrap API
                    $(dropdownMenuButton1).dropdown('toggle');
                });



                dropdown2.addEventListener("click", function() {
                    dropdown2.classList.toggle("show2");
                });

                // Add event listener to the file input
                dropdownMenu2.addEventListener("change", function() {
                    // Hide the dropdown menu when a file is selected
                    dropdown2.classList.remove("show2");
                    // Close the dropdown using Bootstrap API
                    $(dropdownMenuButton2).dropdown('toggle');
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

        <script src="/javascriptfiles/soleproprieter.js"></script>
        <script src="/addnewfiles/sole-proprieter-add.js"></script>
</body>

</html>