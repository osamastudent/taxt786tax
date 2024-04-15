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
    .form-label {
            font-size: 13px;
        }
        input::placeholder{
            font-size: 12px;
            font-weight: 400;
        }
    .error-style {
            font-size: 13px !important;
            font-weight: 400 !important;
        }

    </style>
</head>
<body>
    
@extends('admin.masterfile')
    @section('content')


<div class="container">

<div class="card mx-auto mt-5">
<div class="card-header bg-dark text-light">
<h4>Add Specific Items</h4>
</div>
<div class="card-body">
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <span>{{session('success')}}</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif
<form action="{{route('specificItems')}}" method="post" class="p-4" enctype="multipart/form-data">
    @csrf
    
    <label for="" class="form-label mb-1">Image</label>
<input type="file" name="image" class="form-control">
@error('image')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    
    <label for="" class="form-label mt-3 mb-1">Image Heading</label>
<input type="text" name="image_heading" class="form-control" placeholder="Enter Image Heading">
@error('image_heading')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    
    <label for="" class="form-label mt-3 mb-1">First Specific Item</label>
<input type="text" name="item_one" class="form-control" placeholder="Enter First Specific Item">
@error('item_one')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    
    
                    <label for="" class="form-label mt-3 mb-1">Second Specific Item</label>
<input type="text" name="item_two" class="form-control" placeholder="Enter Second Specific Item">
@error('item_two')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    
    
                    <label for="" class="form-label mt-3 mb-1">Third Specific Item</label>
<input type="text" name="item_three" class="form-control" placeholder="Enter Third Specific Item">
@error('item_three')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    
    
                    <label for="" class="form-label mt-3 mb-1">Fourth Specific Item</label>
<input type="text" name="item_four" class="form-control" placeholder="Enter Fourth Specific Item">
@error('item_four')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    
    
                    <label for="" class="form-label mt-3 mb-1">Fifth Specific Item</label>
<input type="text" name="item_five" class="form-control" placeholder="Enter Fifth Specific Item">
@error('item_five')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
    
    
                    <label for="" class="form-label mt-3 mb-1">Sixth Specific Item</label>
<input type="text" name="item_six" class="form-control" placeholder="Enter Sixth Specific Item">
@error('item_six')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

<input type="submit" class="btn btn-dark text-light mt-3" value="Add Specific Items">

</form>
</div>
</div>


</div> <!-- end container -->
    @endsection
</body>
</html>