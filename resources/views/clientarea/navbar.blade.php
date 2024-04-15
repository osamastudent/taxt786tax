<!-- bootstrap5 css cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- font awesom -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- navbar start -->
 <style>
 .container-fluid{
    border-bottom: 1px rgb(198, 202, 204) solid !important;
    -webkit-box-shadow: 0 4px 6px -6px #222;
  -moz-box-shadow: 0 4px 6px -6px #222;
  box-shadow: 0 4px 6px -6px rgba(0, 0, 0, .16);
    background-color:  white !important;
 }


 .navbar-container .navbar .logo {
  height: 4rem !important;
  width: 14rem;
  object-fit: contain;
  margin-left: 0px !important;
  margin-top: 0px ;
}
.addtocart{
box-sizing: none !important;
}
#cartDetails {
    display: none; /* Hide the card initially */
    position: absolute;
    top: 30px;
    left: 0;
    background-color: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    color: black;
}

</style>

 <div class="container-fluid navbar-container">
 
<div class="container">
 <nav class=" navbar navbar-expand-lg ">

   <a class=" navbar-brand " href="/"><img src="{{asset('images/logo.jpeg')}}" class="logo" alt="logo"></a>
   <button class="navbar-toggler" type="button" style="box-shadow: none;" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon "><i class="fa-solid fa-bars"></i></span>
   </button>
   
   <div class="collapse bg-white p-3 navbar-collapse justify-content-end " id="navbarNavDropdown">
   <ul class="navbar-nav  " >
      
   

   <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        
                        @guest
                            @if (Route('UserLoginForm'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('UserLoginForm') }}">{{ __('Sign In') }}</a>
                                </li>
                            @endif

                            @if (Route::has('UserRegisterForm'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('UserRegisterForm')}}">{{ __('Sign Up') }}</a>
                                </li>
                            @endif
                        @else






<li>
    <a href="{{route('Cart')}}" class="addtocart py-0.5 mt-2 px-1 mx-3 btn btn-dark btn-sm position-relative" id="addtocart">
        <i class="fa-solid fa-cart-shopping"></i>
        @if($cart)
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning" id="cartCount">
           
{{$cart}} 
@else
          
          
          
            <div class="card mt-3" id="cartDetails">
       Card
    </div>

        </span>
        @endif 
    </a>
    
</li>



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('Logout')}}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
       
     </ul>
     

   </div>
 </div>
 
</nav>


</div>
 </div>

 <script>
    document.addEventListener('DOMContentLoaded', function () {
        var addtocart = document.getElementById('addtocart');
        var cartDetails = document.getElementById('cartDetails');

        addtocart.addEventListener('mouseenter', function () {
            cartDetails.style.display = 'block';
        });

        addtocart.addEventListener('mouseleave', function () {
            cartDetails.style.display = 'none';
        });
    });
</script>

 
 <!-- navbar end  -->

 <!-- bootstrap5 script cdn -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- sweet -->
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap" type="text/javascript"></script> -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>




