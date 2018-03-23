@extends('layouts/app') @section('content')

<div class="card-header">
    <div class="row">
        <div class="col-8">
            <h5>
                <strong>{{$movie->title}}</strong>
            </h5>
        </div>

        @if(!Auth::guest())
        <div class="col-4">
            <button class="btn btn-outline-primary">
                <a href="{{route('movies.edit', ['movie'=> $movie->id])}}">Edite Movie</a>
            </button>
            <button class="btn btn-outline-primary">
                <a href="{{route('movies.index')}} ">To movie list</a>
            </button>
        </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-3">
        <img src="{{$movie->coverphoto}}" alt="image">
    </div>
    <div class="col-9">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Description: </strong>{{$movie->desc}}</li>
                <li class="list-group-item">
                    <strong>Run Times: </strong>{{$movie->runtimes}} mins</li>
                <li class="list-group-item">
                    <strong>Director:</strong>{{$movie->director->name}}</li>
                @foreach($movie->genres as $genre)
                <li class="list-group-item">
                    <strong>Genre:</strong>{{$genre->name}}</li>
                @endforeach
                <li class="list-group-item">
                    <strong>Actors: </strong>Names</li>


                {{-- Actors info will be here Waiting from Rattanasak!!!! --}} {{-- Actors :
                <ul>
                    @foreach($movie->actors as $actor)
                    <li> {{$actor->namn}}</li>
                    @endforeach
                </ul> --}}
            </ul>
        </div>
    </div>
</div>








@endsection