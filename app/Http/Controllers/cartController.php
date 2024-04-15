<?php

namespace App\Http\Controllers;

use App\Models\individual;
use Illuminate\Http\Request;
use App\Models\taxconsultancy;
use App\Models\FirmPartnership;
use App\Models\companyFormation;
use App\Models\intellectualProperty;
use App\Models\secpAnnualCompliance;
use App\Models\secpcompanyformation;
use App\Models\TrustNgoRegistration;
use App\Models\salestaxmonthlyfiling;
use App\Models\monthlytaxretainership;
use App\Models\PswImportExportLicense;
use App\Models\personalntnregistration;
use App\Models\SecpCompanyInProvincial;
use App\Models\incomepartnershipcompany;
use App\Models\individualWithBusinessName;
use App\Models\quarterlyannualwithholding;
use App\Models\federalsalestaxregistration;
use App\Models\AccountingBookKeepingService;
use App\Models\incomeTaxation;
use App\Models\taxnoticesreplyrepresentaion;
use App\Models\IndividualWithoutBusinessName;
use App\Models\SecpAnnualExternalAnnualAudit;
use App\Models\intellectualPropertyRegistration;
use App\Models\ProfessionalTaxRegistrationRenewal;
use App\Models\salesTaxation;
use App\Models\selectassetsexpenseavailablefromlist;
use App\Models\soleproprietorbusinessntnregistration;

class cartController extends Controller
{

    public function Cart()
    {
        $user = auth()->user();
        $personalntnregistration = personalntnregistration::where('user_email', $user->email)->get()->count();
        $soleproprietorbusinessntnregistration = soleproprietorbusinessntnregistration::where('user_email', $user->email)->get()->count();
        $selectassetsexpenseavailablefromlist = selectassetsexpenseavailablefromlist::where('user_email', $user->email)->get()->count();
        $incomepartnershipcompany = incomepartnershipcompany::where('user_email', $user->email)->get()->count();
        $quarterlyannualwithholding = quarterlyannualwithholding::where('user_email', $user->email)->get()->count();
        $federalsalestaxregistration = federalsalestaxregistration::where('user_email', $user->email)->get()->count();
        $individual = individual::where('user_email', $user->email)->get()->count();
        $FirmPartnership = FirmPartnership::where('user_email', $user->email)->get()->count();
        $SecpCompanyInProvincial = SecpCompanyInProvincial::where('user_email', $user->email)->get()->count();
        $salestaxmonthlyfiling = salestaxmonthlyfiling::where('user_email', $user->email)->get()->count();
        $monthlytaxretainership = monthlytaxretainership::where('user_email', $user->email)->get()->count();
        $taxnoticesreplyrepresentaion = taxnoticesreplyrepresentaion::where('user_email', $user->email)->get()->count();
        $taxconsultancy = taxconsultancy::where('user_email', $user->email)->get()->count();
        $secpcompanyformation = secpcompanyformation::where('user_email', $user->email)->get()->count();
        $secpAnnualCompliance = secpAnnualCompliance::where('user_email', $user->email)->get()->count();
        $SecpAnnualExternalAnnualAudit = SecpAnnualExternalAnnualAudit::where('user_email', $user->email)->get()->count();
        $PswImportExportLicense = PswImportExportLicense::where('user_email', $user->email)->get()->count();
        $IndividualWithoutBusinessName = IndividualWithoutBusinessName::where('user_email', $user->email)->get()->count();
        $individualWithBusinessName = individualWithBusinessName::where('user_email', $user->email)->get()->count();
        $TrustNgoRegistration = TrustNgoRegistration::where('user_email', $user->email)->get()->count();
        $intellectualPropertyRegistration = intellectualPropertyRegistration::where('user_email', $user->email)->get()->count();
        $ProfessionalTaxRegistrationRenewal = ProfessionalTaxRegistrationRenewal::where('user_email', $user->email)->get()->count();
        $AccountingBookKeepingService = AccountingBookKeepingService::where('user_email', $user->email)->get()->count();
        $incomeTaxation = incomeTaxation::where('user_email', $user->email)->get()->count();
        $salesTaxation = salesTaxation::where('user_email', $user->email)->get()->count();
        $companyFormation = companyFormation::where('user_email', $user->email)->get()->count();



        $personalntntotal = $personalntnregistration * 100;
        $soleprototal = $soleproprietorbusinessntnregistration * 100;
        $selectassetstotal = $selectassetsexpenseavailablefromlist * 100;
        $incomepartnershipcompanytotal = $incomepartnershipcompany * 100;
        $quarterlyannualwithholdingtotal = $quarterlyannualwithholding * 100;
        $federalsalestaxregistrationtotal = $federalsalestaxregistration * 100;
        $individualtotal = $individual * 100;
        $FirmPartnershiptotal = $FirmPartnership * 100;
        $SecpCompanyInProvincialtotal = $SecpCompanyInProvincial * 100;
        $salestaxmonthlyfilingtotal = $salestaxmonthlyfiling * 100;
        $monthlytaxretainershiptotal = $monthlytaxretainership * 100;
        $taxnoticesreplyrepresentaiontotal = $taxnoticesreplyrepresentaion * 100;
        $taxconsultancytotal = $taxconsultancy * 100;
        $secpcompanyformationtotal = $secpcompanyformation * 100;
        $secpAnnualCompliancetotal = $secpAnnualCompliance * 100;
        $SecpAnnualExternalAnnualAudittotal = $SecpAnnualExternalAnnualAudit * 100;
        $PswImportExportLicensetotal = $PswImportExportLicense * 100;
        $IndividualWithoutBusinessNametotal = $IndividualWithoutBusinessName * 100;
        $individualWithBusinessNametotal = $individualWithBusinessName * 100;
        $TrustNgoRegistrationtotal = $TrustNgoRegistration * 100;
        $intellectualPropertyRegistrationtotal = $intellectualPropertyRegistration * 100;
        $ProfessionalTaxRegistrationRenewaltotal = $ProfessionalTaxRegistrationRenewal * 100;
        $AccountingBookKeepingServicetotal = $AccountingBookKeepingService * 100;
        $incomeTaxationtotal = $incomeTaxation * 100;
        $salesTaxationtotal = $salesTaxation * 100;
        $companyFormationtotal = $companyFormation * 100;


        $total = $personalntntotal + $soleprototal + $selectassetstotal+$incomepartnershipcompanytotal+$quarterlyannualwithholdingtotal+$federalsalestaxregistrationtotal+$individualtotal+$FirmPartnershiptotal+$SecpCompanyInProvincialtotal+$salestaxmonthlyfilingtotal+$monthlytaxretainershiptotal+$taxnoticesreplyrepresentaiontotal+$taxconsultancytotal+$secpcompanyformationtotal+$secpAnnualCompliancetotal+$SecpAnnualExternalAnnualAudittotal+$PswImportExportLicensetotal+$IndividualWithoutBusinessNametotal+$individualWithBusinessNametotal+$TrustNgoRegistrationtotal+$intellectualPropertyRegistrationtotal+$ProfessionalTaxRegistrationRenewaltotal+$AccountingBookKeepingServicetotal+$incomeTaxationtotal+$salesTaxationtotal+$companyFormationtotal;
        

        // dd($total);
        return view('clientarea.cart', compact('personalntnregistration', 'soleproprietorbusinessntnregistration', 'selectassetsexpenseavailablefromlist','incomepartnershipcompany', 'quarterlyannualwithholding','federalsalestaxregistration','individual','FirmPartnership','SecpCompanyInProvincial','salestaxmonthlyfiling','monthlytaxretainership','taxnoticesreplyrepresentaion','taxconsultancy','secpcompanyformation', 'secpAnnualCompliance','SecpAnnualExternalAnnualAudit','PswImportExportLicense','IndividualWithoutBusinessName','individualWithBusinessName','TrustNgoRegistration','intellectualPropertyRegistration','ProfessionalTaxRegistrationRenewal','AccountingBookKeepingService','incomeTaxation','salesTaxation','companyFormation','personalntntotal', 'soleprototal', 'selectassetstotal', 'incomepartnershipcompanytotal','quarterlyannualwithholdingtotal','federalsalestaxregistrationtotal','individualtotal','FirmPartnershiptotal','SecpCompanyInProvincialtotal','salestaxmonthlyfilingtotal','monthlytaxretainershiptotal','taxnoticesreplyrepresentaiontotal','taxconsultancytotal','secpcompanyformationtotal','secpAnnualCompliancetotal','SecpAnnualExternalAnnualAudittotal','PswImportExportLicensetotal','IndividualWithoutBusinessNametotal','individualWithBusinessNametotal','TrustNgoRegistrationtotal','intellectualPropertyRegistrationtotal','ProfessionalTaxRegistrationRenewaltotal','AccountingBookKeepingServicetotal','incomeTaxationtotal','salesTaxationtotal','companyFormationtotal','total'));
    }
    
    public function CartShow()
    
    {

        return view('clientarea.cart');
    }

    

    // increment and decremnt
    public function increaseCart(Request $request)
    {



        if ($request->increasepersonalntnregistration == "increaseincreasepersonalntnregistration") {
            $fetchRecord = personalntnregistration::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                personalntnregistration::create($attributes);
            }
        } else {
            if ($request->increasepersonalntnregistration == "decreaseincreasepersonalntnregistration") {
                $deleteRecord = personalntnregistration::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }



        if ($request->increasesoleproprietorbusinessntnregistration == "increasesoleproprietorbusinessntnregistration") {
            $fetchRecord = soleproprietorbusinessntnregistration::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                soleproprietorbusinessntnregistration::create($attributes);
            }
        } else {
            if ($request->increasesoleproprietorbusinessntnregistration == "decreasesoleproprietorbusinessntnregistration") {
                $deleteRecord = soleproprietorbusinessntnregistration::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }




        if ($request->increaseselectassetsexpenseavailablefromlist == "increaseselectassetsexpenseavailablefromlist") {
            $fetchRecord = selectassetsexpenseavailablefromlist::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                selectassetsexpenseavailablefromlist::create($attributes);
            }
        } else {
            if ($request->increaseselectassetsexpenseavailablefromlist == "decreaseselectassetsexpenseavailablefromlist") {
                $deleteRecord = selectassetsexpenseavailablefromlist::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseincomepartnershipcompany == "increaseincomepartnershipcompany") {
            $fetchRecord = incomepartnershipcompany::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                incomepartnershipcompany::create($attributes);
            }
        } else {
            if ($request->increaseincomepartnershipcompany == "decreaseincomepartnershipcompany") {
                $deleteRecord = incomepartnershipcompany::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasequarterlyannualwithholding == "increasequarterlyannualwithholding") {
            $fetchRecord = quarterlyannualwithholding::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                quarterlyannualwithholding::create($attributes);
            }
        } else {
            if ($request->increasequarterlyannualwithholding == "decreasequarterlyannualwithholding") {
                $deleteRecord = quarterlyannualwithholding::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasefederalsalestaxregistration == "increasefederalsalestaxregistration") {
            $fetchRecord = federalsalestaxregistration::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                federalsalestaxregistration::create($attributes);
            }
        } else {
            if ($request->increasefederalsalestaxregistration == "decreasefederalsalestaxregistration") {
                $deleteRecord = federalsalestaxregistration::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseindividual == "increaseindividual") {
            $fetchRecord = individual::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                individual::create($attributes);
            }
        } else {
            if ($request->increaseindividual == "decreaseindividual") {
                $deleteRecord = individual::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseFirmPartnership == "increaseFirmPartnership") {
            $fetchRecord = FirmPartnership::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                FirmPartnership::create($attributes);
            }
        } else {
            if ($request->increaseFirmPartnership == "decreaseFirmPartnership") {
                $deleteRecord = FirmPartnership::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseSecpCompanyInProvincial == "increaseSecpCompanyInProvincial") {
            $fetchRecord = SecpCompanyInProvincial::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                SecpCompanyInProvincial::create($attributes);
            }
        } else {
            if ($request->increaseSecpCompanyInProvincial == "decreaseSecpCompanyInProvincial") {
                $deleteRecord = SecpCompanyInProvincial::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasesalestaxmonthlyfiling == "increasesalestaxmonthlyfiling") {
            $fetchRecord = salestaxmonthlyfiling::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                salestaxmonthlyfiling::create($attributes);
            }
        } else {
            if ($request->increasesalestaxmonthlyfiling == "decreasesalestaxmonthlyfiling") {
                $deleteRecord = salestaxmonthlyfiling::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasemonthlytaxretainership == "increasemonthlytaxretainership") {
            $fetchRecord = monthlytaxretainership::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                monthlytaxretainership::create($attributes);
            }
        } else {
            if ($request->increasemonthlytaxretainership == "decreasemonthlytaxretainership") {
                $deleteRecord = monthlytaxretainership::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasetaxnoticesreplyrepresentaion == "increasetaxnoticesreplyrepresentaion") {
            $fetchRecord = taxnoticesreplyrepresentaion::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                taxnoticesreplyrepresentaion::create($attributes);
            }
        } else {
            if ($request->increasetaxnoticesreplyrepresentaion == "decreasetaxnoticesreplyrepresentaion") {
                $deleteRecord = taxnoticesreplyrepresentaion::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasetaxconsultancy == "increasetaxconsultancy") {
            $fetchRecord = taxconsultancy::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                taxconsultancy::create($attributes);
            }
        } else {
            if ($request->increasetaxconsultancy == "decreasetaxconsultancy") {
                $deleteRecord = taxconsultancy::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasesecpcompanyformation == "increasesecpcompanyformation") {
            $fetchRecord = secpcompanyformation::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                secpcompanyformation::create($attributes);
            }
        } else {
            if ($request->increasesecpcompanyformation == "decreasesecpcompanyformation") {
                $deleteRecord = secpcompanyformation::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasesecpAnnualCompliance == "increasesecpAnnualCompliance") {
            $fetchRecord = secpAnnualCompliance::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                secpAnnualCompliance::create($attributes);
            }
        } else {
            if ($request->increasesecpAnnualCompliance == "decreasesecpAnnualCompliance") {
                $deleteRecord = secpAnnualCompliance::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseSecpAnnualExternalAnnualAudit == "increaseSecpAnnualExternalAnnualAudit") {
            $fetchRecord = SecpAnnualExternalAnnualAudit::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                SecpAnnualExternalAnnualAudit::create($attributes);
            }
        } else {
            if ($request->increaseSecpAnnualExternalAnnualAudit == "decreaseSecpAnnualExternalAnnualAudit") {
                $deleteRecord = SecpAnnualExternalAnnualAudit::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasePswImportExportLicense == "increasePswImportExportLicense") {
            $fetchRecord = PswImportExportLicense::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                PswImportExportLicense::create($attributes);
            }
        } else {
            if ($request->increasePswImportExportLicense == "decreasePswImportExportLicense") {
                $deleteRecord = PswImportExportLicense::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseIndividualWithoutBusinessName == "increaseIndividualWithoutBusinessName") {
            $fetchRecord = IndividualWithoutBusinessName::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                IndividualWithoutBusinessName::create($attributes);
            }
        } else {
            if ($request->increaseIndividualWithoutBusinessName == "decreaseIndividualWithoutBusinessName") {
                $deleteRecord = IndividualWithoutBusinessName::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseindividualWithBusinessName == "increaseindividualWithBusinessName") {
            $fetchRecord = individualWithBusinessName::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                individualWithBusinessName::create($attributes);
            }
        } else {
            if ($request->increaseindividualWithBusinessName == "decreaseindividualWithBusinessName") {
                $deleteRecord = individualWithBusinessName::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseTrustNgoRegistration == "increaseTrustNgoRegistration") {
            $fetchRecord = TrustNgoRegistration::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                TrustNgoRegistration::create($attributes);
            }
        } else {
            if ($request->increaseTrustNgoRegistration == "decreaseTrustNgoRegistration") {
                $deleteRecord = TrustNgoRegistration::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseintellectualPropertyRegistration == "increaseintellectualPropertyRegistration") {
            $fetchRecord = intellectualPropertyRegistration::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                intellectualPropertyRegistration::create($attributes);
            }
        } else {
            if ($request->increaseintellectualPropertyRegistration == "decreaseintellectualPropertyRegistration") {
                $deleteRecord = intellectualPropertyRegistration::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseProfessionalTaxRegistrationRenewal == "increaseProfessionalTaxRegistrationRenewal") {
            $fetchRecord = ProfessionalTaxRegistrationRenewal::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                ProfessionalTaxRegistrationRenewal::create($attributes);
            }
        } else {
            if ($request->increaseProfessionalTaxRegistrationRenewal == "decreaseProfessionalTaxRegistrationRenewal") {
                $deleteRecord = ProfessionalTaxRegistrationRenewal::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseAccountingBookKeepingService == "increaseAccountingBookKeepingService") {
            $fetchRecord = AccountingBookKeepingService::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                AccountingBookKeepingService::create($attributes);
            }
        } else {
            if ($request->increaseAccountingBookKeepingService == "decreaseAccountingBookKeepingService") {
                $deleteRecord = AccountingBookKeepingService::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increaseincomeTaxation == "increaseincomeTaxation") {
            $fetchRecord = incomeTaxation::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                incomeTaxation::create($attributes);
            }
        } else {
            if ($request->increaseincomeTaxation == "decreaseincomeTaxation") {
                $deleteRecord = incomeTaxation::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasesalesTaxation == "increasesalesTaxation") {
            $fetchRecord = salesTaxation::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                salesTaxation::create($attributes);
            }
        } else {
            if ($request->increasesalesTaxation == "decreasesalesTaxation") {
                $deleteRecord = salesTaxation::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }
        if ($request->increasecompanyFormation == "increasecompanyFormation") {
            $fetchRecord = companyFormation::where("user_email", auth()->user()->email)->latest()->first();
            if ($fetchRecord) {
                $attributes = $fetchRecord->getAttributes(); // Convert the model to an array of attributes
                unset($attributes['id']); // Remove the 'id' attribute if it's an auto-incrementing field
                companyFormation::create($attributes);
            }
        } else {
            if ($request->increasecompanyFormation == "decreasecompanyFormation") {
                $deleteRecord = companyFormation::where("user_email", auth()->user()->email)->latest()->first();
                if ($deleteRecord->count() > 1) {
                    $deleteRecord->delete();
                }
            }
        }


        return redirect()->route('Cart');
    }


    // delete all cart per addtocart 
    public function deleteCart(Request $request)
    {
        if ($request->personalntnregistration == "personalntnregistration") {
            $deleteAll = personalntnregistration::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                personalntnregistration::where("user_email", auth()->user()->email)->delete();
            }
        } elseif ($request->soleproprietorbusinessntnregistration == "soleproprietorbusinessntnregistration") {
            $deleteAll = soleproprietorbusinessntnregistration::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                soleproprietorbusinessntnregistration::where("user_email", auth()->user()->email)->delete();
            }
        } elseif ($request->selectassetsexpenseavailablefromlist == "selectassetsexpenseavailablefromlist") {
            $deleteAll = selectassetsexpenseavailablefromlist::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                selectassetsexpenseavailablefromlist::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->incomepartnershipcompany == "incomepartnershipcompany") {
            $deleteAll = incomepartnershipcompany::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                incomepartnershipcompany::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->quarterlyannualwithholding == "quarterlyannualwithholding") {
            $deleteAll = quarterlyannualwithholding::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                quarterlyannualwithholding::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->federalsalestaxregistration == "federalsalestaxregistration") {
            $deleteAll = federalsalestaxregistration::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                federalsalestaxregistration::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->individual == "individual") {
            $deleteAll = individual::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                individual::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->FirmPartnership == "FirmPartnership") {
            $deleteAll = FirmPartnership::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                FirmPartnership::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->SecpCompanyInProvincial == "SecpCompanyInProvincial") {
            $deleteAll = SecpCompanyInProvincial::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                SecpCompanyInProvincial::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->salestaxmonthlyfiling == "salestaxmonthlyfiling") {
            $deleteAll = salestaxmonthlyfiling::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                salestaxmonthlyfiling::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->monthlytaxretainership == "monthlytaxretainership") {
            $deleteAll = monthlytaxretainership::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                monthlytaxretainership::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->taxnoticesreplyrepresentaion == "taxnoticesreplyrepresentaion") {
            $deleteAll = taxnoticesreplyrepresentaion::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                taxnoticesreplyrepresentaion::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->taxconsultancy == "taxconsultancy") {
            $deleteAll = taxconsultancy::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                taxconsultancy::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->secpcompanyformation == "secpcompanyformation") {
            $deleteAll = secpcompanyformation::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                secpcompanyformation::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->secpAnnualCompliance == "secpAnnualCompliance") {
            $deleteAll = secpAnnualCompliance::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                secpAnnualCompliance::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->SecpAnnualExternalAnnualAudit == "SecpAnnualExternalAnnualAudit") {
            $deleteAll = SecpAnnualExternalAnnualAudit::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                SecpAnnualExternalAnnualAudit::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->PswImportExportLicense == "PswImportExportLicense") {
            $deleteAll = PswImportExportLicense::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                PswImportExportLicense::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->IndividualWithoutBusinessName == "IndividualWithoutBusinessName") {
            $deleteAll = IndividualWithoutBusinessName::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                IndividualWithoutBusinessName::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->individualWithBusinessName == "individualWithBusinessName") {
            $deleteAll = individualWithBusinessName::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                individualWithBusinessName::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->TrustNgoRegistration == "TrustNgoRegistration") {
            $deleteAll = TrustNgoRegistration::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                TrustNgoRegistration::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->intellectualPropertyRegistration == "intellectualPropertyRegistration") {
            $deleteAll = intellectualPropertyRegistration::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                intellectualPropertyRegistration::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->ProfessionalTaxRegistrationRenewal == "ProfessionalTaxRegistrationRenewal") {
            $deleteAll = ProfessionalTaxRegistrationRenewal::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                ProfessionalTaxRegistrationRenewal::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->AccountingBookKeepingService == "AccountingBookKeepingService") {
            $deleteAll = AccountingBookKeepingService::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                AccountingBookKeepingService::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->incomeTaxation == "incomeTaxation") {
            $deleteAll = incomeTaxation::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                incomeTaxation::where("user_email", auth()->user()->email)->delete();
            }
            
        }
         elseif ($request->salesTaxation == "salesTaxation") {
            $deleteAll = salesTaxation::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                salesTaxation::where("user_email", auth()->user()->email)->delete();
            }
        }
         elseif ($request->companyFormation == "companyFormation") {
            $deleteAll = companyFormation::where("user_email", auth()->user()->email)->exists();

            if ($deleteAll) {
                companyFormation::where("user_email", auth()->user()->email)->delete();
            }
        }

        return redirect()->route('Cart');
    }









// Checkout
    public function Checkout(){
        return view('clientarea.checkout');
    }
}
