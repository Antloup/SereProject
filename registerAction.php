<?php
	//$conn = new mysqli("localhost", "root", "mypsswd");
	$conn = new mysqli("localhost", "root", "");
	if ($conn->connect_error) {
    		die("Connection to database failed: ");

	}
	echo "Connected successfully";
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	if(empty($first_name) || empty($last_name) || empty(username) || empty(password)){
		$error = "Mhh, it looks like some fields were empty...";
		header("Location:register.php?error=$error");
		exit;
	}
	$query = "INSERT INTO mydb.user(first_name, last_name,email, number,username,password) VALUES ('$first_name', '$last_name','$email','$number','$username','$password')";
	$result = $conn->query($query);

	
	if (!$result) {
		//Request failed
		$error = "Ooops, it failed somewhere...";
		header("Location:register.php?error=$error");
		exit;
	}
	else {
		//Request ok
		header("Location:index.php");
		exit;
	}
	
?>