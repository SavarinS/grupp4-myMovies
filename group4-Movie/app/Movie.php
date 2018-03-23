<?php

namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //use Rateable;

    public function director()
    {
        return $this->belongsTo('App\Director');
    }

     public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function ratings() {
        return $this->hasMany('App\Rating');
    }

    public function actors()
    {
       return $this->belongsToMany('App\Actor', 'movie_actor');
    }
}
