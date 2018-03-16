@extends('layouts/app')

@section('content')

<img src="{{$movie->coverphoto}}"><br>

Movie ID : {{$movie->id}} Movie's Title : {{$movie->title}}. <br>
Description : {{$movie->desc}} <br>
Run Times : {{$movie->runtimes}} mins <br>
Release Year : {{$movie->releaseyear}} <br>

<button class="btn btn-outline-primary"><a href="{{route('movies.edit', ['movie'=> $movie->id])}}">Edite Movie</a></button>

@endsection