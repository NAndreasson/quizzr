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
          <form role="form">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
          <p>If you don't have an account you can register here</p>
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