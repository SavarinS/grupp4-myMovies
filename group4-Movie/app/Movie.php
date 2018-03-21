<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function director()
    {
        return $this->belongsTo('App\Director');
    }

     public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
}
