@extends('layouts/app')

@section('content')

<h1> Edit Genre {{$genre->name}} Here</h1> <br>

<form method="post"action="{{route('genres.update', ['genre' => $genre->id])}}">

    @csrf
      
        <input type="hidden" name="_method" value="PUT"> 

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

            <div class="form-group">
                Movie's genre:<br>
                <input type="text" name="name" class="form-control" value="{{$genre->name}}" placeholder="add movie's genre here">
            </div>
                
              <br>
            
            <div>
                <input type="submit" class="btn btn-primary" value="Update Genre">
            </div>

  </form>
@endsection