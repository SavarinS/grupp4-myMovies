@extends('layouts/app') @section('content')

<div class="card-header">
  <h3>My favourite movies</h3>
  @if(!Auth::guest())
  <button type="button" class="btn btn-outline-primary">
    <a href="{{route('movies.create')}} ">Create new movies</a></button>
  @endif
</div><br>

<div class="container">
  <div class="row">
    <!-- box1 -->
    @foreach($movies as $movie)
    <div class="col-md-3">
      <div class="card text-center">
          <div class="card-header">
          
            <h5><strong>{{$movie->title}}</strong></h5>
            <p>({{$movie->releaseyear}})</p>
            <p>{{$movie->runtimes}} minutes</p>
          </div>
          <div class="card-body">
            <img src="{{$movie->coverphoto}}" alt="image"><br>
            <a href="{{route('movies.show', ['movie'=>$movie->id])}}" class="btn btn-warning">Read more</a> 
          </div>
      </div>

    </div>
    @endforeach
  </div>
  
    

</div>



@endsection