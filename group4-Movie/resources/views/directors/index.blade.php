@extends('layouts/app')

@section('content')
<h3>My favourit directors</h3>
<ul>
    @foreach ($directors as $director)
        <!-- <li>{{ $director->name }}</li> -->
        <li><a href="{{ route('directors.show', ['director' => $director]) }}">{{ $director->name}} </a></li>
    @endforeach
</ul>

<button type="button" class="btn btn-outline-primary"><a href="{{route('directors.create')}} ">Create new director</button><br>
<a href="{{ route ('home') }}"> Back to Home</a>
@endsection

