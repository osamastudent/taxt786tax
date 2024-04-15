<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <title>Tax Consultancy</title>

  <style>
    .error-style {
      font-size: 13px !important;
      font-weight: 400 !important;
    }

    .form-select {
      font-size: 13px !important;
      text-transform: capitalize !important;
      font-weight: 600 !important;
    }

    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      padding-top: 20px;

    }

    form {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

      padding: 20px;

    }

    /* .swal2-cancel {
        margin-left: 10px;
        } */
    .ok-button-class {
      margin-left: 30px !important;
    }

    .form-label {
      margin-left: 5px;

    }
  </style>

</head>

<body>
  @include('clientarea.navbar')
  @section('content')

  <!-- container start -->
  <div class="container mt-4 mb-5">

    <div class="card w-75 mx-auto border-0 pb-3">

      <div class="card-header bg-dark text-white">
        <h3>Tax Consultancy</h3>
      </div>
      <div class="card-body px-5 mt-3">

        <form action="{{route('TaxConsultancyStore')}}" method="post">
          @csrf

          <!-- row start -->
          <div class="row">
          <div class="col-12">
          <label for="" class="form-label mb-1">Describe your query, advice required, tax audit, tax planning, etc (Text)</label>
          <textarea name="describe_query" id="" cols="30" rows="3" class="form-control personal-ntn-bottom-borders text-truncate"></textarea>
          @error('describe_query')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
          </div>

          <div class="col-12">
          <label for="" class="form-label mt-4 mb-1">Mobile Number</label>
          <input type="text" name="mobile_no" class="form-control personal-ntn-bottom-borders text-truncate" placeholder="Mobile Number">
          @error('mobile_no')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
          </div>
      
<div class="col-12">

<label for="" class="form-label mt-4 mb-1">Email ID </label>
          <input type="text" name="email" class=" form-control personal-ntn-bottom-borders  text-truncate" placeholder="Email ID">
          @error('email')
              <span class="text-danger error-style">
                <i class="fas fa-exclamation-triangle"></i>
                {{$message}}
              </span>
              @enderror
</div>

</div>
<!-- row end -->

          <button type="submit" name="" class="btn btn-dark mt-3">Add To Cart</button>
        </form>
      </div>
    </div>


  </div><!-- container end -->



<!-- After form submitted -->
@if(session('success'))
@foreach($formSubmitAlert as $formSubmitAlertValues)
    <script>
        if (window.performance.navigation.type !== 2) {

            Swal.fire({
                title: '{{$formSubmitAlertValues->title}}',
                text: "{{ $formSubmitAlertValues->text}}",
                icon: 'success',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Add To Cart',
                allowOutsideClick: false,
                customClass: {
                    title: 'swal-title',
                      text: 'swal-text-class',
                    showCancelButton: 'show-cancel-button',
                    popup: 'custom-popup',
                    closeButton: 'custom-close-button',
                    confirmButton: 'ok-button-class',
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    // Handle the logic when the "OK" button is clicked
                    window.location.href = '{{route("home")}}';
                } else {
                    // Redirect to your custom URL when the "Add To Cart" button is clicked
                    window.location.href = '{{route("Cart")}}';
                }
            });
        }
    </script>
    @endforeach
@elseif($errors->any())
    <!-- Validation errors -->
    <!-- @foreach ($errors->all() as $error)
        <div class="row">
            <div class="col-12">
                <span class="text-danger">
                    <i class="fas fa-exclamation-triangle"></i>
                    {{ $error }}
                </span>
            </div>
        </div>
    @endforeach -->
@else
    <!-- User's first time on the form -->
    @if($popup && session('enterUser'))  
    @foreach($userEnterMessage as $userEnterMessageValues)
    
        <script>
            if (window.performance.navigation.type !== 2) {

                Swal.fire({
                    title: '{{$userEnterMessageValues->title}}',
                    text: "{{$userEnterMessageValues->text}}",
                    // icon: 'warning',
                    // showCancelButton: true,
                    showCloseButton: true,
                    confirmButtonText: 'OK',
                    // cancelButtonText: 'Add To Cart',
                    allowOutsideClick: false,
                    customClass: {
                        title: 'swal-title',
                          text: 'swal-text-class',
                        showCancelButton: 'show-cancel-button',
                        popup: 'custom-popup',
                        closeButton: 'custom-close-button',
                        confirmButton: 'ok-button-class',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Handle the logic when the "OK" button is clicked
                        // window.location.href = '{{route("home")}}';
                    } else {
                        // Redirect to your custom URL when the "Add To Cart" button is clicked
                        // window.location.href = 'http://127.0.0.1:8000';
                        // window.location.href = '{{route("Cart")}}';
                    }
                });
            }
        </script>
        @endforeach
    @endif
@endif

</body>
</html>