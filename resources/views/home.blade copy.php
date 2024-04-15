<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom File Input</title>
    <style>
        /* Hide the default file input button */
        #input-image {
            display: none;
        }

        /* Style the custom button */
        .custom-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            display: inline-block;
        }

        /* Style the file name display */
        .file-name {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <!-- Custom button to trigger file input -->
    <label for="input-image" class="custom-button">
        Choose File
    </label>

    <!-- Display the selected file name -->
    <div class="file-name" id="file-name"></div>

    <!-- Actual file input -->
    <input type="file" id="input-image" name="postal_address[]" multiple class="form-control border-top-0 border-end-0 border-start-0" onchange="displayFileName()">

    <script>
        // Function to display the selected file name
        function displayFileName() {
            const input = document.getElementById('input-image');
            const fileNameDisplay = document.getElementById('file-name');

            // Display the selected file name
            fileNameDisplay.textContent = input.files.length > 0 ? input.files[0].name : '';
        }
    </script>

</body>
</html>



<script>
        var myfiles=document.getElementById("myfilesid");
        let divappend=document.createElement("h1");
let textt=document.createTextNode("this is myfilesid osama");
divappend.append(textt);
        myfiles.append(divappend);
        </script>
<i class="fa-sharp fa-solid fa-circle-caret-down"></i>
<i class="fa-sharp fa-solid fa-circle-caret-up"></i>








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
        .form-label {
            font-size: 13px;
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

    <!-- @include('sweetalert::alert') -->
    <!-- container start -->
    <div class="container mt-5 mb-5">

        <div class="card w-75 mx-auto border-0">

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
                    <input type="text" name="cnicnumber" class="form-control personal-ntn-bottom-borders " placeholder="CNIC Number">


                    <label for="" class="form-label mt-4 mb-1">Mobile Number</label>
                    <input type="text" name="mobilenumber" class="form-control personal-ntn-bottom-borders " placeholder="Mobile Number">

                    <label for="" class="form-label mt-4 mb-1">Mobile Network</label>

                    <div class="div" style="background: linear-gradient(#ebebeb, rgba(235, 235, 235, 255)) !important; position: relative;">
                        <select name="mobilenetwork" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example " style="background-color: transparent; position: relative; z-index: 2;">
                            <option selected>Open this select menu</option>
                            <option value="1"> jazz</option>
                            <option value="2">warid</option>
                            <option value="3">telenor</option>
                            <option value="4">ufone</option>
                            <option value="5">zong</option>
                        </select>
                    </div>



                    <label for="" class="form-label mt-4 mb-1">Email ID </label>
                    <input type="text" name="email" class="form-control   " placeholder="Email ID ">


                    <!-- <label for="" class="form-label mt-4 mb-1  ">Postal Address</label>
                    <textarea name="postal_address" id="" cols="30" rows="3" class="form-control personal-ntn-bottom-borders " placeholder="Postal Address"></textarea> -->




                    <!-- <div class="file-container mt-3">
                        <p>
                            <input type="file" name="postal_address[]" multiple>
                            <button type="button" class="delete_ btn-danger" ><span class="glyphicon glyphicon-remove">Delete File</span></button>
                        </p>
                    </div>
                    <p>
                     <button type="button" class="add btn-danger">Add New File</button>
                                           </p> -->
                                           <div class="file-container mt-3">
    <p id="ddd">
        <div class="col-12 col-lg-12">
            <label for="" class="form-label mt-2 mb-1">Picture of business premises Attach or capture picture</label>

            <div class="dropdown" id="dropdown2">
                <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Picture of business premises Attach or capture picture
                </button>
                <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item" href="#">
                            <input type="file" name="postal_address[]" multiple id="input-image2" class="form-control personal-ntn-bottom-borders border-top-0 border-end-0 border-start-0" style="display: none;">
                            <span class="d-flex"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="mt-1 mx-1 " height="14"><label for="input-image2" class="mx-1 form-label mb-1 w-100" style="cursor: pointer;">Upload File</label></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <input type="file" name="" id="uploadfolder2" class="form-control personal-ntn-bottom-borders border-end-0 border-start-0" webkitdirectory folder style="display: none;">
                            <span class="d-flex "><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="mt-1 mx-1" height="14"><label for="uploadfolder2" class="mx-1 form-label mb-1 w-100" style="cursor: pointer;">Upload Folder</label></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div id="file-list2"></div>
            <p id="file-summary2"></p>
            <div id="folder-list2"></div>
        </div>
        <button id="ddd" type="button" class="delete_ btn-danger" title="Delete File"><span class="glyphicon glyphicon-remove">Delete File</span></button>
    </p>
</div>
<p>
    <button type="button" class="add btn-danger">Add New File</button>
</p>              



                    

                    <input type="submit" name="" class="btn btn-secondary mt-3">
                </form>
            </div>
        </div>

   <script>
    $(document).on('click', '.delete_', function() {
        $(this).closest('.file-container').remove();
    });

    $(".add").click(function() {
        var newFileContainer = "<div class='file-container mt-3'>"
            + "<p>"
            + "<div class='col-12 col-lg-12'>"
            + "<label for='' class='form-label mt-2 mb-1'>Picture of business premises Attach or capture picture</label>"
            + "<div class='dropdown' id='dropdown2'>"
            + "<button class='text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>"
            + "Picture of business premises Attach or capture picture"
            + "</button>"
            + "<ul class='dropdown-menu form-control' aria-labelledby='dropdownMenuButton1'>"
            + "<li>"
            + "<a class='dropdown-item' href='#'>"
            + "<input type='file' name='postal_address[]' multiple class='form-control personal-ntn-bottom-borders border-top-0 border-end-0 border-start-0' style='display: none;'>"
            + "<span class='d-flex'><img src='{{asset('filefolderuploadicon/fileuploadicon.png')}}' class='mt-1 mx-1' height='14'><label class='mx-1 form-label mb-1 w-100' style='cursor: pointer;'>Upload File</label></span>"
            + "</a>"
            + "</li>"
            + "<li>"
            + "<a class='dropdown-item' href='#'>"
            + "<input type='file' name='' class='form-control personal-ntn-bottom-borders border-end-0 border-start-0' webkitdirectory folder style='display: none;'>"
            + "<span class='d-flex'><img src='{{asset('filefolderuploadicon/folderuploadicon.png')}}' class='mt-1 mx-1' height='14'><label class='mx-1 form-label mb-1 w-100' style='cursor: pointer;'>Upload Folder</label></span>"
            + "</a>"
            + "</li>"
            + "</ul>"
            + "</div>"
            + "</div>"
            + "<div class='col-12 col-lg-6'>"
            + "<div></div>"
            + "<p></p>"
            + "<div></div>"
            + "</div>"
            + "<button type='button' class='delete_ btn-danger' title='Delete File'><span>Delete File</span></button>"
            + "</p>"
            + "</div>";

        $(".file-container:last").after(newFileContainer);
    });
</script>

      


        @if(Session::has('success'))
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
        @endif





</body>

</html>








































<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <script src="/multi-select-tag.js"></script>

  <!-- these three links for select multi -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/> -->

  <title>Income Tax Filing Individual</title>
<style>

.boxes input,readio{
  display: none;
}
.next.btn{
    background-color: #ff6d00 !important;
    color: white !important;
   }
   
   .next.btn:hover{
    background-color: #ffb300 !important;
    color: black !important;
   }
</style>
</head>

<body>
  @include('clientarea.navbar')
  @section('content')


  <!-- container start -->
  <div class="container mt-5 mb-5">

    <div class="w-75 card  mx-auto border-0">

      <div class="card-header bg-secondary text-white">
        <h4>Income Tax Filing Individual</h4>
      </div>
      <div class="card-body px-5 mt-3">

        <form action="{{route('IncomeTaxFilingStored')}}" method="post">


          @csrf
          <!-- row start -->
          <div class="row justify-content-end">
            <div class="col-4">
              <label for="" class="form-label mb-1 mt-4 ">Select Tax Year or Years</label>
               <select class="form-select personal-ntn-bottom-border-select border-top-0 border-end-0 border-start-0 " name="selectedValues[]" multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="10">

                <option class="bg-white" value="2017"> 2017</option>
                <option class="bg-white" value="2018">2018</option>
                <option class="bg-white" value="2019">2019</option>
                <option class="bg-white" value="2020"> 2020</option>
                <option class="bg-white" value="2021">2021</option>
                <option class="bg-white" value="2022">2022</option>
                <option class="bg-white" value="2023"> 2023</option>
                <option class="bg-white" value="2024">2024</option>
                <option class="bg-white" value="2025">2025</option>
                <option class="bg-white" value="2026">2026</option>
              </select>

              <!-- <select data-placeholder="Begin typing a name to filter..." multiple class="form-select chosen-select" name="selectedValues[]">
              <option class="bg-white" value="2017"> 2017</option>
                <option class="bg-white" value="2018">2018</option>
                <option class="bg-white" value="2019">2019</option>
                <option class="bg-white" value="2020"> 2020</option>
                <option class="bg-white" value="2021">2021</option>
                <option class="bg-white" value="2022">2022</option>
                <option class="bg-white" value="2023"> 2023</option>
                <option class="bg-white" value="2024">2024</option>
                <option class="bg-white" value="2025">2025</option>
                <option class="bg-white" value="2026">2026</option>
  </select> -->
            </div>
          </div>
          <!-- row end -->


          <!-- row start -->
          <div class="row  mt-3 boxes">


          <div class="col-4 mt-3">
  <div class="card  w-100 mb-3">
  <label for="salaryincomeid">  
  <div  class="card-body  text-center card-hover" id="card-selected"  id="card-selected" >  
      <label for="salaryincomeid" class="card-title" >Salary Income</label>
      <!-- <input type="checkbox" id="salaryincomeid" onclick="toggleButton()"> -->
      <input type="radio" name="salaryincomeid" value="salary_income" id="salaryincomeid" onclick="toggleLink()">
    </div>
    </label>
  </div>
</div>



           
          <div class="col-4 mt-3">
            <div class="card  w-100 mb-3">
            <label for="rentincomeid">  
              <div  class="card-body  text-center card-hover" id="card-selected" >
                <label for="rentincomeid"  class="card-title">Rent Income</label>
                <input type="radio" name="salaryincomeid" value="rent_income" id="rentincomeid" onclick="toggleLink()">
              </div>
            </label>
            </div>
          </div>


          

          <div class="col-4 mt-3">
            <div class="card  w-100 mb-3">
            <label for="businessincomeid">  
              <div  class="card-body  text-center card-hover" id="card-selected" >
                <label for="businessincomeid" class="card-title">Business Income</label>
                <input type="radio" name="salaryincomeid" value="business_income" id="businessincomeid" onclick="toggleLink()">
              </div>
            </label>
            </div>
          </div>



          <div class="col-4 mt-3">
            <div class="card  w-100 mb-3">
            <label for="sharescapitalgainid">  
              <div  class="card-body  text-center card-hover" id="card-selected" >
                <label for="sharescapitalgainid" class="card-title">Shares – Capital gain</label>
                <input type="radio" name="salaryincomeid" value="shares_capital_gain" id="sharescapitalgainid"  onclick="toggleLink()">
              </div>
            </label>
            </div>
          </div>



          <div class="col-4 mt-3">
            <div class="card  w-100 mb-3">
            <label for="otherincomeid">  
              <div class="card-body  text-center card-hover" id="card-selected" >
                <label for="otherincomeid" class="card-title">Other Income</label>
                <input type="radio" name="salaryincomeid" value="other_income" id="otherincomeid"  onclick="toggleLink()">
              </div>
            </label>
            </div>
          </div>


        

         
          <div class="col-4 mt-3">
            <div class="card  w-100 mb-3">
            <label for="withholdingadjustableid">  
              <div class="card-body  text-center card-hover" id="card-selected" >
              <label for="withholdingadjustableid" class="card-title">Withholding / Adjustable or Final Tax </label>

                <input type="radio" name="salaryincomeid" value="withholding_adjustable_or_final_tax" id="withholdingadjustableid"  onclick="toggleLink()">
              </div>
            </label>
            </div>
          </div>
  
  </div><!-- row end -->
    

    <div class="row">
      <div class="col-12 mt-3 d-flex justify-content-end">

      <button type="submit" href="#" id="nextButton" class="next btn disabled">Next</button>
    

      </form><!-- form end -->


      </div>
    </div>
  </div>
  </div>


  </div><!-- container end -->



  <!--  these for slect multi with threee links <script>
    $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
  </script> -->


<script>
document.addEventListener("DOMContentLoaded", function () {
    // Add an event listener to each radio button
    var radioButtons = document.querySelectorAll('input[type="radio"]');
    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener("click", function () {
            // Remove 'card-selected' class from all cards
            var allCards = document.querySelectorAll('.card-hover');
            allCards.forEach(function (card) {
                card.classList.remove('card-selected');
            });

            // Add 'card-selected' class to the clicked card
            var card = radioButton.closest('.card-hover');
            card.classList.add('card-selected');

            // Call the toggleLink function
            toggleLink();
        });
    });
});



  function toggleLink() {
    var salaryCheckbox = document.getElementById("salaryincomeid");
    var rentCheckbox = document.getElementById("rentincomeid");
    var businessCheckbox = document.getElementById("businessincomeid");
    var sharescapitalgainCheckbox = document.getElementById("sharescapitalgainid");
    var otherincomeCheckbox = document.getElementById("otherincomeid");
    var withholdingadjustableCheckbox = document.getElementById("withholdingadjustableid");
    var card_selected=document.getElementById("card-selected");
    var nextButton = document.getElementById("nextButton");


    
    
  
    // Check which radio button is selected and set the URL accordingly
    if (salaryCheckbox.checked) {
      nextButton.classList.remove("disabled");
      
        nextButton.href = "Salary-Income";
    } else if (rentCheckbox.checked) {
      nextButton.classList.remove("disabled");
      
        nextButton.href = "Rent-Income"; 
     } else if (businessCheckbox.checked) {
      nextButton.classList.remove("disabled");
        // nextButton.href = "Business-Income"; 
     } else if (sharescapitalgainCheckbox.checked) {
      nextButton.classList.remove("disabled");
        // nextButton.href = "Shares-Capital-Gain"; 
         } else if (otherincomeCheckbox.checked) {
      nextButton.classList.remove("disabled");
        // nextButton.href = "Other-Income"; 
         } else if (withholdingadjustableCheckbox.checked) {
      nextButton.classList.remove("disabled");
        nextButton.href = "Withholding-Adjustable-or-Final-Tax"; 
    }
    
    
    else {
        // Set a default URL or disable the button if no radio button is selected
        nextButton.href = "Income-Tax-Filing";
    }
}

</script>


  
  
</body>

</html>
















 <!-- filesContainer3 starts -->
          <div class="filesContainer3" id="filesContainer3">
            <div class="row" id="cloneData3">

              <div class="col-12 col-lg-12">
                <label for="" class="form-label mt-0 mb-1">email registered on their CNIC of all Partners</label>


                <div class="dropdown" id="dropdown3">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                    email registered on their CNIC of all Partners
                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton3">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image3"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                            <input type="file" class="custom-file-input  w-100" id="input-image3" name="email_registered_cnic[]" multiple>
                          </div>
                        </div>
                      </a>
                    </li>
                    


                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder3"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input type="file" class="custom-folder-input w-100" id="uploadfolder3" name="email_registered_cnic[]" multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('email_registered_cnic')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror

                @error('email_registered_cnic.*')
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
                <div id="file-list3"></div>
                <p id="file-summary3"></p>
                <div id="folder-list3"></div>
              </div>


              <div class="col-12 col-lg-8 text-end">
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
                <label for="" class="form-label  mb-1">Mobile number registered on their CNIC of all Partners</label>


                <div class="dropdown" id="dropdown4">
                  <button class="text-start form-control personal-ntn-bottom-border-select btn text-truncate dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                    Mobile number registered on their CNIC of all Partners

                  </button>

                  <ul class="dropdown-menu form-control" aria-labelledby="dropdownMenuButton4">

                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group  ">
                          <div class="custom-file form-control border-0 ml-0">
                            <label class="input-group-text d-inline-block border-0  upload-file-label mr-0 p-0  " for="input-image4"><img src="{{asset('filefolderuploadicon/fileuploadicon.png')}}" class="upload-file-icon" height="14"></label>
                        <input type="file" name="mobile_no_registered_cnic[]" class="custom-file-input  w-100" id="input-image4"  multiple>
                          </div>
                        </div>
                      </a>
                    </li>
                    
        


                    <li class="mt-0 p-0 m-0">
                      <a class="dropdown-item" href="#">
                        <div class="input-group input-group-copy ">
                          <div class="custom-folder form-control   border-0 ml-0">
                            <label class="input-group-text l2 d-inline-block border-0  upload-file-label mr-0 p-0  " for="uploadfolder4"><img src="{{asset('filefolderuploadicon/folderuploadicon.png')}}" class="upload-folder-icon" height="14"></label>
                            <input  type="file" name="mobile_no_registered_cnic[]" class="custom-folder-input w-100" id="uploadfolder4"  multiple webkitdirectory folder>
                          </div>
                        </div>
                      </a>
                    </li>

                  </ul>
                </div>

                @error('mobile_no_registered_cnic')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror
              </div>

                @error('mobile_no_registered_cnic.*')
                <span class="text-danger">
                  <i class="fas fa-exclamation-triangle"></i>
                  {{$message}}
                </span>
                @enderror




            </div>

            <!-- row start -->
            <div class="row ">

              <div class="col-12 col-lg-4">
                <div id="file-list4"></div>
                <p id="file-summary4"></p>
                <div id="folder-list4"></div>
              </div>


              <div class="col-12 col-lg-8 text-end">
                <button type="button" id="AddNewFile4" class="btn mt-1 add-new-file btn-danger">Add New File</button>
              </div>



            </div>
            <!-- row end -->
          </div>
          <!-- filesContainer4 end -->





































          