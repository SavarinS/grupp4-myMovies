@extends('layouts/app') @section('content')

<div class="card">
  <div class="card-header">
    <h2>
      <strong>{{ $actor->namn }}'s biography (id: {{ $actor->id }})</strong>
    </h2>
  </div>
  <div class="card-body">

    <p>{{ $actor->info }}</p>
    
  </div>
  <div class="container">
    <a href="{{route('actors.edit', ['actor' => $actor->id])}} ">Edit</button><br>
    
  </div>
</div>


<a href="{{route('actors.index')}} ">Back to actor list</button>
  <br>
  

  @endsection