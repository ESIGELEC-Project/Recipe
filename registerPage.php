<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

  </style>
</head>
<body>

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
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> To Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="clearfix">
  <div class="container" align="center">
	    <h2>REGISTRATION</h2>
        <form method="post" action="registerUtil.php" role="form" class="form-horizontal">

          <div class="form-group">
              <label for="username" class="col-sm-4 control-label">Username:</label>
              <div class="col-sm-4">
                <input type="text" name="username" id="username" class="form-control" required>
              </div>
          </div>

          <div class="form-group">
              <label for="password" class="col-sm-4 control-label">Password:</label>
              <div class="col-sm-4">
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
          </div>
          
          <div class="form-group">
              <label for="confirm-password" class="col-sm-4 control-label">Password confirm:</label>
              <div class="col-sm-4">
                <input type="password" name="confirm-password" id="confirm-password" class="form-control" required>
              </div>
          </div>

          <div class="form-group">
              <label for="name" class="col-sm-4 control-label">Name:</label>
              <div class="col-sm-4">
                <input type="text" name="name" id="name" class="form-control" required>
              </div>
          </div>
          
          <div class="form-group">
            <label for="e-mail" class="col-sm-4 control-label">Email:</label>
            <div class="col-sm-4">
              <input type="email" name="e-mail" id="e-mail" class="form-control" placeholder="xxxxx@xxx.com" required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="user_type" class="col-sm-4 control-label">Register as:</label>
            <div class="col-sm-4">
              <select name="user_type" id="user_type" class="form-control">
                <option value = "0" selected>student</option>
                <option value = "1" >manager</option>
              </select>
            </div>
          </div>
          <div> <?php if(!$_SESSION['error_msg']) echo $_SESSION['error_msg']; ?> </div>
          <input type="submit" value="confirm" name="confirm" class="btn-primary btn">
          <input type="submit" value="cancel" name="cancel" class="btn-primary btn">

        </form>
      </div>
  </div>

  <footer style="position:absolute; bottom:0px; right:0">
    <p>© 2016. Created by Frank</p>
  </footer>
</body>
</html>
