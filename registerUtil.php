<?php
		if(isset($_POST['confirm'])){
	        ini_set('display_errors','on');
	        include("DBConnection.php");
		    session_start();
		
		    $username = htmlentities($_POST['username']);//htmlentities is going to Convert all applicable characters to HTML entities
		    $email = htmlentities($_POST['e-mail']);
		    $name = htmlentities($_POST['name']);
	        $pwd = password_hash($_POST['password'], PASSWORD_BCRYPT);//Encrypt the password using BCrypt 
	        $confirm = password_hash($_POST['confirm-password'], PASSWORD_BCRYPT);
	        $user_type = $_POST['user_type'];
		
		    $dbConnection = get_dbconnection();
		        //Search the users table to see if the desired username is already there.
	            $userSelect = $dbConnection->prepare("SELECT username FROM tbl_User WHERE username = :username");
	            $userSelect->bindParam(':username', $username);
	            $userSelect->execute();
	            $userSearchCount = $userSelect->rowCount();
	            
	            $success = false;
                $error_msg = "Error: ";

                // Make sure all the fields are correct, if not assign the correct message.
                if($userSearchCount > 0) {
                    $error_msg = "Username is taken.";
                } else if (strlen($username) <= 0 || strlen($username) > 35 || strlen($_POST['password']) <= 0 || strlen($_POST['password']) > 50) {
                    $error_msg = "All fields are required and must not exceed their designated size limits.";
                } else if ($_POST['password'] != $_POST['confirm-password']) {
                    $error_msg = "Passwords did not match.";
                } else {
                    $success = true;
                };
                
		        if($success){
				    $query="INSERT INTO tbl_User(username,email,password,name,user_type)VALUES(:username,:email,:password,:name,:user_type)";
                    $sql = $dbConnection->prepare($query);
                    $sql->bindParam(':username',$username);
                    $sql->bindParam(':email',$email);
                    $sql->bindParam(':password',$pwd);
                    $sql->bindParam(':name',$name);
                    $sql->bindParam(':user_type',$user_type);
                    $sql->execute();
		        };
		        
		        //Go to the right page depending on the success or failure of the request. 
                if($success) { 
                    header("Location: index.php");
   	            } else {
                    $_SESSION['error_msg'] = $error_msg;
                    header('Location: ' . $_SERVER["HTTP_REFERER"]);//go back to the latest request page
                };
		}elseif(isset($_POST['cancel'])){
				header("Location:index.php");
		}
?>
