<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/allcss/scroll-btn.css">
  <title>footer</title>
</head>
<body>
<div class="container-fluid mt-5 footer pt-0">
    <div class="container mt-0  mt-lg-5">

      <!-- row start -->
      <div class="row ">

        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
          <h2 class="footer-sub-heading">Stay Connected</h2>
          <img src="{{asset('images/footericons/facebook2.png')}}" class="footericons " />
          <img src="{{asset('images/footericons/youtube2.png')}}" class="footericons " />
          <img src="{{asset('images/footericons/twitter2.png')}}" class="footericons " />
          <img src="{{asset('images/footericons/linkedin4.png')}}" class="footericons " />
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
          <h2 class="footer-sub-heading">Need Support?</h2>

          <!-- <img src="{{asset('images/footericons/phone2.png')}}" class="footericons " /> -->

          <div class="d-flex">
            <img alt="facebook" src="{{asset('images/footericons/phone2.png')}}" class="footericons ">
            <span class="footer-numbers">

              <span class="link-dark  numbers d-block  fw-bold">+92 (0) 21 38228222</span>
              <span class="link-dark  numbers d-block fw-bold">+92 331 1111070,
                <span class="d-inline"> +92 340 2021111</span>
              </span>

            </span>
          </div>


        </div>


        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

          <div class="d-flex locate-area">
            <img src="{{asset('images/footericons/location2.png')}}" class="footericons" />

            <span class="footer-locate-us">Locate us</span>
            </span>
          </div>


        </div>

      </div>
      <!-- row end -->


      <div class="row mt-4">
        <div class="col-12">
          
          <p class="footer-description">Befiler is a joint initiative of team of leading tax professionals and technology enthusiasts. The initiative aims to simplify tax return filing process for individuals; especially salaried class, and promote the culture of documentation. It aims to enhance the number of tax filers in the interest of enhancing tax base of the country, at the same time, reduce huge cost to ordinary citizens who have to suffer cost of being non-filers.</p>
        </div>
      </div>
    </div>


  </div>
  <!-- container and fluid end  -->

  <div class="alert footer-status">
    <div class="container footer-status-container">
      <!-- row start -->
      <div class="row">

        <div class="col-12">
          <p class="d-inline footer-status-description">2018 - 2023 Befiler (Pvt) Limited, Powered by Arittek - <span>Terms of Use</span> | <span class="">Privacy Statement</span></p>



          <!-- <img src="{{asset('images/footericons/footerstatusicon1.png')}}" class="footerstatusicon" />
          <img src="{{asset('images/footericons/footerstatusicon2.png')}}" class="footerstatusicon" /> -->
          <img src="{{asset('images/footericons/footeruse.jpeg')}}" class="" style="height: 70px;
    width: 156px;
    object-fit: contain;" />

        </div>
        <!-- row end -->
      </div>
      <!-- container end -->

    </div>
    <!-- alaert end -->
    <button onclick="scrollToTop()" id="scrollToTopButton" class="btn btn-dark text-light">Scroll to Top</button>    
    
    <script src="/javascriptfiles/scroll-btn-js"></script> 
</body>
</html>