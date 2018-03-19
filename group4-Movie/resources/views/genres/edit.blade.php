@extends('layouts/app')

@section('content')

<form method="post"action="{{route('genres.update', ['genre' => $genre->id])}}">

        @csrf
      
        <input type="hidden" name="_method" value="PUT"> 

            <div class="form-group">
                Movie's genre:<br>
                <input type="text" name="name" class="form-control" value="{{$genre->name}}" placeholder="add movie's genre here">
            </div>

        <input type="submit" class="btn btn-primary" value="Update Genre">
  </form>
@endsection