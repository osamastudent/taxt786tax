<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/home.css">
    <title>Login</title>
    <style>
        .create-new-account{
            box-shadow: none !important;
        }
        .create-new-account:hover {
            box-shadow: none !important;
            font-size: 17px !important;
        }
        .forgto-password {
            box-shadow: none !important;
        }

        
        .forgto-password:hover {
            box-shadow: none !important;
            font-size: 17px !important;
        }

        .sign-in-with-google {
            color: rgba(0, 0, 0, .51);
font-weight: 500;
           box-shadow: none !important;
        }
        .sign-in-with-google-btn{
            box-shadow: none !important;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0.5px 3px rgba(0, 0, 0, 0.2);
            width: 33%;
        }

        .form-label {
            font-size: 12px;
        }

        .eye-slash {
            float: right;
            margin-top: -30px;
            margin-right: 10px;
            opacity: 0.8;
        }

        .error-style {
            font-size: 13px !important;
            font-weight: 400 !important;
        }
    </style>
</head>

<body>
    @include('clientarea.navbar')
    @section('content')
    @endsection

    <div class="container ">

        <!-- <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-3"> -->
        <div class="card mx-auto pb-3 mt-4  justify-content-center " style="position: static;">
            <div class="card-header">
                <h5>{{ __('Sign in to your account') }}</h5>
            </div>

            <div class="card-body px-4 ">

          <form method="POST" action="{{route('UserLogin')}}" class="mt-1">
                    @csrf




                    <label for="" class="form-label mb-1">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email Address">

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

                    @if(session('invalidemail'))
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                
                                {{session('invalidemail')}}
                            </span>
                        </div>
                    </div>
                    @endif




                    <label for="" class="form-label  mt-3 mb-1">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
                    <span class="eye-slash"><i id="eyeslash" class="fa-solid fa-eye"></i></span>
                    @error('password')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    @if(session('invalidpassword'))
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <!-- <i class="fas fa-exclamation-triangle"></i> -->
                                {{session('invalidpassword')}}
                            </span>
                        </div>
                    </div>
                    @endif




            </div> 

            <div class="row mb-3 mt-3 mb-0">
                <div class="col-md-6 offset-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <!-- <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> -->


                        <label for="" class="form-label form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>
            </div>


<!-- row start -->
            <div class="row px-3">
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Sign In') }}
                    </button>                

                </div>

            </div>
<!-- row end -->
            



<!-- row start -->
    <div class="row px-3">
                <div class="col-md-12 ">
                <a class="btn btn-link forgto-password" href="">
                        {{ __('Forgot Your Password?') }}
                    </a>                

                </div>
                <div class="col-md-12 ">
                <a class="btn btn-link  create-new-account" href="{{route('UserRegisterForm')}}">
                        {{ __('Create New Account:') }}
                    </a>                

                </div>

            </div>
            <!-- row end -->
            </form>
        </div>
    </div>
    <!-- </div>
    </div> -->
    </div>





    <script>
        let eyeslash = document.getElementById("eyeslash");
        let password = document.getElementById("password");


        eyeslash.addEventListener("click", function() {
            if (password.type === 'password') {
                password.type = 'text';
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            } else {
                password.type = 'password';
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
            }
        });
    </script>
</body>

</html>