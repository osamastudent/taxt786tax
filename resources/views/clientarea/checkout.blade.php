<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-BEBtUHCoFI4zDoBc5tmTB37d4sDO+4xX5Z7Ye2J4pX+XcuY8un47DTSHB1OYlOz6/zsuZW7AM0Kltbp5qKhNEA==" crossorigin="anonymous" />
  <title>Checkout</title>
<style>
  
  .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0.5px 3px rgba(0, 0, 0, 0.2);
            width: 40%;
        }

        .form-label {
            font-size: 12px;
        }
</style>
</head>

<body>
  @include('clientarea.navbar')
  @section('content')


 <div class="container">
  
 <div class="card mx-auto mt-5">
            <div class="card-header bg-dark text-light">
                <h4>Checkout</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span>{{session('success')}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{route('TaskalertsStore')}}" method="post" class="px-4 py-2" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-label mb-1 fw-bold ">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
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

                    <label for="" class="form-label mb-1 mt-2 fw-bold">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
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

                    <label for="" class="form-label mb-1 mt-2 fw-bold">Phone No</label>
                    <input type="text" name="mobile_no" class="form-control" placeholder="Enter Your Phone No">
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

<h6 class="mt-1">Select Payment Type</h6>                   

                    <input type="submit" class="btn btn-dark text-light mt-3" value="Add">

                </form>
            </div>
        </div>
 </div>

</body>

</html>