@extends('layouts/app') 
@section('content')

  <h3>Create new movies</h3>
  <br>

  <form method="post"action="{{route('movies.store')}}">
    @csrf

    <div class="form-group">
      Cover Photo link:<br>
      <input type="url" name="coverphoto" class="form-control" value="" placeholder="add coverphoto link here">
    </div>

    <div>
      Movie name:<br>
      <input type="text" name="title" class="form-control" value="" placeholder="Add movie's name" >
    </div>
   
    <div>
      Description:<br>
      <textarea rows="10" cols="50" class="form-control" name="desc" placeholder="Add description here"></textarea>
    </div>
   
    <div>
      Run Times:<br>
      <input type="number" name="runtimes" class="form-control" value="" placeholder="Add run times">
    </div>

    <div>
      Release Year:<br>
      <input type="text" name="releaseyear" class="form-control" value="">
    </div>

    {{--  Select Director  --}}
    <div> 
      Select Directors:<br>
      <select name="director">
        @foreach($directors as $director)
        <option value="{{ $director->id }}">{{ $director->name }}</option>
        @endforeach
      </select>
    </div>

    <br>

  {{-- Select actor --}}
  <div>
    Select actors:
    <br>
    <select name="actors[]" multiple="multiple">
      @foreach($actors as $actor)
      <option value="{{ $actor->id }}">{{ $actor->namn }}</option>
      @endforeach
    </select>
  </div>

  <br> {{-- select multiple Genres --}}

    <div> 
        Select Movie Genres:<br>
        <select name="genres[]" multiple="multiple">
          @foreach($genres as $genre)
          <option value="{{ $genre->id }}">{{ $genre->name }}
          </option>
          @endforeach
        </select>
      </div>
    <br>

    <div>
      <input type="submit" class="btn btn-primary" value="Update">
    </div>
  <br>
  <br>

  </form>
@endsection