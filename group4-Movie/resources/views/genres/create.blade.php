@extends('layouts/app')

@section('content')
<form method="post"action="{{route('genres.store')}}">
        @csrf
    
        <div class="form-group">
          Movie's genre:<br>
          <input type="text" name="name" class="form-control" value="" placeholder="add movie's genre here">
        </div>

        <div>
          Select Movies:<br>
          <select name="movies[]" multiple="multiple">
            @foreach($movies as $movie)
            <option value="{{ $movie->id }}">{{ $movie->title }}
            </option>
            @endforeach
          </select>
        </div>

        <br>

        <div>
          <input type="submit" class="btn btn-primary" value="Update">
        </div>
</form>

@endsection