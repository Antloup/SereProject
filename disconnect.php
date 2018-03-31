<?php
	session_start();
	session_unset();
	session_destroy();
	
	$message = "Disconnected";
	header("Location:index.php?message=$message");
	exit;

?>