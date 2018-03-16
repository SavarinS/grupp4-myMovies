<!-- HTML connect to layouts/app.blade.php -->
@extends('layouts/app') 

@section('content')
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-4 font-italic"> Welcome to Group4 myMovies</h1>
    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting
      in this post's contents.</p>

  </div>
</div>

<div class="row mb-3">

  <!-- box1 -->
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">Title: Movie1</h3>
        <div class="text-center">
          <img src="..." class="rounded" alt="...">
        </div>

        <div class="content">
          @yield('content1')
        </div>

        <a href="#">Continue reading</a>
      </div>

    </div>
  </div>

  <!-- box2 -->
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">Title: Movie2</h3>

        <div class="text-center">
          <img src="..." class="rounded" alt="...">
        </div>

        <div class="content">
          @yield('content2')
        </div>
        <a href="#">Continue reading</a>
      </div>

    </div>
  </div>

  <!-- box3 -->
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <h3 class="mb-0">
          Title: Movie3
        </h3>
        <div class="text-center">
          <img src="..." class="rounded" alt="...">
        </div>

        <div class="content">
          @yield('content3')
        </div>
        <a href="#">Continue reading</a>
      </div>

    </div>
  </div>

  <!-- box4 -->
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">

        <h3 class="mb-0">
          Title: Movie4
        </h3>

        <div class="text-center">
          <img src="..." class="rounded" alt="...">
        </div>

        <div class="content">
          @yield('content4')
        </div>

        <a href="#">Continue reading</a>
      </div>

    </div>
  </div>
@endsection
