
@extends('layouts/app')

@section('content')

{{--  get movie  --}}

<?php
// $movie = $_GET['movie'];
// $rating = $_GET['rating'];
// echo $movie."=".$rating;
?>

{{--  {{$movie = $_GET['movie']}}
{{$rating = $_GET['rating']}}
 {{$movie."=".$rating}}  --}}

<div class="container">
    <div class="card">
        <div class="card-header">
          <h2>My favourite movies</h2>
        </div>
  <div class="card-body">
      

  @if($movies->count())

  @foreach($movies as $movie)

  

    <img src="{{$movie->coverphoto}}" alt=""> <br>
    <h4>Movie Title : <a href="{{route('movies.show', ['movie'=>$movie->id])}}"> {{$movie->title}}</a></h4>
    <p>Description : {{$movie->desc}}</p>
    <p>Run Times :{{$movie->runtimes}} mins</p>
    <p>Release Year : {{$movie->releaseyear}} </p>

    

  @endforeach
  @endif

</div>
</div>
<br>

  <div>
      <button type="button" class="btn btn-outline-primary"><a href="{{route('movies.create')}} ">Create new movies</button>
      
</div>
</div>


@endsection

