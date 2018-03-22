@extends('layouts/app')

@section('content')

{{--  Here wants to show all of genres   --}}
<div class="container"> 
    <div class="card">
        <div class="card-header">
            <h1>Movies Gengres</h1>
        </div>
        <div class="card-body">
        <ul>    
            @foreach($genres as $genre)
            <li>
                <a href="{{route('genres.show', ['genre'=>$genre->id])}}">{{$genre->name}}</a>
            </li>
            @endforeach
        </ul>
        </div> 
    </div>
            
            <br>
            
            <div>
                <button type="button" class="btn btn-outline-primary"><a href="{{route('genres.create')}} ">Create new Genre</button>
            </div>
            
        
    </div>
        
@endsection