<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>named</title>
</head>
<body>
    <h1>this is named page</h1>
    simple routing <a href="{{url('reverse')}}">reverse</a>
    <!-- siple routing <a href="{{url('osama/reverse')}}">reverse</a> -->

    <h5>reverse route</h5>
        <a href="{{route('examplenamed')}}">examplenamed</a>
        <a href="{{route('examplereverse')}}">examplereverse</a>
        


        
    <p>named routing<a href="{{route('examplereverse')}}">reverse</a></p>
</body>
</html>