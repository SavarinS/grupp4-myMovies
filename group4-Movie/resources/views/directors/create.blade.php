@extends('layouts/app')
@section('content')
<h3>Create new director</h3>
<form method="POST" action="{{ route('directors.store') }}">

    {{ csrf_field() }}

    <div class="form-group">

        <input type="text" class="form-control" placeholder="Director's name" name="name" required><br>
        <!-- <textarea class="form-control" name="movie_id" placeholder="Fill in director's work" required></textarea><br> -->

        <textarea class="form-control" name="info" placeholder="Fill in director's biography" required>
        </textarea><br>

          
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