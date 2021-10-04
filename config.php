<?php 
	try {
		$dsn = "mysql:host=localhost;dbname=pcp";
		$user = "root";
		$password = "";
		$dbh =new PDO($dsn, $user, $password);
       
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>