@extends('layouts/app') @section('content')

<div class="card-header">
        <h3>My favourit actors</h3>
    </div>
<div class="card" style="width: 18rem;">
    
    <ul class="list-group list-group-flush">
        @foreach ($actors as $actor)
        <!-- <li>{{ $actor->namn }}</li> -->
        <li class="list-group-item">
            <a href="{{ route('actors.show', ['actor' => $actor]) }}">{{ $actor->namn}} </a>
        </li>
        @endforeach
    </ul>

</div>
<br>
<br>
<button type="button" class="btn btn-outline-primary">
    <a href="{{route('actors.create')}} ">Create new actor</button>
<br>
<br>
<a href="{{ route ('home') }}"> Back to Home</a>

</div>

@endsection