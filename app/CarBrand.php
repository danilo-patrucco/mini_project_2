<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CarBrand extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'id', 'make', 'model', 'year'
    ];


    protected $hidden = [
//
    ];


    protected $casts = [
//
    ];

}
