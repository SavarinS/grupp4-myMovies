<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Grupp 4</title>

  <!-- Bootstrap core CSS -->
  <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="blog.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <ul class="nav justify-content-end">

        <li class="nav-item">
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </li>

      </ul>

    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <h4>
          <a class="p-2 text-muted" href="{{route('movies.index')}}">Movies</a>
        </h4>
        <h4>
          <a class="p-2 text-muted" href="#">Actors</a>
        </h4>
        <h4>
          <a class="p-2 text-muted" href="{{ route ('directors.index') }}">Directors</a>
        </h4>
        <h4>
          <a class="p-2 text-muted" href="#">Genre</a>
        </h4>

      </nav>
    </div>

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

    </div>
    
    
  </div>


  </div>
  <!-- /.row -->





  </main>
  <!-- /.container -->



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>
  <script src="../../../../assets/js/vendor/holder.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
</body>

</html>