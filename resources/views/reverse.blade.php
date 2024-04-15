<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is reverse page</h1>
    siple routing <a href="{{url('named')}}">named</a>
    <!-- siple routing <a href="{{url('osama/named')}}">named</a> -->
    <br>

    <!-- <!-- <h5>reverse route</h5> -->
    {{-- <a href="{{action('App\Http\Controllers\practiceController@named')}}">named</a> --}}

    
    <p>named routing   <a href="{{route('examplenamed')}}">named</a></p>
</body>
</html>