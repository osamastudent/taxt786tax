<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <title>Provincial Sales Tax Registration</title>
  <style>
    .boxes input,
    checkbox {
      display: none;
    }

    .cursor-ponter-class {
      cursor: pointer;
    }

    .next.btn {
      background-color: #ff6d00 !important;
      color: white !important;
    }

    .next.btn:hover {
      background-color: #ffb300 !important;
      color: black !important;
    }

    .form-card {
      background-color: white;
      border-radius: 5px !important;
      box-shadow: 0 0.5px 3px rgba(0, 0, 0, 0.2);
      padding-top: 20px;

    }

    form {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0.5px 3px rgba(0, 0, 0, 0.2);

      padding: 20px;

    }

    .next.btn {
      background-color: #ff6d00 !important;
      color: white !important;
    }

    .next.btn:hover {
      background-color: #ffb300 !important;
      color: black !important;
    }

    .back {
      background-color: black !important;
      color: white !important;
    }

    .back:hover {
      background-color: brown !important;
      color: white !important;
    }
  </style>
</head>

<body>
  @include('clientarea.navbar')
  @section('content')


  <!-- container start -->
  <div class="container mt-5 mb-5">

    <div class="card form-card w-75 pb-2 mx-auto border-0">

      <div class="card-header bg-dark text-white">
        <h4>Provincial Sales Tax Registration</h4>
      </div>
      <div class="card-body px-5 mt-3">

        <!-- form start -->
        <form action="{{route('ProvincialSalesStore')}}" method="post">
          @csrf
          <div class="card-title">
            <strong>Select checkboxes in which authority you want to register</strong>
          </div>

          <!-- row start -->
          <div class="row">
            <div class="col-12">
              <div class="div">
                <input type="checkbox" id="srb" name="SRB" value="SRB">
                <label class="form-label fw-bold" for="srb">SRB</label>
              </div>

              <div class="div">
                <input type="checkbox" id="pra" name="PRA" value="PRA">
                <label class="form-label fw-bold" for="pra">PRA</label>
              </div>

              <div class="div">
                <input type="checkbox" id="kpra" name="KPRA" value="KPRA">
                <label class="form-label fw-bold" for="kpra">KPRA</label>
              </div>

              <div class="div">
                <input type="checkbox" id="bra" name="BRA" value="BRA">
                <label class="form-label fw-bold" for="bra">BRA</label>
              </div>

            </div>
          </div>
          <!-- row end -->

          <!-- row start -->
          <div class="row">
            <div class="col-12">
              <select name="select-status" id="statusSelect" onchange="selectStatus()" class="form-select personal-ntn-bottom-border-select " aria-label="Default select example" style="background-color: transparent; position: relative; z-index: 2;">
                <option selected disabled value="">Select your Status</option>
                <option value="Individual">Individual</option>
                <option value="Fir_Partnership">Firm/Partnership</option>
                <option value="SECP_Company">SECP Company</option>
              </select>

            </div>
          </div><!-- row end -->

          <!-- row start -->
          <div class="row">
            <div class="col-12 mt-3 d-flex justify-content-end">
              <a href="{{route('home')}}" class="back btn mx-1">Back</a>
              <button type="submit" href="#" id="nextButton" class="next btn disabled">Next</button>

            </div>
          </div>
          <!-- row end -->

        </form>
      </div>
    </div>


  </div><!-- container end -->

  <script>
    function selectStatus() {
      var selectElement = document.getElementById("statusSelect");
      var nextButton = document.getElementById("nextButton");
      var selectedValue = selectElement.value;

      if (selectedValue === "Individual") {
        nextButton.classList.remove("disabled");

      } else if (selectedValue === "Fir_Partnership") {
        nextButton.classList.remove("disabled");

      } else if (selectedValue === "SECP_Company") {
        nextButton.classList.remove("disabled");
      } else {
        console.log("no route Find");
      }
    }
  </script>

</body>

</html>