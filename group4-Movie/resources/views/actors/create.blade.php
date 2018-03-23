@extends('layouts/app')
@section('content')
<h3>Create new actor</h3>
<form method="POST" action="{{ route('actors.store') }}">

    {{ csrf_field() }}

    <div class="form-group">

        <input type="text" class="form-control" placeholder="Actor's name" name="name" required><br>
        <!-- <textarea class="form-control" name="movie_id" placeholder="Fill in actor's work" required></textarea><br> -->

        <textarea class="form-control" name="info" placeholder="Fill in actor's biography" required></textarea><br>


        <button type="submit" class="btn btn-primary">Submit</button>
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