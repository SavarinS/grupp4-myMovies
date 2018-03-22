@extends('layouts/app') @section('content')
<div class="container">
<div class="card">
  <div class="card-header">
    <h2>
      <strong>{{ $director->name }}'s biography (id: {{ $director->id }})</strong>
    </h2>
  </div>
  <div class="card-body">

    <p>{{ $director->info }}</p>
    
  </div>

  <div class="card-body">
    Movies :
    <ul> 
    @foreach($director->movies as $movie)
    <li> {{$movie->title}}</li>
    @endforeach
    </ul>
  </div>

</div>

<br>
<div>
  
    <button class="btn btn-outline-primary">
      <a href="{{route('directors.edit', ['director' => $director->id])}} ">Edit Director
      </button>
    
    <button class="btn btn-outline-success">
  <a href="{{route('directors.index')}} ">Back to director list
  </button>
  <br>
  

  @endsection