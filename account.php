<?php

session_start();
if (!isset($_SESSION['username'])) {
    //No active session
    $error = "Ooops, no active session";
    header("Location:index.php?msg=$error");
    exit;
}
$username = $_SESSION['username'];

?>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>LeHeadLibrary.com</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">ThisIsALegitLogo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home Button</a></li>
            <li><a href="disconnect.php">Disconnect</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="index.php">Home Button</a></li>
            <li><a href="disconnect.php">Disconnect</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center blue-text">My account</h1>
        <div class="row center">
            <h5 class="header col s12 light">Welcome <?php echo $username ?> !</h5>
        </div>
        <br><br>
    </div>
</div>


<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s6 center-align">
                <h3>Personnal data</h3>
                <div class="row">

                </div>
            </div>
            <div class="col s6 center-align">
                <h3>You may want to be friend with...</h3>
                <div class="row">

                </div>
            </div>
        </div>


    </div>
    <br><br>
</div>


<footer class="page-footer red">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">H4314 "Tartuflette" Team - Security And Network project.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contacts</h5>
                <ul>
                    <li><a class="white-text" href="#!">About Us</a></li>
                    <li><a class="white-text" href="#!">Legal Terms</a></li>
                    <li><a class="white-text" href="#!">Illegal Terms</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            CSS Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
