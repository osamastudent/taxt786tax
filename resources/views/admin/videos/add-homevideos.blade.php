<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Add Category</title>
    <style>
    .card{
        border-radius: 8px !important;
    box-shadow: 0 1px 2px #00000029 !important;
    }
    form{
        border-radius: 8px !important;
    box-shadow: 0 1px 2px 1px #00000029 !important;
    }
    .error-style {
            font-size: 13px !important;
            font-weight: 400 !important;
        }
        .form-label {
            font-size: 13px;
            color: black;
            font-weight: 400;
        }
        input::placeholder{
            font-size: 12px;
            font-weight: 400;
        }

        .form-select{
            font-size: 12px !important;
            font-weight: 400 !important;
        }
    </style>
</head>
<body>
    
@extends('admin.masterfile')
    @section('content')


<div class="container">

<div class="card mx-auto mt-5 ">
<div class="card-header bg-dark text-light">
<h4>Add Video Category</h4>
</div>
<div class="card-body">
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <span>{{session('success')}}</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif
<form action="{{route('homeVideosStore')}}" method="post" class="p-4" enctype="multipart/form-data">
    @csrf
    
    

    <label for="" class="form-label mt-0 mb-1">Category</label>
    <select name="video_category_id" class="form-select" aria-label="Default select example">
    <option selected value="">Open this select menu</option>
    
    @if($videoCategory)
    @foreach($videoCategory as $values)
        <option value="{{$values->id}}">{{$values->name}}</option>
    @endforeach
    @endif

</select>
@error('video_category_id')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


    <label for="" class="form-label mt-3 mb-1">Video Link</label>
<input type="text" name="video_link" class="form-control" placeholder="Enter Video Link">
@error('video_link')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    <label for="" class="form-label mt-3 mb-1">Video Image</label>
<input type="file" name="video_image" class="form-control" placeholder="Enter Video Link">
@error('video_image')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <label for="" class="form-label mt-3 mb-1">Video Title</label>
                    <input type="text" name="video_title" class="form-control" placeholder="Enter Video Title">
@error('video_title')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <label for="" class="form-label mt-3 mb-1">Video Description</label>
                    <textarea name="video_description"  class="form-control"></textarea>
@error('video_description')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

<input type="submit" class="btn btn-dark text-light mt-3" value="Add Video">

</form>
</div>
</div>

</div> <!-- end container -->
    @endsection
</body>
</html>