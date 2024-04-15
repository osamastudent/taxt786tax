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

  <style>
    .table {
      box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
    }

    form {
      box-shadow: none !important;
    }

    .table th {
      font-size: 12px;
    }

    .total-amount-area {
      background-image: linear-gradient(#ff6d00, rgba(255, 109, 0, 255)) !important;

    }

    .total {
      font-size: 15px !important;
    }

    .total-amount {
      font-size: 16px !important;
    }

    .heading-border {
      border-radius: 7px;
    }
  </style>
  <link rel="icon" href="{{asset('logotitle3.jpg')}}">

  <title>Tax Tools</title>
</head>

<body>
  @include('navbar')
  <hr>

  <div class="container">



    <!-- card start -->
    <div class="card mt-4 w-75 mx-auto">
      <div class="card-header bg-dark text-light text-center">
        <h5>INDIVIDUAL & AOP I.TAX-2023-2024</h5>
      </div>
      <div class="card-body">
           <!-- row start -->
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
        <form action="{{route('Calculation')}}" method="post" class=" ">
          @csrf
          <div class="input-group ">
            <input type="text" name="salary" value="{{old('salary')}}" class="form-control  " placeholder="Type....">
            <input type="submit" class="btn btn-xl btn-dark" value="Enter">
          </div>
        </form>
        </div>
       </div>
<!-- row end -->
    

<!-- table overflow-div start -->
<div style="width: 100%; overflow-x: auto;">
        <table id="resultTable" class="table table-bordered mt-3 ">
          <thead>
            <tr>
              <th>Fixed Tax On Annual Taxable Income</th>
              <th>Previous Slab Max Limit</th>
              <th>Amount Exceed From Previous Slab Max. Limit</th>
              <th>Total Rate On Exceeded Amount</th>
              <th>Tax On Exceeded Amount</th>
              <th>Total Tax Payable</th>
            </tr>
          </thead>
          <tbody>




            <tr>
              @if($taxDetails)
              <td>{{ isset($taxDetails['fixedTax']) ? number_format((float)$taxDetails['fixedTax']) : '' }}</td>
              <td>{{ isset($taxDetails['slabMaxLimit']) ? number_format((float)$taxDetails['slabMaxLimit']) : '' }}</td>
              <td>{{ isset($taxDetails['exceededAmount']) ? number_format((float)$taxDetails['exceededAmount']) : '' }}</td>
              <td>{{ isset($taxDetails['totalRate']) ? number_format((float)$taxDetails['totalRate'], 2) :  '' }}%</td>
              <td>{{ isset($taxDetails['taxOnExceededAmount']) ? number_format((float)$taxDetails['taxOnExceededAmount']) : '' }}</td>
              <td>{{ isset($taxDetails['totalTax']) ? number_format((float)$taxDetails['totalTax']) : '' }}</td>

              @endif
            </tr>


          </tbody>
        </table>
  </div><!-- table overflow-div end -->
        
  <!--row start-->
        <div class="row mx-3 justify-content-end mt-0">
          <div class="col-6 total-amount-area text-center bg-warning text-light p-2 heading-border ">
            <strong class="total">TOTAL INCOME TAX PAYABLE:</strong>
            <strong class="total-amount px-3">{{ isset($taxDetails['totalTax']) ? number_format((float)$taxDetails['totalTax']) : '' }}</strong>
          </div>

        </div>
        <!-- row end -->

      </div>
    </div>
    <!-- card end -->


    <!-- row start -->
    <div class="row mx-auto calulators-btn ">
      <div class="col-12  text-center">



        <a href="{{route('Calculator')}}" class="btn mt-3 btn-style-active">INDIVIDUAL & AOP I.TAX-2023-2024</a>
        <a href="{{route('salaryTaxCalculation')}}" class="btn mt-3 btn-style">SALARY TAX 2023-24</a>
        <a href="{{route('rentTaxCalculation')}}" class="btn mt-3 btn-style">RENT TAX CALCULATOR-2023-2024</a>
        <a href="{{route('withholdingTaxCalculation')}}" class="btn mt-3 btn-style">WH TAX CARD-2023-2024</a>

        </ul>

      </div>
    </div>
    <!-- row end -->
  </div>

  <footer>
    @include('footer') <!-- Include the footer -->
  </footer>
</body>

</html>