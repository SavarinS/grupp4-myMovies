<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::get();
        return view('movies/index', ['ratings' =>$ratings]);

    }

    public function create()
    {   
        $ratings = Rating::orderBy('rating')->get();
        $movies = Movie::orderBy('title')->get();
        
        
       return view('movies/create', [
        'movies' => $movies,
           'ratings' => $ratings
           ]);
    }

    
    public function store(Request $request)
    {  
        $rating_rating = $request->

    //     request()->validate(['rate' => 'required']);

    //    // $movie = Movie::find($request->id);

    //     $rating = new Rating;
    //     $rating->rating = $request->rate;
    //     $rating->user_id = auth()->user()->id;
    //     $movie->ratings()->save($rating);


        return redirect()->route('movies.index');
    }


    public function show(Rating $rating)
    {   
        return view('movies/show', ['rating' =>$rating]);
    }

    public function edit(Rating $rating)
    {
        
        return view('movies/edit', [
            'movie' => $movie, 
            'ratings' =>Rating::orderBy('rate')->get(),
            
        ]);

    }


    public function update(Request $request, Rating $rating)
    {
        
        $rating_rate = $request->input('rate');
        
        
        $movie->users()->sync($request->input('users'));
        
       
        $rating->rate = $rating_rate;
        
        $rating->save();        

        return redirect()->route('movies.show', ['rating' => $rating->id]);
    }
    
    public function destroy(Movie $movie)
    {
        //
    }

}
