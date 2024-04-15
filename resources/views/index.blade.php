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
  <link rel="stylesheet" href="/allcss/horizontalverticalslider.css">
  <link rel="stylesheet" href="/allcss/business-servicess.css">
  

  <link rel="icon" href="{{asset('logotitle3.jpg')}}">
  <title>786tax - Income Tax Filing | NTN Registration | Tax Services</title>

</head>

<body>
  @include('navbar')




  <hr class="hr3" id="hr3" style="display: none;">

  <hr class="hr2">
  <hr class="hr2" id="hr2" style="display: none;">



  <!-- header star -->

  <div class="alert  header " role="alert" style="position: static;">
    <div class="container ">
      <div class="row ">

        <div class="col-12 col-sm-12 col-md-12 px-0 col-lg-8  col-xl-8">

          <div class="header-content mt-md-5  mx-md-3 px-1   my-sm-5 ">
            <!-- <p class="header-title ">YOUR CORPORATE SERVICES, INCOME & SALES TAX PARTNER. 786Tax</p> -->

            @if($showHomePageContent)
            @if($showHomePageContent->sec_one_h_one)
            <p class="header-title">{{ $showHomePageContent->sec_one_h_one }}</p>
            {{--@else
        <p>sec_one_h_one is present but has no content</p>--}}
            @endif
            @else
            <p>No data available</p>
            @endif

            <!-- Display other fields as needed -->


            @if($showHomePageContent)
            @if($showHomePageContent->sec_one_h_two)
            <div class="header-description ">{{ $showHomePageContent->sec_one_h_two }}</div>
            @else

            @endif
            @else
            <p>No data available</p>
            @endif



            @if($showHomePageContent)
            @if($showHomePageContent->sec_one_text)
            <p class="header-text">{{ $showHomePageContent->sec_one_text }}</p>
            @else

            @endif
            @else
            <p>No data available</p>
            @endif



            @if($showHomePageContent)
            @if($showHomePageContent->sec_one_btn_text)
            <a href="/home" class="btn welcome-btn   mt-3">
              {{ $showHomePageContent->sec_one_btn_text }}
            </a>
            @else

            @endif
            @else
            <p>No data available</p>
            @endif



          </div>
        </div>

        <div class="col-12  col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">



          @if($showHomePageContent)
          @if($showHomePageContent->sec_one_image)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_one_image)}}" class="img-fluid girlimage ">
          @else

          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
      </div>
    </div>
  </div>
  <!-- content start here -->

  <div class="container main-content">
    <div class="row">
      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">

          @if($showHomePageContent)
          @if($showHomePageContent->sec_two_image_one)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_two_image_one)}}" class="card-img-top mx-auto d-block star" alt="...">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif

          <div class="card-body content-card-body text-center">
            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_title_one)
            <h6 class="card-title content-card-title fw-bold">{{$showHomePageContent->sec_two_title_one}}</h6>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif




            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_text_one)
            <p class="card-text content-card-text">{{$showHomePageContent->sec_two_text_one}}</p>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif


          </div>
        </div>
      </div>

      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_two_image_two)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_two_image_two)}}" class="card-img-top mx-auto d-block star" alt="...">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif


          <div class="card-body content-card-body text-center">


            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_title_two)

            <h6 class="card-title content-card-title fw-bold">{{$showHomePageContent->sec_two_title_two}}</h6>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif




            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_text_two)

            <p class="card-text content-card-text">{{$showHomePageContent->sec_two_text_two}}</p>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif


          </div>
        </div>
      </div>

      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_two_image_three)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_two_image_three)}}" class="card-img-top mx-auto d-block star" alt="...">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif


          <div class="card-body content-card-body text-center">


            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_title_three)

            <h6 class="card-title content-card-title fw-bold">{{$showHomePageContent->sec_two_title_three}}</h6>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif





            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_text_three)

            <p class="card-text content-card-text">{{$showHomePageContent->sec_two_text_three}}</p>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif


          </div>
        </div>
      </div>

      <div class="col-md-3 col-6 col-sm-6">
        <div class="card mt-4 content-card border-0">

          @if($showHomePageContent)
          @if($showHomePageContent->sec_two_image_four)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_two_image_four)}}" class="card-img-top mx-auto d-block star" alt="...">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif

          <div class="card-body content-card-body text-center">

            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_title_four)
            <h6 class="card-title content-card-title fw-bold">{{$showHomePageContent->sec_two_title_four}}</h6>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif


            @if($showHomePageContent)
            @if($showHomePageContent->sec_two_text_four)
            <p class="card-text content-card-text">{{$showHomePageContent->sec_two_text_four}}</p>
            @else
            @endif
            @else
            <p>No data available</p>
            @endif



          </div>
        </div>
      </div>

    </div><!-- row end -->


    <div class="row mt-5">
      <div class="col-md-12">

        @if($showHomePageContent)
        @if($showHomePageContent->sec_three_main_h)

        <h2 class="text-center app-title">{{$showHomePageContent->sec_three_main_h}}</h2>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif
      </div>
    </div>



    <div class="row mt-2  ">

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_one)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_one)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
            </div>


      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_two)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_one)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif

      </div>
            </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_three)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_three)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
            </div>



      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">

          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_four)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_four)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
      </div>
            </div>




      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_five)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_five)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
            </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_six)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_six)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
            </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_seven)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_seven)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
            </div>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card image-card p-0">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_three_image_eight)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_three_image_eight)}}" class="image-card">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
            </div>




    </div>
    <!-- row end -->


  </div>

  <!-- app-content start -->
  <div class="container-fluid app-content">
    <div class="container">


    </div>
  </div>
  <!-- app-content end -->


  @if($showHomePageContent)
  @if($showHomePageContent->sec_four_main_h)

  <p class="horizontal-slider-title">{{$showHomePageContent->sec_four_main_h}}</p>
  @else
  @endif
  @else
  <p>No data available</p>
  @endif

  <div class="container mt-5 d-flex">

    <button id="previoushorizontalid" class="previous "><i class="fa-solid fa-circle-chevron-left"></i></button>

    <div class="card slider-card  actives" id="card1" style="width: 20rem; height: 18rem;">
      <div class="card-body slider-card-body ">


        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_one_title)
        <h5 class="card-title slider-card-title">{{$showHomePageContent->sec_four_box_one_title}}</h5>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif


        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_one_text)
        <p class="slider-card-text">{{$showHomePageContent->sec_four_box_one_text}}</p>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif


        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_btn_text)

        <button class="btn click-to-start-btn ">{{$showHomePageContent->sec_four_box_btn_text}}</button>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif


      </div>
    </div>


    <div class="card slider-card " id="card2" style="width: 20rem; height: 18rem;">
      <div class="card-body slider-card-body">

        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_two_title)
        <h5 class="card-title slider-card-title">{{$showHomePageContent->sec_four_box_two_title}}</h5>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif



        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_two_text)

        <p class="slider-card-text">{{$showHomePageContent->sec_four_box_two_text}}</p>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif


        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_btn_text)

        <button class="btn click-to-start-btn ">{{$showHomePageContent->sec_four_box_btn_text}}</button>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif
      </div>
    </div>


    <div class="card slider-card slider-card3" id="card3" style="width: 20rem; height: 18rem;">


      <div class="card-body slider-card-body">
        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_three_title)
        <h5 class="card-title slider-card-title">{{$showHomePageContent->sec_four_box_three_title}}</h5>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif

        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_three_text)

        <p class="slider-card-text">{{$showHomePageContent->sec_four_box_three_text}}</p>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif


        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_btn_text)

        <button class="btn click-to-start-btn ">{{$showHomePageContent->sec_four_box_btn_text}}</button>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif
      </div>
    </div>


    <div class="card slider-card slider-card4 " id="card4" style="width: 20rem; height: 18rem;">


      <div class="card-body slider-card-body">
        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_four_title)
        <h5 class="card-title slider-card-title">{{$showHomePageContent->sec_four_box_four_title}}</h5>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif

        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_four_text)

        <p class="slider-card-text">{{$showHomePageContent->sec_four_box_four_text}}</p>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif


        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_btn_text)

        <button class="btn click-to-start-btn ">{{$showHomePageContent->sec_four_box_btn_text}}</button>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif
      </div>
    </div>



    <div class="card slider-card slider-card5" id="card5" style="width: 20rem; height: 18rem;">


      <div class="card-body slider-card-body">
        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_five_title)
        <h5 class="card-title slider-card-title">{{$showHomePageContent->sec_four_box_five_title}}</h5>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif

        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_five_text)

        <p class="slider-card-text">{{$showHomePageContent->sec_four_box_five_text}}</p>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif


        @if($showHomePageContent)
        @if($showHomePageContent->sec_four_box_btn_text)

        <button class="btn click-to-start-btn ">{{$showHomePageContent->sec_four_box_btn_text}}</button>
        @else
        @endif
        @else
        <p>No data available</p>
        @endif
      </div>
    </div>

    <button id="nexthorizontalid" class="next "><i class="fa-solid fa-circle-chevron-right"></i></button>
  </div>

  <div class="container-fluid mt-4  vertical-slider">
    <div class="container">

      <!-- row start -->
      <div class="row">
        <div class="col-12 ">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_five_main_h)
          <p class="vertical-slider-title text-center">{{$showHomePageContent->sec_five_main_h}}</p>
          @else
          @endif
          @else
          <p>No data available</p>
          @endif


        </div>
      </div>
      <!-- rown end -->

      <!-- row start -->
      <div class="row ">

        <div class="col-12 col-lg-6">

          @if($showHomePageContent)
          @if($showHomePageContent->sec_five_image)
          <img src="{{asset('homepagefiles/'.$showHomePageContent->sec_five_image)}}" class="laptop-image " style="border-radius: 50px;">
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>

        <div class="col-12 col-sm-12  col-md-12 col-lg-6 px-md-5 verticalbuttons">
          <!-- <div class="verticalbuttontop text-center">
            <button id="nextButton" class="clickbutton"><i class="fa-sharp fa-solid fa-chevron-up"></i></button>
          </div> -->
          <div class="scroll-container mt-4 ">

            <!-- <ul>
              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>


              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>

              <li class="li1">
                <div class="content-wrapper">
                  <img src="{{asset('images/maincontentimages/sliderimage1.jpg')}}" class="vertical-slider-images d-inline" />
                  <span class="desc">"Its a great service to deal with the FBR issues. staff is very cooperative, helpful and responds quickly."</span>
                </div>
                <div class="names-wrapper">
                  <p class="names">— Muhammad Umair Umer</p>

                </div>
              </li>
            </ul> -->



            @if($showHomePageContent)
            @if($showHomePageContent->sec_five_google_map)
            <iframe src="{{$showHomePageContent->sec_five_google_map}}" class="mt-2" width="100%" height="300" style="border:0; margin-left:20px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            @else
            @endif
            @else
            <p>No data available</p>
            @endif


          </div>

          <!-- <div class="verticalbuttonbottom text-center">
            <button id="prevButton" class=" clickbutton"><i class="fa-sharp fa-solid fa-chevron-down"></i></button>
          </div> -->

        </div>
      </div>
      <!-- row end -->
      <!-- vertical slider end -->

    </div>
  </div>
  <!-- slider fluid end -->


  <div class="container-fluid">
    <div class="container ">
      <!-- row start -->
      <div class="row team mt-5 ">
        <div class="col-12 ">

          @if($showHomePageContent)
          @if($showHomePageContent->sec_six_main_h)
          <p class="team-title">{{$showHomePageContent->sec_six_main_h}}</p>
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row mt-4">
        <div class="col-4">
          <div class="card headed-card">
            <div class="card-body headed-text">
              @if($showHomePageContent)
              @if($showHomePageContent->sec_six_text_one)
              <p>{{$showHomePageContent->sec_six_text_one}}</p>
              @else
              @endif
              @else
              <p>No data available</p>
              @endif
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card headed-card">
            <div class="card-body headed-text">
              @if($showHomePageContent)
              @if($showHomePageContent->sec_six_text_two)
              <p>{{$showHomePageContent->sec_six_text_two}}</p>
              @else
              @endif
              @else
              <p>No data available</p>
              @endif
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card headed-card">
            <div class="card-body headed-text">
              @if($showHomePageContent)
              @if($showHomePageContent->sec_six_text_three)
              <p>{{$showHomePageContent->sec_six_text_three}}</p>
              @else
              @endif
              @else
              <p>No data available</p>
              @endif
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row mt-3">
        <div class="col-4">
          <div class="card headed-card">
            <div class="card-body headed-text">
              @if($showHomePageContent)
              @if($showHomePageContent->sec_six_text_four)
              <p>{{$showHomePageContent->sec_six_text_four}}</p>
              @else
              @endif
              @else
              <p>No data available</p>
              @endif
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card headed-card">
            <div class="card-body headed-text">
              @if($showHomePageContent)
              @if($showHomePageContent->sec_six_text_five)
              <p>{{$showHomePageContent->sec_six_text_five}}</p>
              @else
              @endif
              @else
              <p>No data available</p>
              @endif
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card headed-card">
            <div class="card-body headed-text">
              @if($showHomePageContent)
              @if($showHomePageContent->sec_six_text_six)
              <p>{{$showHomePageContent->sec_six_text_six}}</p>
              @else
              @endif
              @else
              <p>No data available</p>
              @endif
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row featured-videos mt-4">
        <div class="col-12">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_seven_main_h)
          <p class="feature-videos-title">{{$showHomePageContent->sec_seven_main_h}}</p>
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->




      <!-- videos start -->

      <div class="row ps-md-0 ps-lg-0 ps-xl-0 featured-videos" id="featured-videos-anchor">

        @if($homevideo->count() > 0)
        @foreach($homevideo as $values)

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card video-card">
            <iframe class="iframe" width="100%" height="100%" src="{{$values->video_link}}" title="YouTube  video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>



            <div class="card-body video-card-body">
<a href="/videos-slug/{{$values->video_title.'/'.$values->id}}" target="_blank">
<p class="video-card-title">{{$values->video_title}}</p>
              <p class="video-card-description">{{$values->video_description}}</p>

</a>
            </div>
          </div>
        </div>

        @endforeach


        @else
        <span class="text-center">No Video Available</span>
        @endif
      </div>
    </div>


  </div>


  <div class="container-fluid">
    <div class="container">
      <!-- rescent blogs start -->

      <div class="row recentblogs">
        <div class="col-12">
          @if($showHomePageContent)
          @if($showHomePageContent->sec_eight_main_h)
          <p class="recent-blog-title">{{$showHomePageContent->sec_eight_main_h}}</p>
          @else
          @endif
          @else
          <p>No data available</p>
          @endif
        </div>
      </div>


      <div class="row">
        @if($homeBlog->count() > 0)
        @foreach($homeBlog as $homeBlogValues)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xl-3 mt-5">
          <div class="card recentblogs-card">
            <a href="/bindclick/{{ $homeBlogValues->blog_title . '/' . $homeBlogValues->id }}" class="text-decoration-none text-dark" target="_blank">
              <img src="{{asset('homepageblogs/'.$homeBlogValues->blog_image)}}" class="recentblog-image" style="width: 100%;">
              <div class="card-body recentblogs-card-body">
                <p class="recentblogs-card-title pb-0">{{$homeBlogValues->blog_title}}</p>
                <p class="card-text recentblogs-card-description">{{$homeBlogValues->blog_description}}</p>
              </div>
            </a>
          </div>
        </div>
        @endforeach

        @else
        <p>No data available</p>
        @endif

      </div>
      <!-- row end -->


      
    </div>
    
  </div>
  <!--  fluid end -->
   

  
  <script>
    var cards = document.querySelectorAll('.slider-card');
    var currentCardIndex = 0;

    function updateCardVisibility() {
      for (var i = 0; i < cards.length; i++) {
        if (i === currentCardIndex) {
          cards[i].classList.add('actives');
        } else {
          cards[i].classList.remove('actives');
        }
      }
    }

    function updateButtonState() {
      var previousButton = document.getElementById("previoushorizontalid");
      var nextButton = document.getElementById("nexthorizontalid");

      if (currentCardIndex === 0) {
        previousButton.disabled = true;
      } else {
        previousButton.disabled = false;
      }

      if (currentCardIndex === cards.length - 1) {
        nextButton.disabled = true;
      } else {
        nextButton.disabled = false;
      }
    }

    var nextButton = document.getElementById("nexthorizontalid");
    nextButton.addEventListener("click", function() {
      if (currentCardIndex < cards.length - 1) {
        currentCardIndex++;
        updateCardVisibility();
        updateButtonState();
      }
    });

    var previousButton = document.getElementById("previoushorizontalid");
    previousButton.addEventListener("click", function() {
      if (currentCardIndex > 0) {
        currentCardIndex--;
        updateCardVisibility();
        updateButtonState();
      }
    });

    // Initialize card visibility and button state
    updateCardVisibility();
    updateButtonState();
  </script>


  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>



</body>

</html>