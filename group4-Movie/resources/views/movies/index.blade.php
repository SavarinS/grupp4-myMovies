<<<<<<< HEAD
@extends('layouts/page')

<?php

 ?>

@section('movie-index')

<h2>My favourite movies</h2>
@foreach($movies as $movie)

<img src="{{$movie->coverphoto}}"><br>
<h4>Movie Title : {{$movie->title}}</h4> 
<p>Description : {{$movie->desc}}</p>  
<p>Run Times :{{$movie->runtimes}}</p>  
<p>Release Year : {{$movie->releaseyear}} </p>


@endforeach

<div>
<button type="button" class="btn btn-outline-primary"><a href="{{route('movies.create')}} ">Create new movies</button>
  
</div>

@endsection
=======
@extends('layouts/app')

@section('content')
  <h2>My favourite movies</h2>
  @foreach($movies as $movie)

    <img src="{{$movie->coverphoto}}" alt=""> <br>
    <h4>Movie Title : {{$movie->title}}</h4>
    <p>Description : {{$movie->desc}}</p>
    <p>Run Times :{{$movie->runtimes}}</p>
    <p>Release Year : {{$movie->releaseyear}} </p>
  @endforeach

  <div>
      <button type="button" class="btn btn-outline-primary"><a href="{{route('movies.create')}} ">Create new movies</button>
  </div>
@endsection
>>>>>>> master
