@extends('layouts/app')

@section('content')

{{--  Here wants to show all of genres   --}}
<div class="card-header">
  <h3>Movies genre</h3>
  @if(!Auth::guest())
  <button type="button" class="btn btn-outline-primary"><a href="{{route('genres.create')}} ">Create new Genre</button>
  @endif
</div><br>

<div class="card">
    
    <ul class="list-group list-group-flush">
    @foreach($genres as $genre)
        
        <li class="list-group-item">
            {{ $genre->name}} <br>
        
            <a href="{{route('genres.show', ['genre'=>$genre->id])}}" class="btn btn-warning">Read more</a><br>
        </li>
        
        @endforeach
    </ul>

</div>


@endsection