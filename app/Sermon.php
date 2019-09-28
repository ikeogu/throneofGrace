<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    //
    protected $table = 'sermons';
    protected $fillable = ['image','caption','author','topic','passage','tag'];
}
