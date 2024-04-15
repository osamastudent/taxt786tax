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
    .card {
      border-radius: 8px;
      box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
    }

    form {
      border-radius: 8px;
      box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
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


    <div class="row search-bar top-fixed mt-5">
      <div class="col-12 text-end ">
      <form action="{{route('tabSearch')}}" method="GET">

<div class="input-group w-50" style="float: right; border-radius:5px">
<input type="text" name="search" class="form-control w-50" id="searchId" oninput="Search()" placeholder="Search..." style="float: right;">
  <button class="btn btn-dark">Search</button>
  @if(session('error'))
{{session('error')}}
  @endif
</div>
</form>
      </div>
    </div>



    <!-- <div class="row search-bar top-fixed mt-5">
      <div class="col-12 text-end ">
      <input type="text" name="search" class="form-control w-50 mx-3 rounded-pill" id="searchId" oninput="Search()" placeholder="Search..." style="float: right;">


      </div>
    </div> -->


    <!-- both section start here-->
    <div class="both-sections d-lg-flex">

      <!-- section one start here -->
      <div class="section-one">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link active" id="all-tab" onclick="clearSearchBar()" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
          </li>



          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="incometaxt-tab" onclick="clearSearchBar()" data-bs-toggle="tab" data-bs-target="#incometaxt" type="button" role="tab" aria-controls="incometaxt" aria-selected="false">Income Tax Return
          </button>
          </li>

          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="salestax-tab" onclick="clearSearchBar()" data-bs-toggle="tab" data-bs-target="#salestax" type="button" role="tab" aria-controls="salestax" aria-selected="false">Sales Tax Registration</button>
          </li>
          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="company-tab" onclick="clearSearchBar()" data-bs-toggle="tab" data-bs-target="#company" type="button" role="tab" aria-controls="company" aria-selected="false">Company's Registration</button>
          </li>
          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" id="intellectual-tab" onclick="clearSearchBar()" data-bs-toggle="tab" data-bs-target="#intellectual" type="button" role="tab" aria-controls="intellectual" aria-selected="false">intellectual Property</button>
          </li>

          <li class="nav-item mt-3" role="presentation">
            <button class="nav-link" onclick="clearSearchBar()" id="LLC-tab" data-bs-toggle="tab" data-bs-target="#LLC" type="button" role="tab" aria-controls="LLC" aria-selected="false">USA LLC & Tax Filling</button>
          </li>
        </ul>


        <div class="tab-content mt-4" id="myTabContent">

          <div class="tab-pane fade show active " id="all" role="tabpanel" aria-labelledby="all-tab">

            @if($tabIncomeTaxShow->count() > 0 || $tabSalesTax->count() > 0 || $tabCompanyRegistration->count() > 0 || $intellectualProperty->count() > 0 || $UsaLlcTaxFilling->count() > 0)
            <!-- Display data from tabIncomeTaxShow -->
         
          @if($tabIncomeTaxShow->count() > 0)
          @foreach($tabIncomeTaxShow as $values)
           <!-- Section start -->
    <section id="{{$values->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-3 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$values->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($values->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$values->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$values->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$values->requirement}}</p>
                <ul class="text-start px-2">
                  @if($values->text_one)
                  <li>{{$values->text_one}}</li>
                  @else
                  @endif

                  @if($values->text_two)
                  <li>{{$values->text_two}}</li>
                  @else
                  @endif

                  @if($values->text_three)
                  <li>{{$values->text_three}}</li>
                  @else
                  @endif


                  @if($values->text_four)
                  <li>{{$values->text_four}}</li>
                  @else
                  @endif


                  @if($values->text_five)
                  <li>{{$values->text_five}}</li>
                  @else
                  @endif
                  @if($values->text_six)
                  <li>{{$values->text_six}}</li>
                  @else
                  @endif
                  @if($values->text_seven)
                  <li>{{$values->text_seven}}</li>
                  @else
                  @endif

                  @if($values->text_eight)
                  <li>{{$values->text_eight}}</li>
                  @else
                  @endif
                  @if($values->text_nine)
                  <li>{{$values->text_nine}}</li>
                  @else
                  @endif
                  @if($values->text_ten)
                  <li>{{$values->text_ten}}</li>
                  @else
                  @endif
                  @if($values->text_eleven)
                  <li>{{$values->text_eleven}}</li>
                  @else
                  @endif
                  @if($values->text_twelve)
                  <li>{{$values->text_twelve}}</li>
                  @else
                  @endif
                  @if($values->text_thirteen)
                  <li>{{$values->text_thirteen}}</li>
                  @else
                  @endif
                  @if($values->text_fourteen)
                  <li>{{$values->text_fourteen}}</li>
                  @else
                  @endif

                  @if($values->text_fifthteen)
                  <li>{{$values->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($values->text_sixteen)
                  <li>{{$values->text_sixteen}}</li>
                  @else
                  @endif
                  @if($values->text_seventeen)
                  <li>{{$values->text_seventeen}}</li>
                  @else
                  @endif

                  @if($values->text_eighteen)
                  <li>{{$values->text_eighteen}}</li>
                  @else
                  @endif

                  @if($values->text_nineteen)
                  <li>{{$values->text_nineteen}}</li>
                  @else
                  @endif

                  @if($values->text_twenty)
                  <li>{{$values->text_twenty}}</li>
                  @else
                  @endif


                  

                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$values->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticBackdrop{{$values->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$values->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{$values->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mt-0  mb-1">Full Name</label>
                              <input type="text" name="name" required  oninput="checkInputLength(this)" class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="tel" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>
  
  
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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$values->title}}" placeholder="Enter Queries">

                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3" value="">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>

                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>



                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif



            <!-- Display data from tabSalesTax -->
            @if($tabSalesTax->count() > 0)
            @foreach($tabSalesTax as $tabSalesvalues)
            <!-- Section start -->
    <section id="{{$tabSalesvalues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$tabSalesvalues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($tabSalesvalues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$tabSalesvalues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$tabSalesvalues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$tabSalesvalues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($tabSalesvalues->text_one)
                  <li>{{$tabSalesvalues->text_one}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_two)
                  <li>{{$tabSalesvalues->text_two}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_three)
                  <li>{{$tabSalesvalues->text_three}}</li>
                  @else
                  @endif


                  @if($tabSalesvalues->text_four)
                  <li>{{$tabSalesvalues->text_four}}</li>
                  @else
                  @endif


                  @if($tabSalesvalues->text_five)
                  <li>{{$tabSalesvalues->text_five}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_six)
                  <li>{{$tabSalesvalues->text_six}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_seven)
                  <li>{{$tabSalesvalues->text_seven}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_eight)
                  <li>{{$tabSalesvalues->text_eight}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_nine)
                  <li>{{$tabSalesvalues->text_nine}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_ten)
                  <li>{{$tabSalesvalues->text_ten}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_eleven)
                  <li>{{$tabSalesvalues->text_eleven}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_twelve)
                  <li>{{$tabSalesvalues->text_twelve}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_thirteen)
                  <li>{{$tabSalesvalues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_fourteen)
                  <li>{{$tabSalesvalues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_fifthteen)
                  <li>{{$tabSalesvalues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_sixteen)
                  <li>{{$tabSalesvalues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_seventeen)
                  <li>{{$tabSalesvalues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_eighteen)
                  <li>{{$tabSalesvalues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_nineteen)
                  <li>{{$tabSalesvalues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_twenty)
                  <li>{{$tabSalesvalues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#statictwoBackdrop{{$tabSalesvalues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="statictwoBackdrop{{$tabSalesvalues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$tabSalesvalues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$tabSalesvalues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$tabSalesvalues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif

             <!-- Display data from tabCompanyRegistration -->
             @if($tabCompanyRegistration->count() > 0)
            @foreach($tabCompanyRegistration as $tabCompanyRegistrationValues)
            <!-- Section start -->
    <section id="{{$tabCompanyRegistrationValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$tabCompanyRegistrationValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($tabCompanyRegistrationValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$tabCompanyRegistrationValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$tabCompanyRegistrationValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$tabCompanyRegistrationValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($tabCompanyRegistrationValues->text_one)
                  <li>{{$tabCompanyRegistrationValues->text_one}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_two)
                  <li>{{$tabCompanyRegistrationValues->text_two}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_three)
                  <li>{{$tabCompanyRegistrationValues->text_three}}</li>
                  @else
                  @endif


                  @if($tabCompanyRegistrationValues->text_four)
                  <li>{{$tabCompanyRegistrationValues->text_four}}</li>
                  @else
                  @endif


                  @if($tabCompanyRegistrationValues->text_five)
                  <li>{{$tabCompanyRegistrationValues->text_five}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_six)
                  <li>{{$tabCompanyRegistrationValues->text_six}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_seven)
                  <li>{{$tabCompanyRegistrationValues->text_seven}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_eight)
                  <li>{{$tabCompanyRegistrationValues->text_eight}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_nine)
                  <li>{{$tabCompanyRegistrationValues->text_nine}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_ten)
                  <li>{{$tabCompanyRegistrationValues->text_ten}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_eleven)
                  <li>{{$tabCompanyRegistrationValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_twelve)
                  <li>{{$tabCompanyRegistrationValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_thirteen)
                  <li>{{$tabCompanyRegistrationValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_fourteen)
                  <li>{{$tabCompanyRegistrationValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_fifthteen)
                  <li>{{$tabCompanyRegistrationValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_sixteen)
                  <li>{{$tabCompanyRegistrationValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_seventeen)
                  <li>{{$tabCompanyRegistrationValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_eighteen)
                  <li>{{$tabCompanyRegistrationValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_nineteen)
                  <li>{{$tabCompanyRegistrationValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_twenty)
                  <li>{{$tabCompanyRegistrationValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticthreeBackdrop{{$tabCompanyRegistrationValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticthreeBackdrop{{$tabCompanyRegistrationValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$tabCompanyRegistrationValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$tabCompanyRegistrationValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$tabCompanyRegistrationValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif


           <!-- Display data from intellectualProperty -->
           @if($intellectualProperty->count() > 0)
            @foreach($intellectualProperty as $intellectualPropertyValues)
            <!-- Section start -->
    <section id="{{$intellectualPropertyValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$intellectualPropertyValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($intellectualPropertyValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$intellectualPropertyValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$intellectualPropertyValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$intellectualPropertyValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($intellectualPropertyValues->text_one)
                  <li>{{$intellectualPropertyValues->text_one}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_two)
                  <li>{{$intellectualPropertyValues->text_two}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_three)
                  <li>{{$intellectualPropertyValues->text_three}}</li>
                  @else
                  @endif


                  @if($intellectualPropertyValues->text_four)
                  <li>{{$intellectualPropertyValues->text_four}}</li>
                  @else
                  @endif


                  @if($intellectualPropertyValues->text_five)
                  <li>{{$intellectualPropertyValues->text_five}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_six)
                  <li>{{$intellectualPropertyValues->text_six}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_seven)
                  <li>{{$intellectualPropertyValues->text_seven}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_eight)
                  <li>{{$intellectualPropertyValues->text_eight}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_nine)
                  <li>{{$intellectualPropertyValues->text_nine}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_ten)
                  <li>{{$intellectualPropertyValues->text_ten}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_eleven)
                  <li>{{$intellectualPropertyValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_twelve)
                  <li>{{$intellectualPropertyValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_thirteen)
                  <li>{{$intellectualPropertyValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_fourteen)
                  <li>{{$intellectualPropertyValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_fifthteen)
                  <li>{{$intellectualPropertyValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_sixteen)
                  <li>{{$intellectualPropertyValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_seventeen)
                  <li>{{$intellectualPropertyValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_eighteen)
                  <li>{{$intellectualPropertyValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_nineteen)
                  <li>{{$intellectualPropertyValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_twenty)
                  <li>{{$intellectualPropertyValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticfourBackdrop{{$intellectualPropertyValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticfourBackdrop{{$intellectualPropertyValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$intellectualPropertyValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$intellectualPropertyValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" required name="queries" class="form-control" value="{{$intellectualPropertyValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif


 <!-- Display data from UsaLlcTaxFilling -->
 @if($UsaLlcTaxFilling->count() > 0)
            @foreach($UsaLlcTaxFilling as $UsaLlcTaxFillingValues)
            <!-- Section start -->
    <section id="{{$UsaLlcTaxFillingValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$UsaLlcTaxFillingValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($UsaLlcTaxFillingValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$UsaLlcTaxFillingValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$UsaLlcTaxFillingValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$UsaLlcTaxFillingValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($UsaLlcTaxFillingValues->text_one)
                  <li>{{$UsaLlcTaxFillingValues->text_one}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_two)
                  <li>{{$UsaLlcTaxFillingValues->text_two}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_three)
                  <li>{{$UsaLlcTaxFillingValues->text_three}}</li>
                  @else
                  @endif


                  @if($UsaLlcTaxFillingValues->text_four)
                  <li>{{$UsaLlcTaxFillingValues->text_four}}</li>
                  @else
                  @endif


                  @if($UsaLlcTaxFillingValues->text_five)
                  <li>{{$UsaLlcTaxFillingValues->text_five}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_six)
                  <li>{{$UsaLlcTaxFillingValues->text_six}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_seven)
                  <li>{{$UsaLlcTaxFillingValues->text_seven}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_eight)
                  <li>{{$UsaLlcTaxFillingValues->text_eight}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_nine)
                  <li>{{$UsaLlcTaxFillingValues->text_nine}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_ten)
                  <li>{{$UsaLlcTaxFillingValues->text_ten}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_eleven)
                  <li>{{$UsaLlcTaxFillingValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_twelve)
                  <li>{{$UsaLlcTaxFillingValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_thirteen)
                  <li>{{$UsaLlcTaxFillingValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_fourteen)
                  <li>{{$UsaLlcTaxFillingValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_fifthteen)
                  <li>{{$UsaLlcTaxFillingValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_sixteen)
                  <li>{{$UsaLlcTaxFillingValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_seventeen)
                  <li>{{$UsaLlcTaxFillingValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_eighteen)
                  <li>{{$UsaLlcTaxFillingValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_nineteen)
                  <li>{{$UsaLlcTaxFillingValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_twenty)
                  <li>{{$UsaLlcTaxFillingValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticfiveBackdrop{{$UsaLlcTaxFillingValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticfiveBackdrop{{$UsaLlcTaxFillingValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$UsaLlcTaxFillingValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$UsaLlcTaxFillingValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$UsaLlcTaxFillingValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif

           @else
            <p>No Results Found.</p>
            <a href="/Services-Portflio" class="mx-2">Go Back</a>
            @endif


          </div>
          <!-- all tab close here -->
          <!-- income tax registration end here -->
          <div class="tab-pane fade" id="incometaxt" role="tabpanel" aria-labelledby="incometaxt-tab">
          @if($tabIncomeTaxShow->count() > 0)
          @foreach($tabIncomeTaxShow as $values)
           <!-- Section start -->
    <section id="{{$values->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-3 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$values->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($values->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$values->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$values->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$values->requirement}}</p>
                <ul class="text-start px-2">
                  @if($values->text_one)
                  <li>{{$values->text_one}}</li>
                  @else
                  @endif

                  @if($values->text_two)
                  <li>{{$values->text_two}}</li>
                  @else
                  @endif

                  @if($values->text_three)
                  <li>{{$values->text_three}}</li>
                  @else
                  @endif


                  @if($values->text_four)
                  <li>{{$values->text_four}}</li>
                  @else
                  @endif


                  @if($values->text_five)
                  <li>{{$values->text_five}}</li>
                  @else
                  @endif
                  @if($values->text_six)
                  <li>{{$values->text_six}}</li>
                  @else
                  @endif
                  @if($values->text_seven)
                  <li>{{$values->text_seven}}</li>
                  @else
                  @endif

                  @if($values->text_eight)
                  <li>{{$values->text_eight}}</li>
                  @else
                  @endif
                  @if($values->text_nine)
                  <li>{{$values->text_nine}}</li>
                  @else
                  @endif
                  @if($values->text_ten)
                  <li>{{$values->text_ten}}</li>
                  @else
                  @endif
                  @if($values->text_eleven)
                  <li>{{$values->text_eleven}}</li>
                  @else
                  @endif
                  @if($values->text_twelve)
                  <li>{{$values->text_twelve}}</li>
                  @else
                  @endif
                  @if($values->text_thirteen)
                  <li>{{$values->text_thirteen}}</li>
                  @else
                  @endif
                  @if($values->text_fourteen)
                  <li>{{$values->text_fourteen}}</li>
                  @else
                  @endif

                  @if($values->text_fifthteen)
                  <li>{{$values->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($values->text_sixteen)
                  <li>{{$values->text_sixteen}}</li>
                  @else
                  @endif
                  @if($values->text_seventeen)
                  <li>{{$values->text_seventeen}}</li>
                  @else
                  @endif

                  @if($values->text_eighteen)
                  <li>{{$values->text_eighteen}}</li>
                  @else
                  @endif

                  @if($values->text_nineteen)
                  <li>{{$values->text_nineteen}}</li>
                  @else
                  @endif

                  @if($values->text_twenty)
                  <li>{{$values->text_twenty}}</li>
                  @else
                  @endif


                  

                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticBackdropFirst{{$values->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticBackdropFirst{{$values->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$values->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{$values->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mt-0  mb-1">Full Name</label>
                              <input type="text" name="name" required  oninput="checkInputLength(this)" class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>
  
  
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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$values->title}}" placeholder="Enter Queries">

                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3" value="">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>

                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>



                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @else
            
          @foreach($tabIncomeTaxShowTwo as $values)
           <!-- Section start -->
    <section id="{{$values->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-3 p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$values->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($values->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$values->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$values->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$values->requirement}}</p>
                <ul class="text-start px-2">
                  @if($values->text_one)
                  <li>{{$values->text_one}}</li>
                  @else
                  @endif

                  @if($values->text_two)
                  <li>{{$values->text_two}}</li>
                  @else
                  @endif

                  @if($values->text_three)
                  <li>{{$values->text_three}}</li>
                  @else
                  @endif


                  @if($values->text_four)
                  <li>{{$values->text_four}}</li>
                  @else
                  @endif


                  @if($values->text_five)
                  <li>{{$values->text_five}}</li>
                  @else
                  @endif
                  @if($values->text_six)
                  <li>{{$values->text_six}}</li>
                  @else
                  @endif
                  @if($values->text_seven)
                  <li>{{$values->text_seven}}</li>
                  @else
                  @endif

                  @if($values->text_eight)
                  <li>{{$values->text_eight}}</li>
                  @else
                  @endif
                  @if($values->text_nine)
                  <li>{{$values->text_nine}}</li>
                  @else
                  @endif
                  @if($values->text_ten)
                  <li>{{$values->text_ten}}</li>
                  @else
                  @endif
                  @if($values->text_eleven)
                  <li>{{$values->text_eleven}}</li>
                  @else
                  @endif
                  @if($values->text_twelve)
                  <li>{{$values->text_twelve}}</li>
                  @else
                  @endif
                  @if($values->text_thirteen)
                  <li>{{$values->text_thirteen}}</li>
                  @else
                  @endif
                  @if($values->text_fourteen)
                  <li>{{$values->text_fourteen}}</li>
                  @else
                  @endif

                  @if($values->text_fifthteen)
                  <li>{{$values->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($values->text_sixteen)
                  <li>{{$values->text_sixteen}}</li>
                  @else
                  @endif
                  @if($values->text_seventeen)
                  <li>{{$values->text_seventeen}}</li>
                  @else
                  @endif

                  @if($values->text_eighteen)
                  <li>{{$values->text_eighteen}}</li>
                  @else
                  @endif

                  @if($values->text_nineteen)
                  <li>{{$values->text_nineteen}}</li>
                  @else
                  @endif

                  @if($values->text_twenty)
                  <li>{{$values->text_twenty}}</li>
                  @else
                  @endif


                  

                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticBackdropFirst{{$values->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticBackdropFirst{{$values->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$values->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{$values->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mt-0  mb-1">Full Name</label>
                              <input type="text" name="name" required  oninput="checkInputLength(this)" class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>
  
  
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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$values->title}}" placeholder="Enter Queries">

                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3" value="">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>

                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>



                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
         
            @endif

          </div>
          <!-- income tax registration end here -->



          <!-- sales tax registration start here -->
          <div class="tab-pane fade" id="salestax" role="tabpanel" aria-labelledby="salestax-tab">

          <!-- Display data from tabSalesTax -->
          @if($tabSalesTax->count() > 0)
            @foreach($tabSalesTax as $tabSalesvalues)
            <!-- Section start -->
    <section id="{{$tabSalesvalues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$tabSalesvalues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($tabSalesvalues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$tabSalesvalues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$tabSalesvalues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$tabSalesvalues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($tabSalesvalues->text_one)
                  <li>{{$tabSalesvalues->text_one}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_two)
                  <li>{{$tabSalesvalues->text_two}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_three)
                  <li>{{$tabSalesvalues->text_three}}</li>
                  @else
                  @endif


                  @if($tabSalesvalues->text_four)
                  <li>{{$tabSalesvalues->text_four}}</li>
                  @else
                  @endif


                  @if($tabSalesvalues->text_five)
                  <li>{{$tabSalesvalues->text_five}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_six)
                  <li>{{$tabSalesvalues->text_six}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_seven)
                  <li>{{$tabSalesvalues->text_seven}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_eight)
                  <li>{{$tabSalesvalues->text_eight}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_nine)
                  <li>{{$tabSalesvalues->text_nine}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_ten)
                  <li>{{$tabSalesvalues->text_ten}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_eleven)
                  <li>{{$tabSalesvalues->text_eleven}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_twelve)
                  <li>{{$tabSalesvalues->text_twelve}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_thirteen)
                  <li>{{$tabSalesvalues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_fourteen)
                  <li>{{$tabSalesvalues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_fifthteen)
                  <li>{{$tabSalesvalues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_sixteen)
                  <li>{{$tabSalesvalues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_seventeen)
                  <li>{{$tabSalesvalues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_eighteen)
                  <li>{{$tabSalesvalues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_nineteen)
                  <li>{{$tabSalesvalues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_twenty)
                  <li>{{$tabSalesvalues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#statictwoBackdropSecond{{$tabSalesvalues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="statictwoBackdropSecond{{$tabSalesvalues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$tabSalesvalues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$tabSalesvalues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$tabSalesvalues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @else
            @foreach($tabSalesTaxTwo as $tabSalesvalues)
            <!-- Section start -->
    <section id="{{$tabSalesvalues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$tabSalesvalues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($tabSalesvalues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$tabSalesvalues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$tabSalesvalues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$tabSalesvalues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($tabSalesvalues->text_one)
                  <li>{{$tabSalesvalues->text_one}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_two)
                  <li>{{$tabSalesvalues->text_two}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_three)
                  <li>{{$tabSalesvalues->text_three}}</li>
                  @else
                  @endif


                  @if($tabSalesvalues->text_four)
                  <li>{{$tabSalesvalues->text_four}}</li>
                  @else
                  @endif


                  @if($tabSalesvalues->text_five)
                  <li>{{$tabSalesvalues->text_five}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_six)
                  <li>{{$tabSalesvalues->text_six}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_seven)
                  <li>{{$tabSalesvalues->text_seven}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_eight)
                  <li>{{$tabSalesvalues->text_eight}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_nine)
                  <li>{{$tabSalesvalues->text_nine}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_ten)
                  <li>{{$tabSalesvalues->text_ten}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_eleven)
                  <li>{{$tabSalesvalues->text_eleven}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_twelve)
                  <li>{{$tabSalesvalues->text_twelve}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_thirteen)
                  <li>{{$tabSalesvalues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_fourteen)
                  <li>{{$tabSalesvalues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_fifthteen)
                  <li>{{$tabSalesvalues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_sixteen)
                  <li>{{$tabSalesvalues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_seventeen)
                  <li>{{$tabSalesvalues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($tabSalesvalues->text_eighteen)
                  <li>{{$tabSalesvalues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_nineteen)
                  <li>{{$tabSalesvalues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($tabSalesvalues->text_twenty)
                  <li>{{$tabSalesvalues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#statictwoBackdropSecond{{$tabSalesvalues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="statictwoBackdropSecond{{$tabSalesvalues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$tabSalesvalues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$tabSalesvalues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$tabSalesvalues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif
         

          </div>
          <!-- sales tax registration end here -->


          <!-- company registration start here -->
          <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">

          @if($tabCompanyRegistration->count() > 0)
            @foreach($tabCompanyRegistration as $tabCompanyRegistrationValues)
            <!-- Section start -->
    <section id="{{$tabCompanyRegistrationValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$tabCompanyRegistrationValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($tabCompanyRegistrationValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$tabCompanyRegistrationValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$tabCompanyRegistrationValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$tabCompanyRegistrationValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($tabCompanyRegistrationValues->text_one)
                  <li>{{$tabCompanyRegistrationValues->text_one}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_two)
                  <li>{{$tabCompanyRegistrationValues->text_two}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_three)
                  <li>{{$tabCompanyRegistrationValues->text_three}}</li>
                  @else
                  @endif


                  @if($tabCompanyRegistrationValues->text_four)
                  <li>{{$tabCompanyRegistrationValues->text_four}}</li>
                  @else
                  @endif


                  @if($tabCompanyRegistrationValues->text_five)
                  <li>{{$tabCompanyRegistrationValues->text_five}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_six)
                  <li>{{$tabCompanyRegistrationValues->text_six}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_seven)
                  <li>{{$tabCompanyRegistrationValues->text_seven}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_eight)
                  <li>{{$tabCompanyRegistrationValues->text_eight}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_nine)
                  <li>{{$tabCompanyRegistrationValues->text_nine}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_ten)
                  <li>{{$tabCompanyRegistrationValues->text_ten}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_eleven)
                  <li>{{$tabCompanyRegistrationValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_twelve)
                  <li>{{$tabCompanyRegistrationValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_thirteen)
                  <li>{{$tabCompanyRegistrationValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_fourteen)
                  <li>{{$tabCompanyRegistrationValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_fifthteen)
                  <li>{{$tabCompanyRegistrationValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_sixteen)
                  <li>{{$tabCompanyRegistrationValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_seventeen)
                  <li>{{$tabCompanyRegistrationValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_eighteen)
                  <li>{{$tabCompanyRegistrationValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_nineteen)
                  <li>{{$tabCompanyRegistrationValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_twenty)
                  <li>{{$tabCompanyRegistrationValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticthreeBackdropThird{{$tabCompanyRegistrationValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticthreeBackdropThird{{$tabCompanyRegistrationValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$tabCompanyRegistrationValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$tabCompanyRegistrationValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$tabCompanyRegistrationValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @else
            @foreach($tabCompanyRegistrationTwo as $tabCompanyRegistrationValues)
            <!-- Section start -->
    <section id="{{$tabCompanyRegistrationValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$tabCompanyRegistrationValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($tabCompanyRegistrationValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$tabCompanyRegistrationValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$tabCompanyRegistrationValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$tabCompanyRegistrationValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($tabCompanyRegistrationValues->text_one)
                  <li>{{$tabCompanyRegistrationValues->text_one}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_two)
                  <li>{{$tabCompanyRegistrationValues->text_two}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_three)
                  <li>{{$tabCompanyRegistrationValues->text_three}}</li>
                  @else
                  @endif


                  @if($tabCompanyRegistrationValues->text_four)
                  <li>{{$tabCompanyRegistrationValues->text_four}}</li>
                  @else
                  @endif


                  @if($tabCompanyRegistrationValues->text_five)
                  <li>{{$tabCompanyRegistrationValues->text_five}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_six)
                  <li>{{$tabCompanyRegistrationValues->text_six}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_seven)
                  <li>{{$tabCompanyRegistrationValues->text_seven}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_eight)
                  <li>{{$tabCompanyRegistrationValues->text_eight}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_nine)
                  <li>{{$tabCompanyRegistrationValues->text_nine}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_ten)
                  <li>{{$tabCompanyRegistrationValues->text_ten}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_eleven)
                  <li>{{$tabCompanyRegistrationValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_twelve)
                  <li>{{$tabCompanyRegistrationValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_thirteen)
                  <li>{{$tabCompanyRegistrationValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_fourteen)
                  <li>{{$tabCompanyRegistrationValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_fifthteen)
                  <li>{{$tabCompanyRegistrationValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_sixteen)
                  <li>{{$tabCompanyRegistrationValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_seventeen)
                  <li>{{$tabCompanyRegistrationValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($tabCompanyRegistrationValues->text_eighteen)
                  <li>{{$tabCompanyRegistrationValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_nineteen)
                  <li>{{$tabCompanyRegistrationValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($tabCompanyRegistrationValues->text_twenty)
                  <li>{{$tabCompanyRegistrationValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticthreeBackdropThird{{$tabCompanyRegistrationValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticthreeBackdropThird{{$tabCompanyRegistrationValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$tabCompanyRegistrationValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$tabCompanyRegistrationValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$tabCompanyRegistrationValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif

          </div>
          <!-- company registration end here -->


          <!-- intellectual Property start here -->
          <div class="tab-pane fade" id="intellectual" role="tabpanel" aria-labelledby="intellectual-tab">

             <!-- Display data from intellectualProperty -->
           @if($intellectualProperty->count() > 0)
            @foreach($intellectualProperty as $intellectualPropertyValues)
            <!-- Section start -->
    <section id="{{$intellectualPropertyValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$intellectualPropertyValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($intellectualPropertyValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$intellectualPropertyValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$intellectualPropertyValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$intellectualPropertyValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($intellectualPropertyValues->text_one)
                  <li>{{$intellectualPropertyValues->text_one}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_two)
                  <li>{{$intellectualPropertyValues->text_two}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_three)
                  <li>{{$intellectualPropertyValues->text_three}}</li>
                  @else
                  @endif


                  @if($intellectualPropertyValues->text_four)
                  <li>{{$intellectualPropertyValues->text_four}}</li>
                  @else
                  @endif


                  @if($intellectualPropertyValues->text_five)
                  <li>{{$intellectualPropertyValues->text_five}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_six)
                  <li>{{$intellectualPropertyValues->text_six}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_seven)
                  <li>{{$intellectualPropertyValues->text_seven}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_eight)
                  <li>{{$intellectualPropertyValues->text_eight}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_nine)
                  <li>{{$intellectualPropertyValues->text_nine}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_ten)
                  <li>{{$intellectualPropertyValues->text_ten}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_eleven)
                  <li>{{$intellectualPropertyValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_twelve)
                  <li>{{$intellectualPropertyValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_thirteen)
                  <li>{{$intellectualPropertyValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_fourteen)
                  <li>{{$intellectualPropertyValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_fifthteen)
                  <li>{{$intellectualPropertyValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_sixteen)
                  <li>{{$intellectualPropertyValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_seventeen)
                  <li>{{$intellectualPropertyValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_eighteen)
                  <li>{{$intellectualPropertyValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_nineteen)
                  <li>{{$intellectualPropertyValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_twenty)
                  <li>{{$intellectualPropertyValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticfourBackdropFourth{{$intellectualPropertyValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticfourBackdropFourth{{$intellectualPropertyValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$intellectualPropertyValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$intellectualPropertyValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" required name="queries" class="form-control" value="{{$intellectualPropertyValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach

            @else

@foreach($intellectualPropertyTwo as $intellectualPropertyValues)
            <!-- Section start -->
    <section id="{{$intellectualPropertyValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$intellectualPropertyValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($intellectualPropertyValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$intellectualPropertyValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$intellectualPropertyValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$intellectualPropertyValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($intellectualPropertyValues->text_one)
                  <li>{{$intellectualPropertyValues->text_one}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_two)
                  <li>{{$intellectualPropertyValues->text_two}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_three)
                  <li>{{$intellectualPropertyValues->text_three}}</li>
                  @else
                  @endif


                  @if($intellectualPropertyValues->text_four)
                  <li>{{$intellectualPropertyValues->text_four}}</li>
                  @else
                  @endif


                  @if($intellectualPropertyValues->text_five)
                  <li>{{$intellectualPropertyValues->text_five}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_six)
                  <li>{{$intellectualPropertyValues->text_six}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_seven)
                  <li>{{$intellectualPropertyValues->text_seven}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_eight)
                  <li>{{$intellectualPropertyValues->text_eight}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_nine)
                  <li>{{$intellectualPropertyValues->text_nine}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_ten)
                  <li>{{$intellectualPropertyValues->text_ten}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_eleven)
                  <li>{{$intellectualPropertyValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_twelve)
                  <li>{{$intellectualPropertyValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_thirteen)
                  <li>{{$intellectualPropertyValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_fourteen)
                  <li>{{$intellectualPropertyValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_fifthteen)
                  <li>{{$intellectualPropertyValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_sixteen)
                  <li>{{$intellectualPropertyValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_seventeen)
                  <li>{{$intellectualPropertyValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($intellectualPropertyValues->text_eighteen)
                  <li>{{$intellectualPropertyValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_nineteen)
                  <li>{{$intellectualPropertyValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($intellectualPropertyValues->text_twenty)
                  <li>{{$intellectualPropertyValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticfourBackdropFourth{{$intellectualPropertyValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticfourBackdropFourth{{$intellectualPropertyValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$intellectualPropertyValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$intellectualPropertyValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" required name="queries" class="form-control" value="{{$intellectualPropertyValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif

          </div>
          <!-- intellectual Property end here -->





          <!-- usa LLc & tax fillig start here -->
          <div class="tab-pane fade" id="LLC" role="tabpanel" aria-labelledby="LLC-tab">

            
 <!-- Display data from UsaLlcTaxFilling -->
 @if($UsaLlcTaxFilling->count() > 0)
            @foreach($UsaLlcTaxFilling as $UsaLlcTaxFillingValues)
            <!-- Section start -->
    <section id="{{$UsaLlcTaxFillingValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$UsaLlcTaxFillingValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($UsaLlcTaxFillingValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$UsaLlcTaxFillingValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$UsaLlcTaxFillingValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$UsaLlcTaxFillingValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($UsaLlcTaxFillingValues->text_one)
                  <li>{{$UsaLlcTaxFillingValues->text_one}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_two)
                  <li>{{$UsaLlcTaxFillingValues->text_two}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_three)
                  <li>{{$UsaLlcTaxFillingValues->text_three}}</li>
                  @else
                  @endif


                  @if($UsaLlcTaxFillingValues->text_four)
                  <li>{{$UsaLlcTaxFillingValues->text_four}}</li>
                  @else
                  @endif


                  @if($UsaLlcTaxFillingValues->text_five)
                  <li>{{$UsaLlcTaxFillingValues->text_five}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_six)
                  <li>{{$UsaLlcTaxFillingValues->text_six}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_seven)
                  <li>{{$UsaLlcTaxFillingValues->text_seven}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_eight)
                  <li>{{$UsaLlcTaxFillingValues->text_eight}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_nine)
                  <li>{{$UsaLlcTaxFillingValues->text_nine}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_ten)
                  <li>{{$UsaLlcTaxFillingValues->text_ten}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_eleven)
                  <li>{{$UsaLlcTaxFillingValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_twelve)
                  <li>{{$UsaLlcTaxFillingValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_thirteen)
                  <li>{{$UsaLlcTaxFillingValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_fourteen)
                  <li>{{$UsaLlcTaxFillingValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_fifthteen)
                  <li>{{$UsaLlcTaxFillingValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_sixteen)
                  <li>{{$UsaLlcTaxFillingValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_seventeen)
                  <li>{{$UsaLlcTaxFillingValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_eighteen)
                  <li>{{$UsaLlcTaxFillingValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_nineteen)
                  <li>{{$UsaLlcTaxFillingValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_twenty)
                  <li>{{$UsaLlcTaxFillingValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticfiveBackdropFifth{{$UsaLlcTaxFillingValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticfiveBackdropFifth{{$UsaLlcTaxFillingValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$UsaLlcTaxFillingValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$UsaLlcTaxFillingValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$UsaLlcTaxFillingValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @else
            @foreach($UsaLlcTaxFillingTwo as $UsaLlcTaxFillingValues)
            <!-- Section start -->
    <section id="{{$UsaLlcTaxFillingValues->title}}" class="section">
            <!-- card start -->
            <!-- card-body start -->
            <div class="card mt-5 cardtwo p-4 checkmark-li-list">
              <div class="card-body ">
                <!-- row start -->
                <div class="row">
                  <div class="col-6">
                    <!-- <h6 class="searchHeading">NTN Registration Salaried</h5> -->
                    <h6 class="searchHeading">{{$UsaLlcTaxFillingValues->title}}</h5>
                  </div>

                  <div class="col-6 text-end">
                    <p class="d-inline ntn-tab-right-content justify-content-end">Manufacturer: Rs. {{number_format($UsaLlcTaxFillingValues->price)}}</p>

                  </div>

                  <div class="col-6 ">
                    <!-- <p>Completion Time:</p> -->
                    <p>{{$UsaLlcTaxFillingValues->time}}</p>
                  </div>

                  <div class="col-6 text-end">
                    <!-- <p>1 - 2 Working Days</p> -->
                    <p>{{$UsaLlcTaxFillingValues->working_days}}</p>
                  </div>
                </div>
                <!-- row end -->




                <p>{{$UsaLlcTaxFillingValues->requirement}}</p>
                <ul class="text-start px-2">
                  @if($UsaLlcTaxFillingValues->text_one)
                  <li>{{$UsaLlcTaxFillingValues->text_one}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_two)
                  <li>{{$UsaLlcTaxFillingValues->text_two}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_three)
                  <li>{{$UsaLlcTaxFillingValues->text_three}}</li>
                  @else
                  @endif


                  @if($UsaLlcTaxFillingValues->text_four)
                  <li>{{$UsaLlcTaxFillingValues->text_four}}</li>
                  @else
                  @endif


                  @if($UsaLlcTaxFillingValues->text_five)
                  <li>{{$UsaLlcTaxFillingValues->text_five}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_six)
                  <li>{{$UsaLlcTaxFillingValues->text_six}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_seven)
                  <li>{{$UsaLlcTaxFillingValues->text_seven}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_eight)
                  <li>{{$UsaLlcTaxFillingValues->text_eight}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_nine)
                  <li>{{$UsaLlcTaxFillingValues->text_nine}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_ten)
                  <li>{{$UsaLlcTaxFillingValues->text_ten}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_eleven)
                  <li>{{$UsaLlcTaxFillingValues->text_eleven}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_twelve)
                  <li>{{$UsaLlcTaxFillingValues->text_twelve}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_thirteen)
                  <li>{{$UsaLlcTaxFillingValues->text_thirteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_fourteen)
                  <li>{{$UsaLlcTaxFillingValues->text_fourteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_fifthteen)
                  <li>{{$UsaLlcTaxFillingValues->text_fifthteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_sixteen)
                  <li>{{$UsaLlcTaxFillingValues->text_sixteen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_seventeen)
                  <li>{{$UsaLlcTaxFillingValues->text_seventeen}}</li>
                  @else
                  @endif
                  @if($UsaLlcTaxFillingValues->text_eighteen)
                  <li>{{$UsaLlcTaxFillingValues->text_eighteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_nineteen)
                  <li>{{$UsaLlcTaxFillingValues->text_nineteen}}</li>
                  @else
                  @endif

                  @if($UsaLlcTaxFillingValues->text_twenty)
                  <li>{{$UsaLlcTaxFillingValues->text_twenty}}</li>
                  @else
                  @endif
                </ul>

                <div class=" bd-highlight ">
                  <div class=" width-setting 50 bd-highlight"></div>
                  <div class=" d-flex flex-shrink-1 bd-highlight justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn request-for-call" data-bs-toggle="modal" data-bs-target="#staticfiveBackdropFifth{{$UsaLlcTaxFillingValues->id}}">
                      Request For Call
                    </button>

                    <!-- Modal -->
                    <div class="modal p-4 fade" id="staticfiveBackdropFifth{{$UsaLlcTaxFillingValues->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$UsaLlcTaxFillingValues->id}}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel{{$UsaLlcTaxFillingValues->id}}">Have queries?
                              Talk to an expert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="{{route('requestForCall')}}" method="post" class="px-4 pb-3 pt-1 mt-0 mb-2">
                              @csrf
                              <label for="" class="form-label mb-1">Full Name</label>
                              <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                              @error('name')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <label for="" class="form-label mb-1 mt-3">Email</label>
                              <input type="email" name="email" required class="form-control" placeholder="Enter Email">
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

                              
                              <label for="" class="form-label mb-1 mt-3">Phone Number</label>
                              <input type="text" name="mobile_no" required pattern="[0-9]*" class="form-control" placeholder="Enter Phone Number">
                              <p class="text-danger error-style text-capitalize" style="font-size: 12px;">Please enter only digits in the phone number field.</p>

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

                              <label for="" class="form-label mb-1 mt-0">Queries</label>
                              <input type="text" name="queries" required class="form-control" value="{{$UsaLlcTaxFillingValues->title}}" placeholder="Enter Queries">


                              @error('queries')
                              <div class="row">
                                <div class="col-12 ">
                                  <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                  </span>
                                </div>
                              </div>
                              @enderror

                              <button type="submit" class="btn btn-dark text-light form-control mt-3">Request For Call</button>

                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <form action="/whatsapp" class="mx-2" method="GET" onsubmit="redirectToWhatsApp(); return false;">
                      <button type="submit" class="btn whatsapp-icon-btn"><img class="whatsapp-icon" src="{{asset('images/newimages/whatsapp.png')}}" alt=""></button>
                    </form>
                    </form>
                  </div>
                </div>
              </div>

              <!-- card-body end -->
            </div>
            <!-- card end -->
            </section>
            @endforeach
            @endif

          </div>
          <!-- usa llc & tax filling end here -->




        </div>

      </div>
      <!-- section one end here -->


      <!-- sectio two start here -->

      <div class="section-two  mx-lg-3 mt-4">
        <!-- top picks start here -->
        <div class="row sticky-card mt-5">
          <div class="col-12  ">

            <div class="card ">
              <div class="card-title  pt-3 text-center">
              <h5 class="bg-dark text-white p-1 w-50 ">Top Picks</h5>
                @foreach($specificItem as $specificItemvalues)
                <img class="mx-auto mt-3" src="{{asset('/specificimag/'.$specificItemvalues->image)}}" alt="" height="60" alt="kasbat&co">
                
                <h6 class="searchHeading text-center mt-5">{{$specificItemvalues->image_heading}}</h5>
                @endforeach
              </div>
              <ul class="list-group text-center mt-3  list-group-flush">
              
              @foreach([$intellectualPropertySidebar, $UsaLlcTaxFillingSidebar, $tabIncomeTaxSidebar, $tabSalesTaxSidebar, $tabCompanyRegistrationSidebar] as $category)
    @foreach($category as $value)
        @foreach($specificItem as $specificItemvalues)
            @if(in_array($value->title, [$specificItemvalues->item_one, $specificItemvalues->item_two,$specificItemvalues->item_three]))
           <!-- <li class="list-group-item">
    <a href="#{{$value->title}}" class="text-decoration-none specific-items" >
        {{$value->title}}
    </a>
</li> -->

<li class="list-group-item text-decoration-none specific-items">
                    <a href="/slugg/{{$value->title}}/{{$value->title}}" class="text-decoration-none specific-items">
                        {{$value->title}}
                    </a>
                </li>
            @endif
        @endforeach
    @endforeach
@endforeach 

              </ul>
            </div>



            <div class="card mt-3">
              <div class="card-title pt-3 text-center">
<h5 class="bg-dark text-white p-1 w-75 ">EXTRA DISCOUNT!</h5>

                @foreach($specificItem as $specificItemvalues)
                <img class="mx-auto mt-3" src="{{asset('/specificimag/'.$specificItemvalues->image)}}" alt="" height="60" alt="kasbat&co">
                
                <h6 class="searchHeading text-center mt-3">{{$specificItemvalues->image_heading}}</h5>
                @endforeach
              </div>
              <ul class="list-group text-center mt-3  list-group-flush">

@foreach([$intellectualPropertySidebar, $UsaLlcTaxFillingSidebar, $tabIncomeTaxSidebar, $tabSalesTaxSidebar, $tabCompanyRegistrationSidebar] as $category)
    @foreach($category as $value)
        @foreach($specificItem as $specificItemvalues)
            @if(in_array($value->title, [$specificItemvalues->item_four, $specificItemvalues->item_five,$specificItemvalues->item_six]))
            <li class="list-group-item text-decoration-none specific-items">
                    <a href="/slugg/{{$value->title}}/{{$value->title}}" class="text-decoration-none specific-items">
                        {{$value->title}}
                    </a>
                </li>

            @endif
        @endforeach
    @endforeach
@endforeach 
               
              </ul>
            </div>


          </div>

        </div><!-- top picks end here here -->
      </div><!-- sectio two end here -->

    </div>
    <!-- both section end here-->


  </div><!-- container end here -->
  
  
  <script>
    function redirectToWhatsApp() {
      window.open('https://wa.me/{{$whatsapp}}', '_blank');
    }
  </script>



<!-- JavaScript code for the search functionality -->
<script>
  function Search() {
    // alert("Aaa");
    var searchTerm = document.getElementById('searchId').value.toLowerCase();
    var activeTab = document.querySelector('.nav-link.active');
    var activeTabContentId = activeTab.getAttribute('data-bs-target').substring(1);
    var activeTabContent = document.getElementById(activeTabContentId);
    var sections = activeTabContent.getElementsByClassName('section');

    for (var i = 0; i < sections.length; i++) {
      var section = sections[i];
      var title = section.querySelector('.searchHeading').textContent.toLowerCase();

      if (title.includes(searchTerm)) {
        section.style.display = 'block';
      } else {
        section.style.display = 'none';
      }
    }
  }


 function clearSearchBar() {
    document.getElementById('searchId').value = '';
    // window.location.href = "Services-Portflio";
}

</script>


  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>
</body>

</html>












