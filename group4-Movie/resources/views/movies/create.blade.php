@extends('layouts/app') @section('content')
<h3>Create new movies</h3>
<br>

<form method="post" action="{{route('movies.store')}}">
  @csrf

  <div class="form-group">
    Cover Photo link:
    <br>
    <input type="url" name="coverphoto" class="form-control" value="" placeholder="add coverphoto link here">
  </div>

  <div>
    Movie name:
    <br>
    <input type="text" name="title" class="form-control" value="" placeholder="Add movie's name">
  </div>

  <div>
    Description:
    <br>
    <textarea rows="10" cols="50" class="form-control" name="desc" placeholder="Add description here"></textarea>
  </div>

  <div>
    Run Times:
    <br>
    <input type="number" name="runtimes" class="form-control" value="" placeholder="Add run times">
  </div>

  <div>
    Release Year:
    <br>
    <input type="text" name="releaseyear" class="form-control" value="">
  </div>

  {{-- Select Director --}}
  <div>
    Select Directors:
    <br>
    <select name="director">
      @foreach($directors as $director)
      <option value="{{ $director->id }}">{{ $director->name }}</option>
      @endforeach
    </select>
  </div>

  <br> {{-- select multiple Genres --}}

  <div>
    Select Movie Genres:
    <br>
    <select name="genres[]" multiple="multiple">
      @foreach($genres as $genre)
      <option value="{{ $genre->id }}">{{ $genre->name }}
      </option>
      @endforeach
    </select>
  </div>
  <br> {{-- select rate movies --}} Rate the movie as you wish:
  <br> 5 = Excellent, 1 = Terrible
  <br>
  <select name="rate">
    <option value="5">5</option>
    <option value="4">4</option>
    <option value="3">3</option>
    <option value="2">2</option>
    <option value="1">1</option>
  </select>
  <br>
  <br>

  <div>
    <input type="submit" class="btn btn-primary" value="Create Movie">
  </div>
  <br>
  <br>

</form>
@endsection