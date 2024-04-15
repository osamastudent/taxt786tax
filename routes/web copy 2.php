<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\USAUAController;
use App\Http\Controllers\viewsController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\practiceController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\individualController;
use App\Http\Controllers\rentIncomeController;
use App\Http\Controllers\otherincomeController;
use App\Http\Controllers\salaryIncomeController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\salesTaxationController;
use App\Http\Controllers\businessIncomeController;
use App\Http\Controllers\incomeTaxationController;
use App\Http\Controllers\taxconsultancyController;
use App\Http\Controllers\FirmPartnershipController;
use App\Http\Controllers\companyFormationController;
use App\Http\Controllers\PsebRegistrationController;
use App\Http\Controllers\sharesCapitalGainController;
use App\Http\Controllers\ExternalAnnualAuditController;
use App\Http\Controllers\secpAnnualComplianceController;
use App\Http\Controllers\secpcompanyformationController;
use App\Http\Controllers\TrustNgoRegistrationController;
use App\Http\Controllers\salestaxmonthlyfilingController;
use App\Http\Controllers\withholdingAdjustableController;
use App\Http\Controllers\monthlytaxretainershipController;
use App\Http\Controllers\PswImportExportLicenseController;
use App\Http\Controllers\PersonalNtnRegistrationController;
use App\Http\Controllers\SecpCompanyInProvincialController;
use App\Http\Controllers\incomepartnershipcompanyController;
use App\Http\Controllers\incomeTaxFilingIndividualController;
use App\Http\Controllers\individualWithBusinessNameCotroller;
use App\Http\Controllers\quarterlyannualwithholdingController;
use App\Http\Controllers\federalsalestaxregistrationController;
use App\Http\Controllers\AccountingBookKeepingServiceController;
use App\Http\Controllers\taxnoticesreplyrepresentaionController;
use App\Http\Controllers\individualWithoutbusinessNameController;
use App\Http\Controllers\ProvincialSalesTaxRegistrationController;
use App\Http\Controllers\intellectualPropertyRegistrationController;
use App\Http\Controllers\ProfessionalTaxRegistrationRenewalController;
use App\Http\Controllers\selectassetsexpenseavailablefromlistController;
use App\Http\Controllers\soleproprietorbusinessntnregistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/welcome', function () {
    return view('welcome');
});

route::get('/',[ViewsController::class,'Home']);
route::get('calculator',[ViewsController::class,'Calculator'])->name('Calculator');
// route::get('ntnstatus',[ViewsController::class,'ntnStatus']);
// route::get('atlstatus',[ViewsController::class,'atlStatus']);
// route::get('faqstatus',[ViewsController::class,'faqStatus']);
// route::get('contactstatus',[ViewsController::class,'contactStatus']);

Route::get('/Services-Portflio', function () {
    return view('business-services');
})->name('ServicesPortflio');

Route::get('/startprocess', function () {
   if(Auth::id()){
    return redirect('home');
return "okk";   
}
return redirect('user-register');
})->name('startProcess');


Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/videos', function () {
    return view('blogs/videos');
})->name('Videos');


Route::get('/blogs', function () {
    return view('blogs/blogs');
})->name('Blogs');


Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/navbarlayout', function () {
    return view('slider');
});






















// simple routing
// Route::get('/reverse', function () {
//     return view('reverse');
// });

// Route::get('/named', function () {
//     return view('named');
// });


// revers routing
// Route::get('reverse','practiceController@reverse')->name('reverse');

// Route::get('named','practiceController@named')->name('named');






// routes group

route::prefix('osama')->group(function(){

    Route::get('/reverse', function () {
        return view('reverse');
    });
    
    Route::get('/named', function () {
        return view('named');
    });



    // named roting
Route::get('/rendbjsbverse', function () {
    return view('reverse');
})->name('examplereverse');

Route::get('/nadjndjmed', function () {
    return view('named');
})->name('examplenamed');
});


// fallback page not found 

Route::fallback(function(){
return "<h1>Page Not Found </h1>";
});

// redirect
Route::redirect('reverse','videos',301);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// client area
Route::get('Personal-NTN-Registration',[PersonalNtnRegistrationController::class,'PersonalNtnRegistration'])->name('PersonalNtnRegistration');

Route::get('user-login',[UserLoginController::class,'LoginForm'])->name('UserLoginForm');
Route::post('user-login',[UserLoginController::class,'UserLogin'])->name('UserLogin');

Route::get('user-register',[UserRegisterController::class,'UserRegisterForm'])->name('UserRegisterForm');
Route::post('user-register',[UserRegisterController::class,'UserRegisterStore'])->name('UserRegisterStore');

Route::get('logout',[UserLoginController::class,'Logout'])->name('Logout');


Route::get('Sole-Proprietor-Business-NTN-Registration',[soleproprietorbusinessntnregistrationController::class,'SoleProprietorBusinessNTNRegistration'])->name('SoleProprietorBusinessNTNRegistration');

Route::post('Sole-Proprietor-Business-NTN-Registration',[soleproprietorbusinessntnregistrationController::class,'SoleProprietorBusinessNTNRegistrationStore'])->name('SoleProprietorBusinessNTNRegistrationStore');

Route::get('Income-Tax-Filing-Partnership-Company',[incomepartnershipcompanyController::class,'PartnershipCompany'])->name('PartnershipCompany');

Route::post('Income-Tax-Filing-Partnership-Company',[incomepartnershipcompanyController::class,'PartnershipCompanyStore'])->name('PartnershipCompanyStore');

Route::get('Quarterly-Annual-Withholding-Tax-Statement-Filing',[quarterlyannualwithholdingController::class,'QuarterlyAnnual'])->name('QuarterlyAnnual');
Route::post('Quarterly-Annual-Withholding-Tax-Statement-Filing',[quarterlyannualwithholdingController::class,'QuarterlyAnnualStore'])->name('QuarterlyAnnualStore');

Route::get('Federal Sales Tax Registration',[federalsalestaxregistrationController::class,'FederalSales'])->name('FederalSales');
Route::post('Federal Sales Tax Registration',[federalsalestaxregistrationController::class,'FederalSalesStore'])->name('FederalSalesStore');


Route::get('Sales-Tax-Monthly-Filing',[salestaxmonthlyfilingController::class,'SalesTax'])->name('SalesTax');
Route::post('Sales-Tax-Monthly-Filing',[salestaxmonthlyfilingController::class,'SalesTaxStore'])->name('SalesTaxStore');

Route::get('Monthly Tax Retainership',[monthlytaxretainershipController::class,'MonthlyRetainership'])->name('MonthlyRetainership');
Route::post('Monthly Tax Retainership',[monthlytaxretainershipController::class,'MonthlyRetainershipStore'])->name('MonthlyRetainershipStore');

Route::get('Tax-Notices-Reply-Representaion',[taxnoticesreplyrepresentaionController::class,'TaxNotices'])->name('TaxNotices');
Route::post('Tax-Notices-Reply-Representaion',[taxnoticesreplyrepresentaionController::class,'TaxNoticesStore'])->name('TaxNoticesStore');


Route::get('Tax-Consultancy',[taxconsultancyController::class,'TaxConsultancy'])->name('TaxConsultancy');
Route::post('Tax-Consultancy',[taxconsultancyController::class,'TaxConsultancyStore'])->name('TaxConsultancyStore');

Route::get('SECP Company Formation',[secpcompanyformationController::class,'SECPCompany'])->name('SECPCompany');
Route::post('SECP Company Formation',[secpcompanyformationController::class,'SECPCompanyStore'])->name('SECPCompanyStore');

Route::get('External Annual Audit',[ExternalAnnualAuditController::class,'ExternalAnnual'])->name('ExternalAnnual');
Route::post('External Annual Audit',[ExternalAnnualAuditController::class,'ExternalAnnualStore'])->name('ExternalAnnualStore');


Route::get('SECP Annual Compliance',[secpAnnualComplianceController::class,'SECPAnnual'])->name('SECPAnnual');
Route::post('SECP Annual Compliance',[secpAnnualComplianceController::class,'SECPAnnualStore'])->name('SECPAnnualStore');

Route::get('PSW Import Export license',[PswImportExportLicenseController::class,'PSWImportExportLicense'])->name('PSWImportExportLicense');
Route::post('PSW Import Export license',[PswImportExportLicenseController::class,'PSWImportExportLicenseStore'])->name('PSWImportExportLicenseStore');

Route::get('PSEB Registration', [PsebRegistrationController::class, 'PsebRegistration'])->name('PsebRegistration');
Route::post('PSEB Registration', [PsebRegistrationController::class, 'PsebRegistrationStore'])->name('PsebRegistrationStore');

Route::get('Individual without business Name',[individualWithoutbusinessNameController::class,'individualWithOutBusinessName'])->name('individualWithOutBusinessName');
Route::post('Individual without business Name',[individualWithoutbusinessNameController::class,'individualWithOutBusinessNameStore'])->name('individualWithOutBusinessNameStore');

Route::get('Individual with business Name',[individualWithBusinessNameCotroller::class,'individualWithBusinessName'])->name('individualWithBusinessName');
Route::post('Individual with business Name',[individualWithBusinessNameCotroller::class,'individualWithBusinessNameStore'])->name('individualWithBusinessNameStore');

Route::get('Trust NGO Registration',[TrustNgoRegistrationController::class,'TrustNGORegistration'])->name('TrustNGORegistration');
Route::post('Trust NGO Registration',[TrustNgoRegistrationController::class,'TrustNGORegistrationStore'])->name('TrustNGORegistrationStore');


Route::get('intellectual-Property-Registration',[intellectualPropertyRegistrationController::class,'intellectualPropertyRegistration'])->name('intellectualPropertyRegistration');
Route::post('intellectual-Property-Registration',[intellectualPropertyRegistrationController::class,'IntellectualPropertyRegistrationStore'])->name('IntellectualPropertyRegistrationStore');

Route::get('Professional Tax Registration renewal',[ProfessionalTaxRegistrationRenewalController::class,'ProfessionalTaxRegistrationRenewal'])->name('ProfessionalTaxRegistrationRenewal');
Route::post('Professional Tax Registration renewal',[ProfessionalTaxRegistrationRenewalController::class,'ProfessionalTaxRegistrationRenewalStore'])->name('ProfessionalTaxRegistrationRenewalStore');

Route::get('Accounting  Book keeping Services',[AccountingBookKeepingServiceController::class,'AccountingBookkeepingServices'])->name('AccountingBookkeepingServices');
Route::post('Accounting  Book keeping Services',[AccountingBookKeepingServiceController::class,'AccountingBookkeepingServicesStore'])->name('AccountingBookkeepingServicesStore');

Route::get('USA-UAE-UK-Canada-Australia-Services',[USAUAController::class,'USAUAEUKCanadaAustraliaServices'])->name('USAUAEUKCanadaAustraliaServices');
Route::post('USA-UAE-UK-Canada-Australia-Services',[USAUAController::class,'USAUAEUKCanadaAustraliaServicesStore'])->name('USAUAEUKCanadaAustraliaServicesStore');

Route::get('Income-Tax-Filing',[PersonalNtnRegistrationController::class,'IncomeTaxFiling'])->name('IncomeTaxFiling');
Route::post('Income-Tax-Filing',[incomeTaxFilingIndividualController::class,'IncomeTaxFilingStore'])->name('IncomeTaxFilingStore');

Route::post('Personal-NTN-Registration',[PersonalNtnRegistrationController::class,'PersonalNtnRegistrationStore'])->name('PersonalNtnRegistrationStore');
Route::get('show',[PersonalNtnRegistrationController::class,'show'])->name('show');
Route::get('delete/{id}',[PersonalNtnRegistrationController::class,'delete'])->name('delete');

// Provincial Sales Tax Registration
Route::get('Provincial-Sales-Tax-Registration',[ProvincialSalesTaxRegistrationController::class,'ProvincialSales'])->name('ProvincialSales');
Route::post('Provincial-Sales-Tax-Registration',[ProvincialSalesTaxRegistrationController::class,'ProvincialSalesStore'])->name('ProvincialSalesStore');

 Route::prefix('Provincial-Sales-Tax-Registration')->group(function(){

    Route::get('Individual',[individualController::class,'Individual'])->name('Individual');
Route::post('Individual',[individualController::class,'IndividualStore'])->name('IndividualStore');

    Route::get('Firm Partnership',[FirmPartnershipController::class,'FirmPartnership'])->name('FirmPartnership');
    Route::post('Firm Partnership',[FirmPartnershipController::class,'FirmPartnershipStore'])->name('FirmPartnershipStore');
    
    Route::get('SECPCompanyInProvincial',[SecpCompanyInProvincialController::class,'SECPCompanyInProvincial'])->name('SECPCompanyInProvincial');
    Route::post('SECPCompanyInProvincial',[SecpCompanyInProvincialController::class,'SECPCompanyInProvincialStore'])->name('SECPCompanyInProvincialStore');
        
 });



// Route::get('Provincial Sales Tax Registration',[PersonalNtnRegistrationController::class,'Provincial'])->name('Provincial');
// Route::post('Provincial Sales Tax Registration',[PersonalNtnRegistrationController::class,'ProvincialStore'])->name('ProvincialStore');


Route::get('cart',[UserLoginController::class,'Cart'])->name('Cart');

// USA / UAE / UK / Canada / Australia Services
Route::prefix('USA-UAE-UK-Canada-Australia-Services')->group(function(){
    Route::get('Income Taxation',[incomeTaxationController::class,'IncomeTaxation'])->name('IncomeTaxation');
    Route::post('Income Taxation',[incomeTaxationController::class,'IncomeTaxationStore'])->name('IncomeTaxationStore');
    
    Route::get('Sales Taxation',[salesTaxationController::class,'SalesTaxation'])->name('SalesTaxation');
    Route::post('Sales Taxation',[salesTaxationController::class,'SalesTaxationStore'])->name('SalesTaxationStore');
    
    Route::get('Company Formation',[companyFormationController::class,'CompanyFormation'])->name('CompanyFormation');
    Route::post('Company Formation',[companyFormationController::class,'CompanyFormationStore'])->name('CompanyFormationStore');
    
});

Route::post('USAUK-Stored-Type',[USAUAController::class,'USAUKStoredType'])->name('USAUKStoredType');


route::prefix('Income-Tax-Filing')->group(function(){
    Route::get('Salary-Income',[salaryIncomeController::class,'SalaryIncome'])->name('SalaryIncome');
    Route::post('Salary-Income',[salaryIncomeController::class,'SalaryIncomeStore'])->name('SalaryIncomeStore');
    
    Route::get('Rent-Income',[rentIncomeController::class,'RentIncome'])->name('RentIncome');
    Route::post('Rent-Income',[rentIncomeController::class,'RentIncomeStore'])->name('RentIncomeStore');
    
    Route::get('Business-Income',[businessIncomeController::class,'BusinessIncome'])->name('BusinessIncome');
    Route::post('Business-Income',[businessIncomeController::class,'BusinessIncomeStore'])->name('BusinessIncomeStore');
    
    Route::get('Shares-Capital-Gain',[sharesCapitalGainController::class,'sharesCapitalGain'])->name('sharesCapitalGain');
    Route::post('Shares-Capital-Gain',[sharesCapitalGainController::class,'sharesCapitalGainStore'])->name('sharesCapitalGainStore');
    
    Route::get('Other-Income',[otherincomeController::class,'OtherIncome'])->name('OtherIncome');
    Route::post('Other-Income',[otherincomeController::class,'OtherIncomeStore'])->name('OtherIncomeStore');
    
    Route::get('Withholding-Adjustable-or-Final-Tax',[withholdingAdjustableController::class,'WithholdingAdjustable'])->name('WithholdingAdjustable');
    Route::post('Withholding-Adjustable-or-Final-Tax',[withholdingAdjustableController::class,'WithholdingAdjustableStore'])->name('WithholdingAdjustableStore');
    
    Route::get('Select-Assets-expense-available-from-list',[selectassetsexpenseavailablefromlistController::class,'AssetsExpenseAvailable'])->name('AssetsExpenseAvailable');
    Route::post('Select-Assets-expense-available-from-list',[selectassetsexpenseavailablefromlistController::class,'AssetsExpenseAvailableStore'])->name('AssetsExpenseAvailableStore');
    
    });

Route::get('admin',[adminController::class,'admin'])->name('admin');
Route::get('home-page',[homepageController::class,'homePage'])->name('homePage');
Route::post('home-page',[homepageController::class,'homePageStore'])->name('homePageStore');
Route::get('home-page-update/{id}', [homepageController::class, 'homePageUpdate'])->name('homePageUpdate');
Route::get('home-page-delete-record/{id}', [homepageController::class, 'homePageDeleteRecord'])->name('homePageDeleteRecord');
Route::post('home-page-update/{id}', [homepageController::class, 'homePageUpdateStore'])->name('homePageUpdateStore');


Route::get('home-page-show',[homepageController::class,'homePageShow'])->name('homePageShow');

