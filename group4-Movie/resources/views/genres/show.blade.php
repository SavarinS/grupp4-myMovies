@extends('layouts/app') @section('content')

<div class="card-header">

    <div class="row">
        <div class="col-8">
            <h5>
                <strong>Genre: {{$genre->name}} </strong>
            </h5>
        </div>
        <div class="col-4">
        @if(!Auth::guest())
            <button class="btn btn-outline-primary">
                <a href="{{route('genres.edit', ['genre'=> $genre->id])}}">Edite genre</a>
            </button>
        @endif
            <button class="btn btn-outline-primary">
                <a href="{{route('genres.index')}} ">To genre list</a>
            </button>
        </div>
    </div>
</div>
<div class="card">

    <div class="card-body">

        <ul class="list-group list-group-flush">
            @foreach($genre->movies as $movie)

            <li class="list-group-item">
                {{$movie->title}}
                <br>


            </li>

            @endforeach
        </ul>

    </div>

</div>









@endsection