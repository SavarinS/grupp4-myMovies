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

        <!-- @guest
        <li class="nav-item">
          <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-sm btn-outline-secondary" href="{{route('register')}}">Sign up</a>
        </li>
        @else
        <a href="{{ route('logout') }}">Welcome, you are logged in!</a>
    
        @endguest -->

       @if(\Auth::check())
        <li class="nav-item">
        <h4>Welcome, you are logged in!</h4>
        <a href="{{route('logout')}}">Log out</a>
        </li>
        @else
        <!-- <h2> Please log in</h2> -->
        <!-- <a href="{{route('login')}}"></a> -->
        <li class="nav-item">
          <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-sm btn-outline-secondary" href="{{route('register')}}">Sign up</a>
        </li>

        @endif

      </ul>

    </header>
    <div class="container">
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="{{route('home')}}">Home</a>
        <a class="navbar-brand" href="{{route('movies.index')}}">Movies</a>
        <a class="navbar-brand" href="{{route('directors.index')}}">Directors</a>
        <a class="navbar-brand" href="#">Actors</a>
        <a class="navbar-brand" href="{{ route ('genres.index') }}">Genres</a>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </nav>
      
    </div>
    <div class="container">
    @yield('content')
    </div>



    

  </div>


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