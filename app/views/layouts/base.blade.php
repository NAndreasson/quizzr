<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizzr</title>

    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/main.css') }}
</head>
<body>
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li>{{ HTML::link('/', 'Home') }}</li>
        <li>{{ HTML::link('/quiz/create', 'New Quiz') }}</li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>{{ HTML::link('/account', 'Profile') }}</li>
            <li role="presentation" class="divider"></li>
            <li><a href="">Log out</a></li>
          </ul>
        </li>
      </ul>
      <h3 class="text-muted">Quizzr</h3>
    </div>

    <div class="main">
    @yield('content')
    </div>

    <div class="footer">
      <p>&copy; Niklas Andréasson 2013</p>
    </div>

  </div>
  {{ HTML::script('/js/jquery-2.0.3.js') }}
  {{ HTML::script('/js/bootstrap.js') }}
</body>
</html>