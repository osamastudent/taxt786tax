<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/home.css">
    <title>Register</title>
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

        .invalid-feedback {
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
        <div class="col-md-8 mt-2"> -->
        <div class="card mx-auto pb-3 mb-3 mt-4 justify-content-center" style="position: static;">
            <div class="card-header">
                <h5>{{ __('Create your account') }}</h5>
            </div>

            <div class="card-body px-4 ">
                
                <form method="POST" action="{{route('UserRegisterStore')}}">
                    @csrf


                    <label for="" class="form-label mb-1">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>


                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>

                    </span>
                    @enderror




                    <label for="" class="form-label mb-1 mt-2">Mobile No</label>
                    <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('name') }}" autocomplete="name" autofocus>
                    @error('mobile_no')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror




                    <label for="" class="form-label mb-1 mt-2">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror


                    <label for="" class="form-label mb-1 mt-2">Password</label>

                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                    <span class="eye-slash"><i id="eyeslash" class="fa-solid fa-eye"></i></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror

                    @if(session('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ session('password')}}</strong>
                    </span>
                    @endif







                    <label for="" class="form-label mb-1 mt-2">Password</label>
                    <input name="password_confirmation" id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="new-password">
                    <span class="eye-slash"><i id="eyeslash2" class="fa-solid fa-eye"></i></span>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror


                    @if(session('password_confirmation'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ session('password_confirmation')}}</strong>
                    </span>
                    @endif




            </div>



            <!-- row start -->
            <div class="row px-3">
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Sign Up') }}
                    </button>

                </div>

            </div>
            <!-- row end -->




            <!-- row start -->
            <div class="row px-3">
                <div class="col-md-12 ">
                    <a class="btn btn-link create-new-account" href="{{route('UserLoginForm')}}">
                        {{ __('If You Have Already Account?') }}
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
        let eyeslash2 = document.getElementById("eyeslash2");
        let passwordconfirm = document.getElementById("password-confirm");


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
        eyeslash2.addEventListener("click", function() {
            if (passwordconfirm.type === 'password') {
                passwordconfirm.type = 'text';
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            } else {
                passwordconfirm.type = 'password';
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
            }
        });
    </script>
</body>

</html>