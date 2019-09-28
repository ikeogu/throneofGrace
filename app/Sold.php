<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    //
    protected $table = 'solds';
    protected $fillable = ['reference','title','email','amount','status','bank','card_type','paid_at'];
}
