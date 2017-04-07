<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manager Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="height:100%">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Recipe</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- login part -->
<!-- center a div using bootstrap: set the offset to the half width of the rest -->
<div class="container col-md-4 col-md-offset-4">
  <form class="form-signin" action="logout.php" method="post">
    <h2 class="form-signin-heading">Manager Sign In</h2>
    <label for="username" class="sr-only">Email address</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus="">

    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <div class=checkbox>
      <label>
        <input type="checkbox" value="remember-me">
        Remember me
      </label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="m_signIn">Sign in</button>
  </form>
</div>

<!-- end -->

<footer style="position:absolute; bottom:0px; right:0;">
  <p>© 2016. Created by Frank</p>
</footer>
</body>
</html>
