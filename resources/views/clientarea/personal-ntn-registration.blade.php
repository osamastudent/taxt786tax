<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/home.css">

    <title>Personal NTN Registration</title>
    <style>
        
        

        .tab-nav-link {
            border: 1px solid rgba(0, 0, 0, .125) !important;
            padding-left: 50px !important;
            padding-right: 50px !important;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1) !important;
        }

       
       

        @media screen and (max-width:572px) {
            .parent-card {
                width: 100% !important;

            }

            .container-sidebar {
                height: 200px !important;
                width: 100% !important;
                background-color: white !important;

            }

            .sidebar {
                margin-top: 20px !important;
            }
        }

        @media screen and (max-width:668px) {
            .parent-card {
                width: 100% !important;
            }

            .container-sidebar {
                height: 200px !important;
                width: 100% !important;
                background-color: white !important;
            }
        }

        @media screen and (max-width:992px) {
            .parent-card {
                width: 100% !important;
            }

            .container-sidebar {
                height: 200px !important;
                width: 100% !important;
                margin-top: 20px !important;
                /* background-color: white !important; */
            }
        }

        /* Webkit (Safari, Chrome) */
        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: black !important;
            border-radius: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background-color: gray !important;
        }

        /* Firefox */
        .sidebar {
            scrollbar-width: thin;
        }

        .sidebar::-moz-scrollbar-thumb {
            /* background-color: #888; */
            border-radius: 6px;
        }

        /* .sidebar::-moz-scrollbar-track {
    background-color: #f5f5f5;
    } */


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

        .error-style {
            font-size: 13px !important;
            font-weight: 400 !important;
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
            font-size: 14px;
            color: #464646;
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
    <!-- @section('content') -->

    <!-- @include('sweetalert::alert') -->
    <!-- container start -->
    <div class="container mt-5 mb-5">

        <!-- form  card start here -->
        <div class="card w-75 mx-auto px-3 border-0">

            <div class="card-header bg-dark text-white">
                <h3>Personal NTN Registration</h3>
            </div>
            <div class="card-body ">
                <!-- @if(session('success'))

<div class="alert bg-info">{{session('success')}}</div>
@endif -->


                <form method="post" class="mt-3" action="{{route('PersonalNtnRegistrationStore')}}" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-label mb-1">CNIC Number</label>
                    <input type="text" name="cnic_number" class="form-control  " placeholder="CNIC Number">
                    @error('cnic_number')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <label for="" class="form-label mt-4 mb-1">Mobile Number</label>
                    <input type="text" name="mobile_no" class="form-control  " placeholder="Mobile Number">
                    @error('mobile_no')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <label for="" class="form-label mt-4 mb-1">Mobile Network</label>

                    <div class="div" style="background: linear-gradient(#ebebeb, rgba(235, 235, 235, 255)) !important; position: relative;">
                        <select name="mobile_network" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                            <option selected value="">Open this select menu</option>
                            <option value="jazz"> jazz</option>
                            <option value="warid">warid</option>
                            <option value="telenor">telenor</option>
                            <option value="ufone">ufone</option>
                            <option value="zong">zong</option>
                        </select>
                    </div>
                    @error('mobile_network')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <label for="" class="form-label mt-4 mb-1">Email ID </label>
                    <input type="text" name="email" class="form-control   " placeholder="Email ID ">

                    @error('email')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <label for="" class="form-label mt-4 mb-1  ">Postal Address</label>
                    <textarea name="postal_address" id="" cols="30" rows="3" class="form-control  " placeholder="Postal Address"></textarea>

                    @error('postal_address')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror





                    <button type="submit" name="" class="btn btn-dark mt-4">Add To Cart</button>
                </form>
            </div>
        </div>
        <!-- form  card end here -->


     



    </div><!-- container end here -->


   

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