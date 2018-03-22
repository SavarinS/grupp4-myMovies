<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
      return view('home', ['movies' =>$movies]);
    }

    public function show()
    {   
        $movie = Movie::get();
        return view('movies/show', ['movie' =>$movie]);
    }
}
