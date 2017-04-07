<?php
	session_start();
	require_once("configuration.inc.php");
	$mysqli=new mysqli($host,$user,$password,$dbname);
	if($mysqli->connect_error){
		echo "connect went wrong";
	}else{
		if(isset($_POST['add'])){
			$recipeName = htmlentities($_POST['nameofrecipe']);
			$content = htmlentities($_POST['content']);
			$procedure = htmlentities($_POST['procedure']);
			$tagged = htmlentities($_POST['tag']);
			$category = htmlentities($_POST['category']);
			$username=$_SESSION['username'];

			$result1 = $mysqli->query("select C_ID from tbl_category");
			while($row=$result1->fetch_assoc()){
				$categoryID=$row['C_ID'];
			}
			$sql = "INSERT INTO tbl_recipe(R_recipename, R_content, R_procedure, R_tagged, R_categoryID,R_username, R_isactive,
				R_createdDate, R_modifiedDate, R_deletedDate) VALUES ('$recipeName','$content','$procedure','$tagged','$categoryID','$username',1,
				now(),now(),null)";
				$result2 = $mysqli->query($sql);
				if($result2){
					echo 'successfully add recipe<br><a href="editpageforstudent.php"">click here</a> to go back to edit page';
				}else{
					echo "failed to add recipe";
				}
		}else{
			header("Location:editpageforstudent.php");
		}
	}
?> 
