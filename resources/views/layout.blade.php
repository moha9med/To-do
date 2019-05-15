
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="http://localhost/todo-l/public/todo">ToDo List</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-lg-3 rounded {{Request::is ('todo') ? 'active' : ''}} " href="http://localhost/todo-l/public/todo">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-lg-3 rounded {{Request::is ('todo/create') ? 'active' : ''}} " href="http://localhost/todo-l/public/todo/create">Create Todo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



@yield('content')

</body>
</html>
