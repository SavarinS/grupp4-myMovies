@extends('layouts/app') @section('content')

<div class="card-header">
        <h3>My favourit directors</h3>
    </div>
<div class="card" style="width: 18rem;">
    
    <ul class="list-group list-group-flush">
        @foreach ($directors as $director)
        <!-- <li>{{ $director->name }}</li> -->
        <li class="list-group-item">
            <a href="{{ route('directors.show', ['director' => $director]) }}">{{ $director->name}} </a>
        </li>
        @endforeach
    </ul>

</div>
<br>
<br>
<button type="button" class="btn btn-outline-primary">
    <a href="{{route('directors.create')}} ">Create new director</button>
<br>
<br>
<a href="{{ route ('home') }}"> Back to Home</a>

</div>

@endsection