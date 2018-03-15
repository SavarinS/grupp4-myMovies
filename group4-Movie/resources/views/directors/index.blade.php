@extends('layouts/page')

@section('page')
<h3>My favourit directors</h3>
<ul>
    @foreach ($directors as $director)
        <li>{{ $director->name }}</li>
    @endforeach
</ul>

<a href="{{ route ('home') }}"> Back to Home</a>
@endsection

