<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of directors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::get();
        return view('directors/index', ['directors' => $directors]);
    }

    /**
     * Show the form for creating a new resource.
     * Show list of director's work
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directors/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the form
        /*$this->validate(request(), [
            'name'=> 'required',
            'biography'=>'required'
        ]);*/
        //create a new director using the require dat
        $director = new Director();
        $director->name = $director_name;
        $director->info = $director_info;
        $director->save();

        //save data to database
        $director_name = $request->input('name');
        $director_info = $request->input('info');
        //redirect to the director page or homepage?
       return redirect()->route('directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        //
    }
}
