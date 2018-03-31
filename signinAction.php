<?php
	
	try {
    $conn = new PDO('mysql:host=localhost;dbname=mydb', "root", "");
	} catch (PDOException $e) {
		print "Error : " . $e->getMessage() . "<br/>";
		die();
	}
	
	//Connected successfully
	
	$username = $_POST['username'];
	$password = $_POST['password'];	

	if(empty($username) || empty($password)){
		$error = "Mhh, it looks like some fields were empty...";
		header("Location:index.php?error=$error");
		exit;
	}
	$query = "SELECT * FROM mydb.user WHERE username='$username' AND password='$password'";
	$query = " INSERT INTO mydb.user(first_name, last_name,email, number,username,password) VALUES ('test3', 'test3','test3','test3','test3','test3');";
	$query += " INSERT INTO mydb.user(first_name, last_name,email, number,username,password) VALUES ('test3', 'test3','test3','test3','test3','test3');";
	print_r($query);
	
	$result = $conn->exec($query);
	exit();

	if (!$result) {
		//Request failed
		$error = "Ooops, it failed somewhere...";
		header("Location:index.php?error=$error");
		exit;
	}
	else if(mysqli_num_rows($result) > 0){ // Injection example ' OR '1'='1' AND username='azerty
		//Request ok
		session_start();
		$_SESSION['username'] = $username;
		header("Location:account.php");
		exit;
	}
	else{
		//Authentication failed
		$error = "Ooops, wrong password or username";
		header("Location:index.php?error=$error");
		exit;
	}
	
?>