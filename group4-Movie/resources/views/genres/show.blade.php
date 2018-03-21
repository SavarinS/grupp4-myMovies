@extends('layouts/app')

@section('content')


Genre ID : ({{$genre->id}}) Genre : {{$genre->name}}. <br>

Movies :
<ul> 
@foreach($genre->movies as $movie)
<li> {{$movie->title}}</li>
@endforeach
</ul>



<button class="btn btn-outline-primary"><a href="{{route('genres.edit', ['genre'=> $genre->id])}}">Edit Genre</a></button>

@endsection