@extends('layouts/app') @section('content')


<div class="card-header">
  <h3>My favourite directors</h3>
  @if(!Auth::guest())
  <button type="button" class="btn btn-outline-primary">
    <a href="{{route('directors.create')}}">Create new director</button>
    @endif
</div><br>

<div class="card">
    
    <ul class="list-group list-group-flush">
        @foreach ($directors as $director)
        <!-- <li>{{ $director->name }} -->
        <li class="list-group-item">
            {{ $director->name}} <br>
        
        <a href="{{ route('directors.show', ['director' => $director]) }}" class="btn btn-warning">Read more</a><br>
        </li>
        
        @endforeach
    </ul>

</div>
<br>
<br>



</div>

@endsection