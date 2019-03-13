<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Files extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'firstName', 'secondName', 'lastName', 'email','password','country','citizenship','placeOfBirth',
        'mobile','landLine','address','city','zip','employment','industry','annualIncome','savings','sourceOfFunds','tradingFrequency',
        'investAnnually', 'fundingMethod', 'nameOfBank', 'bankLocation', 'creditCard', 'eWallet', 'countryTaxes', 'taxId',
        'dateOfBirth', 'userId', 'approved'
    ];

}
