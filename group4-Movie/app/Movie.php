<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function directors()
    {
        return $this->belongsToMany('App\Director');
    }
}
