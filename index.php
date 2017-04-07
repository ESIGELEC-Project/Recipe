<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recipe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
video#bgvid {
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  background: url(video.jpg) no-repeat;
  background-size: cover;
}

</style>

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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="http://pingrunhuang.github.io/personal_website/">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="managerLogin.php"><span class="glyphicon glyphicon-log-in"></span> Manager</a></li>
      </ul>
    </div>
  </div>
</nav>

	<!-- login part -->
	<div class="container jumbotron" style="background:transparent;">
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <div class="account-box">
                <form class="form-signin" method="post" action="login.php">
                  <h4>Sign In</h4>
                  <div class="form-group">
	                    <input type="text" class="form-control" placeholder="Username/Email" name="username" required autofocus />
	                </div>
	                <div class="form-group">
	                    <input type="password" class="form-control" placeholder="Password" name="password" required />
	                </div>
	                <label class="checkbox">
	                    <input type="checkbox" value="remember-me" />
	                    Remember me
	                </label>
	                <button class="btn btn-block purple-bg" type="submit" name="s_signIn">
	                    Sign in</button>
                </form>

                <!-- you can control the video by adding controls -->
                <video width="100%" height="100%"  autoplay loop muted poster="video.jpg" id="bgvid">
                  <source src="video.mp4" type="video/mp4" />
                  <source src="video.ogg" type="video/ogg" />
                  Your browser does not support the video tag.
                </video>

                <a class="forgotLink" href="#">I can't access my account</a>
                <div class="or-box">
                    <span class="or pull-center">OR</span>
                    <div class="row">
                        <div class="col-md-12 row-block">
                             <a href="#" class="btn btn-facebook btn-block">Facebook</a>
                        </div>
                    </div>
                  </br>
                    <div class="row">
                        <div class="col-md-12 row-block">
                            <a href="#" class="btn btn-google btn-block">Google</a>
                        </div>
                    </div>
                </div>
                <div class="or-box row-block">
                    <div class="row">
                        <div class="col-md-12 row-block">
                            <a href="registerPage.php" class="btn btn-primary btn-block">Create New Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
	<!-- end -->

  <!-- picture display -->
	<div class="container bg-3 text-center">
		<div class="nbs-flexisel-container">
			<div class="nbs-flexisel-inner">
				<ul id="flexiselDemo3" class="nbs-flexisel-ul">
<!-- 				this part should be later change to read from database -->
					<li class="nbs-flexisel-item"><img src="image/Chinese1.jpg" class="img-responsive" alt="Image"></li>
					<li class="nbs-flexisel-item"><img src="image/Chinese2.jpg" class="img-responsive" alt="Image"></li>
					<li class="nbs-flexisel-item"><img src="image/IMG_2297.jpg" class="img-responsive" alt="Image"></li>
					<li class="nbs-flexisel-item"><img src="image/IMG_2373.jpg" class="img-responsive" alt="Image"></li>
					<li class="nbs-flexisel-item"><img src="image/IMG_2393.jpg" class="img-responsive" alt="Image"></li>
					<li class="nbs-flexisel-item"><img src="image/IMG_2516.jpg" class="img-responsive" alt="Image"></li>
					<li class="nbs-flexisel-item"><img src="image/IMG_2537.jpg" class="img-responsive" alt="Image"></li>
				</ul>
			</div>
		</div>
	</div>

  <footer style="position:absolute; bottom:0px; right:0;">
    <p>© 2016. Created by Frank</p>
  </footer>

<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/myScript.js"></script>
</body>
</html>
