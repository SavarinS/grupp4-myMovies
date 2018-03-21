<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $genres = Genre::get();
        return view('genres/index', ['genres' =>$genres]);
        
    }

    /**
     * Show the form for creating a new resource.
     * This is form for create Genres And Can select movie that belongsTo Gengres
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        $genres = Genre::orderBy('name')->get();
        $movies = Movie::orderBy('title')->get();

         return view('genres/create', [
             'genres' => $genres,
             'movies' => $movies
             ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * Store from input here and Then Create new Genre and SAVE
     * 
     * we want to return output to index as well
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre_name = $request->input('name');
        

        $genre = new Genre();
        $genre->name = $genre_name;
        $genre->save();

        return redirect()->route('genres.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('genres/show', ['genre' =>$genre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        return view('genres/edit', [
            'genre'=>$genre, 
            'movies' =>Movie::orderBy('title')->get(), 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        $genre_name = $request->input('name');
        
        $genre->movies()->sync($request->input('movies'));

        $genre->name = $genre_name;
        $genre->save();

        return redirect()->route('genres.show', ['genre' =>$genre->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
