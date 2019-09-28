<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['image','title','author','pages','price','category','content'];

    public function book()
    {
        return $this->hasMany(PrayerPoint::class);
    }
}
