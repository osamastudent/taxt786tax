<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--============== booot5 =============-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- font awesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <!-- _____ Slick Slider _____ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
  <!-- boot -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="/index.css">
  <link rel="stylesheet" href="/allcss/business-servicess.css">


  <link rel="icon" href="{{asset('logotitle3.jpg')}}">
  <style>
    form {
      box-shadow: none !important;
    }
  </style>
  <title>Tax Tools</title>
</head>

<body>
  @include('navbar')
  <hr>
  <div class="container">
    <!-- card start -->
    <div class="card mt-4 w-75 mx-auto">
      <div class="card-header text-center text-light bg-dark">
        <h4>SALARY TAX CALCULATOR</h4>
      </div>
      <div class="card-body ">
        <form action="{{ route('salaryTaxCalculation') }}" method="post" class="mt-3">
          @csrf

          <div class="row">
            <div class="col-12  col-lg-6">
              <input type="text" name="salary" value="{{ old('salary') }}" class="form-control" placeholder="Enter Salary....">
            </div>

            <div class="col-9 mt-3 mt-lg-0 col-lg-4">
              <input type="text" name="month" value="{{ old('month') }}" class="form-control text-truncate" placeholder="Enter Month....">
            </div>
            <div class="col-3 mt-3 mt-lg-0 col-lg-2">
              <input type="submit" class="btn btn-dark" value="Enter">
            </div>
          </div>



        </form>

        <table id="resultTable" class="table table-bordered  text-center mt-5">
          <thead>
            <tr>
              <th class="border-start-0">Taxable Salary Per Month</th>
              <th>Salary Months</th>
              <th class="border-end-0">Annual Taxable Salary</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border-start-0">{{number_format($salary ? $salary : '0')}}</td>
              <td>{{number_format($month ? $month : '0')}}</td>
              <td class="border-end-0">{{number_format($totalSalary ? $totalSalary : '0')}}</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
    <!-- card end -->
    <!-- row start -->
    <div class="row mx-auto calulators-btn ">
      <div class="col-12  text-center">



        <a href="{{route('Calculator')}}" class="btn mt-3 btn-style">INDIVIDUAL & AOP I.TAX-2023-2024</a>
        <a href="{{route('salaryTaxCalculation')}}" class="btn mt-3 btn-style-active">SALARY TAX 2023-24</a>
        <a href="{{route('rentTaxCalculation')}}" class="btn mt-3 btn-style">RENT TAX CALCULATOR-2023-2024</a>
        <a href="{{route('withholdingTaxCalculation')}}" class="btn mt-3 btn-style">WH TAX CARD-2023-2024</a>

        </ul>

      </div>
    </div>
    <!-- row end -->
  </div><!-- container end -->

  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>
</body>

</html>