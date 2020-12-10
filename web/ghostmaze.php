<?php
    session_start();
    if($_SESSION['logged_in']==true){
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     
    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ghost Maze</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--custom CSS-->

    
</head>
<body id="ghostback">
    <!--Navbav-->
    <div class="mynav">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
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

    <!--Tilegame-->
    <div class="container text-align-center">
        <div class="row">
            <div class="col-7">
            <canvas width="600" height="600" id="canvas"></canvas>
            </div>
            <div class="col-3 text-center" id="scorecol">
            <h4>Out of moves?</h4>
                  <a class="btn btn-dark" href="ghostmaze.php" role="button">Restart</a>
                  <br> <br>
                <h3>Score</h3>
                <p id="scorebox"></p>
                <p id="winbox"></p>
                <p id="lostbox"></p>
                <br><br>
                <div></div>
                  <!--logout -->
            </div>
            <div class="col-2 text-center" id="loggedin">
            <?php
                    echo "<h4>Logged in as: ".$_SESSION['username']."</h4>";
            ?>
                  <br> <br>
                  <a class="btn btn-dark" href="logout.php" role="button">Logout</a>

            </div>
            
        </div>  
    </div>  
<!--canvas-->
        <!--score-->
        <!--life-->
        <div id="lifebox"></div>
        <!--win-->
        <div id="winbox"></div>
        <!--lost-->
        <div id="lostbox"></div>
 <!--JS Bootstrap, Jquery & Popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!--custom JS-->
    <script src="main.js"></script>
</body>
</html>

<?php
    }
    else{
        header('Location: login.php');
}?> 