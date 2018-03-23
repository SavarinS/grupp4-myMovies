@extends('layouts/app') @section('content')

<div class="card-header">
  
  <div class="row">
    <div class="col-8">
    <h5>
    <strong>{{ $director->name }}'s biography (id: {{ $director->id }})</strong>
  </h5>
    </div>
    <div class="col-4">
    
    @if(!Auth::guest())
      <button class="btn btn-outline-primary">
        <a href="{{route('directors.edit', ['director' => $director->id])}}">Edite Movie</a>
      </button>
      @endif 
      <button class="btn btn-outline-primary">
        <a href="{{route('directors.index')}} ">To director list</a>
      </button>
    </div>
  </div>
</div>

<div class="card">
  
  <div class="card-body">

    <p>{{ $director->info }}</p>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <h5>Filmography</h5>
    @foreach($director->movies as $movie)
    {{$movie->title}}
    </li>
    @endforeach
    <ul>

  </div>
  
</div>


@endsection