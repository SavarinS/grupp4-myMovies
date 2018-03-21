@extends('layouts/app')

@section('content')

<img src="{{$movie->coverphoto}}"><br>

Movie ID : {{$movie->id}} Movie's Title : {{$movie->title}}. <br>
Description : {{$movie->desc}} <br>
Run Times : {{$movie->runtimes}} mins <br>
Release Year : {{$movie->releaseyear}} <br>
Director : {{$movie->director->name}} <br>
{{--  if I want to link director name to his/her info I got undefined director  --}}

{{--  Director : <a href="{{route('directors.show', ['director' => $director->id])}}">{{$movie->director->name}}</a><br>  --}}

{{--  Actors info will be here Waiting from Rattanasak!!!!  --}}
{{--  Actors : 
<ul>
    @foreach($movie->actors as $actor)
        <li> {{$actor->namn}}</li>
    @endforeach
</ul>  --}}

Genres :
<ul>
@foreach($movie->genres as $genre)
<li> {{$genre->name}}</li>
@endforeach
</ul>

<div>
<button class="btn btn-outline-primary"><a href="{{route('movies.edit', ['movie'=> $movie->id])}}">Edite Movie</a></button>
</div>
@endsection