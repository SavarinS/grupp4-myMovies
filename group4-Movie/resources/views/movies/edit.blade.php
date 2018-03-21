@extends('layouts/app')

@section('content')

<h1> Edit Movie {{$movie->title}} Here</h1> <br>

<form method="post"action="{{route('movies.update', ['movie' => $movie->id])}}">

  @csrf

  <input type="hidden" name="_method" value="PUT"> 

  <div class="form-group"> 
    Cover Photo link:<br>
    <input type="url" name="coverphoto" class="form-control" value="{{$movie->coverphoto}}" placeholder="add coverphoto link here">
  </div>

  <div>
    Movie name:<br>
    <input type="text" name="title" class="form-control" value="{{$movie->title}}" placeholder="Add movie's name" >
  </div>
  
  <div>
    Description:<br> 
    <textarea rows="10" cols="50" class="form-control" name="desc"  placeholder="Add description here">{{$movie->desc}}</textarea>
  </div>

  <div>
    Run Times:<br>
    <input type="number" name="runtimes" class="form-control" value="{{$movie->runtimes}}" placeholder="Add run times">
  </div>

  <div>  
    Release Year:<br>
    <input type="text" name="releaseyear" class="form-control" value="{{$movie->releaseyear}}">
  </div>
  
  {{--  Select Director  --}}
  <div>
    Director:<br>
    <select name="director">
      @foreach($directors as $director)
        <option value="{{ $director->id }}">{{ $director->name }}</option>
      @endforeach
    </select>
  </div>

  {{--  Select multiple genres  --}}
  <div> 
      Select Movie Genres:<br>
      <select  name="genres[]" multiple="multiple">
        @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}
        </option>
        @endforeach
      </select>
    </div>

  <br>

  <div>
    <input type="submit" class="btn btn-primary" value="Update Movie">
  </div>

  </form>

@endsection