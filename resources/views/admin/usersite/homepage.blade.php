<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
        .card {
            background-color: white;
            border: 1px solid #dee2e6;
    border-radius: 4px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .16);
        }

        form {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

            padding: 20px;

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

    <div class="card parent-card  px-3 border-0">

        <div class="card-header bg-dark text-white">
            <h3>Add Home Page Content</h3>
        </div>
        <div class="card-body ">
            <!-- @if(session('success'))

<div class="alert bg-info">{{session('success')}}</div>
@endif -->
@if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <span>{{session('success')}}</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif

            <form method="post" class="mt-3" action="{{route('homePageStore')}}" enctype="multipart/form-data">
                @csrf

                <!-- main row start -->
                <div class="row">

                    <div class="col-12 mb-1">
                    <h3 >Section 01:</h3>
                    </div>
                    <div class="col-12 col-lg-6">

                        <label for="" class="form-label mb-1">Heading One</label>
                        <input type="text" name="sec_one_h_one" value="{{old('sec_one_h_one')}}" class="form-control">
                        @error('sec_one_h_one')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror

                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="" class="form-label mb-1">Heading Two</label>
                        <input type="text" name="sec_one_h_two" value="{{old('sec_one_h_two')}}" class="form-control">
                        @error('sec_one_h_two')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror

                    </div>



                    <div class="col-12  mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_one_text"   class="form-control">{{old('sec_one_text')}}</textarea>
                        @error('sec_one_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror

                    </div>




                    <div class="col-12 col-lg-6 mt-3">
                        <label for="" class="form-label mb-1">Image</label>
                        <input type="file" name="sec_one_image" value="{{old('sec_one_image')}}" class="form-control" id="">
                        @error('sec_one_image')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror

                    </div>






                    <div class="col-12 col-lg-6 mt-3">
                        <label for="" class="form-label mb-1">Button Text </label>
                        <input type="text" name="sec_one_btn_text" value="{{old('sec_one_btn_text')}}" class="form-control" id="">
                        @error('sec_one_btn_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror

                    </div>



                    
                    <div class="col-12 mt-4 ">
                        <h3 >Section 02:</h3>
                    </div>


                    <div class="col-12 mt-0">
                        <strong >Box 01:</strong>
                    </div>


                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Image</label>
                        <input type="file" name="sec_two_image_one" value="{{old('sec_two_image_one')}}" class="form-control" id="">
                        @error('sec_two_image_one')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_two_title_one" value="{{old('sec_two_title_one')}}" class="form-control" id="">
                        @error('sec_two_title_one')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12  mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_two_text_one" class="form-control">{{old('sec_two_text_one')}}</textarea>
                        @error('sec_two_text_one')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>




                    <div class="col-12 mt-3">
                        <strong >Box 02:</strong>
                    </div>


                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Image</label>
                        <input type="file" name="sec_two_image_two" value="{{old('sec_two_image_two')}}" class="form-control" id="">
                        @error('sec_two_image_two')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_two_title_two" value="{{old('sec_two_title_two')}}" class="form-control" id="">
                        @error('sec_two_title_two')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12  mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_two_text_two" class="form-control">{{old('sec_two_text_two')}}</textarea>
                        @error('sec_two_text_two')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>




                    <div class="col-12 mt-3">
                        <strong >Box 03:</strong>
                    </div>


                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Image</label>
                        <input type="file" name="sec_two_image_three" value="{{old('sec_two_image_three')}}" class="form-control" id="">
                        @error('sec_two_image_three')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_two_title_three" value="{{old('sec_two_title_three')}}" class="form-control" id="">
                        @error('sec_two_title_three')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12  mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_two_text_three" class="form-control">{{old('sec_two_text_three')}}</textarea>
                        @error('sec_two_text_three')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 mt-3">
                        <strong >Box 04:</strong>
                    </div>


                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Image</label>
                        <input type="file" name="sec_two_image_four" value="{{old('sec_two_image_four')}}" class="form-control" id="">
                        @error('sec_two_image_four')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 col-lg-6 mt-0">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_two_title_four" value="{{old('sec_two_title_four')}}" class="form-control" id="">
                        @error('sec_two_title_four')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12  mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_two_text_four" class="form-control">{{old('sec_two_text_four')}}</textarea>
                        @error('sec_two_text_four')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>





                    <div class="col-12 mt-4">
                        <h3 >Section 03:</h3>
                    </div>

                   
                    <div class="col-12 mt-0">
                        <label for="" class="form-label mb-1">Main Heading</label>
                        <input type="text" name="sec_three_main_h" value="{{old('sec_three_main_h')}}" class="form-control" id="">
                        @error('sec_three_main_h')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>




                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Image 01</label>
                        <input type="file" name="sec_three_image_one" value="{{old('sec_three_image_one')}}" class="form-control" id="">
                        @error('sec_three_image_one')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Image 02</label>
                        <input type="file" name="sec_three_image_two" value="{{old('sec_three_image_two')}}" class="form-control" id="">
                        @error('sec_three_image_two')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Image 03</label>
                        <input type="file" name="sec_three_image_three" value="{{old('sec_three_image_three')}}" class="form-control" id="">
                        @error('sec_three_image_three')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Image 04</label>
                        <input type="file" name="sec_three_image_four" value="{{old('sec_three_image_four')}}" class="form-control" id="">
                        @error('sec_three_image_four')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div> 

                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Image 05</label>
                        <input type="file" name="sec_three_image_five" value="{{old('sec_three_image_five')}}" class="form-control" id="">
                        @error('sec_three_image_five')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Image 06</label>
                        <input type="file" name="sec_three_image_six" value="{{old('sec_three_image_six')}}" class="form-control" id="">
                        @error('sec_three_image_six')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



 <div class="col-12 col-lg-6 mt-3">
                        <label for="" class="form-label mb-1">Image 07</label>
                        <input type="file" name="sec_three_image_seven" value="{{old('sec_three_image_seven')}}" class="form-control" id="">
                        @error('sec_three_image_seven')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-6 mt-3">
                        <label for="" class="form-label mb-1">Image 08</label>
                        <input type="file" name="sec_three_image_eight" value="{{old('sec_three_image_eight')}}" class="form-control" id="">
                        @error('sec_three_image_eight')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 mt-4">
                        <h3 >Section 04:</h3>
                    </div>


                    <div class="col-12 col-lg-6 mt-1">
                        <label for="" class="form-label mb-1">Main Heading</label>
                        <input type="text" name="sec_four_main_h" value="{{old('sec_four_main_h')}}" class="form-control" id="">
                        @error('sec_four_main_h')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-6 mt-1">
                        <label for="" class="form-label mb-1">Button Text</label>
                        <input type="text" name="sec_four_box_btn_text" value="{{old('sec_four_box_btn_text')}}" class="form-control">
                        @error('sec_four_box_btn_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div> 


                    <div class="col-12 mt-3">
                        <strong>Box 01:</strong>
                    </div>

                    <div class="col-12 mt-1">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_four_box_one_title" value="{{old('sec_four_box_one_title')}}" class="form-control" id="">
                        @error('sec_four_box_one_title')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_four_box_one_text" class="form-control">{{old('sec_four_box_one_text')}}</textarea>
                        @error('sec_four_box_one_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>




                    <div class="col-12 mt-3">
                        <strong>Box 02:</strong>
                    </div>

                    <div class="col-12 mt-1">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_four_box_two_title" value="{{old('sec_four_box_two_title')}}" class="form-control" id="">
                        @error('sec_four_box_two_title')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_four_box_two_text" class="form-control">{{old('sec_four_box_two_text')}}</textarea>
                        @error('sec_four_box_two_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-3">
                        <strong>Box 03:</strong>
                    </div>

                    <div class="col-12 mt-1">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_four_box_three_title" value="{{old('sec_four_box_three_title')}}" class="form-control" id="">
                        @error('sec_four_box_three_title')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_four_box_three_text" class="form-control">{{old('sec_four_box_three_text')}}</textarea>
                        @error('sec_four_box_three_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-3">
                        <strong>Box 04:</strong>
                    </div>

                    <div class="col-12 mt-1">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_four_box_four_title" value="{{old('sec_four_box_four_title')}}" class="form-control" id="">
                        @error('sec_four_box_four_title')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_four_box_four_text" class="form-control">{{old('sec_four_box_four_text')}}</textarea>
                        @error('sec_four_box_four_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 mt-3">
                        <strong>Box 05:</strong>
                    </div>

                    <div class="col-12 mt-1">
                        <label for="" class="form-label mb-1">Title</label>
                        <input type="text" name="sec_four_box_five_title" value="{{old('sec_four_box_five_title')}}" class="form-control" id="">
                        @error('sec_four_box_five_title')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-3">
                        <label for="" class="form-label mb-1">Text</label>
                        <textarea name="sec_four_box_five_text" class="form-control">{{old('sec_four_box_five_text')}}</textarea>
                        @error('sec_four_box_five_text')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    
                    <div class="col-12 mt-4 mb-0">
                        <h3 >Section 05:</h3>
                    </div>

                    


                    <div class="col-12 mt-0">
                        <label for="" class="form-label mb-1">Main Heading</label>
                        <input type="text" name="sec_five_main_h" value="{{old('sec_five_main_h')}}" class="form-control">
                        @error('sec_five_main_h')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-6 mt-3 ">
                        <label for="" class="form-label mb-1">Image</label>
                        <input type="file" name="sec_five_image" value="{{old('sec_five_image')}}" class="form-control">
                        @error('sec_five_image')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-6 mt-3 ">
                        <label for="" class="form-label mb-1">Google Map</label>
                        <input type="text" name="sec_five_google_map" value="{{old('sec_five_google_map')}}" class="form-control">
                        @error('sec_five_google_map')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-4 mb-0">
                        <h3 >Section 06:</h3>
                    </div>

                    

                    <div class="col-12  mt-0">
                        <label for="" class="form-label mb-1">Main Heading</label>
                        <input type="text" name="sec_six_main_h" value="{{old('sec_six_main_h')}}" class="form-control">
                        @error('sec_six_main_h')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Text 01</label>
                        <textarea name="sec_six_text_one" class="form-control">{{old('sec_six_text_one')}}</textarea>
                        @error('sec_six_text_one')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Text 02</label>
                        <textarea name="sec_six_text_two" class="form-control">{{old('sec_six_text_two')}}</textarea>
                        @error('sec_six_text_two')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Text 03</label>
                        <textarea name="sec_six_text_three" class="form-control">{{old('sec_six_text_three')}}</textarea>
                        @error('sec_six_text_three')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Text 04</label>
                        <textarea name="sec_six_text_four" class="form-control">{{old('sec_six_text_four')}}</textarea>
                        @error('sec_six_text_four')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Text 05</label>
                        <textarea name="sec_six_text_five" class="form-control">{{old('sec_six_text_five')}}</textarea>
                        @error('sec_six_text_five')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                    <div class="col-12 col-lg-4 mt-3">
                        <label for="" class="form-label mb-1">Text 06</label>
                        <textarea name="sec_six_text_six" class="form-control">{{old('sec_six_text_six')}}</textarea>
                        @error('sec_six_text_six')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>


                   
                    <div class="col-12 mt-4 mb-0">
                        <h3 >Section 07:</h3>
                    </div>


                    <div class="col-12  mt-3">
                        <label for="" class="form-label mb-1">Video Main Headng</label>
                        <input type="text" name="sec_seven_main_h" value="{{old('sec_seven_main_h')}}" class="form-control">
                        @error('sec_seven_main_h')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>



                    <div class="col-12 mt-4 mb-0">
                        <h3 >Section 08:</h3>
                    </div>


                    <div class="col-12  mt-3">
                        <label for="" class="form-label mb-1">Blog Main Headng</label>
                        <input type="text" name="sec_eight_main_h" value="{{old('sec_eight_main_h')}}" class="form-control">
                        @error('sec_eight_main_h')
                        <div class="row">
                            <div class="col-12 ">
                                <span class="text-danger error-style">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    {{$message}}
                                </span>
                            </div>
                        </div>
                        @enderror
                    </div>

                   
                </div>
                <!-- main row end -->


                <button type="submit" name="" class="btn btn-dark mt-4">Add</button>
            </form>
        </div>
    </div>
    <!-- form  card end here -->



    @endsection
</body>

</html>






