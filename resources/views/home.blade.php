<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allcss/home.css">
    <title>Dashboard</title>
    <style>
        .homebtns .btn {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1) !important;
            transition: box-shadow 0.9s ease;
            height: 85px !important;
            background-color: black !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            line-height: 20px !important;
        }

        .homebtns .btn:hover {
            background-color: #fa6f03 !important;
            cursor: pointer !important;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1) !important;
            font-size: 15px !important;
            color: white !important;
        }

        .active-old {
            background-color: #fa6f03 !important;
            color: white !important;
        }

        .active-old:hover {
            background-color: blue !important;
            color: white !important;
        }

        .active-new {
            background-color: blue !important;
            color: white !important;
        }

        .sticky-card {
            position: sticky !important;
            top: 5px !important;

        }

        .section-one {
            width: 65% !important;

        }

        .section-two {
            width: 35% !important;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

        }

        .active-old {
            background-color: yellow;
        }

        @media screen and (max-width:992px) {
            .section-one {
                width: 100% !important;
            }

            .section-two {
                width: 100% !important;
            }
        }

        @media screen and (max-width:668px) {
            .section-one {
                width: 100% !important;
            }

            .section-two {
                width: 100% !important;
            }
        }

        @media screen and (max-width:572px) {
            .section-one {
                width: 100% !important;
            }

            .section-two {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    @include('clientarea.navbar')
    @section('content')
    @endsection
    <div class="container">

        <div class="div d-md-flex d-lg-flex">
            <section class="section-one">
                <div class="sticky-card">
                    <!-- row start -->
                    <div class="row mt-4 homebtns">


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('PersonalNtnRegistration')}}" method="GET">
                                @csrf
                                <input type="hidden" name="personal_ntn_registration" value="personal_ntn_registration">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light p-3">
                                        <!-- <a href="{{route('PersonalNtnRegistration')}}" class="item-name card-body"> -->
                                        Personal NTN Registration
                                        <!-- </a> -->
                                    </button>
                                </div>

                            </form>
                        </div>


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('SoleProprietorBusinessNTNRegistration')}}" method="GET">
                                @csrf
                                <input type="hidden" name="SoleProprietorBusinessNTNRegistration" value="SoleProprietorBusinessNTNRegistration">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                        Sole Proprietor Business NTN Registration
                                    </button>
                                </div>

                            </form>
                        </div>


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('IncomeTaxFiling')}}" method="GET">
                                @csrf
                                <input type="hidden" name="IncomeTaxFiling" value="IncomeTaxFiling">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                        Income Tax Filing Individual
                                    </button>
                                </div>

                            </form>
                        </div>



                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('PartnershipCompany')}}" method="GET">
                                @csrf
                                <input type="hidden" name="PartnershipCompany" value="PartnershipCompany">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Income Tax Filing Partnership & Company
                                    </button>
                                </div>

                            </form>
                        </div>



                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('QuarterlyAnnual')}}" method="GET">
                                @csrf
                                <input type="hidden" name="QuarterlyAnnual" value="QuarterlyAnnual">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Quarterly & Annual Withholding Tax Statement Filing
                                    </button>
                                </div>

                            </form>
                        </div>



                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('FederalSales')}}" method="GET">
                                @csrf
                                <input type="hidden" name="FederalSales" value="FederalSales">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Federal Sales Tax Registration
                                    </button>
                                </div>

                            </form>
                        </div>


                        
                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('ProvincialSales')}}" method="GET">
                                @csrf
                                <input type="hidden" name="ProvincialSales" value="ProvincialSales">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Provincial Sales Tax Registration
                                    </button>
                                </div>

                            </form>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('SalesTax')}}" method="GET">
                                @csrf
                                <input type="hidden" name="SalesTax" value="SalesTax">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Sales Tax Monthly Filing
                                    </button>
                                </div>

                            </form>
                        </div>


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('MonthlyRetainership')}}" method="GET">
                                @csrf
                                <input type="hidden" name="MonthlyRetainership" value="MonthlyRetainership">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Monthly Tax Retainership
                                    </button>
                                </div>

                            </form>
                        </div>
                    

                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('TaxNotices')}}" method="GET">
                                @csrf
                                <input type="hidden" name="TaxNotices" value="TaxNotices">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Tax Notices Reply & Representaion
                                    </button>
                                </div>

                            </form>
                        </div>                      


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('TaxConsultancy')}}" method="GET">
                                @csrf
                                <input type="hidden" name="TaxConsultancy" value="TaxConsultancy">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Tax Consultancy
                                    </button>
                                </div>

                            </form>
                        </div> 

                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('SECPCompany')}}" method="GET">
                                @csrf
                                <input type="hidden" name="SECPCompany" value="SECPCompany">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    SECP Company Formation
                                    </button>
                                </div>

                            </form>
                        </div> 


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('SECPAnnual')}}" method="GET">
                                @csrf
                                <input type="hidden" name="SECPAnnual" value="SECPAnnual">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    SECP Annual Compliance
                                    </button>
                                </div>

                            </form>
                        </div> 



                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('ExternalAnnual')}}" method="GET">
                                @csrf
                                <input type="hidden" name="ExternalAnnual" value="ExternalAnnual">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    External Annual Audit
                                    </button>
                                </div>

                            </form>
                        </div> 



                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('PSWImportExportLicense')}}" method="GET">
                                @csrf
                                <input type="hidden" name="PSWImportExportLicense" value="PSWImportExportLicense">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    PSW Import/Export license
                                    </button>
                                </div>

                            </form>
                        </div> 
                      

                      
                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('PsebRegistration')}}" method="GET">
                                @csrf
                                <input type="hidden" name="PsebRegistration" value="PsebRegistration">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    PSEB Registration
                                    </button>
                                </div>

                            </form>
                        </div> 
                      

                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('TrustNGORegistration')}}" method="GET">
                                @csrf
                                <input type="hidden" name="TrustNGORegistration" value="TrustNGORegistration">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Trust / NGO Registration
                                    </button>
                                </div>

                            </form>
                        </div> 


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('intellectualPropertyRegistration')}}" method="GET">
                                @csrf
                                <input type="hidden" name="intellectualPropertyRegistration" value="intellectualPropertyRegistration">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    intellectual Property Registration
                                    </button>
                                </div>

                            </form>
                        </div> 
                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('ProfessionalTaxRegistrationRenewal')}}" method="GET">
                                @csrf
                                <input type="hidden" name="ProfessionalTaxRegistrationRenewal" value="ProfessionalTaxRegistrationRenewal">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Professional Tax Registration / renewal
                                    </button>
                                </div>

                            </form>
                        </div> 

                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('AccountingBookkeepingServices')}}" method="GET">
                                @csrf
                                <input type="hidden" name="AccountingBookkeepingServices" value="AccountingBookkeepingServices">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Accounting & Book keeping Services
                                    </button>
                                </div>

                            </form>
                        </div> 

                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="{{route('USAUAEUKCanadaAustraliaServices')}}" method="GET">
                                @csrf
                                <input type="hidden" name="USAUAEUKCanadaAustraliaServices" value="USAUAEUKCanadaAustraliaServices">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    USA / UAE / UK / Canada / Australia Services (Least Priority)
                                    </button>
                                </div>

                            </form>
                        </div> 
                    


                        <div class="col-lg-3 col-md-6 col-6 col-sm-6 mt-3  ">
                            <form action="" method="GET">
                                @csrf
                                <input type="hidden" name="" value="">

                                <div class="card  mb-0" style="position: static;">
                                    <button type="submit" class="btn text-light">
                                    Referals , Promo Codes & Discount Program
                                    </button>
                                </div>

                            </form>
                        </div> 
                        

                    




                       






                    </div>
                    <!-- row end -->
                </div>
            </section>



            <section class="section-two mx-lg-2 mt-4 ">
                <!-- card 2 start here -->
                <div class="container mt-3  border-0 ">
                    <div class="card border-0 sidebar-card mt-0 pt-0 ">
                        <div class="card-body bg-white sidebar px-0 mx-0">

                            <div class="d-flex align-items-start ">
                                <div class="nav flex-column nav-pills me-0 p-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">



                                    <button class="nav-link active-old active-new tab-nav-link margin-top active  px-0 position-relative " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                        <i class="fa-solid fa-circle-exclamation fs-4"></i>
                                        <br>
                                        Tasks
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            9
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>

                                


                                    <button class="nav-link active-old  tab-nav-link  px-0 position-relative   px-2 border-1 mt-4" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa-solid fa-bell-slash fs-4"></i>
                                        <br>
                                        Alerts
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            5
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>


                                    <button class="nav-link active-old tab-nav-link  px-0 position-relative  px-2  mt-4" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa-solid fa-calendar-day fs-4"></i>
                                        <br>
                                        Events
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            3
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>





                                </div>
                                <div class="tab-content mx-2" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                        <h1>home</h1>
                                        <h1>home</h1>
                                        <h1>home</h1>
                                        <h1>home</h1>
                                        <h1>home</h1>
                                        <h1>home</h1>
                                        <h1>home</h1>
                                        <h1>home</h1>
                                    </div>
                                    <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro suscipit mollitia quod sunt tempore? Obcaecati rerum natus iste magnam non consectetur explicabo aperiam adipisci, a dolores quos quaerat possimus ab.
                                        <h1>kakakk</h1>
                                        <h1>kakakk</h1>
                                        <h1>kakakk</h1>

                                        <h1>kakakk</h1>
                                        <h1>kakakk</h1>
                                    </div>




                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam, aperiam perspiciatis architecto reiciendis quis repudiandae ipsam ab quas. Asperiores maiores, voluptates illo dicta nam impedit quidem molestiae error quibusdam minima.
                                        Et nisi ratione perspiciatis illo debitis placeat aliquid maxime, possimus dolorem in itaque nobis velit. Dolorem accusantium aperiam error, aliquam aliquid aut iste at non obcaecati beatae officiis, perferendis dicta?
                                        Dolorum voluptate veniam ipsam. Sunt dolorum nobis architecto dolore animi fugit, tenetur doloribus aperiam aspernatur, optio at ipsa laborum placeat, voluptatum saepe quod eaque similique temporibus ipsam quam perspiciatis porro.
                                        Odio iusto neque cumque quas atque maiores eaque illum corporis quasi dignissimos quibusdam adipisci pariatur libero repellendus, nemo ad. Facere minima animi eveniet reprehenderit architecto sint maiores labore quo quasi.
                                        Officiis tenetur amet voluptate! Animi eius quidem soluta tempora consequatur! Aliquid distinctio veniam enim omnis delectus nesciunt deleniti harum porro necessitatibus alias! Expedita voluptatum vitae in ipsum, voluptate accusantium voluptatibus.

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- card2 end here -->
            </section>

        </div>


    </div>

    <script>
        var v_pills_home_tab = document.getElementById("v-pills-home-tab");
        var v_pills_profile_tab = document.getElementById("v-pills-profile-tab");
        var v_pills_messages_tab = document.getElementById("v-pills-messages-tab");

        v_pills_home_tab.addEventListener("click", function() {
            v_pills_home_tab.classList.add("active-new");
            v_pills_profile_tab.classList.remove("active-new");
            v_pills_messages_tab.classList.remove("active-new");
        });

        v_pills_profile_tab.addEventListener("click", function() {
            v_pills_profile_tab.classList.add("active-new");
            v_pills_home_tab.classList.remove("active-new");
            v_pills_messages_tab.classList.remove("active-new");
        });
        v_pills_messages_tab.addEventListener("click", function() {
            v_pills_messages_tab.classList.add("active-new");
            v_pills_home_tab.classList.remove("active-new");
            v_pills_profile_tab.classList.remove("active-new");
        });
    </script>

</body>

</html>