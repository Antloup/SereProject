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

if (empty($username) || empty($password)) {
    $error = "Mhh, it looks like some fields were empty...";
    header("Location:index.php?msg=$error");
    exit;
}
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$result = $conn->query($query);

if (!$result) {
    //Request failed
    $error = "Ooops, it failed somewhere...";
    header("Location:index.php?msg=$error");
    exit;
} else if ($result->rowCount() == 1) {
    //Authentication ok
    session_start();
    $_SESSION['username'] = $username;
    header("Location:account.php");
    exit;
} else {
    //Authentication failed
    $error = "Ooops, wrong password or username";
    header("Location:index.php?msg=$error");
    exit;
}

?>