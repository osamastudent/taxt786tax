<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onmouseenter="showContent('#pills-home')">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onmouseenter="showContent('#pills-profile')">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" onmouseenter="showContent('#pills-contact')">Contact</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    Home content goes here.
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    Profile content goes here.
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    Contact content goes here.
  </div>
</div>
<br><br>
<button class="btn btn-primary mt-5"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>

<div class="offcanvas offcanvas-top mt-5" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="height:auto">
  <div class="offcanvas-header">
    <h5 id="offcanvasTopLabel">Offcanvas top</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h1>Pakistan vs India</h1>
    <h1>Pakistan vs India</h1>
    <h1>Pakistan vs India</h1>
    <h1>Pakistan vs India</h1>
  </div>
</div>

<br>    
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="path_to_your_image" class="rounded me-2" alt="Your Image">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>


<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="path_to_your_image" class="rounded me-2" alt="Your Image">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>

<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="path_to_your_image" class="rounded me-2" alt="Your Image">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>


<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="path_to_your_image" class="rounded me-2" alt="Your Image">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>


<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>

</div>

<h1>Hello, world!</h1>

<script>
    const toasts = document.querySelectorAll('.toast');
    toasts.forEach(toast => {
        const myToast = new bootstrap.Toast(toast);
        myToast.show();
    });

    
</script>



<script>
 function showContent(tabId) {
  const content = document.querySelector(tabId);
  content.classList.add('show', 'active');
}


</script>

</body>
</html>
























<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .actives{
            height: 22rem !important;
            margin-top: -33px;
            width: 20rem ;
            background:linear-gradient(25deg , #ff6d00 100px, red 40px, transparent 100%) !important;
            font-size: 13px !important;
            line-height: 17px !important;
            border: 2px solid rgba(0,0,0.,125);
            box-shadow: 0 0.199rem 0.5rem rgba(0, 0, 0, .24);
            
        }
        

        .slider-card{
            text-align: center;
            background:linear-gradient(25deg , gold 100px, brown 100px, transparent 100%);
  color: white; 
        }
        .slider-card-body{
            font-size: 13px;
            line-height: 17px;
            display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin: auto; /* Center horizontally */
    flex-direction: column;
}
        
        
        .previous{
            background:linear-gradient(25deg , gold 10px, brown 50px, transparent 100%);
            color: white;
            height: 30px;
            width: 30px;
            margin-right: 20px;
            margin-top: 120px;
            border-bottom-left-radius: 50px !important;
            border-top-left-radius: 50px !important;
            
        }
        .next{
            height: 30px;
            width: 30px;
            margin-left: 20px;
            margin-top: 120px;
            background:linear-gradient(25deg , gold 10px, brown 50px, transparent 100%);
            color: white;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
                        
        }
        .slider-card-title{
            font-size: 16px;
        }
        .click-to-start-btn{
            background-color: black;
                 color: white;
                 width: 100%;
                 /* padding: 0; */
                 font-size: 12px;
        }
        
        .click-to-start-btn:hover{
            background-color: brown;
            color: white;
        }

       @media screen and (max-width: 576px) {
            .slider-card {
                display: none;
            }
            .actives {
                display: block !important;
                height: 14rem !important;
                margin-top: 0px !important;
                margin-left: 10px !important;
                margin-right: 10px !important;
            }
            .slider-card-body{
                margin: 20px 10px 10px 10px !important;
            }
            .previous{
                margin-top: 90px !important;
                
            }
            .next{
                margin-top: 90px !important;
            }
            .click-to-start-btn{
                padding: 2px 0px 2px 0px !important;
                width: 100% !important;
                margin-top: 30px;
            }
            .slider-card-text{
                margin-top: 10px;
            }
        }

        @media screen and (max-width: 992px) {
            .slider-card {
                display: none;
            }
            .actives {
                display: block !important;
                height: 14rem !important;
                margin-top: 0px !important;
            }


        }
        @media screen and (min-width: 577px) and (max-width: 992px) {
            .card {
                width: 88% !important; /* Display two cards in a row */
                
            }
            .previous{
                margin-left: -100px;
                margin-top: 100px;
            }
            .next{
                margin-right: -100px;
                margin-top: 100px;
            }
        }

        @media screen and (min-width: 577px) and (max-width: 599px) {
            .previous{
                margin-left: 10px !important;
                margin-top: 100px;
            }
            .next{
                margin-right: -10px;
                margin-top: 100px;
            }


        }
        @media screen and (max-width:653px) and (min-width:200px) {
            .next{
                margin-right: 0px !important;
                margin-left: 0px !important;
                margin-top: 120px !important;
                padding: 0px !important;
            }
            .previous{
                margin-left: 0px !important;
                margin-right: 0px;
                padding: 0px !important;
                margin-top: 120px !important;
            }
            .actives{
                width: 20rem !important;
                height: 19rem !important;
            }

        }
        @media screen and (max-width:1180px) and (min-width:820px) {
            .next{
                margin-right: -40px !important;
                margin-left: 5px !important;
                margin-top: 70px !important;
                height: 40px !important;
                width: 40px !important;
            }
            .previous{
                margin-left: -50px !important;
                margin-right: 5px !important;
                /* margin-top: 70px !important; */
                height: 40px !important;
                width: 40px !important;
            }
            .slider-card-body{
                margin-top: 20px !important;
            }
            .slider-card-text{
                margin-top: 20px !important;
            }
            .click-to-start-btn{
                margin-top: 20px !important;
            }
            
        }
        @media screen and (max-width:768px) {
.previous{
    margin-top: 100px !important;
}
.next{
    margin-top: 100px !important;
}


        }
        @media screen and (max-width:539px) and (min-width:426px) {
.next{
    margin-right: -100px !important;
}
.previous{
    margin-left: 50px !important;
}
        }
        @media screen and (max-width:1024px) and (min-width:768px) {
            .next{
                margin-right: -25px !important;
                margin-left: 5px !important;
                margin-top: 70px !important;
            }
            .previous{
                margin-left: 30px !important;
                margin-right: 5px !important;
                margin-top: 70px !important;
            }
            .slider-card-body{
                margin-top: 20px !important;
            }
            .slider-card-text{
                margin-top: 20px !important;
            }
            .click-to-start-btn{
                margin-top: 20px !important;
            }
            .slider-card{
                margin-left: 20px !important;
                margin-right: 20px !important;
            }
           
        }


        
        @media screen and (max-width:1368px) and (min-width:912px) {
            .next{
                margin-right: -100px !important;
                margin-left: 5px !important;
                height: 50px !important;
                width: 50px !important;
                /* margin-top: 60px !important; */
            }
            .previous{
                margin-left: -100px !important;
                margin-right: 5px;
                height: 50px !important;
                width: 50px !important;
                /* margin-top: 60px !important; */
            }
            
           
           
        }

        @media screen and (max-width:720px) and (min-width:540px) {
.previous{
    margin-left: 50px !important;
}

        }

        @media screen and (max-width:1024px) and (min-width:600px) {
            .next{
                margin-right: -30px !important;
                margin-left: 5px !important;
            }
            .previous{
                margin-left: -30px !important;
                margin-right: 5px;
            }
            .slider-card{
                width: 100% !important;
               margin: 0px !important;
            }
            .actives{
                margin-top: -33px !important;
            }
        }

        @media screen and (max-width:1280px) and (min-width:800px) {
            .next{
                margin-right: -30px !important;
                margin-left: 5px !important;
            }
            .previous{
                margin-left: -30px !important;
                margin-right: 5px;
            }
            .slider-card{
                width: 100% !important;
               margin: 0px !important;
            }
            .actives{
                margin-top: -33px !important;
            }
        }
        ul {
  list-style-type: none; /* Remove default bullet point */
}

li::before {
  content: "\2713"; /* Unicode check-mark character */
  display: inline-block;
  margin-right: 15px; /* Adjust spacing between check-mark and text */
  font-weight: 900;
  
  
}
    </style>
    <title>Document</title>
</head>
<body>


<div class="row g-0 bg-light position-relative">
  <div class="col-md-3 mb-md-0 p-md-4">
    <!-- <img src="..." class="w-100" alt="..."> -->
    <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
  </div>
  <div class="col-md-3 p-4 ps-md-0">
    <h5 class="mt-0">Columns with stretched link</h5>
    <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
    <a href="#" class="stretched-link">Go somewhere</a>
  </div>


  <div class="col-md-3 mb-md-0 p-md-4">
    <!-- <img src="..." class="w-100" alt="..."> -->
    <img src="{{asset('images/recentblogimages/exploring.jpg')}}" class="recentblog-image " height="100%" width="100%">
  </div>
  <div class="col-md-3 p-4 ps-md-0">
    <h5 class="mt-0">Columns with stretched link</h5>
    <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
    <a href="#" class="stretched-link">Go somewhere</a>
  </div>
</div>



<ul>
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ul>

<div class="container mt-5 d-flex">

<button id="previoushorizontalid" class="previous"><i class="fa-solid fa-circle-chevron-left"></i></button>

<div class="card slider-card  actives" id="card1" style="width: 20rem; height: 18rem;">
  <div class="card-body slider-card-body ">
    <h5 class="card-title slider-card-title">Individual NTN Registration</h5>
    <p class="slider-card-text">Just register your Individual NTN in 3 simple steps. Register, Upload, Pay.</p>
    <button class="btn click-to-start-btn ">Click To Start Services</button>
  </div>
</div>


<div class="card slider-card " id="card2" style="width: 20rem; height: 18rem;">
    <div class="card-body slider-card-body">
        <h5 class="card-title slider-card-title">Tax Filing</h5>
        <p class="slider-card-text">Just register your Individual NTN in 3 simple steps. Register, Upload, Pay.</p>
        <button class="btn click-to-start-btn ">Click To Start Services</button>
    </div>
</div>


<div class="card slider-card slider-card3" id="card3" style="width: 20rem; height: 18rem;">
  
  
<div class="card-body slider-card-body">
    <h5 class="card-title slider-card-title">Business NTN Registration</h5>
    <p class="slider-card-text">Just register your Individual NTN in 3 simple steps. Register, Upload, Pay.</p>
    <button class="btn click-to-start-btn ">Click To Start Services</button>
  </div>
</div>


<div class="card slider-card slider-card4 " id="card4" style="width: 20rem; height: 18rem;">
  
  
<div class="card-body slider-card-body">
    <h5 class="card-title slider-card-title ">Sales Tax Registration</h5>
    <p class="slider-card-text">Just register your Individual NTN in 3 simple steps. Register, Upload, Pay.</p>
    <button class="btn click-to-start-btn ">Click To Start Services</button>
  </div>
</div>



<div class="card slider-card slider-card5" id="card5" style="width: 20rem; height: 18rem;">
  
  
<div class="card-body slider-card-body">
    <h5 class="card-title slider-card-title">Business Tax Filing</h5>
    <p class="slider-card-text">Just register your Individual NTN in 3 simple steps. Register, Upload, Pay.</p>
    <button class="btn click-to-start-btn ">Click To Start Services</button>
  </div>
</div>

<button id="nexthorizontalid" class="next"><i class="fa-solid fa-circle-chevron-right"></i></button>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
-->




<!-- <script>
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
    nextButton.addEventListener("click", function () {
        if (currentCardIndex < cards.length - 1) {
            currentCardIndex++;
            updateCardVisibility();
            updateButtonState();
        }
    });

    var previousButton = document.getElementById("previoushorizontalid");
    previousButton.addEventListener("click", function () {
        if (currentCardIndex > 0) {
            currentCardIndex--;
            updateCardVisibility();
            updateButtonState();
        }
    });

    // Initialize card visibility and button state
    updateCardVisibility();
    updateButtonState();

</script> -->


<!-- </body>
</html> -->

