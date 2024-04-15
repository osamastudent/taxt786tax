<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .custom-margin {
            margin-top: -9px !important;
            background-color: white;
            border-radius: 5px !important;
            box-shadow: 0 0.5px 3px rgba(0, 0, 0, 0.2);
        }

        .menu-icon {
            opacity: 0.7;
            margin-right: 7px;
        }

        .card {
            background-color: white !important;
            border-radius: 8px;
            box-shadow: 0 0.5px 3px rgba(0, 0, 0, 0.2);
            margin-top: -10px !important;
        }
        .pages-card a{
color: black;
        }
    </style>
</head>

<body>

    @extends('admin.masterfile')
    @section('content')


    <div class="card bg-light  ">
        <div class="card-body p-2 pages-card bg-white rounded">

            <a href="/">
                <p class="p-2 custom-margin mt-2 "> <span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> front Page</p>
            </a>
            <a href="{{route('Calculator')}}">
                <p class="  p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Tax Tools</p>
            </a>
            <a href="{{route('ServicesPortflio')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Services Portfolio</p>
            </a>
           
            <a href="#">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Tax Updates &nbsp; &nbsp; <a href="{{route('videosDisplay')}}">Videos</a>&nbsp; &nbsp; <a href="{{route('blogsDisplay')}}">Blogs</a></p>
            </a>
            
            <a href="{{route('UserRegisterForm')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Sign Up</p>
            </a>
            <a href="{{route('PersonalNtnRegistration')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Personal NTN Registration</p>
            </a>
            <a href="{{route('SoleProprietorBusinessNTNRegistration')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Sole Proprietor Business NTN Registration</p>
            </a>
            <a href="{{route('IncomeTaxFiling')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Income Tax Filing Individual</p>
            </a>
            <a href="{{route('PartnershipCompany')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Income Tax Filing Partnership & Company</p>
            </a>
            <a href="{{route('QuarterlyAnnual')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span> Quarterly & Annual Withholding Tax Statement Filing</p>
            </a>
            <a href="{{route('FederalSales')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Federal Sales Tax Registration</p>
            </a>
            <a href="{{route('ProvincialSales')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Provincial Sales Tax Registration
            </a>
            <a href="{{route('SalesTax')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Sales Tax Monthly Filing</p>
            </a>
            <a href="{{route('MonthlyRetainership')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Monthly Tax Retainership</p>
            </a>
            <a href="{{route('TaxNotices')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Tax Notices Reply & Representaion</p>
            </a>
            <a href="{{route('TaxConsultancy')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Tax Consultancy</p>
            </a>
            <a href="{{route('SECPCompany')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>SECP Company Formation</p>
            </a>
            <a href="{{route('SECPAnnual')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>SECP Annual Compliance</p>
            </a>
            <a href="{{route('ExternalAnnual')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>External Annual Audit</p>
            </a>
            <a href="{{route('PSWImportExportLicense')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>PSW Import/Export license</p>
            </a>
            <a href="{{route('PsebRegistration')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>PSEB Registration</p>
            </a>
            <a href="{{route('TrustNGORegistration')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Trust / NGO Registration</p>
            </a>
            <a href="{{route('intellectualPropertyRegistration')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>intellectual Property Registration</p>
            </a>
            <a href="{{route('ProfessionalTaxRegistrationRenewal')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Professional Tax Registration / renewal</p>
            </a>
            <a href="{{route('AccountingBookkeepingServices')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Accounting & Book keeping Services</p>
            </a>
            <a href="{{route('USAUAEUKCanadaAustraliaServices')}}">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>USA / UAE / UK / Canada / Australia Services</p>
            </a>
            <a href="#">
                <p class="p-2 custom-margin"><span class="bg-light  menu-icon  px-2 py-1"><i class="fa-sharp fa-solid fa-bars"></i></span>Referals , Promo Codes & Discount Program (To be brainstormed by Tech Team)
            </a>
            </p>

        </div>
    </div>




    @endsection


</body>

</html>