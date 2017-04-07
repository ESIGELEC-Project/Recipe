<?php //usage of this snippet can return a connection to database
	function get_dbconnection(){
	    
		try{
			//configuration parameter

			//$host = "localhost";
			//$user = "mstis06kgV5";
			//$password = "Mg1YB6At";
			//$dbname = "bddmstis06";
			$host = "localhost";
			$user = "root";
			$password = "root";
			$dbname = "recipe";
			$port = 8889;

			//create database connection
			$conn = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$dbname, $user, $password);

		}catch(PDOException $e){
			echo "Database connection failed".$e->getMessage();
		}
		return $conn;

	}
?>
