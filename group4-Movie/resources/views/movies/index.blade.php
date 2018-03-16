
@extends('layouts/app')

@section('content')
  <h2>My favourite movies</h2>
  @foreach($movies as $movie)

    <img src="{{$movie->coverphoto}}" alt=""> <br>
    <h4>Movie Title : <a href="{{route('movies.show', ['movie'=>$movie->id])}}"> {{$movie->title}}</a></h4>
    <p>Description : {{$movie->desc}}</p>
    <p>Run Times :{{$movie->runtimes}} mins</p>
    <p>Release Year : {{$movie->releaseyear}} </p>
  @endforeach

  <div>
      <button type="button" class="btn btn-outline-primary"><a href="{{route('movies.create')}} ">Create new movies</button>
  </div>
@endsection

