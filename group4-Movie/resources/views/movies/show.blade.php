@extends('layouts/app')

@section('content')

<div class="card">
 <div class="card-header">
     <h2>
         Movie's Title : {{$movie->title}}
    </h2>
</div>
<div class="card-body">
<img src="{{$movie->coverphoto}}" class="img-thumbnail"><br>

<table class="table"> 
    <thead>
        <tr>
         
        <th>Description</th>
        <th>Run times</th> 
        <th>Release Year</th> 
        
    </tr>      
    </thead>
    <tbody>
        <tr>
            <td>{{$movie->desc}}</td>
            <td>{{$movie->runtimes}}</td>
            <td>{{$movie->releaseyear}}</td>
        </tr>
        <tr>
            <th>Director:</th>            
        </tr>
        <tr>
            <td>{{$movie->director->name}} </td>
        </tr>

        <tr>
                <th>Genres:</th>            
            </tr>
            <tr>
                <td>
                    <ul>
                        @foreach($movie->genres as $genre)
                        <li> {{$genre->name}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        <tr>
                <th>Genres:</th>            
            </tr>
            <tr>
                <td>
                    <ul>
                        @foreach($movie->genres as $genre)
                        <li> {{$genre->name}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <tr>
                    <th>Actors:</th>            
                </tr>
                <tr>
                    <td>
                        <ul>
                            {{--  @foreach($movie->actors as $actor)
                            <li> {{$actor->namn}}</li>
                            @endforeach  --}}
                        </ul>
                    </td>
                </tr>
    
    </tbody>

</table>


{{--  if I want to link director name to his/her info I got undefined director  --}}

{{--  Director : <a href="{{route('directors.show', ['director' => $director->id])}}">{{$movie->director->name}}</a><br>  --}}

{{--  Actors info will be here Waiting from Rattanasak!!!!  --}}
{{--  Actors : 
<ul>
    @foreach($movie->actors as $actor)
        <li> {{$actor->namn}}</li>
    @endforeach
</ul>  --}}

</div>
{{--  end card-body   --}}

</div> 
<br>
<div>
<button class="btn btn-outline-primary">
    <a href="{{route('movies.edit', ['movie'=> $movie->id])}}">Edite Movie</a>
</button>

<button class="btn btn-outline-success">
        <a href="{{route('movies.index')}} ">Back to Movies</a>
</button>
<br>
</div>
@endsection