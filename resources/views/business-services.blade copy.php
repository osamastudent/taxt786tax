<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--============== booot5 =============-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- font awesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <!-- _____ Slick Slider _____ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
  <!-- boot -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="/index.css">
  <link rel="stylesheet" href="/allcss/business-servicess.css">

  <link rel="icon" href="{{asset('logotitle3.jpg')}}">
  <style>
    .card{
      border-radius: 8px;
      box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; 

    }
  </style>
  <title>Services Portfolio</title>
</head>

<body>
  @include('navbar')
  <hr>
  <!-- container start -->
  <div class="container  mt-5 ">
    <!-- <span><a href="">Home</a> / <a href=""> Business Services</a></span> -->
    <nav aria-label="breadcrumb ">
      <span><a href="" class="text-decoration-none text-dark home" style="font-weight:5contr00">Home</a> / <a href="" class="text-decoration-none text-dark"> Business Services</a></span>
    </nav>


    <h3 class="business-services-title mt-4">Our business services</h3>
    <p class="mt-3">Registering a business can be a quite stressful. Worry not! Get expert assistance on how and which business structure to select and start your entrepreneurial journey with a bang!
    </p>



    <div class="row w-75 mt-5">
      <div class="col-12 text-end ">
        <input type="text" name="search" class="form-control w-50" id="searchId" onkeyup="Search()" placeholder="Search..." style="float: right; border-radius:5px">
      </div>
    </div>


    <!-- both section start here-->
    <div class="both-sections d-lg-flex">

      <!-- section one start here -->
      <div class="section-one w-75">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
          </li>



          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="incometaxt-tab" data-bs-toggle="tab" data-bs-target="#incometaxt" type="button" role="tab" aria-controls="incometaxt" aria-selected="false">Income Tax Return</button>
          </li>

          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="salestax-tab" data-bs-toggle="tab" data-bs-target="#salestax" type="button" role="tab" aria-controls="salestax" aria-selected="false">Sales Tax Registration</button>
          </li>
          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="company-tab" data-bs-toggle="tab" data-bs-target="#company" type="button" role="tab" aria-controls="company" aria-selected="false">Company's Registration</button>
          </li>
          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="intellectual-tab" data-bs-toggle="tab" data-bs-target="#intellectual" type="button" role="tab" aria-controls="intellectual" aria-selected="false">intellectual Property</button>
          </li>

          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="LLC-tab" data-bs-toggle="tab" data-bs-target="#LLC" type="button" role="tab" aria-controls="LLC" aria-selected="false">USA LLC & Tax Filling</button>
          </li>
        </ul>


        <div class="tab-content mt-4" id="myTabContent">

          <div class="tab-pane fade show active " id="all" role="tabpanel" aria-labelledby="all-tab">
            
          
          <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading">NTN Registration Salaried</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>
                    <p class=" ntn-tab-right-content justify-content-end">Other than Manufacturer: Rs. 15,000 </p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Color copy of CNIC</li>
                  <li>Latest paid electricity bill</li>
                  <li>Phone Number </li>
                  <li>Phone Number</li>
                  <li>Email address</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->



             <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading"> Registration</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>
                    <p class=" ntn-tab-right-content justify-content-end">Other than Manufacturer: Rs. 15,000 </p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Color copy of CNIC</li>
                  <li>Latest paid electricity bill</li>
                  <li>Phone Number </li>
                  <li>Phone Number</li>
                  <li>Email address</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->



             <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading">greate</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>
                    <p class=" ntn-tab-right-content justify-content-end">Other than Manufacturer: Rs. 15,000 </p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Color copy of CNIC</li>
                  <li>Latest paid electricity bill</li>
                  <li>Phone Number </li>
                  <li>Phone Number</li>
                  <li>Email address</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->


          </div>


          <!-- income tax registration end here -->
          <div class="tab-pane fade" id="incometaxt" role="tabpanel" aria-labelledby="incometaxt-tab">

             <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading">NTN Registration Salaried</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>
                    <p class=" ntn-tab-right-content justify-content-end">Other than Manufacturer: Rs. 15,000 </p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Color copy of CNIC</li>
                  <li>Latest paid electricity bill</li>
                  <li>Phone Number </li>
                  <li>Phone Number</li>
                  <li>Email address</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->




              <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading">NTN Registration Business</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Color copy of CNIC</li>
                  <li>Latest paid electricity bill</li>
                  <li>Phone Number </li>
                  <li>Phone Number</li>
                  <li>Email address</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->

          </div>
          <!-- income tax registration end here -->

          <!-- sales tax registration start here -->
          <div class="tab-pane fade" id="salestax" role="tabpanel" aria-labelledby="salestax-tab">

            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading">GST Registration</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>
                    <p class=" ntn-tab-right-content justify-content-end">Other than Manufacturer: Rs. 15,000 </p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Bank Account Certificate</li>
                  <li>Acquisition Date, Capacity and Business Activity</li>
                  <li>Phone Number </li>
                  <li>Particulars of all branches (if any)</li>
                  <li>Authorization of principal Officer</li>
                  <li>GPS-tagged photographs of the business premises</li>
                  <li>Consumer number with the gas and electricity supplier along with pictures of utilities meter</li>
                  <li>GPS-tagged photographs of machinery and industrial electricity or gas meter installed (Manufacturer only)</li>
                  <li>
                    Color copy of CNIC's of Partners</li>
                  <li>Rent agreement/ownership docs of Office premises</li>
                  <li>
                    Latest paid electricity bill</li>
                  <li>Biometric Verification</li>
                  <li>Post Verification (Manufacturer only)</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->

          </div>
          <!-- sales tax registration end here -->


          <!-- company registration start here -->
          <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
            
  <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading">Private Limited Company Registration</h5>
                    <p style="color: #a6a6a6; font-size:13px">(Other than Licensed entity)</p>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>
                    <p class=" ntn-tab-right-content justify-content-end">Other than Manufacturer: Rs. 15,000 </p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Bank Account Certificate</li>
                  <li>Acquisition Date, Capacity and Business Activity</li>
                  <li>Phone Number </li>
                  <li>Particulars of all branches (if any)</li>
                  <li>Authorization of principal Officer</li>
                  <li>GPS-tagged photographs of the business premises</li>
                  <li>Consumer number with the gas and electricity supplier along with pictures of utilities meter</li>
                  <li>GPS-tagged photographs of machinery and industrial electricity or gas meter installed (Manufacturer only)</li>
                  <li>
                    Color copy of CNIC's of Partners</li>
                  <li>Rent agreement/ownership docs of Office premises</li>
                  <li>
                    Latest paid electricity bill</li>
                  <li>Biometric Verification</li>
                  <li>Post Verification (Manufacturer only)</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->


          </div>
          <!-- company registration end here -->


          <!-- intellectual Property start here -->
          <div class="tab-pane fade" id="intellectual" role="tabpanel" aria-labelledby="intellectual-tab">
           
 <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <h6 class="searchHeading">Trademark Registration</h6>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Color copy of CNIC</li>
                  <li>Latest paid electricity bill</li>
                  <li>Phone Number </li>
                  <li>Phone Number</li>
                  <li>Email address</li>
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->
          </div>
          <!-- intellectual Property end here -->





          <!-- usa LLc & tax fillig start here -->
          <div class="tab-pane fade" id="LLC" role="tabpanel" aria-labelledby="LLC-tab">
          
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-7">
                    <h6 class="searchHeading">Company Formation in USA - LLC / Inc. (C Corp)</h6>
                  </div>

                  <div class="col-5 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Bank Account Certificate</li>
                  <li>Acquisition Date, Capacity and Business Activity</li>
                  
                  
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->


             <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-7">
                    <h6 class="searchHeading">Employer Identification Number (EIN)</h6>
                  </div>

                  <div class="col-5 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. 18,000</p>

                  </div>

                  <div class="col-6 ">
                    <p>Completion Time:</p>
                  </div>

                  <div class="col-6 text-end">
                    <p>1 - 2 Working Days</p>
                  </div>
                </div>
                <!-- row end -->




                <p>Requirements:</p>
                <ul class="text-start px-2">
                  <li>Bank Account Certificate</li>
                  <li>Acquisition Date, Capacity and Business Activity</li>
                  
                  
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <button class="btn btn-primary request-for-call">Request For Call</button>
                    <button class="btn whatsapp-icon-btn py-1 mx-2 "><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                  </div>
                </div>
              </div>
              
            <!-- card-body end -->
            </div>
            <!-- card end -->

          </div>
          <!-- usa llc & tax filling end here -->




        </div>

      </div>
      <!-- section one end here -->


      <!-- sectio two start here -->

      <div class="section-two">
        <!-- top picks start here -->
        <div class="row top-pickss">
          <div class="col-12 top-picks ">

            <div class="card ">
              <div class="card-title mt-5 pt-3">
                <img class="d-flex mx-auto " src="{{asset('images/newimages/whatsapp.png')}}" alt="">
                <h6 class="searchHeading text-center mt-5">USA LLC</h5>
              </div>
              <ul class="list-group text-center mt-3  list-group-flush">

                <li class="list-group-item">Company Formation</li>
                <li class="list-group-item">USA Bank Account</li>
                <li class="list-group-item">Tax Fillig</li>
              </ul>
            </div>



            <div class="card mt-3">
              <div class="card-title mt-5 pt-3">
                <img class="d-flex mx-auto " src="{{asset('images/newimages/whatsapp.png')}}" alt="">
                <h6 class="searchHeading text-center mt-5">USA LLC</h5>
              </div>
              <ul class="list-group text-center mt-3  list-group-flush">

                <li class="list-group-item">Company Formation</li>
                <li class="list-group-item">USA Bank Account</li>
                <li class="list-group-item">Tax Fillig</li>
              </ul>
            </div>


          </div>

        </div><!-- top picks end here here -->
      </div><!-- sectio two end here -->

    </div>
    <!-- both section end here-->


  </div><!-- container end here -->




  
  <!-- <script>
function Search() {
    let searchId = document.getElementById("searchId").value.toUpperCase();
    let tabContents = document.getElementsByClassName("tab-pane");

    for (var i = 0; i < tabContents.length; i++) {
        let checkmarklilist = tabContents[i].getElementsByClassName("checkmark-li-list");

        for (var j = 0; j < checkmarklilist.length; j++) {
            let cardbody = checkmarklilist[j].getElementsByClassName("card-body")[0];

            if (cardbody) {
                let textValue = cardbody.textContent || cardbody.innerText;

                if (textValue.toUpperCase().indexOf(searchId) > -1) {
                    checkmarklilist[j].style.display = "";
                } else {
                    checkmarklilist[j].style.display = "none";
                }
            }
        }
    }
}
</script> -->






  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>
</body>

</html>