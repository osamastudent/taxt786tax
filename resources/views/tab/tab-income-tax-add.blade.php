<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Add Tab Income Tax Return</title>
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

        input::placeholder {
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
                <h4>Add Tab Income Tax Return</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span>{{session('success')}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{route('tabIncomeTaxStore')}}" method="post" class="p-4">
                    @csrf



                    <label for="" class="form-label  mb-1">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    @error('title')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
                    <label for="" class="form-label mt-3 mb-1">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Enter Price">
                    @error('price')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
                    <label for="" class="form-label mt-3 mb-1">Time</label>
                    <input type="text" name="time" class="form-control" placeholder="Enter Time">
                    @error('time')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <label for="" class="form-label mt-3 mb-1">Working Days</label>
                    <input type="text" name="working_days" class="form-control" placeholder="Enter Working Days">
                    @error('working_days')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <label for="" class="form-label mt-3 mb-1">Requirement</label>
                    <input type="text" name="requirement" class="form-control" placeholder="Enter Requirement">
                    @error('requirement')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <label for="" class="form-label mt-3 mb-1">Text 01:</label>
                    <input type="text" name="text_one" class="form-control" placeholder="Enter Text 01">
                    @error('text_one')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <label for="" class="form-label mt-3 mb-1">Text 02:</label>
                    <input type="text" name="text_two" class="form-control" placeholder="Enter Text 02">
                    @error('text_two')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <input type="checkbox" name="" id="textThreeCheckbox">
                    <label for="textThreeCheckbox" class="form-label mt-3 mb-1">Text 03:</label>

                    <input type="text" name="text_three" id="text_three_input" class="d-none form-control" placeholder="Enter Text 03">
                    @error('text_three')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
                    <input type="checkbox" name="" id="textFourCheckbox">
                    <label for="textFourCheckbox" class="form-label mt-3 mb-1">Text 04:</label>

                    <input type="text" name="text_four" id="text_four_input" class="d-none form-control" placeholder="Enter Text 04">
                    @error('text_four')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <input type="checkbox" name="" id="textFiveCheckbox">
                    <label for="textFiveCheckbox" class="form-label mt-3 mb-1">Text 05:</label>

                    <input type="text" name="text_five" id="text_five_input" class="d-none form-control" placeholder="Enter Text 05">
                    @error('text_five')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <input type="checkbox" name="" id="textSixCheckbox">
                    <label for="textSixCheckbox" class="form-label mt-3 mb-1">Text 06:</label>

                    <input type="text" name="text_six" id="text_six_input" class="d-none form-control" placeholder="Enter Text 06">
                    @error('text_six')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror



                    <input type="checkbox" name="" id="textSevenCheckbox">
                    <label for="textSevenCheckbox" class="form-label mt-3 mb-1">Text 07:</label>

                    <input type="text" name="text_seven" id="text_seven_input" class="d-none form-control" placeholder="Enter Text 07">
                    @error('text_seven')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <input type="checkbox" name="" id="textEightCheckbox">
                    <label for="textEightCheckbox" class="form-label mt-3 mb-1">Text 08:</label>

                    <input type="text" name="text_eight" id="text_eight_input" class="d-none form-control" placeholder="Enter Text 08">
                    @error('text_eight')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <input type="checkbox" name="" id="textNineCheckbox">
                    <label for="textNineCheckbox" class="form-label mt-3 mb-1">Text 09:</label>

                    <input type="text" name="text_nine" id="text_nine_input" class="d-none form-control" placeholder="Enter Text 09">
                    @error('text_nine')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <input type="checkbox" name="" id="textTenCheckbox">
                    <label for="textTenCheckbox" class="form-label mt-3 mb-1">Text 10:</label>

                    <input type="text" name="text_ten" id="text_ten_input" class="d-none form-control" placeholder="Enter Text 10">
                    @error('text_ten')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror





                    <input type="checkbox" name="" id="textElevenCheckbox">
                    <label for="textElevenCheckbox" class="form-label mt-3 mb-1">Text 11:</label>

                    <input type="text" name="text_eleven" id="text_eleven_input" class="d-none form-control" placeholder="Enter Text 11">
                    @error('text_eleven')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror
                    <input type="checkbox" name="" id="textTwelveCheckbox">
                    <label for="textTwelveCheckbox" class="form-label mt-3 mb-1">Text 12:</label>

                    <input type="text" name="text_twelve" id="text_twelve_input" class="d-none form-control" placeholder="Enter Text 12">
                    @error('text_twelve')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <input type="checkbox" name="" id="textThirteenCheckbox">
                    <label for="textThirteenCheckbox" class="form-label mt-3 mb-1">Text 13:</label>

                    <input type="text" name="text_thirteen" id="text_thirteen_input" class="d-none form-control" placeholder="Enter Text 13">
                    @error('text_thirteen')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror



                    <input type="checkbox" name="" id="textFourteenCheckbox">
                    <label for="textFourteenCheckbox" class="form-label mt-3 mb-1">Text 14:</label>

                    <input type="text" name="text_fourteen" id="text_fourteen_input" class="d-none form-control" placeholder="Enter Text 14">
                    @error('text_fourteen')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror





                    <input type="checkbox" name="" id="textfifthteenCheckbox">
                    <label for="textfifthteenCheckbox" class="form-label mt-3 mb-1">Text 15:</label>

                    <input type="text" name="text_fifthteen" id="text_fifthteen_input" class="d-none form-control" placeholder="Enter Text 15">
                    @error('text_fifthteen')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror





                    <input type="checkbox" name="" id="textsixteenCheckbox">
                    <label for="textsixteenCheckbox" class="form-label mt-3 mb-1">Text 16:</label>



                    <input type="text" name="text_sixteen" id="text_sixteen_input" class="d-none form-control" placeholder="Enter Text 16">
                    @error('text_sixteen')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror


                    <input type="checkbox" name="" id="textSeventeenCheckbox" class="d-inline-block">
                    <label for="textSeventeenCheckbox" class="form-label mt-3 mb-1">Text 17:</label>

                    <input type="text" name="text_seventeen" value="" id="text_seventeen_input" class="d-none form-control" placeholder="Enter Text 17">
                    @error('text_seventeen')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <input type="checkbox" name="" id="textEighteenteenCheckbox" class="d-inline-block">
                    <label for="textEighteenteenCheckbox" class="form-label mt-3 mb-1">Text 18:</label>

                    <input type="text" name="text_eighteen" value="" id="text_eighteen_input" class="d-none form-control" placeholder="Enter Text 18">
                    @error('text_eighteen')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <input type="checkbox" name="" id="textNineteenCheckbox" class="d-inline-block">
                    <label for="textNineteenCheckbox" class="form-label mt-3 mb-1">Text 19:</label>

                    <input type="text" name="text_nineteen" value="" id="text_nineteen_input" class="d-none form-control" placeholder="Enter Text 19">
                    @error('text_nineteen')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror

                    <input type="checkbox" name="" id="textTwentyCheckbox" class="d-inline-block">
                    <label for="textTwentyCheckbox" class="form-label mt-3 mb-1">Text 20:</label>

                    <input type="text" name="text_twenty" value="" id="text_twenty_input" class="d-none form-control" placeholder="Enter Text 20">
                    @error('text_twenty')
                    <div class="row">
                        <div class="col-12 ">
                            <span class="text-danger error-style">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{$message}}
                            </span>
                        </div>
                    </div>
                    @enderror






                    <br>
                    <input type="submit" class="btn btn-dark text-light mt-3" value="Add Tab Income Tax Return">

                </form>
            </div>
        </div>

    </div> <!-- end container -->





<script src="/javascriptfiles/add-fieled-services-portfolio.js"></script>

    @endsection
</body>

</html>