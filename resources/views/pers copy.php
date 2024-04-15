<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/home.css">
    <!-- sweet -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Personal NTN Registration</title>
    <style>
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




        .sidebar {
            overflow-y: scroll;
            height: 200px;

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
    @section('content')

    <!-- @include('sweetalert::alert') -->
    <!-- container start -->
    <div class="container d-sm-block d-lg-flex mt-5 mb-5">

        <!-- form  card start here -->
        <div class="card w-75  px-3 border-0">

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
                    <p class="mt-0 mb-0">{{$message}}</p>
                    @enderror

                    <label for="" class="form-label mt-4 mb-1">Mobile Number</label>
                    <input type="text" name="mobile_no" class="form-control  " placeholder="Mobile Number">
                    @error('mobile_no')
                    <p class="mt-0 mb-0">{{$message}}</p>
                    @enderror

                    <label for="" class="form-label mt-4 mb-1">Mobile Network</label>

                    <div class="div" style="background: linear-gradient(#ebebeb, rgba(235, 235, 235, 255)) !important; position: relative;">
                        <select name="mobile_network" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                            <option selected>Open this select menu</option>
                            <option value="jazz"> jazz</option>
                            <option value="warid">warid</option>
                            <option value="telenor">telenor</option>
                            <option value="ufone">ufone</option>
                            <option value="zong">zong</option>
                        </select>
                    </div>
                    @error('mobile_network')
                    <p class="mt-0 mb-0">{{$message}}</p>
                    @enderror


                    <label for="" class="form-label mt-4 mb-1">Email ID </label>
                    <input type="text" name="email" class="form-control   " placeholder="Email ID ">

                    @error('email')
                    <p class="mt-0 mb-0">{{$message}}</p>
                    @enderror


                    <label for="" class="form-label mt-4 mb-1  ">Postal Address</label>
                    <textarea name="postal_address" id="" cols="30" rows="3" class="form-control  " placeholder="Postal Address"></textarea>

                    @error('postal_address')
                    <p class="mt-0 mb-0">{{$message}}</p>
                    @enderror



                   


                    <button type="submit" name="" class="btn btn-dark mt-3">Add To Cart</button>
                </form>
            </div>
        </div>
        <!-- form  card end here -->


        <!-- card 2 start here -->
        <div class="card  bg-info  w-25 border-0">
            <div class="card-body sidebar">
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
                <h1>Pakistan</h1>
            </div>
        </div>
        <!-- card2 end here -->



    </div><!-- container end here -->



    <script>
        var input = document.querySelectorAll("#inp");
        var drop1 = document.getElementById("dropdown1");
        input.addNewFileField("input", function() {
            drop1.hide();
            var bootstrapDropdown = new bootstrap.Dropdown(dropdownToggle);
            bootstrapDropdown.hide()
            console.log("here");
        });
    </script>

    <!-- this is for add new file -->
    <script>
        document.getElementById('AddNewFile').addEventListener('click', function() {
            addNewFileField();
        });


        function addNewFileField() {
            // Clone the existing file field container
            var clone = document.getElementById('cloneData').cloneNode(true);

            // Remove the ID to prevent duplicate IDs
            clone.removeAttribute('id');

            // Create a button element 
            var colum = document.createElement("div");
            colum.className = 'col-12 text-end';

            // Create a button element with Bootstrap classes
            var deleteButton = document.createElement('button');
            deleteButton.type = 'button';
            deleteButton.className = 'btn float-end btn-danger  mt-2'; // Bootstrap classes applied
            deleteButton.innerText = 'Delete';


            deleteButton.addEventListener('click', function() {
                // Remove the corresponding file field when the delete button is clicked
                clone.remove();
            });

            // // Apply CSS styles to the "Delete" button
            // deleteButton.style.width = '120px'; // Adjust the width as needed
            // deleteButton.style.height = '40px'; // Adjust the height as needed
            // deleteButton.style.marginRight = '10px'; // Adjust the margin as needed
            // deleteButton.style.float = 'right'; // Align to the right
            deleteButton.style.cssText = "height:38px; width:80px; margin-left:10px;";
            // Add more styles as needed
            colum.appendChild(deleteButton);
            // Append the delete button to the new field
            clone.appendChild(colum);

            // Append the cloned container with the delete button to the filesContainer
            document.getElementById('filesContainer').appendChild(clone);



        }
    </script>







    @if(session('success'))
    <!-- <script>
        // Check if the page is loaded from the browser history
        if (window.performance.navigation.type !== 2) {
            Swal.fire({
                title: 'Success',
                text: "{{ session('success') }}",
                icon: 'success',
                showConfirmButton: true,
                showCloseButton: true,
                customClass: {
                    title: 'swal-title',
                    popup: 'custom-popup',
                    closeButton: 'custom-close-button', // Add a custom class for styling close button
                },
            });
        }
    </script> -->


    <script>
        if (window.performance.navigation.type !== 2) {

            Swal.fire({
                title: 'Success',
                text: "{{ session('success') }}",
                icon: 'success',
                showCancelButton: true,
                showCloseButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Add To Cart',
                allowOutsideClick: false, // Prevent closing when clicking outside the popup
                customClass: {
                    title: 'swal-title',
                    showCancelButton: 'show-cancel-button',
                    popup: 'custom-popup',
                    closeButton: 'custom-close-button', // Add a custom class for styling the close button
                    confirmButton: 'ok-button-class', // Add a custom class for styling the OK button
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    // Handle the logic when the "OK" button is clicked
                    // You may want to redirect or perform other actions here
                } else {
                    // Redirect to your custom URL when the "Add To Cart" button is clicked
                    window.location.href = '/your-custom-url';
                    // window.location.href = '{{route("UserRegisterForm")}}';
                }
            });
        }
    </script>
    @endif

    {{-- Clear the success session data --}}
    {{ session::forget('success') }}


    <!-- @if(Session::has('success'))
    <script>
        Swal.fire({
            title: "Congratulations!",
            text: "You Data Has Submitted!",
            icon: "success",
            //    confirmButtonText:"Confirm",

            // paddingBottom:"100px"
            // backdrop:"pink",
            timer: 20000, // 10 seconds
            timerProgressBar: true,
        });
    </script>
    @endif -->



    <!-- this script is for arrow -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdown = document.querySelector("#dropdown1");
            // const dropdown2 = document.querySelector("#dropdown2");


            dropdown.addEventListener("click", function() {
                dropdown.classList.toggle("show");
            });


        });
    </script>

</body>






















<!-- 
<div class="filesContainer" id="filesContainer">
                        <div class="row" id="cloneData">

                            <div class="col-12 col-lg-12">
                                <label for="" class="form-label mt-4 mb-1">Picture of business premises Attach or capture picture</label>


                                <div class="dropdown" id="dropdown1">
                                    <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Picture of business premises Attach or capture picture
                                    </button>

                                    <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1">

                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group ll ">
                                                    <div class="custom-file form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                                                        <input type="file" class="custom-file-input  w-100" id="input-image" name="postal_address[]" multiple>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>



                                        <li class="mt-0 p-0 m-0">
                                            <a class="dropdown-item" href="#">
                                                <div class="input-group input-group-copy ">
                                                    <div class="custom-folder form-control  l3 border-0 ml-0">
                                                        <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                                                        <input type="file" class="custom-folder-input w-100" id="uploadfolder" name="postal_address[]" multiple webkitdirectory folder>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- <li>
                                            <a class="dropdown-item" href="#">
                                                <input type="file" id="uploadfolder" name="postal_address[]" class="form-control  border-end-0 border-start-0" webkitdirectory folder style="display: none;">
                                                <span class="d-flex"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="mt-1 mx-1" height="14"><label class="mx-1 form-label mb-1 w-100" for="uploadfolder" style="cursor: pointer;">Upload Folder</label></span>
                                            </a>
                                        </li> -->
                                    <!-- </ul>
                                </div>
                            </div>


                        </div>
                       

                        <div class="row ">
                            <div class="col-12 text-end">
                                <button type="button" id="AddNewFile" class="btn mt-2 btn-danger">Add New File</button>
                            </div>
                        </div>
                    </div> -->