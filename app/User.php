<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'first-name', 'second-name', 'last-name', 'email','password','country','citizenship','place-of-birth',
        'mobile','land-line','address','city','zip','employment','industry','annual-income','savings','source-of-funds','trading-frequency',
        'invest-annually', 'funding-method', 'name-of-bank', 'bank-location', 'credit-card', 'e-wallet', 'country-taxes', 'tax-id',
        'date-of-birth',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function files(){
        return $this->hasMany(Files::class);
    }


}
