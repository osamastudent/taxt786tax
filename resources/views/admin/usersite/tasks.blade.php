<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <style>
        .card {
            border-radius: 8px !important;
            box-shadow: 0 1px 2px #00000029 !important;
        }

        form {
            border-radius: 8px !important;
            box-shadow: 0 1px 2px 1px #00000029 !important;
        }

        .form-label {
            font-size: 13px;
        }

        .error-style {
            font-size: 13px !important;
            font-weight: 400 !important;
        }

        input::placeholder {
            font-size: 12px;
            font-weight: 400;
        }
    </style>
</head>

<body>

    @extends('admin.masterfile')
    @section('content')


    <div class="container">

        <div class="card mx-auto mt-5">
            <div class="card-header bg-dark text-light">
                <h4>Add Tasks</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span>{{session('success')}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{route('TasksStore')}}" method="post" class="px-4 py-2" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="form-label mb-1 fw-bold ">Text</label>
                    <input type="text" name="text" class="form-control" placeholder="Text">
                    @error('text')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <label for="" class="form-label mb-1 mt-3 fw-bold">File</label>
                    <input type="file" name="file" class="form-control" placeholder="File">
                    @error('file')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                   

                    <input type="submit" class="btn btn-dark text-light mt-3" value="Add">

                </form>
            </div>
        </div>

    </div> <!-- end container -->
    @endsection
</body>

</html>