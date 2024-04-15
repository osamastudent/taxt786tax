<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="allcss/home.css">
  <script src="/multi-select-tag.js"></script>

  <!-- these three links for select multi -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/> -->

  <title>Income Tax Filing Individual</title>
  <style>
   .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            /* padding-top: 20px; */

        }
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

    <div class="w-75 card form-card mx-auto border-0">

      <div class="card-header text-center bg-dark text-white">
        <h3>Income Tax Filing Individual</h3>
      </div>
      <div class="card-body px-5 mt-3">

        <form action="{{route('IncomeTaxFilingStore')}}" method="post">

         

          @csrf
          <!-- row start -->
          <div class="row justify-content-end">
            <div class="col-12 col-lg-4">
              <label for="" class="form-label mb-1 mt-4 ">Select Tax Year or Years</label>
              <select class="form-select personal-ntn-bottom-border-select border-top-0 border-end-0 border-start-0 " name="selectedValues[]" multiple multiselect-search="true" multiselect-select-all="true" multiselect-max-items="10">

                <option class="bg-white" value="2017"> 2017</option>
                <option class="bg-white" value="2018">2018</option>
                <option class="bg-white" value="2019">2019</option>
                <option class="bg-white" value="2020"> 2020</option>
                <option class="bg-white" value="2021">2021</option>
                <option class="bg-white" value="2022">2022</option>
                <option class="bg-white" value="2023"> 2023</option>
                <option class="bg-white" value="2024">2024</option>
                <option class="bg-white" value="2025">2025</option>
                <option class="bg-white" value="2026">2026</option>
              </select>
              @error('selectedValues')
              {{$message}}
              @enderror

            </div>
            <!-- row end -->

            <!-- duplicate values like cards -->
            <!-- row start -->
            <div class="row">


            <div class="col-6 col-lg-4 mt-3 d-none" id="salaryIncomeCardChecked">
            <div class="card  w-100 mb-3">
              <div class="card-body  text-center " id="card-selected">
                <label class="card-title">Salary Income</label>
              </div>
              </label>
            </div>
          </div>

          <div class="col-6 col-lg-4 d-none mt-3" id="RentIncomeCardChecked">
                <div class="card  w-100 mb-3">
                  <div class="card-body  text-center " id="card-selected">
                    <label class="card-title">Rent Income</label>
                  </div>
                </div>
              </div>

            


              <div class="col-6 col-lg-4 d-none mt-3" id="BusinessIncomeCardChecked">
                <div class="card  w-100 mb-3">
                  <div class="card-body  text-center " id="card-selected">
                    <label class="card-title">Business Income</label>
                  </div>
                </div>
              </div>



              <div class="col-6 col-lg-4 d-none mt-3" id="SharesCapitalGainCardChecked">
                <div class="card  w-100 mb-3">
                  <div class="card-body  text-center" id="card-selected">
                    <label class="card-title">Shares – Capital gain</label>
                  </div>
                </div>
              </div>


              <div class="col-6 col-lg-4 d-none mt-3" id="OtherIncomeCardChecked">
                <div class="card  w-100 mb-3">
                  <div class="card-body  text-center" id="card-selected">
                    <label class="card-title">Other Income</label>
                  </div>
                </div>
              </div>

              <div class="col-6 col-lg-4 d-none mt-3" id="WithholdingAdjustableCardChecked">
                <div class="card  w-100 mb-3">
                  <div class="card-body  text-center" id="card-selected">
                    <label class="card-title">Withholding / Adjustable or Final Tax </label>

                  </div>
                </div>
              </div>


            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row  mt-3 boxes">

              <!-- continue -->
              <div class="col-6 col-lg-4 mt-3">
                <div class="card  w-100 mb-3">
                  <label for="salaryincomeid">
                    <div class="card-body  text-center card-hover" id="card-selected">
                      <label for="salaryincomeid" class="cursor-ponter-class card-title">Salary Income</label>
                      <input type="checkbox" name="salaryincomename" value="salary_income" id="salaryincomeid">
                    </div>
                  </label>
                </div>
              </div>


              <div class="col-6 col-lg-4 mt-3">
                <div class="card  w-100 mb-3">
                  <label for="rentincomeid">
                    <div class="card-body  text-center card-hover" id="RentIncomeCardHover">
                      <label for="rentincomeid" class="cursor-ponter-class card-title">Rent Income</label>
                      <input type="checkbox" name="rentincomename" value="rent_income" id="rentincomeid">
                    </div>
                  </label>
                </div>
              </div>


              <div class="col-6 col-lg-4 mt-3">
                <div class="card  w-100 mb-3">
                  <label for="businessincomeid">
                    <div class="card-body  text-center card-hover" id="BusinessIncomeCardHover">
                      <label for="businessincomeid" class="cursor-ponter-class card-title">Business Income</label>
                      <input type="checkbox" name="businessincomename" value="business_income"  id="businessincomeid">
                    </div>
                  </label>
                </div>
              </div>


              <div class="col-6 col-lg-4 mt-3">
                <div class="card  w-100 mb-3">
                  <label for="sharescapitalgainid">
                    <div class="card-body  text-center card-hover" id="SharesCapitalGainCardHover">
                      <label for="sharescapitalgainid" class="cursor-ponter-class card-title">Shares – Capital gain</label>
                      <input type="checkbox" name="sharescapitalgainname" value="shares_capital_gain"  id="sharescapitalgainid">
                    </div>
                  </label>
                </div>
              </div>


              <div class="col-6 col-lg-4 mt-3">
                <div class="card  w-100 mb-3">
                  <label for="otherincomeid">
                    <div class="card-body  text-center card-hover" id="OtherIncomeCardHover">
                      <label for="otherincomeid" class="cursor-ponter-class card-title">Other Income</label>
                      <input type="checkbox" name="otherincomename" value="other_income"  id="otherincomeid">
                    </div>
                  </label>
                </div>
              </div>


             

              <div class="col-8 col-lg-4 mt-3">
                <div class="card w-100 mb-3">
                  <label for="withholdingadjustableid">
                    <div class="card-body text-center card-hover" id="WithholdingAdjustableCardHover">
                      <label for="withholdingadjustableid" class="cursor-pointer-class card-title">Withholding / Adjustable or Final Tax </label>
                      <input type="checkbox"  name="withholdingadjustablename" value="withholding_adjustable_or_final_tax" id="withholdingadjustableid">
                    </div>
                  </label>
                </div>
              </div>



            </div><!-- row end -->


            <div class="row">
              <div class="col-12 mt-3 d-flex justify-content-end">

                <button type="submit" href="#" id="nextButton" class="next btn " disabled>Next</button>


        </form><!-- form end -->


      </div>
    </div>
  </div>
  </div>


  </div><!-- container end -->



  <!-- these for slect multi with threee links -->
  <!-- <script>
    $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
  </script> -->


  <script>
    var salaryCheckbox = document.getElementById("salaryincomeid");
    var rentCheckbox = document.getElementById("rentincomeid");
        var businessCheckbox = document.getElementById("businessincomeid");
    var sharescapitalgainCheckbox = document.getElementById("sharescapitalgainid");
    var otherincomeCheckbox = document.getElementById("otherincomeid");
    var withholdingadjustableCheckbox = document.getElementById("withholdingadjustableid");


    var salaryIncomeCardChecked = document.getElementById("salaryIncomeCardChecked");
    var RentIncomeCardChecked = document.getElementById("RentIncomeCardChecked");
    var BusinessIncomeCardChecked = document.getElementById("BusinessIncomeCardChecked");
    var SharesCapitalGainCardChecked = document.getElementById("SharesCapitalGainCardChecked");
    var OtherIncomeCardChecked = document.getElementById("OtherIncomeCardChecked");
    var WithholdingAdjustableCardChecked = document.getElementById("WithholdingAdjustableCardChecked");

    salaryCheckbox.addEventListener("change", enableNextButton);
    rentCheckbox.addEventListener("change", enableNextButton);
    businessCheckbox.addEventListener("change", enableNextButton);
    sharescapitalgainCheckbox.addEventListener("change", enableNextButton);
    otherincomeCheckbox.addEventListener("change", enableNextButton);
    withholdingadjustableCheckbox.addEventListener("change", enableNextButton);

    // Function to enable the next button if at least one checkbox is checked
    function enableNextButton() {
        if (salaryCheckbox.checked || rentCheckbox.checked || businessCheckbox.checked || sharescapitalgainCheckbox.checked || otherincomeCheckbox.checked || withholdingadjustableCheckbox.checked
        ) {
            nextButton.disabled = false;
        } else {
            nextButton.disabled = true;
        }
    }





// for salary income
    var nextButton = document.getElementById("nextButton");
    var selectedDataOfSalaryIncome = {};

    salaryCheckbox.addEventListener("click", function() {
      var checked = document.getElementById("salaryincomeid").checked;
      if (checked === true) {
        salaryIncomeCardChecked.classList.remove("d-none");
        selectedDataOfSalaryIncome = true;
        
      // sessionStorage.setItem('selectedDataOfSalaryIncome', JSON.stringify(selectedDataOfSalaryIncome));
      sessionStorage.setItem('selectedDataOfSalaryIncome',salaryIncomeCardChecked);
      } else {
                salaryIncomeCardChecked.classList.add("d-none");
        selectedDataOfSalaryIncome = false;
      }
    });

    // Check if there is stored data on page load
    document.addEventListener('DOMContentLoaded', function() {
      var storedData = sessionStorage.getItem('selectedDataOfSalaryIncome');
      if (storedData) {
        // storedData = JSON.parse(storedData);
        if (storedData) {
          nextButton.disabled = false;
          salaryIncomeCardChecked.classList.remove("d-none");
        }
      }
    });


// for rentincom
    // var selectedDataRentIncome = {};
    rentCheckbox.addEventListener("click", function() {
      var checked = document.getElementById("rentincomeid").checked;
      if (checked === true) {
        RentIncomeCardChecked.classList.remove("d-none");
        selectedDataRentIncome = true;
        // sessionStorage.setItem('selectedDataRentIncome', JSON.stringify(selectedDataRentIncome));
      sessionStorage.setItem('selectedDataRentIncome',RentIncomeCardChecked);
      } else {
                RentIncomeCardChecked.classList.add("d-none");
        selectedDataRentIncome = false;
      }
    });

    // Check if there is stored data on page load
    document.addEventListener('DOMContentLoaded', function() {
      var storedData = sessionStorage.getItem('selectedDataRentIncome');
        // storedData = JSON.parse(storedData);
        if (storedData) {
        if (storedData) {
          // nextButton.disabled = false;
          RentIncomeCardChecked.classList.remove("d-none");
      }
      }
    });


    // for business income
    // var selectedDataBusinessIncome = {};
    businessCheckbox.addEventListener("change",function(){
      var checked = document.getElementById("businessincomeid").checked;
      if(checked===true){
        BusinessIncomeCardChecked.classList.remove("d-none");
        selectedDataBusinessIncome=true;
        // sessionStorage.setItem('selectedDataOfSalaryIncome', JSON.stringify(selectedDataOfSalaryIncome));
        sessionStorage.setItem('selectedDataBusinessIncome',BusinessIncomeCardChecked);
      
      }
      else{
        BusinessIncomeCardChecked.classList.add("d-none");
        selectedDataBusinessIncome=false;
      }
      
      
    })

    document.addEventListener("DOMContentLoaded",function(){
var storeData=sessionStorage.getItem("selectedDataBusinessIncome");
if(storeData){
if(storeData){
  BusinessIncomeCardChecked.classList.remove("d-none");
}
}
    });




// for SharesCapitalGain 
    // var selectedDatasharescapitalgain = {};
     
    sharescapitalgainCheckbox.addEventListener("change",function(){
      var checked = document.getElementById("sharescapitalgainid").checked;
      if(checked===true){
        SharesCapitalGainCardChecked.classList.remove("d-none");
        selectedDatasharescapitalgain=true;
      }
      else{
        SharesCapitalGainCardChecked.classList.add("d-none");
        selectedDatasharescapitalgain=false;
      }
      sessionStorage.setItem('selectedDatasharescapitalgain',SharesCapitalGainCardChecked);
    })

    document.addEventListener("DOMContentLoaded",function(){
var storeData=sessionStorage.getItem("selectedDatasharescapitalgain");
if(storeData){
if(storeData){
  SharesCapitalGainCardChecked.classList.remove("d-none");
}
}
    });



// for other income 
    // var selectedDataotherincome = {};
    otherincomeCheckbox.addEventListener("change",function(){
      var checked = document.getElementById("otherincomeid").checked;
      if(checked===true){
        OtherIncomeCardChecked.classList.remove("d-none");
        selectedDataotherincome=true;
        
      }
      else{
        OtherIncomeCardChecked.classList.add("d-none");
        selectedDataotherincome=false;
      }
      sessionStorage.setItem('selectedDataotherincome',OtherIncomeCardChecked);
    })

    document.addEventListener("DOMContentLoaded",function(){
var storeData=sessionStorage.getItem("otherincome");
if(storeData){
if(storeData){
  OtherIncomeCardChecked.classList.remove("d-none");
}
}
    });



// for Withholding / Adjustable or Final Tax
    // var selectedDataWithholdingAdjustable = {};
    withholdingadjustableCheckbox.addEventListener("change",function(){
      var checked = document.getElementById("withholdingadjustableid").checked;
      if(checked===true){
        WithholdingAdjustableCardChecked.classList.remove("d-none");
        selectedDataWithholdingAdjustable=true;
        
      }
      else{
        WithholdingAdjustableCardChecked.classList.add("d-none");
        selectedDataWithholdingAdjustable=false;
      }
      sessionStorage.setItem('selectedDataWithholdingAdjustable',WithholdingAdjustableCardChecked);
    })

    document.addEventListener("DOMContentLoaded",function(){
var storeData=sessionStorage.getItem("selectedDataWithholdingAdjustable");
if(storeData){
if(storeData){
  WithholdingAdjustableCardChecked.classList.remove("d-none");
}
}
    });

    
      // Add an event listener to clear sessionStorage before the page is unloaded (refreshed)
      window.addEventListener('beforeunload', function() {
        // Clear sessionStorage
        sessionStorage.clear();
    });
  </script>




</body>

</html>