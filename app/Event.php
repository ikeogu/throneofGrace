<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $table = 'events';
   protected $fillable = ['image','title','date','start_time','stop_time','venue','details'];
}
