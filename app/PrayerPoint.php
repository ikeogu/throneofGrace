<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrayerPoint extends Model
{
    protected $fillable = ['topic', 'body'];

    public function prayer(){
       
        return $this->belongsTo(Book::class);
       
    }
}
