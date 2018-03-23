<!-- HTML connect to layouts/app.blade.php -->
@extends('layouts/app') @section('content')

<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <!-- <div class="container"> -->
      <h1 class="display-4">Welcome to Group4 myMovies</h1>
      <p class="lead">The place where you can keep your favorit movies online!</p>
    <!-- </div> -->
  </div>

<!-- start show movies in front page -->


  <div class="container">
    <div class="row">
      <!-- box1 -->
      @foreach($movies as $movie)
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-header">
          
          {{$movie->title}} ({{$movie->releaseyear}})
          </div>
          <div class="card-body">
            <h5 class="card-title">About the film:</h5>
            <img src="{{$movie->coverphoto}}" alt="image">
            <p>{{$movie->desc}}</p>
            
          <a href="{{route('movies.show', ['movie'=>$movie->id])}}" class="btn btn-primary">Read more</a> 
          </div>
        </div>

      </div>
    </div>
      @endforeach

  </div>
</div>

    


@endsection