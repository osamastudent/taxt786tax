<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="allcss/home.css">
    <title>Quarterly & Annual Withholding Tax Statement Filing</title>

    <style>
         .add-new-file {
            font-size: 12px !important;
            padding: 3px 5px 3px 5px !important;
        }

        .delete-btnn {
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
                <h4>Quarterly & Annual Withholding Tax Statement Filing</h4>
            </div>
            <div class="card-body px-5 mt-3">

                <form action="{{route('QuarterlyAnnualStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-label mb-1">FBR ID (alphanumeric)</label>
                    <input type="text" name="fbr_id" value="{{old('fbr_id')}}" class="form-control text-truncate personal-ntn-bottom-borders " placeholder="FBR ID">

                    @error('fbr_id')
                    <div class="row">
                        <div class="col-12">
                            <span class="text-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror




                    <label for="" class="form-label mb-1 mt-3">FBR Password (alphanumeric)</label>
                    <input type="text" name="fbr_password" value="{{old('fbr_password')}}" class="form-control text-truncate personal-ntn-bottom-borders " placeholder="FBR Password">

                    @error('fbr_password')
                    <div class="row">
                        <div class="col-12">
                            <span class="text-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror



                    <!-- filesContainer starts -->
                    <div class="filesContainer" id="filesContainer">
                        <div class="row" id="cloneData">

                            <div class="col-12 col-lg-12">
                                <label for="" class="form-label mt-4 mb-1">Invoices on which tax is withheld (Multiple documents Attach or Capture)</label>


                                <div class="dropdown" id="dropdown1">
                                    <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Invoices on which tax is withheld (Multiple documents Attach or Capture)
                                    </button>

                                    <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1">


                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group ll ">
                                                    <div class="custom-file form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                                                        <input type="file" class="custom-file-input  w-100" id="input-image" name="invoices[]" value="{{old('invoices')}}" multiple>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group input-group-copy ">
                                                    <div class="custom-folder form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                                                        <input type="file" class="custom-folder-input w-100" id="uploadfolder" name="invoices[]" value="{{old('invoices')}}" multiple webkitdirectory folder>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>


                                    </ul>
                                </div>


                                @error('invoices.*')
                                <span class="text-danger">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror
                                @error('invoices')
                                <span class="text-danger">
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
                                <button type="button" id="AddNewFile" class="btn mt-2 btn-danger add-new-file">Add New File</button>
                            </div>



                        </div>
                        <!-- row end -->
                    </div>
                    <!-- filesContainer end -->


                    <!-- filesContainer starts -->
                    <div class="filesContainer2" id="filesContainer2">
                        <div class="row" id="cloneData2">

                            <div class="col-12 col-lg-12">
                                <label for="" class="form-label mt-4 mb-1">Employees Salary Sheet (Multiple documents Attach or Capture)</label>


                                <div class="dropdown" id="dropdown2">
                                    <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        Employees Salary Sheet (Multiple documents Attach or Capture)
                                    </button>

                                    <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton2">

                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group  ">
                                                    <div class="custom-file form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image2"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                                                        <input type="file" class="custom-file-input  w-100" id="input-image2" name="employees_salary_sheet[]" value="{{old('employees_salary_sheet')}}" multiple>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>




                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group input-group-copy ">
                                                    <div class="custom-folder form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder2"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                                                        <input type="file" class="custom-folder-input w-100" id="uploadfolder2" name="employees_salary_sheet[]" value="{{old('employees_salary_sheet')}}" multiple webkitdirectory folder>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                @error('employees_salary_sheet.*')
                                <span class="text-danger">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                                @enderror


                                @error('employees_salary_sheet')
                                <span class="text-danger">
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
                                <button type="button" id="AddNewFile2" class="btn mt-2 btn-danger add-new-file">Add New File</button>
                            </div>



                        </div>
                        <!-- row end -->
                    </div>
                    <!-- filesContainer2 end -->



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
            const dropdownMenuButton1 = document.querySelector("#dropdownMenuButton1");
                        const dropdownMenuButton2 = document.querySelector("#dropdownMenuButton2");

            dropdown.addEventListener("change", function() {
                dropdown.classList.toggle("show");
                $(dropdownMenuButton1).dropdown('toggle');
            });

            dropdown2.addEventListener("change", function() {
                dropdown2.classList.toggle("show2");
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