<?php
    //login
    if(isset($_POST['submit'])){
        require_once("connect.php");
        $username = $conn->real_escape_string($_POST['username']);
        $password = sha1($_POST['password']);
        $sql = "SELECT * FROM users WHERE username = '$username' AND `password` = '$password' LIMIT 1";
        $result = $conn->query($sql);
        $conn->close();
        //check if query return anything, if not no match in database user has to register
        if(!$result->num_rows == 1){
            echo "<p>Invalid username/password</p>";
        }
        else{
            //PHP session start
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            //redirect and stop present code
            header('Location: index.php');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     
    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css?d=<?php echo time(); ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>LobbyHound</title>

    <style>
    body{
      background-image:url("images/loginback.jpg");
      background-size: cover;
      background-repeat: no-repeat;
    }

  </style>
</head>

<body class="h-100">
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
    <!--Login form-->    
    <div class="container inputcon h-50">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                    <h1>Login</h1>
                    <br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-dark btn-customized" name="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--JS Bootstrap, Jquery & Popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    
</body>
</html>