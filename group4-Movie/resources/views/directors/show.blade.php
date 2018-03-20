@extends('layouts/app') @section('content')

<div class="card">
  <div class="card-header">
    <h2>
      <strong>{{ $director->name }}'s biography (id: {{ $director->id }})</strong>
    </h2>
  </div>
  <div class="card-body">

    <p>{{ $director->info }}</p>
    
  </div>
  <div class="container">
    <a href="{{route('directors.edit', ['director' => $director->id])}} ">Edit</button><br>
    
  </div>
</div>


<a href="{{route('directors.index')}} ">Back to director list</button>
  <br>
  

  @endsection