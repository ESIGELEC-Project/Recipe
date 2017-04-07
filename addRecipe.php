<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
        <li><a href="studentHome.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


	<form method="post" action="addrecipeforstudentdb.php">
		<input type="text" name="nameofrecipe" placeholder="name of recipe">
		<input type="text" name="content" placeholder="content required">
		<lable>Category:</label>
		<select name = "category">
		<!-- <?php
			// $sql="select C_name from tbl_category";
			// $result = $mysqli->query($sql);
			// while($row=$result->fetch_assoc()){
				// <option value="<?php echo $row['C_name']; ?>"><?php echo $row['C_name']; ?></option> -->
		</select>
		<label>procedure:</label>
		<textarea name="procedure"></textarea>
		<label>tag:</label>
		<input type="text" name="tag">
		<input type="submit" name="add" value="add">
		<input type="submit" name="cancel" value="cancel">
	</form>
	<form action="uploadImage.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</form>



	<footer style="position:absolute; bottom:0px; right:0;">
    <p>© 2016. Created by Frank</p>
  </footer>
</body>
</html>
