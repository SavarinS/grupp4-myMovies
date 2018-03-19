@extends('layouts/app')

@section('content')
<h2><strong>{{ $director->name }}'s biography (id: {{ $director->id }})</strong></h2><br>
<p>{{ $director->info }}</p>


<a href="{{route('directors.index')}} ">Back to director list</button><br>
<a href="{{ route ('home') }}"> Back to Home</a>
@endsection
