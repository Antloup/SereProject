<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=mydb', "root", "");
} catch (PDOException $e) {
    print "Error : " . $e->getMessage() . "<br/>";
    die();
}
// Connected successfully

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$username = $_POST['username'];
$password = md5($_POST['password']);


if (empty($first_name) || empty($last_name) || empty($username) || empty($password)) {
    $error = "Mhh, it looks like some fields were empty...";
    header("Location:register.php?msg=$error");
    exit;
}

$query = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($query);
if(!empty($result->fetchAll())){
    //Username already taken
    $error = "Sorry, the username is already taken :(";
    header("Location:register.php?msg=$error");
    exit;
}


$query = "INSERT INTO mydb.user(first_name, last_name,email, number,username,password) VALUES ('$first_name', '$last_name','$email','$number','$username','$password')";
$result = $conn->query($query);


if (!$result) {
    //Request failed
    $error = "Ooops, it failed somewhere...";
    header("Location:register.php?msg=$error");
    exit;
} else {
    //Request ok
    $msg = "You're now register !";
    header("Location:index.php?msg=$msg");
    exit;
}

?>