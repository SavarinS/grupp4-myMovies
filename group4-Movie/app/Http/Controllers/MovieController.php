<?php

namespace App\Http\Controllers;

use App\Director;
use App\Movie;
use App\Genre;
//use App\Actor;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::get();
      return view('movies/index', ['movies' =>$movies]);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $movies = Movie::orderBy('title')->get();
        $directors = Director::orderBy('name')->get();
        $genres = Genre::orderBy('name')->get();
        //$actors = Actor::orderBy('namn')->get(); // NAMN not NAME from Rattanasak 
        
// place this right after 'actors' => $actors with , after $genres
       
       return view('movies/create', [
        'movies' => $movies,
           'directors' => $directors, 
           'genres' => $genres
           ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $movie_coverphoto = $request->input('coverphoto');        
        $movie_title = $request->input('title');
        $movie_desc = $request->input('desc');
        $movie_runtimes = $request->input('runtimes');
        $movie_releaseyear = $request->input('releaseyear');
        $movie_director = $request->input('director');
        

        $movie = new Movie();
        $movie->coverphoto = $movie_coverphoto; 
        $movie->title = $movie_title;
        $movie->desc = $movie_desc;
        $movie->runtimes = $movie_runtimes;
        $movie->releaseyear = $movie_releaseyear;
        $movie->director_id = $movie_director;   
        $movie->save();

        return redirect()->route('movies.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {   
        return view('movies/show', ['movie' =>$movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        // place this after genres. ** namn not Name  // 'actors' =>Actor::orderBy('namn')->get(),
        
        return view('movies/edit', [
            'movie' => $movie, 
            'directors' =>Director::orderBy('name')->get(),
            'genres' =>Genre::orderBy('name')->get(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $movie_coverphoto = $request->input('coverphoto');        
        $movie_title = $request->input('title');
        $movie_desc = $request->input('desc');
        $movie_runtimes = $request->input('runtimes');
        $movie_releaseyear = $request->input('releaseyear');
        $movie_director = $request->input('director');
        
        //$movie->actors()->sync($request->input('actors'));
        $movie->genres()->sync($request->input('genres'));

        $movie->coverphoto = $movie_coverphoto; 
        $movie->title = $movie_title;
        $movie->desc = $movie_desc;
        $movie->runtimes = $movie_runtimes;
        $movie->releaseyear = $movie_releaseyear;
        $movie->director_id = $movie_director;
        $movie->save();        

        return redirect()->route('movies.show', ['movie' => $movie->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
