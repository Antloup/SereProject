<!DOCTYPE html>
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
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="index.php">Home Button</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center blue-text">Registration</h1>
        <?php
        if (isset($_GET['msg'])) {
            ?>
            <div class="row center">
                <h5 class="header col s12 light"><?php echo $_GET['msg'] ?></h5>
            </div>
            <?php
        }
        ?>
        <br><br>
    </div>
</div>


<div class="container">
    <div class="section">


        <div class="row">
            <div class="col offset-s1 s10 center-align">
                <div class="row">
                    <form class="col s12" action="registerAction.php" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="First Name" id="first_name" name="first_name" type="text"
                                       class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Last Name" id="last_name" name="last_name" type="text"
                                       class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Email" id="email" name="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="UrNumberPlz" id="number" name="number" type="text" class="validate">
                                <label for="number">Number</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Username" id="username" name="username" type="text"
                                       class="validate">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Secret" id="password" name="password" type="password"
                                       class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <button class="btn-large waves-effect waves-light" type="submit" name="action">Let's go !
                            </button>
                        </div>

                    </form>

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
