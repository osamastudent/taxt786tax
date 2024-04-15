<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\sharesCapitalGainRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sharesCapitalGainController extends Model
{
    use HasFactory;

    // shares capital gain frm
    public function sharesCapitalGain()
    {
      
            return view('clientarea.incometaxfilingindividual.shares-capital-gain');
    }


    // shares capital gain store into database
    public function sharesCapitalGainStore(sharesCapitalGainRequest $request){
        return "SharesCapitalGainStore";
    }
}
