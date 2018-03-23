<?php

namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use Rateable;

    public function director()
    {
        return $this->belongsTo('App\Director');
    }

     public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function users(Type $var = null)
    {
        return $this->belongsToMany('App\User');
    }
}
