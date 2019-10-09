<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    protected $fillable = [
        'name','email','amount','preffered','reference','card_type'
    ];
}
