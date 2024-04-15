<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="cssfolder/sidebar.css">
    <title>Sidebar</title>
    
</head>
<body>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">Befiler Revolutionizing the Tax Industry</a>
  <a href="#contact">Business Registration guide</a>
  <a href="#about">Learn Sales Tax</a>


  
  <a href="#news">NTN Registration</a>
  <a href="#contact">Pakistan's Tax Affairs</a>
  <a href="#about">Tax Deduction and Credit in Pakistan</a>

  
  <a href="#news">Tax News and Social Trends</a>
  <a href="#contact">Tax Planning in Pakistan</a>
  <a href="#about">Uncategorized</a>
</div>

<!-- Page content -->
<div class="content">
@yield('content')
</div>


<footer>
  @include('footer')
</footer>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>