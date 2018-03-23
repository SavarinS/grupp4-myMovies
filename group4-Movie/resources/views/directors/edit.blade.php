@extends('layouts/app')
@section('content')


<h3>Edit director: {{$director->name}}</h3>
<form method="POST" action="{{ route('directors.update', ['director' => $director->id]) }}">

    <input type="hidden" name="_method" value="PUT" />

    {{ csrf_field() }}

    <div class="form-group">

        <input type="text" class="form-control" name="name" value="{{$director->name}}" required><br>
        

        <textarea class="form-control" name="info"  value="" required>{{$director->info}}</textarea><br>

        <button type="submit" class="btn btn-primary">Update</button>
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