@extends('layouts/movie')

<?php

 ?>

@section('movie-index')
<h2>Movies Lists </h2>
@foreach($movies as $movie)

<button><img src="{{$movie->coverphoto}}"></button><br>  
<h4>Movie Title : {{$movie->title}}</h4> 
<p>Description : {{$movie->desc}}</p>  
<p>Run Times :{{$movie->runtimes}}</p>  
<p>Release Year : {{$movie->releaseyear}} </p>


@endforeach

<div>
  
  <button> <a href="{{route('movies.create')}} "> Click for create Movies</a></button>
</div>

@endsection