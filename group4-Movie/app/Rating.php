<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $table = "movie_user";

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
