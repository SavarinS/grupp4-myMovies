@extends('layouts/app')

@section('content')

{{--  Here wants to show all of genres   --}}
<h1>Movies Gengres</h1>

<ul>
    
    @foreach($genres as $genre)
        <li>
            <a href="{{route('genres.show', ['genre'=>$genre->id])}}">{{$genre->name}}</a>
        </li>
    @endforeach

    <br>

    <div>
        <button type="button" class="btn btn-outline-primary"><a href="{{route('genres.create')}} ">Create new Genre</button>
    </div>
</ul>

@endsection