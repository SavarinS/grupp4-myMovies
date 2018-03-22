@extends('layouts/app')

@section('content')

<div class="container"> 
        <div class="card">
            <div class="card-header">
        <h1>Genre ID : ({{$genre->id}}) Genre : {{$genre->name}} </h1>
    </div>
        <br>
<div class="card-body">
    
 <h2>Movies :</h2>
<ul> 
@foreach($genre->movies as $movie)
<li> {{$movie->title}}</li>
@endforeach
</ul>
</div> 
</div>

<br>

<button class="btn btn-outline-primary"><a href="{{route('genres.edit', ['genre'=> $genre->id])}}">Edit Genre</a></button>

<button class="btn btn-outline-success">
        <a href="{{route('genres.index')}} ">Back to Genres
</button>
<br>

</div> 


@endsection