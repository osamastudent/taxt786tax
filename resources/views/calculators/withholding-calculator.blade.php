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
    @media screen and (max-width:992px) {
      .horizontal-bar {
        overflow-x: auto;
        width: 100%;
      }

      .horizontal-bar-card {
        width: 1000px;
      }

      /* Webkit (Safari, Chrome) */
      .horizontal-bar::-webkit-scrollbar {
        width: 5px;
      }

      .horizontal-bar::-webkit-scrollbar-thumb {
        background-color: black !important;
        border-radius: 100px;
      }

      .horizontal-bar::-webkit-scrollbar-track {
        background-color: gray !important;
      }

      /* Firefox */
      .horizontal-bar {
        scrollbar-width: thin;
      }

      .horizontal-bar::-moz-scrollbar-thumb {
        /* background-color: #888; */
        border-radius: 50px;
      }

      /* .horizontal-bar::-moz-scrollbar-track {
    background-color: #f5f5f5;
    } */

    }

    .custom-border {
      border: 1px solid #dee2e6 !important;
      margin: 9px 0;
    }

    .custom-border-payment {
      /* border: 1px solid #dee2e6 !important; */
      border-top: none;
      border-bottom: 1px solid #dee2e6 !important;
      border-right: 1px solid #dee2e6 !important;
      border-left: 1px solid #dee2e6 !important;
      margin: 9px 0;
    }

    .custom-border-payment-two {
      /* border: 1px solid #dee2e6 !important; */
      border-top: none white;
      /* border-bottom: 1px solid #dee2e6 !important; */
      border-right: 1px solid #dee2e6 !important;
      border-left: 1px solid #dee2e6 !important;
      margin: 9px 0;
    }

    .chages-new-additions {
      background-color: yellow;
      color: black;
      padding: 5px 30px 5px 30px;
      border-radius: 1px;
    }

    .top {
      background-color: #007634;
      color: white;
      font-size: 13px;
      font-weight: 700;

    }

    .main-row {
      margin-top: -10.5px;
    }

    .first-heading-row {
      background-color: #002062;
      color: white;
      font-size: 12px !important;
      font-weight: 700;
    }

    .non-atl {
      background-color: #002062;
      color: white;
      font-size: 12px !important;
      font-weight: 700;
    }

    .label {
      font-weight: 700;
      font-size: 11px;
      color: black;
      font-family: var(--bs-font-sans-serif) !important;
      text-align: center;
    }

    .text {
      font-size: 10px;
      text-transform: capitalize;
      font-family: Arial, Helvetica, sans-serif;
    }

    .line-height {
      padding: 1px;
    }

    .line-height1 {
      padding: 1.5px;
    }

    .line-height2 {
      padding: 0.7px;
    }

    .line-height3 {
      padding: 0.7px;
    }

    .line-height4 {
      padding: 0.4px;
    }
  </style>
  <title>Tax Tools</title>
</head>

<body>
  @include('navbar')
  <hr>
  <div class="container">
    <!-- horizontal-bar start -->
    <!-- card start -->
    <div class="horizontal-bar">
      <div class="card mt-4 horizontal-bar-card  mx-auto">
        <div class="card-header text-center text-light bg-dark">
          <h3>WITHHOLDING TAX CARD TAX YEAR 2023-24</h3>
          <strong class="chages-new-additions">Changes/New Additions This Year</strong>
        </div>


        <div class="card-body p-0 ">
          <div class="row mt-1 top border-bottom mx-auto mb-0 ">
            <div class="col-1 border-end py-2">Section</div>
            <div class="col-2 text-center border-end py-2 ">Sub Section</div>
            <div class="col-5 text-center border-end py-2">Previous Of The Section</div>
            <div class="col-2 text-center border-end py-2">Rate</div>
            <div class="col-2 text-center py-2">Tax Status</div>
          </div>


          <!-- section one start -->
          <section class="section-one w-100">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-3 py-2 border-end">TAX ON COMPANIES</div>
              <div class="col-5 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl">ATL/NON ATNON-ATL</div>
            </div>


            <div class="row main-row mx-auto">
              <div class="col-1 custom-border ">
                <span class=" px-0 m-0 label">DIVISION ll</span>
              </div>
              <div class="col-2 custom-border ">
                <span class=" px-0 m-0 label">Part l</span>
              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class="border-bottom px-1 m-0">Small Company</p>
                <p class="border-bottom px-1 m-0">Banking Company</p>
                <p class=" px-1 m-0">Any Other Company</p>
              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0">20.00%</p>
                <p class="border-bottom px-1 m-0">39.00%</p>
                <p class="border-bottom px-1 m-0">29.00%</p>

              </div>

              <div class="col-2 custom-border d-flex align-items-center justify-content-center ">
                <span class="text text-center text">Adjustable</span>
              </div>

            </div>
          </section>
          <!-- section one end -->

          <!-- section two start -->
          <section class="section-two w-100" style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-3 py-2 border-end">SUPER TAX ON HIGH EARNING PERSONS</div>
              <div class="col-5 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl">ATL/NON ATNON-ATL</div>
            </div>


            <div class="row main-row mx-auto">
              <div class="col-1 custom-border ">
                <span class=" px-0 m-0 label">4C</span>
              </div>
              <div class="col-2 custom-border ">
                <span class=" px-0 m-0 label text-white">.</span>
              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class="border-bottom px-1 m-0">upto rs. 150million</p>
                <p class="border-bottom px-1 m-0">exceeding rs. 150m but does not exceed rs. 200m</p>
                <p class="border-bottom px-1 m-0">exceeding rs. 200m but does not exceed rs. 250m</p>
                <p class="border-bottom px-1 m-0">exceeding rs. 250m but does not exceed rs. 300m</p>
                <p class="border-bottom px-1 m-0">exceeding rs. 300m but does not exceed rs. 350m</p>
                <p class="border-bottom px-1 m-0">exceeding rs. 350m but does not exceed rs. 400m</p>
                <p class="border-bottom px-1 m-0">exceeding rs. 400m but does not exceed rs. 500m</p>
                <p class="border-bottom border-bottom-0 px-1 m-0">exceeding rs. 500m</p>

              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0">0.00%</p>
                <p class="border-bottom px-1 m-0">1.00%</p>
                <p class="border-bottom px-1 m-0">2.00%</p>
                <p class="border-bottom px-1 m-0">3.00%</p>
                <p class="border-bottom px-1 m-0">4.00%</p>
                <p class="border-bottom px-1 m-0">6.00%</p>
                <p class="border-bottom px-1 m-0">8.00%</p>
                <p class="border-bottom-0 px-1 m-0">10.00%</p>

              </div>

              <div class="col-2 custom-border d-flex align-items-center justify-content-center ">
                <span class="text text-center text">Adjustable</span>
              </div>

            </div>
          </section>
          <!-- section two end -->



          <!-- section three start -->
          <section class="section-three w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-3 py-2 border-end">IMPORT</div>
              <div class="col-5 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>


            <div class="row main-row mx-auto">
              <div class="col-1 custom-border ">
                <span class=" px-0 m-0 label">148</span>
              </div>
              <div class="col-2 custom-border ">
                <span class=" px-0 m-0 label"></span>
              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class="border-bottom px-1 m-0">Persons importing goods classified in Part I of the Twelfth Schedule</p>
                <p class="border-bottom px-1 m-0">Persons importing goods classified in Part II of 12th Schedule </p>
                <p class="border-bottom px-1 m-0">Persons importing goods classified in Part II of 12th Schedule - in case of Commercial Importers</p>
                <p class="border-bottom px-1 m-0">Persons importing goods classified in Part III of 12th Schedule</p>
                <p class="border-bottom px-1 m-0">Persons importing goods classified in Part III of 12th Schedule - in case of Pharmaceutical Finished Goods that are
                  not made in Pakistan, as certified by DRAP</p>
                <p class="border-bottom-0 px-1 m-0">Persons importing goods classified in Part III of 12th Schedule - if Manufacturers Covered Under S.R.O
                  1125(I)/2011 dated December 31, 2011 (as it stood on June 28, 2019), Importers of CKD kits of electrical vehicles
                  for small cars (SUVs with 50 kwh battery and LCVs with 150 kwh battery or below)</p>

              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0">1.00%</p>
                <p class="border-bottom px-1 m-0">2.00%</p>
                <p class="border-bottom px-1 m-0">3.50%</p>
                <p class="border-bottom px-1 m-0">6.00%</p>
                <p class="border-bottom py-2  align-items-center justify-content-center d-flex"> 4.00% </p>
                <p class="border-bottom-0 px-1 m-0">1.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0">2.00%</p>
                <p class="border-bottom px-1 m-0">4.00%</p>
                <p class="border-bottom px-1 m-0">7.50%</p>
                <p class="border-bottom px-1 m-0">12.00%</p>
                <p class="border-bottom px-1 py-2 m-0 ">8.00%</p>
                <p class="border-bottom-0 px-1 m-0 py-3"> 2.00% </p>
              </div>

              <div class="col-2 px-0 text custom-border ">
                <span class="d-block px-3 py-2 text-center border-bottom ">Minimum Tax except for
                  manufacture & Listed Companies</span>
                <span class="d-block py-0 my-0 border-bottom  text-center">Adjustable</span>
                <span class="d-block border-bottom py-2 text-center">Adjustable</span>
                <span class="d-block text-center p-3">Adjustable</span>
              </div>

            </div>
          </section>
          <!-- section three end -->



          <!-- section four start -->
          <section class="section-four w-100" style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-3 py-2 border-end">TAX ON SALARY INCOME</div>
              <div class="col-5 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl">ATL/NON ATNON-ATL</div>
            </div>


            <div class="row main-row mx-auto">


              <div class="col-1 text p-0 custom-border text-start ">

                <p class=" border-bottom px-3 text-start  label pb-3">149</p>

              </div>

              <div class="col-2  p-0 custom-border ">
                <span class="d-block p-3 border-bottom"></span>
                <p class="pt-0 mt-0 px-3 text-start  label pb-3">149(3)</p>
              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class="border-bottom px-1 line-height m-0">BoD Meeting Fee - Every person responsible for making payment for directorship fee or fee for attending Board
                  meeting or such fee by whatever name called.</p>
                <p class=" px-1 m-0">Please download Salary Tax Rates with Tax Calculator for the Year 2023-24 from the following weblink.
                  https://www.finantax.net/resource-centre
                </p>
              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 py-3 m-0"></p>
                <p class=" py-3">20% of gross amount paid</p>

              </div>

              <div class="col-2 custom-border d-flex align-items-center justify-content-center ">
                <span class="text text-center text">Adjustable</span>
              </div>

            </div>
          </section>
          <!-- section four end -->

          <!-- section five start -->
          <section class="section-five w-100" style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-3 py-2 border-end">DIVIDEND INCOME </div>
              <div class="col-5 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl">ATL/NON ATNON-ATL</div>
            </div>


            <div class="row main-row mx-auto">
              <div class="col-1 custom-border ">
                <span class=" px-0 m-0 label">150</span>
              </div>
              <div class="col-2 custom-border ">

              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class="border-bottom px-1 m-0 line-height1">
                  <b class="text-lowercase">a)</b> Independent power purchasers, being a pass-through item under implementation/power/energy purch.
                  Agreement required to be re-imbursed by CPPA-G and Companies engaged in bagasse and biomass based cogeneration power project qualifying for exemption under clause (132C) of Part-I of 2nd Schedule
                </p>
                <p class="border-bottom px-1 m-0 line-height2">
                  <b class="text-lowercase">b)</b> Dividend received from a company where no tax is payable by such company due to exemption of income or
                  carry forward business losses or claim of tax credits
                </p>
                <p class="border-bottom px-1 m-0 line-height3 ">
                  <b class="text-lowercase">c)</b> Dividend Received by a person in Mutual fund, Money Market Fund / Income Fund, Real Estate Investment
                  Trust, Modaraba and cases other than those mentioned in clauses (a) and (b) above
                </p>

                <p class=" px-1 m-0">
                  <b class="text-lowercase">d)</b> Dividend in specie - (Shares of Group Company)
                </p>
              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0 py-4">7.50%</p>
                <p class="border-bottom px-1 m-0 py-2">25.00%</p>
                <p class="border-bottom px-1 m-0 py-2">15.00%</p>
                <p class="border-bottom px-1 m-0 py-2">15.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0 py-4">15.00%</p>
                <p class="border-bottom px-1 m-0 py-2">50.00%</p>
                <p class="border-bottom px-1 m-0 py-2">30.00%</p>
                <p class="border-bottom px-1 m-0 py-2">30.00%</p>
              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <!-- <span class="text text-center text">Adjustable</span> -->
                <p class="border-bottom px-1 m-0 py-4 text-white">.</p>
                <p class="border-bottom px-1 m-0 py-2">Final</p>
                <p class="border-bottom px-1 m-0 py-2 text-white">.</p>
                <p class="border-bottom px-1 m-0 py-2 text-white">.</p>
              </div>

            </div>
          </section>
          <!-- section five end -->




          <!-- section six start -->
          <section class="section-six w-100" style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-3 py-2 border-end">PROFIT ON DEBT </div>
              <div class="col-5 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border ">
                <span class="d-block px-0 m-0 label">151</span>
                <span class="d-block px-0 m-0 label">7B</span>
              </div>
              <div class="col-2  custom-border ">
                <span class="d-block text-start px-1 m-0 label">151(1)(a)</span>
                <span class="d-block text-start px-1 m-0 label">151(1)(b)</span>
                <span class="d-block text-start px-1 m-0 label">151(1)(c)</span>
                <span class="d-block text-start px-1 m-0 label">151(1)(d)</span>
              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class="border-bottom px-1 m-0 line-height1">
                  <b class="text-lowercase">151(1)(a)</b> Interest on National Saving Scheme (NSS), 151(1)(b) Interest on Bank Account, 151(1) (c) Interest on
                  Federal Government, Provincial Government & Local Government Bonds 151(1)(d) Profit on bonds , certificates,
                  debentures, securities or instruments of any kind (other than loan agreements between borrowers and banking
                  companies or development financial institutions)
                </p>
                <p class="border-bottom px-1 m-0 ">
                  Where profit on debt does not exceed *Rs 5,000,000/-
                </p>
                <p class="border-bottom px-1 m-0 line-height3 ">
                  Profit on debt from a debt instrument, whether conventional or Shariah compliant, issued by the Federal
                  Government under the Public Debt Act, 1944
                </p>

                <p class=" px-2 m-0 text-primary line-height4">
                  *Profit on debt exceeding Rs.50 million shall be chargeable to tax under "Income from other sources" on normal tax rates
                </p>

              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0 py-4">15.00%</p>
                <p class="border-bottom px-1 m-0 ">15.00%</p>
                <p class="border-bottom px-1 m-0 py-2">10.00%</p>
                <p class="px-1 m-0 py-2 text-white">.</p>
                <!-- <p class="border-bottom px-1 m-0  text-white">.</p> -->


              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1 m-0 py-4">30.00%</p>
                <p class="border-bottom px-1 m-0 ">30.00%</p>
                <p class="border-bottom px-1 m-0 py-2">20.00%</p>
                <p class=" px-1 m-0 py-2 text-white">.</p>

              </div>

              <div class="col-2 p-0 custom-border text d-flex text-center  align-items-center justify-content-center ">
                <!-- <span class="text text-center text">Adjustable</span> -->
                <p class=" px-1 m-0 ">Minimum / Adjustable in case of
                  Ind & AOP
                  <br>
                  Adjustable in case of Company
                </p>



              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row mx-auto " style="margin-top: -20px;">
              <div class="border-top-0 col-1 custom-border ">
                <span class="d-block text-start px-1 m-0 label">151</span>

              </div>
              <div class="border-top-0 col-2  custom-border ">
                <span class="d-block text-start px-1 m-0 label">1(A)</span>

              </div>

              <div class="border-top-0 col-5 p-0 custom-border text ">
                <p class="border-bottom px-1 m-0 ">Interest on investment in Sukuks</p>
                <p class="border-bottom px-1 m-0 ">In case of Company </p>
                <p class="border-bottom px-1 m-0 ">In case of Individual & AOP (where the return is more than one million)</p>
                <p class="border-bottom px-1 m-0 ">In case of Individual & AOP (where the return is less than one million) </p>
              </div>

              <div class="border-top-0 col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">

                <p class="border-bottom px-1 m-0 text-white">.</p>

                <p class="border-bottom px-1 m-0 ">25.00%</p>
                <p class="border-bottom px-1 m-0 ">12.50%</p>
                <p class="border-bottom px-1 m-0 ">10.00%</p>
              </div>
              <div class="border-top-0 col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">

                <p class="border-bottom px-1 m-0  text-white">.</p>
                <p class="border-bottom px-1 m-0 ">50.00%</p>
                <p class="border-bottom px-1 m-0 ">25.00%</p>
                <p class="border-bottom px-1 m-0 ">20.00%</p>
              </div>

              <div class="border-top-0 col-2 p-0 custom-border text text-center d-flex  align-items-center justify-content-center ">


                <p class=" px-1 m-0 ">Adjustable</p>
              </div>

            </div>
            <!-- row end -->


          </section>
          <!-- section six end -->



          <!-- section seven start -->
          <section class="section-seven w-100" style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-3 py-2 border-end">PAYMENT TO NON-RESIDENTS</div>
              <div class="col-5 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">
                <span class="d-block text-start px-3  px-0 m-0 label">152</span>
              </div>
              <div class="col-2 p-0 custom-border-payment ">
                <span class="d-block text-start px-3  px-0 m-0 label">152(1)</span>
              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Royalty or Fee for Technical Services
                </p>

              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">15.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">

              </div>
              <div class="col-2 p-0 custom-border-payment ">
                <span class="d-block  text-start px-3 m-0 label">152(1A)</span>
              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Execution of a contract or sub-contract under the construction, assembly or installation project in Pakistan
                  including a contract for the supply of supervisory activities in relation to such projects or any other contract for
                  construction or services rendered relating thereto. Contract for advertisement services rendered by TV Satellite
                  channel.
                </p>


              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">7.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->




            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0  custom-border-payment-two">

              </div>
              <div class="col-2 p-0 custom-border-payment ">
                <span class="d-block border-bottom   text-start px-3 m-0 label">152(1AA)</span>
                <span class="d-block   text-start px-3 m-0 label">152(1AAA)</span>
              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 border-bottom m-0 line-height4 ">
                  Payment of insurance premium or re-insurance to a non-resident person
                </p>
                <p class=" px-1 m-0 line-height4 ">
                  Payments for advertisement services from non-resident person relaying from outside Pakistan
                </p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0 line-height4">5.00%</p>
                <p class=" px-1 border-bottom m-0 line-height4">10.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0 line-height4">Minimum</p>
                <p class=" px-1 border-bottom m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">

              </div>
              <div class="col-2 p-0 custom-border-payment ">
                <span class="d-block  text-start px-3 m-0 label">152(1)(c)</span>
              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Fee for Offshore Digital and * other specified Services.
                  <br>
                  * fee for money transfer operations, card network services, payment gateway services, interbank financial
                  telecommunication services
                </p>


              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">5.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0">

              </div>
              <div class="col-2 p-0 custom-border-payment-two ">
                <span class="d-block  text-start px-3 m-0 label">152(2)
                </span>
              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Profit on debt to nonresident person not having a Permanent Establishment in Pakistan, payments to an
                  individual, on account of profit on debt earned from a debt instrument, whether conventional or shariah
                  compliant, issued by the Federal Government under the Public Debt Act, 1944 and purchased exclusively through
                  a bank account maintained abroad, a non-resident Rupee account repatriable (NRAR) or a foreign currency
                  account maintained with a banking company in Pakistan shall be ten percent of the gross amount paid:
                </p>


              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">10.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">Adjustable / Final
                  in specified
                  situations</p>
              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto " style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">

              </div>
              <div class="col-2  p-0 custom-border-payment-two">
                <span class="d-block  text-start px-3 m-0 label">

                </span>
              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  <b>Capital gain arising on disposal of debt instrument under SCRA</b> <br>
                  capital gain arising on disposal of debt instrument and government securities and certificates by non resident
                  Foreign Currency Value Account (FCVA) or a non-resident Pakistani. Rupee Value Account (NRVA) of a nonresident individual holding Pakistan Origin Card (POC) or National ID Card for Overseas Pakistanis (NICOP) or
                  Computerized National ID Card (CNIC).
                </p>


              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">10.00%</p>
              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">20.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">Adjustable</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment ">

              </div>
              <div class="col-2 border-bottom p-0 custom-border-payment-two">
                <!-- <span class="d-block  text-start px-3 m-0 label">
                </span> -->
              </div>

              <div class=" col-5  p-0 custom-border-payment text ">
                <p class=" px-1  m-0 line-height4 ">
                  Tax deduction on payment to nonresident, not otherwise specified.
                </p>


              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">20.00%</p>
              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">40.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex align-items-center justify-content-center ">
                <p class=" px-1 m-0 line-height4">Adjustable </p>
              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label">152(2A)</span>
              </div>
              <div class="col-2 p-0  custom-border-payment line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label">152(2A) (a)</span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 border-bottom m-0 line-height4 py-2">
                  Sale of Goods - Companies
                </p>
                <p class=" px-1 m-0 line-height4 ">
                  Sale of Goods - Individuals / AOP
                </p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom  m-0 py-2 line-height4">5.00%

                </p>
                <p class=" px-1  m-0 line-height4">5.50%</p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1 border-bottom m-0 line-height4 py-2">10.00%</p>
                <p class=" px-1  m-0 line-height4">11.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0 line-height4">Minimum / not minimum
                  subject to conditions</p>
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label">152(2A) (b)</span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 border-bottom m-0 line-height4 ">
                  Rendering of Services - Companies
                </p>
                <p class=" px-1 m-0 line-height4 ">
                  Rendering of Services - Individuals / AOP
                </p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0 line-height4">9.00% </p>
                <p class=" px-1  m-0 line-height4">11.00%</p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1 border-bottom m-0 line-height4 ">18.00%</p>
                <p class=" px-1  m-0 line-height4">22.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0 line-height4">Minimum </p>
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label">152(2)A (c)</span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Execution of a contract other than a contract for sale of goods or providing/ rendering of services. - In case of
                  sports persons
                </p>
                <!-- <p class=" px-1 m-0 line-height4 ">
                                </p> -->
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">11.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">22.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Execution of a contract other than a contract for sale of goods or providing/ rendering of services. - Other than
                  sports persons</p>


              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">8.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">16.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Shipping income (on Gross Amount)</p>



              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">8.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">16.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label">152(1BA)</span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Foreign Produced Commercial </p>



              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">20.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">40.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Final</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0 py-0 custom-border-payment ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label">152(5)(1) </span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Transport Services, Freight forwarding services, air cargo services, courier services, manpower outsourcing
                  services, hotel services, security guard services, software development services, <b>IT services</b> (Software
                  development, software maintenance, system integration, web design, web development, web hosting, network
                  design) as defined in Clause (30AD) and <b>IT enabled services</b> (inbound and outbound call centers, medical
                  transcription, remote monitoring, graphics design, accounting services, human resource (HR Services),
                  Telemedicine centers, data entry operations, cloud computing services, data storage services, locally produced tv
                  programs, insurance claiming processing) as defined in Cluase (30AE) , tracking services, advertising services
                  (other than by print or electronic media), share registrar services, engineering services, car rental services,
                  building maintenance services, services rendered by Pakistan Stock Exchange Limited and Pakistan Mercantile
                  Exchange
                </p>



              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">40.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">80.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->

          </section>
          <!-- section seven end -->
          <!-- section eight start -->
          <section class="section-eight w-100 " style="margin-top: -10px;">
            <div class="row   mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">GOODS, SERVICES & EXECUTION OF A CONTRACT</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label">153</span>
              </div>
              <div class="col-2 custom-border-payment-two ">
                <span class=" px-0 m-0 label">153(1)(a)
                </span>
              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class=" px-1 m-0">Persons importing goods classified in Part I of the Twelfth Schedule</p>

              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">1.50%</p>

              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">3.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border ">
                <span class="d-block px-3 py-2 text-center  ">Ind & AOP: Minimum
                  Company: Minimum / not
                  minimum for manufacturer / listed
                  company.
                </span>

              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Other Goods including Toll Manufacturing (if annual payment is > 75K)</p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">4.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">8.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Ind & AOP: Minimum
                  Company: Minimum / not
                  minimum for manufacturer / listed
                  company.
                </p>
              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Payment to distributer of cigarettes, pharma products

                </p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">1.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">2.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum

                </p>
              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">
                  Payment to Distributor, Dealer, Sub-Dealer, Wholesaler, Retailer (Tier-I retailer who are integrated and
                  configured with board), of FMCG, Fertilizer, electronics excluding mobile phones, sugar, Cement, Edible Oil &
                  Steel.

                </p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <table>
                  <tr>
                    <td colspan="2" class="border-bottom"><b>ATL in both Sales Tax & Income Tax</b>
                      0.25%</td>
                  </tr>
                  <tr>
                    <td class="border-end">5% if company
                      5.5% other than
                      company</td>

                    <td class="border-end">10% if company
                      11% other than
                      company</td>
                  </tr>
                </table>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center d-flex  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Supply made by Distributors of fast moving consumer goods- <b>Companies</b></p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">2.00% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">4.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum / not minimum subject to conditions</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Supply made by Distributors of fast moving consumer goods - <b>Individuals / AOP</b></p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">2.50% </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">5.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Local sales, supplies, and services made to textile, carpets, leather, surgical goods & sports goods.</p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Trader of yarn 0.5%
                  Others 1%
                </p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">Trader of yarn 0.1%
                  Others 2%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Local supply of yarn traders to export oriented sector.</p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">0.5%</p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">1%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum</p>
              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">For Sale of any other Goods - Companies.</p>
                <p class=" px-1 m-0 line-height4 text-primary">(No deduction of tax where payment is less than Rs. 75,000/- in aggregate during a financial year).</p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">5.00%</p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">10.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum / not minimum
                  for manufacturer / listed company</p>
              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">For Sale of any other Goods - Individuals / AOP.</p>
                <p class=" px-1 m-0 line-height4">(No deduction of tax where payment is less than Rs. 75,000/- in aggregate during a financial year)
                  .</p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">5.50%</p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">11.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">Minimum </p>
              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 px-0  py-0 custom-border-payment-two ">
                <span class="d-block    text-start px-3 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two line-heigh2 ">
                <span class="d-block   text-start px-3 m-0 label"></span>

              </div>

              <div class=" col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0 line-height4 ">Payment for sale of gold and silver and articles</p>
              </div>

              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4">1.00%</p>

              </div>
              <div class=" col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">

                <p class=" px-1  m-0 line-height4">2.00%</p>
              </div>

              <div class=" col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0 line-height4"> </p>
              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment ">
                <span class=" px-0 m-0 label">
                </span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Warehousing services, services rendered by asset management companies, data services provided under
                  license issued by the Pakistan Telecommunication Authority, telecommunication infrastructure (tower)
                  services.</p>
                <p class=" px-1 m-0 text-primary">(No deduction of tax where payment is less than Rs. 30,000/- in aggregate during a financial year)</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">3.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">6.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  ">
                </span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment-two ">
                <span class=" px-0 m-0 label">153(1)(b)
                </span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  Transport Services, Freight forwarding services, air cargo services, courier services, manpower outsourcing
                  services, hotel services, security guard services, software development services, <b>IT services</b> (Software
                  development, software maintenance, system integration, web design, web development, web hosting, network
                  design) as defined in Clause (30AD) and <b>IT enabled services</b> (inbound and outbound call centers, medical
                  transcription, remote monitoring, graphics design, accounting services, human resource (HR Services),
                  Telemedicine centers, data entry operations, cloud computing services, data storage services, locally produced tv
                  programs, insurance claiming processing) as defined in Cluase (30AE) , tracking services, advertising services
                  (other than by print or electronic media), share registrar services, engineering services, car rental services,
                  building maintenance services, services rendered by Pakistan Stock Exchange Limited and Pakistan Mercantile
                  Exchange Limited, inspection services, certification services, testing services, training services, field services,
                  telecommunication services, collateral management services, travel & to
                </p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">4.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">8.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment-two d-flex justify-content-center align-items-end">
                <span class="d-block px-3 py-2 text-center  ">Minimum</span>

              </div>

            </div>
            <!-- row end -->



            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment-two ">
                <span class=" px-0 m-0 label"></span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">All other services - Companies</p>
                <p class=" px-1 m-0 text-primary">(No deduction of tax where payment is less than Rs. 30,000/- in aggregate during a financial year)
                </p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">3.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">6.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment-two ">
                <span class="d-block px-3 py-2 text-center  "> </span>

              </div>

            </div>
            <!-- row end -->




            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment-two ">
                <span class=" px-0 m-0 label"></span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">All other services - Individuals / AOP</p>
                <p class=" px-1 m-0 text-primary">(No deduction of tax where payment is less than Rs. 30,000/- in aggregate during a financial year)</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">11.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">22.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment-two ">
                <span class="d-block px-3 py-2 text-center  ">
                </span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment ">
                <span class=" px-0 m-0 label"></span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">In respect of persons making payment to electronic & print media for advertising services</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">1.50%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">3.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  ">
                </span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment-two ">
                <span class=" px-0 m-0 label">153(1)(c)</span>

              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">In case of sportsperson</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">10.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">20.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment d-flex justify-content-center align-items-end">
                <span class="d-block px-3 py-2 text-center  ">Minimum</span>

              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment-two ">

                <span class=" px-0 m-0 label">Execution of Contracts
                </span>

              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">All others - (if the contract more than Rs. 10,000/- Per Anum)</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0"></p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0"></p>

              </div>

              <div class="col-2 px-0 text custom-border-payment d-flex justify-content-center align-items-end">
                <span class="d-block px-3 py-2 text-center  "></span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment-two ">

                <span class=" px-0 m-0 label"></span>

              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">For Companies</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">7.50%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">15.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment d-flex justify-content-center align-items-end">
                <span class="d-block px-3 py-2 text-center  ">Minimum / not minimum
                  for manufacturer / listed company</span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment ">

                <span class=" px-0 m-0 label"></span>

              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">For Individuals / AOP </p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">8.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">16.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment d-flex justify-content-center align-items-end">
                <span class="d-block px-3 py-2 text-center  ">Minimum</span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment ">
                <span class=" px-0 m-0 label">153(2)</span>

              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Every Exporter or Export House in term of Stitching, Dying, Printing, Embroidery, washing, sizing & weaving etc</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">1.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">2.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment d-flex justify-content-center align-items-end">
                <span class="d-block px-3 py-2 text-center  ">Minimum</span>

              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment ">
                <span class=" px-0 m-0 label">153(B)</span>

              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Tax to be deducted on payment of royalty to resident person.</p>

              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">15.00%</p>

              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">30.00%</p>

              </div>

              <div class="col-2 px-0 text custom-border-payment d-flex justify-content-center align-items-end">
                <span class="d-block px-3 py-2 text-center  ">Adjustable</span>

              </div>

            </div>
            <!-- row end -->


          </section>
          <!-- section eight end -->





          <!-- section nine start -->
          <section class="section-nine w-100 " style="margin-top: -10px;">
            <div class="row   mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">EXPORT OF GOODS</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label">154</span>
              </div>
              <div class="col-2 custom-border">
                <span class=" px-0 m-0 label">154(1)</span>
              </div>

              <div class="col-5 p-0 custom-border text ">
                <p class=" px-1 m-0">Export of goods proceeds realization</p>

              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">1.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment-two ">
                <span class="d-block px-3 py-2 text-center  "> </span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label">154(3)</span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Realization of a sale of goods to an exporter under an inland back -to-back L/C</p>

              </div>

              <div class="col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">1.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment-two ">
                <span class="d-block px-3 py-2 text-center  "></span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label">154(3A) E</span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Export of goods by an Industrial undertaking located in Export Processing Zone</p>

              </div>

              <div class="col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">1.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment-two ">
                <span class="d-block px-3 py-2 text-center  ">final</span>

              </div>

            </div>
            <!-- row end -->

            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label">154(3B) </span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Making payment for a firm contract to an indirect export and clearing of goods exported.
                </p>

              </div>

              <div class="col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">1.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "></span>

              </div>

            </div>
            <!-- row end -->
          </section>
          <!-- section nine end -->



          <!-- section ten start -->
          <section class="section-ten w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">EXPORT OF SERVICES</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label">154A</span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label">(a)</span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Export proceeds of Computer software or IT services or IT Enabled services by persons registered with Pakistan
                  Software Export Board.
                </p>

              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">0.25% of the proceeds</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> final</span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label">(b)</span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Any other case</p>

              </div>

              <div class="col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">1% of the proceeds</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  ">final</span>

              </div>

            </div>
            <!-- row end -->

          </section>
          <!-- section ten end -->



          <!-- section eleven start -->
          <section class="section-eleven w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">INCOME FROM PROPERTY</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">155</span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Please download Rent Tax Rates with Calculator for Year 2023-24 from the following weblink;
                  https://www.finantax.net/resource-centre

                </p>

              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0"></p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->



          </section>
          <!-- section eleven end -->



          <!-- section twelve start -->
          <section class="section-twelve w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">PRIZES & WINNINGS</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label">156</span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Payments made for prize on quiz bond and cross word</p>

              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">15.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">30.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment-two ">
                <span class="d-block px-3 py-2 text-center  "> </span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Payments on winning from a raffle, lottery, prize on winning a quiz, prize, offered by companies for promotion of
                  sale crossword puzzles
                </p>

              </div>

              <div class="col-1 p-0 custom-border-payment- text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">20.00%</p>
              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">40.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  ">final</span>

              </div>

            </div>
            <!-- row end -->

          </section>
          <!-- section twelve end -->

          <!-- section thirteen start -->
          <section class="section-thirteen w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">TAX ON BANKING TRANSACTIONS</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">231</span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label">231AB</span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">Advance tax on cash withdrawal where the sum total of the payments for cash withdrawal in a day exceeds Rs
                  50,000</p>

              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">0.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">0.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->



          </section>
          <!-- section thirteen end -->


          <!-- section fourteen start -->
          <section class="section-fourteen w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">TAX ON FOREIGN DOMESTIC WORKERS</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">231</span>
              </div>
              <div class="col-2 custom-border-payment">
                <span class=" px-0 m-0 label">231C</span>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  Advance Tax to be collected from the agency, sponsor or the person employing such services of a foreign national
                  as a domestic worker. Tax will be collected by the relevant authority at the time of issuance or renewal of
                  domestic aide visa.
                </p>

              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 m-0">Rs. 200,000</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->
          </section>
          <!-- section fourteen end -->


          <!-- section fifteen start -->
          <section class="section-fifteen w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">PETROLIUM PRODUCTS & CNG STATION</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class="border-bottom text-start px-2 m-0 label">156A</p>
                <p class="px-2 m-0 label text-start ">234A</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 border-bottom m-0">
                  Payment to petrol pump operator on account of sale of petroleum products
                </p>
                <p class=" px-1 m-0">
                  On the amount of gas bill of a Compressed Natural Gas Station
                </p>

              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0">12.00%</p>
                <p class=" px-1 m-0">4.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0">24.00%</p>
                <p class=" px-1 m-0">8.00%</p>
              </div>

              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Final</span>

              </div>

            </div>
            <!-- row end -->



          </section>
          <!-- section fifteen end -->



          <!-- section sixteen start -->
          <section class="section-sixteen w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">BROKERAGE AND COMMISSION </div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">233</span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class="border-bottom text-start px-2 m-0 label"></p>
                <p class="px-2 m-0 label text-start "></p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 border-bottom m-0">Payment of Commission to Advertising Agents </p>
                <p class=" px-1 border-bottom m-0">Life Insurance Agents where Commission received is less than Rs, 0.5 Million per annum</p>
                <p class=" px-1  m-0">Persons not covered in 1 & 2 Above</p>

              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0">10.00%</p>
                <p class=" px-1 m-0">8.00%</p>
                <p class=" px-1 m-0">12.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1 border-bottom m-0">20.00%</p>
                <p class=" px-1 m-0">16.00%</p>
                <p class=" px-1 m-0">24.00%</p>
              </div>

              <div class="col-2 px-0 text d-flex justify-content-center align-items-center custom-border-payment  ">
                <span class="d-block px-3 "> Minimum</span>

              </div>

            </div>
            <!-- row end -->



          </section>
          <!-- section sixteen end -->



          <!-- section seventeen start -->
          <section class="section-seventeen w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">PHONE & INTERNET</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">236</span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start px-2 m-0 label">236(1)(a), 236(1)(b)
                </p>
                <p class="px-2 m-0 label text-start ">236(1)(c), 236(1)(d)</p>
                <p class="px-2 m-0 label text-start ">236(1)(e)</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  In the case of subscriber of internet, mobile telephone and prepaid internet or telephone card. Percentage of the
                  amount of Bill or sales price of internet pre-paid card or prepaid telephone card or sale of units through any
                  electronic medium or whatever form.
                </p>


              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">15.00%</p>

              </div>


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->



          </section>
          <!-- section seventeen end -->




          <!-- section eighteen start -->
          <section class="section-eighteen w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">SALE BY AUCTION / TENDER</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">236</span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start px-2 m-0 label">236(A)</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  Any person making sale by public auction / tender of any property or goods shall deduct tax including award of
                  any lease to any person
                </p>


              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">10.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">20.00%</p>
              </div>


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start px-2 m-0 label"></p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  Gross sale price of immovable property on property auction
                </p>


              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">5.00%</p>
              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">10.00%</p>
              </div>


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->


          </section>
          <!-- section eighteen end -->


          <!-- section nineteen start -->
          <section class="section-nineteen w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">SALE / PURCHASE OF IMMOVABLE PROPERTY</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">236</span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start px-2 m-0 label">236C</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  Advance Tax on sale of property on gross amount of consideration (if holding period is less than 10 years)
                </p>


              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">3.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">6.00%</p>
              </div>


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Minimum if property is acquired
                  and disposed off with the same tax
                  year otherwise adjustable</span>

              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start px-2 m-0 label">236K(1)</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  Advance Tax on purchase of property on purchaser or transferee for registering or attesting transfer of any
                  immovable property.

                </p>


              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">3.00%</p>
              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">10.50%</p>
              </div>


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start px-2 m-0 label">236K(3)</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  Advance Tax on payment of installment in respect of purchase of allotment of immovable property where
                  transfer is to be effected after making payment of all installments
                </p>


              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">3.00%</p>
              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">10.50%</p>
              </div>


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>


              <div class="col-9 p-0 custom-border-payment text ">
                <p class=" px-1 m-0">
                  In Finance Act 2022, ExempƟon has been provided from charging of increased rate of 5% to non-filer nonresident individual holding Pakistan Origin Card (POC) or NaƟonal ID Card for
                  Overseas Pakistanis (NICOP) in respect of transactions on which tax is collectible under section 236C and 236K.

                </p>


              </div>




              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block px-3 py-2 text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->

          </section>
          <!-- section nineteen end -->


          <!-- section twent start -->
          <section class="section-twent w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-4 py-2">TV PLAYS & ADVERTISEMENTS</div>
              <div class="col-4 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">236</span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start border-bottom px-2 m-0 label">236CA (1) F</p>
                <p class="px-2 m-0 border-bottom label text-start ">236CA (2)</p>
                <p class="px-2 m-0 label text-start ">236CA (3)</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class="border-bottom  line-height4 px-1 m-0">Foreign-produced TV drama serial or play</p>
                <p class="border-bottom px-1 m-0 line-height3">Foreign-produced TV play (single episode)</p>
                <p class=" px-1 m-0 line-height3">Advertisement starring foreign actor</p>


              </div>

              <div class="col-2 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class="border-bottom px-1  m-0">Rs. 1,000,000 per episode</p>
                <p class="border-bottom px-1  m-0">Rs. 3,000,000</p>
                <p class=" px-1  m-0">Rs. 100,000 per second</p>

              </div>


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block border-bottom px-3  text-center  "> Adjustable</span>
                <span class="d-block border-bottom px-3  text-center  "> Adjustable</span>
                <span class="d-block  px-3  text-center  "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->



          </section>
          <!-- section twenty end -->


          <!-- section twentyone start -->
          <section class="section-twentyone w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-6 py-2">ADVANCE TAX ON SALES OF SPECIFIED GOODS TO DISTRIBUTOR, DEALER & WHOLESALER</div>
              <div class="col-2 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label">236</span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two">
                <p class=" text-start  px-2 m-0 label mt-1">236G</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class="  line-height4 px-1 m-0">
               <b> Advance tax has to be collected from wholesalers, distributors & dealers by manufacture & commercial
importer of;</b> Electronics, Sugar, Cement, Iron and Steel products, Motorcycles, Pesticides, Cigarettes, Glass,
Textile, Beverages, Paint or Foam sector, Pharmaceuticals, Poultry and Animal feed, Edible oil and Ghee, AutoParts, Tyers, Varnishes, Chemicals, Cosmetics and IT Equipment.
                </p>


              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">0.10%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">0.20%</p>
              </div>


              <div class="col-2 px-0 text custom-border-payment-two d-flex align-items-end  justify-content-center ">
                <span class="d-block  px-3 "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment-two">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment-two">
                <p class=" text-start  px-2 m-0 label"></p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class="line-height4 px-1 m-0">
                <b>Fertilizers </b>- <span class="text-primary">(Reduced Rate if taxpayer is active in both Sales Tax and Income Tax)</span>
                </p>


              </div>

              <div class="col-2 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">0.25%</p>
              </div>
             


              <div class="col-2 px-0 text custom-border-payment-two ">
                <span class="d-block  px-3  text-center  "> </span>

              </div>

            </div>
            <!-- row end -->

             <!-- row start -->
             <div class="row main-row mx-auto" style="margin-top: -18px;">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label"></span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start  px-2 m-0 label"></p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class=" line-height4 px-1 m-0">
                <b>Fertilizers </b>
                </p>


              </div>

              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">0.70%</p>
              </div>
              <div class="col-1 p-0 custom-border-payment text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">0.140%</p>
              </div>
             


              <div class="col-2 px-0 text custom-border-payment ">
                <span class="d-block  px-3  text-center  "> </span>

              </div>

            </div>
            <!-- row end -->

          </section>
          <!-- section twentyone end -->

           <!-- section twentyone start -->
           <section class="section-twentyone w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-6 py-2">AMOUNT REMITTED ABROAD</div>
              <div class="col-2 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">236</span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start  px-2 m-0 label mt-1">236Y</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class="  line-height4 px-1 m-0">Amount Remitted abroad through credit, debit or prepaid cards </p>
              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">5.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">10.00%</p>
              </div>


              <div class="col-2 px-0 text custom-border ">
                <span class="d-block  px-3 "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->

          </section>
          <!-- section twenty end -->

               <!-- section twentyone start -->
               <section class="section-twentyone w-100 " style="margin-top: -10px;">
            <div class="row border-bottom  mx-auto mb-0 first-heading-row ">
              <div class="col-6 py-2">TAX ON BONUS SHARES - INCOME FROM OTHER SOURCES</div>
              <div class="col-2 py-2 border-end"></div>
              <div class="col-2 text-center border-end border-start py-2 non-atl ">ATL/NON ATNON-ATL</div>
            </div>

            <!-- row start -->
            <div class="row main-row mx-auto">
              <div class="col-1 custom-border-payment">
                <span class=" px-0 m-0 label">236</span>
              </div>
              <div class="col-2 p-0  custom-border-payment">
                <p class=" text-start  px-2 m-0 label mt-1">236Z</p>
              </div>

              <div class="col-5 p-0 custom-border-payment text ">
                <p class="  line-height4 px-1 m-0">Every company will be required to collect tax from each shareholder at the time of issuance of bonus shares</p>
              </div>

              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">10.00%</p>
              </div>
              <div class="col-1 p-0 custom-border text text-center  align-items-center justify-content-center ">
                <p class=" px-1  m-0">20.00%</p>
              </div>


              <div class="col-2 px-0 text custom-border ">
                <span class="d-block  px-3 "> Adjustable</span>

              </div>

            </div>
            <!-- row end -->

          </section>
          <!-- section twenty end -->


        </div>
      </div><!-- card end -->
    </div> <!-- horizontal-bar end -->
    <!-- row start -->
    <div class="row mx-auto calulators-btn ">
      <div class="col-12  text-center">



        <a href="{{route('Calculator')}}" class="btn mt-3 btn-style">INDIVIDUAL & AOP I.TAX-2023-2024</a>
        <a href="{{route('salaryTaxCalculation')}}" class="btn mt-3 btn-style">SALARY TAX 2023-24</a>
        <a href="{{route('rentTaxCalculation')}}" class="btn mt-3 btn-style">RENT TAX CALCULATOR-2023-2024</a>
        <a href="{{route('withholdingTaxCalculation')}}" class="btn mt-3 btn-style-active">WH TAX CARD-2023-2024</a>

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