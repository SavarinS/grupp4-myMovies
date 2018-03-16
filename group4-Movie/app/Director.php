<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /**
     * To protect the form - users are not allowed to change input
    protected $fillable = ['name', 'info'];
    */

    
    /**
     * Eloquent relationship
     * Director hasMany -> movies
     */

     public function movies (){
         return $this->movies('App\Movie');
     }
}
