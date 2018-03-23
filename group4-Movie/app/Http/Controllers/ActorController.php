<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of actors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = actor::get();
        return view('actors/index', ['actors' => $actors]);
    }

    /**
     * Show the form for creating a new resource.
     * Show list of actor's work
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actors/create');
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

        //save data to database
        $actor_name = $request->input('name');
        $actor_info = $request->input('info');

        
        //create a new actor using the require data
        $actor = new Actor();
        $actor->namn = $actor_name;
        $actor->info = $actor_info;
        $actor->save();

        //redirect to the actor page 
       return redirect()->route('actors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        return view('actors/show',  ['actor' => $actor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        return view('actors/edit',  ['actor' => $actor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        //save data to database
        $actor_name = $request->input('namn');
        $actor_info = $request->input('info');

        $actor->namn = $actor_name;
        $actor->info = $actor_info;
        $actor->save();

         //redirect to the actor list 
       return redirect()->route('actors.show', ['actor' => $actor->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
