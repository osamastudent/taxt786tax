<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sharescapitalgain extends Model
{
    use HasFactory;

    protected $fillable=[
'cdc_statement',
'stock_broker_statement',
'nccpl_capital_gain_tax_certificate',
'cdc_dividend_statement',
    ];
}
