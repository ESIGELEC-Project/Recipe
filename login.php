<?php
		if (session_status() == PHP_SESSION_NONE) {
		session_start();
		}

		include('DBConnection.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$dbconn = get_dbconnection();

		//query data
		$statement = $dbconn->prepare("select * from tbl_user where username = :username");
		$statement -> bindParam(':username',$username);
		$statement -> execute();
		$result_set = $statement->fetchAll();

		//tells if the result is exist or not
		if($statement->rowCount() === 0){
			//echo "user do not exist";
			header("Location:".$_SERVER["HTTP_REFERER"]);
			exit();
		}else{
			$pwd = password_hash($result_set[0]['password']);
            
			// click from the student login page
			if(isset($_POST['s_signIn'])){
				//check the password is right or wrong (password_verify is not working, check it later)
				if($pwd === $password){
					$_session['username'] = $username;
					$_session['name'] = $result_set[0]['name'];
					$user_type = $result_set[0]['user_type'];

					//check the type of the user. If is student will go to student home page
					if($user_type === "student"){
						header("Location:studentHome.php");
						exit();
					}else{//otherwise, go to manager home page
						//echo "This user is not a student";
						header("Location:logout.php");
						exit();
					}
				}else{
					header("Location:".$_SERVER["HTTP_REFERER"]);
					exit();
				}
			}
			//click from the manager login page
			if(isset($_POST['m_signIn'])){
				//check the password is right or wrong (password_verify)
				if($password === $pwd){
					$_session['username'] = $username;
					$_session['name'] = $result_set[0]['name'];
					$user_type = $result_set[0]['user_type'];

					//check the type of the user. If is student will go to student home page
					if($user_type === "manager"){
						header("Location:managerHome.php");
					}else{//otherwise, go to manager home page
						//echo "This user is not a manager";
						header("Location:logout.php");
					}
				}
			}else{
				header("Location:".$_SERVER["HTTP_REFERER"]);
				exit();
			}
		}
	?>
