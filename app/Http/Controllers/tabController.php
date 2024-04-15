<?php

namespace App\Http\Controllers;

use App\Models\tab;
use App\Models\tabSalesTax;
use App\Models\specificItem;
use App\Models\tabIncomeTax;
use Illuminate\Http\Request;
use App\Models\intellectualProperty;
use App\Models\tabCompanyRegistration;
use App\Models\UsaLlcTaxFilling;

class tabController extends Controller
{
    // specificItems form
    public function specificItems()
    {
        return view('tab.specific-Items');
    }
    // specificItems Store into database
    public function specificItemsStore(Request $request)
    {
        $data = $request->all();
        $files = ['image'];
        foreach ($files as $field) {
            $file = $request->file('image');
            if ($file) {
                $originalName = $file->getClientOriginalName();
                $hashedName = md5(time() . $originalName) . '' . $file->getClientOriginalExtension();
                $file->move('specificimag/', $hashedName);
                $data['image'] = $hashedName;
            }
        }
        specificItem::create($data);
        return back()->with('success', 'Specific Items Added success fully');
    }


    // tabIncomeTax form
    public function tabIncomeTax()
    {
        return view('tab.tab-income-tax-add');
    }

    // tabIncomeTax store into database
    public function tabIncomeTaxStore(Request $request)
    {
        $data = $request->all();
        tabIncomeTax::create($data);
        return back()->with('success', 'Tab Income Tax Return  Added success fully');
    }


    // tabSalesTax form 
    public function tabSalesTax()
    {
        return view('tab.tab-sales-tax-add');
    }

    // tabSalesTax store into database
    public function tabSalesTaxStore(Request $request)
    {
        $data = $request->all();
        tabSalesTax::create($data);
        return back()->with('success', 'Tab Income Tax Return  Added success fully');
    }



    // tabCompanyRegistration form
    public function tabCompanyRegistration()
    {
        return view('tab.tab_company_registration');
    }

    // tabCompanyRegistration store into database
    public function tabCompanyRegistrationStore(Request $request)
    {
        $data = $request->all();
        tabCompanyRegistration::create($data);
        return back()->with('success', 'Tab Company Registration  Added success fully');
    }


    // intellectualProperty store into database
    public function intellectualProperty()
    {
        return view('tab.tab-intellectual-property');
    }

    // intellectualProperty store into database
    public function intellectualPropertyStore(Request $request)
    {
        $data = $request->all();
        intellectualProperty::create($data);
        return back()->with('success', 'Tab Intellectual Property  Added success fully');
    }


    // USALLCTaxFilling form
    public function USALLCTaxFilling()
    {
        return view('tab.tab-usa-llc-tax-filling');
    }


    // USALLCTaxFilling store into database
    public function USALLCTaxFillingStore(Request $request)
    {
        $data = $request->all();
        UsaLlcTaxFilling::create($data);
        return back()->with('success', 'Tab USA LLC & Tax Filling  Added success fully');
    }


    // tabIncomeTax show
    public function tabSearch(Request $request)
    {
        $tabSearh = $request->search;

        if (!is_null($tabSearh)) {

            $tabIncomeTaxShow = tabIncomeTax::where('title', 'like', '%' . $tabSearh . '%')->get();
            $tabSalesTax = tabSalesTax::where('title', 'like', '%' . $tabSearh . '%')->get();
            $tabCompanyRegistration = tabCompanyRegistration::where('title', 'like', '%' . $tabSearh . '%')->get();
            $intellectualProperty = intellectualProperty::where('title', 'like', '%' . $tabSearh . '%')->get();
            $UsaLlcTaxFilling = UsaLlcTaxFilling::where('title', 'like', '%' . $tabSearh . '%')->get();


            return view('business-services', compact('tabIncomeTaxShow', 'tabSalesTax', 'tabCompanyRegistration', 'intellectualProperty', 'UsaLlcTaxFilling'));
        } else {
            return back()->with('error', "enetr some thing");
        }
    }


    public function requestForCall(Request $request)
    {
        $data = $request->all();
        dd($data);
    }


    public function slugg($slug, $id)
    {
        $compareSlugWithallTables = $slug;

        $tables = [
            'tabIncomeTax' => tabIncomeTax::all(),
            'tabSalesTax' => tabSalesTax::all(),
            'tabCompanyRegistration' => tabCompanyRegistration::all(),
            'intellectualProperty' => intellectualProperty::all(),
            'UsaLlcTaxFilling' => UsaLlcTaxFilling::all(),
        ];

        $matchData = null;

        foreach ($tables as  $tableData) {
            foreach ($tableData as $values) {
                if ($values->title == $compareSlugWithallTables) {
                    $matchData = $values;
                    break 2; // Break both inner and outer loops
                }
            }
        }

        if ($matchData) {
            return view('slug', compact('matchData'));
        } else {
            // No matching data found
            return view('slug', ['matchData' => null]);
        }
    }

    //     public function slugg($slug, $id)
    // {
    //     $compareSlugWithallTables = $slug;

    //     $tabIncomeTax = tabIncomeTax::all();
    //     $tabSalesTax = tabSalesTax::all();
    //     $tabCompanyRegistration = tabCompanyRegistration::all();
    //     $intellectualProperty = intellectualProperty::all();
    //     $UsaLlcTaxFilling = UsaLlcTaxFilling::all();

    //     $matchData = null;

    //     // Check for tabIncomeTax
    //     if (!$matchData) {
    //         foreach ($tabIncomeTax as $tabIncomeTaxValues) {
    //             if ($tabIncomeTaxValues->title == $compareSlugWithallTables) {
    //                 $matchData = $tabIncomeTaxValues;

    //             }
    //         }
    //     }


    //     // Check for tabSalesTax
    //     if (!$matchData) {
    //         foreach ($tabSalesTax as $tabSalesTaxValues) {
    //             if ($tabSalesTaxValues->title == $compareSlugWithallTables) {
    //                 $matchData = $tabSalesTaxValues;

    //             }
    //         }
    //     }

    //     // Check for tabCompanyRegistration
    //     if (!$matchData) {
    //         foreach ($tabCompanyRegistration as $tabCompanyRegistrationValues) {
    //             if ($tabCompanyRegistrationValues->title == $compareSlugWithallTables) {
    //                 $matchData = $tabCompanyRegistrationValues;

    //             }
    //         }
    //     }

    //     // Check for intellectualProperty
    //     if (!$matchData) {
    //         foreach ($intellectualProperty as $intellectualPropertyValues) {
    //             if ($intellectualPropertyValues->title == $compareSlugWithallTables) {
    //                 $matchData = $intellectualPropertyValues;

    //             }
    //         }
    //     }

    //     // Check for UsaLlcTaxFilling
    //     if (!$matchData) {
    //         foreach ($UsaLlcTaxFilling as $UsaLlcTaxFillingValues) {
    //             if ($UsaLlcTaxFillingValues->title == $compareSlugWithallTables) {
    //                 $matchData = $UsaLlcTaxFillingValues;

    //             }
    //         }
    //     }

    //     if ($matchData) {
    //         return view('slug', compact('matchData'));
    //     } else {
    //         // No matching data found
    //         return view('slug', ['matchData' => null]);
    //     }
    // }


    //    public function Calculation(Request $request)
    //     {
    //         $salary=$request->salary;
    //         $fixed_tax = 0;
    //         $slab_max_limit = 0;
    //         $exceeded_amount = 0;
    //         $total_rate = 0;
    //         $total_tax_payable = 0;

    //         if ($salary <= 600000) {
    //             // No tax for income up to 600,000
    //             $total_tax_payable = 0;
    //         } elseif ($salary <= 800000) {
    //             // Tax rate: 7.50%
    //             $slab_max_limit = 800000;
    //             $exceeded_amount = $salary - 600001;
    //             $total_rate = 0.075;
    //             $total_tax_payable = $fixed_tax + ($exceeded_amount * $total_rate);
    //         } elseif ($salary <= 1200000) {
    //             // Tax rate: 15%
    //             $slab_max_limit = 1200000;
    //             $exceeded_amount = $salary - 800001;
    //             $total_rate = 0.15;
    //             $total_tax_payable = $fixed_tax + ($exceeded_amount * $total_rate);
    //         } elseif ($salary <= 2400000) {
    //             // Tax rate: 20%
    //             $slab_max_limit = 2400000;
    //             $exceeded_amount = $salary - 1200001;
    //             $total_rate = 0.20;
    //             $total_tax_payable = $fixed_tax + ($exceeded_amount * $total_rate);
    //         } else {
    //             // Handle income above 2,400,000 (if applicable)
    //         }

    //         return [
    //             'fixed_tax' => $fixed_tax,
    //             'slab_max_limit' => $slab_max_limit,
    //             'exceeded_amount' => $exceeded_amount,
    //             'total_rate' => $total_rate,
    //             'total_tax_payable' => $total_tax_payable,
    //         ];
    //     }


    // //     $salary=$request->salary;
    // //     if ($salary <= 600000) {
    // //         return 0;
    // //     } elseif ($salary <= 800000) {
    // //         return ($salary - 600000) * 0.075;
    // //     } elseif ($salary <= 1200000) {
    // //         return ($salary - 800000) * 0.15 + 20000; // 20000 is the tax on the first slab
    // //     } elseif ($salary <= 2400000) {
    // //         return ($salary - 1200000) * 0.2 + 100000; // 100000 is the tax on the second slab
    // //     } elseif ($salary <= 3000000) {
    // //         return ($salary - 2400000) * 0.25 + 220000; // 220000 is the tax on the third slab
    // //     } elseif ($salary <= 4000000) {
    // //         return ($salary - 3000000) * 0.3 + 370000; // 370000 is the tax on the fourth slab
    // //     } else {
    // //         return ($salary - 4000000) * 0.35 + 620000; // 620000 is the tax on the fifth slab
    // //     }

    // // }



}
