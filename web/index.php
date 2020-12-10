<?php
    session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     
    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>LobbyHound</title>
</head>

<body>
    <!--Navbav-->
    <div class="mynav">
    <nav class="navbar navbar-expand-md navbar-light">
                    <a href="index.php" class="navbar-brand">
                        <img src="images/logo.png" height="28">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!--left menu tabs-->
                        <div class="navbar-nav">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="ghostmaze.php" class="nav-item nav-link">Game</a>
                            <!--<a href="#" class="nav-item nav-link disabled" tabindex="-1">Forum</a>-->
                        </div>

                    <!--right menu tabs-->
                    <div class="navbar-nav ml-auto login">
                            <a href="register.php" class="nav-item nav-link">Sign up</a>
                            <a href="login.php" class="nav-item nav-link" id="login_btn">Login</a>  
                    </div>
            </div>
     </nav>
</div>
    <!--Header-->
    <header class="header" id="background" >
            <div class="center">
                <div class="caption">
                    <h2 class="title">Ghost Maze</h2>
                            <!--Welcome login-->
                            <?php
                                echo "<h1>Welcome ".$_SESSION['username']."</h1>";
                            ?>
                </div>
            </div>
    </header>

    <!--Image rows-->
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <img src="images/characterfront.jpg" width="533px;">
                </div>
                <div class="col-sm" id="indexinfo">
                    <h2>Main character</h2>
                    <p>Play as a ghost and get through the haunted forest<p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm" id="indexinfo">
                <h2>Enemy blocking</h2>
                <p>Enemies will track your move and prevent you from going back<p>
                </div>
                <div class="col-sm">
                <img src="images/enemyindex.png" width="533px;">
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <img src="images/collectindex.jpg" width="533px;">
                </div>
                <div class="col-sm" id="indexinfo">
                    <h2>Gather ressources</h2>
                    <p>Gather all of the knives throughout the levels to reach the end of the forest<p>
                </div>
            </div>
        </div>
   
    <!--Footer-->
    <div class="footer w-100">
        <div class="container text-white">
            <div class="col text-center">
                <p>@School project 2020</p>
            </div>       
        </div>
    </div>

    <!--JS Bootstrap, Jquery & Popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>