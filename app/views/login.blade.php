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
      <h3 class="text-muted">Quizzr</h3>
    </div>

    <div class="main">

      <div class="row">

        <div class="col-md-6">
          <form role="form" action="/login" method="post">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Keep me logged in
              </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>

        <div class="col-md-6">
          <p>If you don't have an account you can register <a href="/register">here</a></p>
        </div>
      </div>



    </div>

    <div class="footer">
      <p>&copy; Niklas Andréasson 2013</p>
    </div>

  </div>
  {{ HTML::script('/js/jquery-2.0.3.js') }}
  {{ HTML::script('/js/bootstrap.js') }}
</body>
</html>