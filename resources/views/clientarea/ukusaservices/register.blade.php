<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/home.css">
    <title>Register</title>
</head>
<body>
@include('clientarea.navbar')
@section('content')
@endsection
<div class="container ">

    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-3">
            <div class="card" style="position: static;">
                <div class="card-header"><h6>{{ __('Create your account') }}</h6></div>

                <div class="card-body">
                    <form method="POST" action="{{route('UserRegisterStore')}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-end">{{ __('Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_no"  type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @if(session('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ session('password')}}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input name="password_confirmation"  id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"  autocomplete="new-password">

                                  @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                @if(session('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ session('password_confirmation')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>

                                
                                    <a class="btn btn-link" href="{{route('UserLoginForm')}}">
                                        {{ __('If You Have Already Account?') }}
                                    </a>
                                
                            </div>
                        </div>



                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>