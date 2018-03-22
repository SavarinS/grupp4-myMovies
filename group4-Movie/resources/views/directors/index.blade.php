@extends('layouts/app') 
@section('content')

<div class="container"> 
    <div class="card">
        <div class="card-header">
            <h3>My favourit directors</h3>
        </div>
        <div class="card-body">
<ul>
    @foreach ($directors as $director)
        <!-- <li>{{ $director->name }}</li> -->
        <li><a href="{{ route('directors.show', ['director' => $director]) }}">{{ $director->name}} </a></li>
    @endforeach
</ul>
</div>
</div>
<br>

<div>

<button type="button" class="btn btn-outline-primary"><a href="{{route('directors.create')}} ">Create new director
</button>


<button type="button" class="btn btn-outline-success">
<a href="{{ route ('home') }}"> Back to Home</a>
</button>
</div>
</div>


@endsection



