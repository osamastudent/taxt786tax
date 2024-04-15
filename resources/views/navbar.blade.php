<style>
  .active-effect{
    text-decoration: underline ;
    text-decoration-color: white;
  text-decoration-thickness: 3px; /* Increase thickness as needed */
  text-underline-offset: 0.3em; /* Adjust the offset as needed */
  transition: all 0.5s ease; 
  color: white !important;
  background-color: black;
  border-radius: 10px !important;
  }
  .active-effect-class:hover .nav-link{
    text-decoration: underline ;
  text-decoration-color: white;
  text-decoration-thickness: 3px; /* Increase thickness as needed */
  text-underline-offset: 0.3em; /* Adjust the offset as needed */
  transition: all 0.5s ease; 
  color: white !important;
  background-color: black;
  border-radius: 10px !important;

    /* text-decoration: underline ;
  text-decoration-color: black;
  text-decoration-thickness: 3px; 
  text-underline-offset: 0.3em;
  transition: all 0.5s ease;  */
  /* color: white; */
  }
  .navbar-container .navbar .dropdown .dropdown-toggle {
    color: rgba(0, 0, 0, .55);
    font-weight: 700 !important;
    font-size: 12px;
  }

  .navbar-container .dropdown-menu {
    margin-top: 0px !important;
    text-align: center;

  }

  .navbar-container .dropdown:hover .dropdown-menu {
    display: block !important;

  }

  .navbar-container .dropdown-toggle::after {
    display: none;
  }

  .navbar-container .navbar .logo {
    height: 5rem !important;
    width: 14rem;
    object-fit: contain;
    margin-left: 0px !important;
    margin-top: 10px;
  }
  .navbar-container .navbar .nav-link {
    color: rgba(0, 0, 0, .55);
    font-weight: 700 !important;
    font-size: 12px;
  }

  

  .navbar-container .navbar .nav-link:hover {
    color: white !important;
  }



  .navbar-container .navbar .sign-up {
    /* border-image: linear-gradient(180deg, #f37e5f 0, #ec1c24 59%, #cf232a 100%);
    color: #f37e5f; */
    border-image-slice: 1;
    border: 1px solid;

    width: 100px !important;
    background-color: rgba(84, 121, 36, 0.8);
    /* 0.5 for 50% opacity */
    color: white;
    border-radius: 5px;
  }

  .navbar-container .navbar .sign-up:hover {
    /* background-image: linear-gradient(#cf232a, rgba(207, 35, 42, 255)); */
    color: white;
    border-image-slice: 1;
    border-radius: 2px solid !important;
    width: 100px !important;
    background-color: rgba(84, 121, 36);
    /* 0.5 for 50% opacity */
    color: white;
    border-radius: 5px;
  }

  .navbar-container .navbar .signin {
    /* background: linear-gradient(180deg, #f37e5f 0, #ec1c24 59%, #cf232a 100%); */

    /*  */
    border: 0 !important;
    color: #fff;
    width: 120px !important;
    background-color: rgba(84, 121, 36, 0.8);
    /* 0.5 for 50% opacity */
    color: white;
    border-radius: 5px;
  }

  .navbar-container .navbar .signin:hover {
    /* background-image: linear-gradient(#cf232a, rgba(207, 35, 42, 255));
    color: #fff; */
    background-color: rgba(84, 121, 36);
    /* 0.5 for 50% opacity */
    color: white;
    border-radius: 5px;
  }
</style>
<div class="container px-1 " id="statusid">
  <div class="alert status  " role="alert">
    <div class="status-content">
      <img src="{{asset('logotitle.jpeg')}}" alt="" height="30" width="50">
      <b>Kasbati & co</b>
    </div>

  </div>
</div>

<hr class="hr1">
<!-- navbar start -->
<div class="container navbar-container ">


  <nav class="navbar navbar-expand-lg py-4 ">

    <a class="navbar-brand " href="#"><img src="{{asset('images/logo.jpeg')}}" class="logo" alt="logo" style="margin-left: 70px;"></a>
    <button class="navbar-toggler" type="button" style="box-shadow: none;" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse bg-white p-3 navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav  ">

        <li class="nav-item active-effect-class" id="taxtools">
          <a class="fw-bold nav-link  px-0 px-md-3  {{Request::is('calculator','calculator/salary-tax-calculation','calculator/withholding-calculation') ?'active-effect' : ''}}" aria-current="page" href="{{route('Calculator')}}">TAX TOOLS</a>
        </li>
         
        
        <li class="nav-item  active-effect-class" id="servicesportfolio" >
          <a class="fw-bold nav-link main__menu px-0 px-md-3 {{Request::is('Services-Portflio') ?'active-effect' : ''}}" href="{{route('ServicesPortflio')}}">SERVICES PORTFOLIO</a>
        </li>
        <li class="nav-item active-effect-class" id="startprocess">
          <a class="fw-bold nav-link  main__menu px-0 px-md-3" href="{{route('home')}}">START PROCESS</a>
        </li>

        <!-- <li class="nav-item" >
          <a class="fw-bold nav-link main__menu px-0 px-md-3" href="#">TAX UPDATES</a>
        </li> -->
        <li class="nav-item">

          <div class="dropdown">
            <a class="btn btn-white active-effect-class btn-outline-white dropdown-toggle {{Request::is('blogs','videos') ?'active-effect' : ''}}" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              TAX UPDATES
            </a>


            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li id="blogs"><a class="dropdown-item active-effect-class {{Request::is('blogs') ?'active-effect' : ''}}" href="{{route('blogsDisplay')}}">Blogs</a></li>
              <li id="videos"><a class="dropdown-item active-effect-class {{Request::is('videos') ?'active-effect' : ''}}" href="{{route('videosDisplay')}}">Videos</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item px-0 px-md-3">
          <a href="{{route('UserRegisterForm')}}" class="btn  w-100 sign-up">Sign up</a>

          <a href="{{ route('UserLoginForm') }}" class="btn  signin px-0 w-100"> <i class=" fa-solid fa-lock"></i> Sign in</a>
        </li>
      </ul>
    </div>
</div>
</nav>
</div>


<!-- navbar end  -->
@yield('content')