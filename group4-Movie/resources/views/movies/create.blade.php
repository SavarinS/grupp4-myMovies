@extends('layouts/app')

@section('content')
  <h3>Create new movies</h3>

  <form method="post"action="{{route('movies.store')}}">
    @csrf

    <div class="form-group">
      Cover Photo link:<br>
      <input type="url" name="coverphoto" class="form-control" value="" placeholder="add coverphoto link here">
    </div>

    Movie name:<br>
    <input type="text" name="title" class="form-control" value="" placeholder="Add movie's name" >
    <br>

    Description:<br>
    <textarea rows="10" cols="50" class="form-control" name="desc" placeholder="Add description here"></textarea>
    <br>

    Run Times:<br>
    <input type="number" name="runtimes" class="form-control" value="" placeholder="Add run times">
    <br>

    Release Year:<br>
    <input type="text" name="releaseyear" class="form-control" value="">
    <br>
    <br>

    <input type="submit" class="btn btn-primary" value="Create Movie">
  </form>
@endsection
