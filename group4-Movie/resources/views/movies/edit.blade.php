@extends('layouts/app')

@section('content')

<h1> Edit Movie {{$movie->title}} Here</h1>

<form method="post"action="{{route('movies.update', ['movie' => $movie->id])}}">

  @csrf

  <input type="hidden" name="_method" value="PUT"> 

  <div class="form-group"> 
    Cover Photo link:<br>
    <input type="url" name="coverphoto" class="form-control" value="{{$movie->coverphoto}}" placeholder="add coverphoto link here">
  </div>
  
    Movie name:<br>
<input type="text" name="title" class="form-control" value="{{$movie->title}}" placeholder="Add movie's name" >
    <br>
    Description:<br> 
    <textarea rows="10" cols="50" class="form-control" name="desc"  placeholder="Add description here">{{$movie->desc}}</textarea>
    <br>
    Run Times:<br>
    <input type="number" name="runtimes" class="form-control" value="{{$movie->runtimes}}" placeholder="Add run times">
    <br>
    Release Year:<br>
    <input type="text" name="releaseyear" class="form-control" value="{{$movie->releaseyear}}">
    <br>
    <br>
    <input type="submit" class="btn btn-primary" value="Update Movie">
  </form>

@endsection