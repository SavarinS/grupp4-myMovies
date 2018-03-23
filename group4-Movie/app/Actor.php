<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /**
     * To protect the form - users are not allowed to change input
     *protected $fillable = ['namn', 'info'];
    */

    
    /**
     * Eloquent relationship
     * Actor hasMany -> movies
     */

     public function movies (){
         return $this->hasMany('App\Movie');
     }
}
