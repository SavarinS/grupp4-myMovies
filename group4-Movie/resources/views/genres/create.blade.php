@extends('layouts/app')

@section('content')
<form method="post"action="{{route('genres.store')}}">
        @csrf
    
        <div class="form-group">
          Movie's genre:<br>
          <input type="text" name="name" class="form-control" value="" placeholder="add movie's genre here">
        </div>

        <input type="submit" class="btn btn-primary" value="Create Movie Genre">
    </form>

@endsection