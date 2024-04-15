<?php

namespace App\Providers;

use view;
use App\Models\User;
use App\Models\homeBlog;
use App\Models\homevideo;
use App\Models\UserEnter;
use App\Models\individual;
use App\Models\tabSalesTax;
use App\Models\blogCategory;
use App\Models\specificItem;
use App\Models\tabIncomeTax;
use App\Models\salesTaxation;
use App\Models\videoCategory;
use App\Models\incomeTaxation;
use App\Models\taxconsultancy;
use App\Models\FirmPartnership;
use App\Models\companyFormation;
use App\Models\UsaLlcTaxFilling;
use App\Models\intellectualProperty;
use App\Models\secpAnnualCompliance;
use App\Models\secpcompanyformation;
use App\Models\TrustNgoRegistration;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Models\salestaxmonthlyfiling;
use App\Models\monthlytaxretainership;
use App\Models\PswImportExportLicense;
use App\Models\tabCompanyRegistration;
use App\Models\personalntnregistration;
use App\Models\SecpCompanyInProvincial;
use Illuminate\Support\ServiceProvider;
use App\Models\incomepartnershipcompany;
use App\Models\individualWithBusinessName;
use App\Models\quarterlyannualwithholding;
use App\Models\federalsalestaxregistration;
use App\Models\AccountingBookKeepingService;
use App\Models\taxnoticesreplyrepresentaion;
use App\Models\individualWithoutbusinessName;
use App\Models\SecpAnnualExternalAnnualAudit;
use App\Models\intellectualPropertyRegistration;
use App\Models\ProfessionalTaxRegistrationRenewal;
use App\Models\selectassetsexpenseavailablefromlist;
use App\Models\soleproprietorbusinessntnregistration;
use App\Models\formSubmitAlert;
use App\Models\salaryincome;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
{
    
    Paginator::useBootstrapFive();
    view()->composer('*', function ($view) {
        // Retrieve session data
        // $email = session()->get('email');

        $email = auth()->check() ? auth()->user()->email : null;
        

        // Calculate cart count
        $cart1 = personalntnregistration::where('user_email', $email)->get()->count();
        $cart2 = soleproprietorbusinessntnregistration::where('user_email',$email)->get()->count();
        $cart3 = selectassetsexpenseavailablefromlist::where('user_email',$email)->get()->count();
        $cart4 = incomepartnershipcompany::where('user_email',$email)->get()->count();
        $cart5 = quarterlyannualwithholding::where('user_email',$email)->get()->count();
        $cart6 = federalsalestaxregistration::where('user_email',$email)->get()->count();
        $cart7 = individual::where('user_email',$email)->get()->count();
        $cart8 = FirmPartnership::where('user_email',$email)->get()->count();
        $cart9 = SecpCompanyInProvincial::where('user_email',$email)->get()->count();
        $cart10 = salestaxmonthlyfiling::where('user_email',$email)->get()->count();
        $cart11 = monthlytaxretainership::where('user_email',$email)->get()->count();
        $cart12 = taxnoticesreplyrepresentaion::where('user_email',$email)->get()->count();
        $cart13 = taxconsultancy::where('user_email',$email)->get()->count();
        $cart14 = secpcompanyformation::where('user_email',$email)->get()->count();
        $cart15 = secpAnnualCompliance::where('user_email',$email)->get()->count();
        $cart16 = SecpAnnualExternalAnnualAudit::where('user_email',$email)->get()->count();
        $cart17 = PswImportExportLicense::where('user_email',$email)->get()->count();
        $cart18 = IndividualWithoutBusinessName::where('user_email',$email)->get()->count();
        $cart19 = individualWithBusinessName::where('user_email',$email)->get()->count();
        $cart20= TrustNgoRegistration::where('user_email',$email)->get()->count();
        $cart21= intellectualPropertyRegistration::where('user_email',$email)->get()->count();
        $cart22= ProfessionalTaxRegistrationRenewal::where('user_email',$email)->get()->count();
        $cart23= AccountingBookKeepingService::where('user_email',$email)->get()->count();
        $cart24= incomeTaxation::where('user_email',$email)->get()->count();
        $cart25= salesTaxation::where('user_email',$email)->get()->count();
        $cart26= companyFormation::where('user_email',$email)->get()->count();

        $cart = $cart1 + $cart2+$cart3+$cart4+$cart5+$cart6+$cart7+$cart8+$cart9+$cart10+$cart11+$cart12+$cart13+$cart14+$cart15+$cart16+$cart17+$cart18+$cart19+$cart20+$cart21+$cart22+$cart23+$cart24+$cart25+$cart26;

        // Share cart count with all views
        $view->with('cart', $cart);
    });

    $homeBlog=homeBlog::all();
        view()->share('homeBlog', $homeBlog);

        
        
    $blogCategory=blogCategory::latest()->with('homeBlogPostR')->get();
    $popularPost=homeBlog::orderBy('views', 'desc')->limit(10)->get();


    view()->share('popularPost', $popularPost);
    view()->share('blogCategory', $blogCategory);


    $videoCategory=videoCategory::latest()->get();
    view()->share("videoCategory",$videoCategory);

    $homevideo=homevideo::orderBy('views','desc')->limit(4)->get();
    view()->share("homevideo",$homevideo);


    $topTrending=homevideo::orderBy("views","desc")->limit(5)->get();
    view()->share('topTrending',$topTrending);



    $tabIncomeTaxShow=tabIncomeTax::all();
    view()->share('tabIncomeTaxShow',$tabIncomeTaxShow);
    
    $tabSalesTax=tabSalesTax::all();
    view()->share('tabSalesTax',$tabSalesTax);
    
    $tabCompanyRegistration=tabCompanyRegistration::all();
    view()->share('tabCompanyRegistration',$tabCompanyRegistration);
    
    $intellectualProperty=intellectualProperty::all();
    view()->share('intellectualProperty',$intellectualProperty);
    
    $UsaLlcTaxFilling=UsaLlcTaxFilling::all();
    view()->share('UsaLlcTaxFilling',$UsaLlcTaxFilling);


    // for else 
    $tabIncomeTaxShowTwo=tabIncomeTax::all();
    view()->share('tabIncomeTaxShowTwo',$tabIncomeTaxShowTwo);
    
    $tabSalesTaxTwo=tabSalesTax::all();
    view()->share('tabSalesTaxTwo',$tabSalesTaxTwo);
    
    $tabCompanyRegistrationTwo=tabCompanyRegistration::all();
    view()->share('tabCompanyRegistrationTwo',$tabCompanyRegistrationTwo);
    
    $intellectualPropertyTwo=intellectualProperty::all();
    view()->share('intellectualPropertyTwo',$intellectualPropertyTwo);
    
    $UsaLlcTaxFillingTwo=UsaLlcTaxFilling::all();
    view()->share('UsaLlcTaxFillingTwo',$UsaLlcTaxFillingTwo);

// for sidebar
    $tabIncomeTaxSidebar=tabIncomeTax::all();
    view()->share('tabIncomeTaxSidebar',$tabIncomeTaxSidebar);
    
    $tabSalesTaxSidebar=tabSalesTax::all();
    view()->share('tabSalesTaxSidebar',$tabSalesTaxSidebar);
    
    $tabCompanyRegistrationSidebar=tabCompanyRegistration::all();
    view()->share('tabCompanyRegistrationSidebar',$tabCompanyRegistrationTwo);
    
    $intellectualPropertySidebar=intellectualProperty::all();
    view()->share('intellectualPropertySidebar',$intellectualPropertySidebar);
    
    $UsaLlcTaxFillingSidebar=UsaLlcTaxFilling::all();
    view()->share('UsaLlcTaxFillingSidebar',$UsaLlcTaxFillingSidebar);

    

    $whatsapp="03253294825";
    view()->share("whatsapp",$whatsapp);

    $specificItem=specificItem::all();
    view()->share('specificItem',$specificItem);

    // $specificItem = SpecificItem::all();
    // $totalItems = $specificItem->count();
    
    // $firstHalf = SpecificItem::take($totalItems / 2)->get();
    // $secondHalf = SpecificItem::skip($totalItems / 2)->take($totalItems - ($totalItems / 2))->get();
    
    
    
    $UserEnter=UserEnter::where("status",'status')->get();
view() ->share('UserEnter',$UserEnter);

}

}
