<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class selectassetsexpenseavailablefromlist extends Model
{
    use HasFactory;
    protected $fillable=[
'user_email',
        'bank_statement',
        'properties_purchased',
        'prize_bond',
        'cash',
        'gold',
        'expense_during_the_year',

    ];
}
