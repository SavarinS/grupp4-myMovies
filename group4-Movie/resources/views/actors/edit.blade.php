@extends('layouts/app')
@section('content')


<h3>Edit Actor: {{$actor->namn}}</h3>
<form method="POST" action="{{ route('actors.update', ['actor' => $actor->id]) }}">

    <input type="hidden" name="_method" value="PUT" />

    {{ csrf_field() }}

    <div class="form-group">

        <input type="text" class="form-control" name="namn" value="{{$actor->namn}}" required><br>
        

        <textarea class="form-control" name="info"  value="{{ $actor->info }}" required></textarea><br>


        <button type="submit" class="btn btn-primary">Submit to update</button>
    </div>
</form>

<!-- show alert messages when users don't fill in the form -->
<!--@if(count($errors))
    <div class="alert alert-primary" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach       
        </ul>
    </div>
    @endif-->
@endsection