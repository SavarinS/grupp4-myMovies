@extends('layouts/app')

@section('content')


Genre ID : ({{$genre->id}}) {{$genre->name}}. <br>


<button class="btn btn-outline-primary"><a href="{{route('genres.edit', ['genre'=> $genre->id])}}">Edit Genre</a></button>

@endsection