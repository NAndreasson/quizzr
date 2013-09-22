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
      <ul class="nav nav-pills pull-right" ng-controller="NavCtrl">
          <li ng-class="{ active: isActive('/')}"><a href="#/">Home</a></li>
          <li ng-class="{ active: isActive('/newquiz')}"><a href="#/newquiz">New Quiz</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/account">Profile</a></li>
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
</body>
</html>