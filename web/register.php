<?php 
    //registration form
    if(isset($_POST['submit'])){
        require_once('connect.php');
        //basic security (real_escape_string) avoids SQL injection (' or 0=0 #)
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = sha1($_POST['password']);

        //check if username exist else
        $check = $conn->query("SELECT username from users WHERE username = '$username' LIMIT 1");
        if($check->num_rows == 1) echo "<p>Username already exists!</p>";
        else{
            $insert = "INSERT INTO users (username, email, `password`) VALUE ('$username', '$email', '$password')";
            if($conn->query($insert)){
                echo "New user with name: ".$username." registered!";
            }
            else{
                echo "Something went wrong";
            }
        }
        //close connection
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>LobbyHound</title>
    <!--custom CSS-->
    <link rel="stylesheet" href="style.css">
</head>

<body class="h-100">
  <style>
    body{
      background-image:url("images/forestback.jpg");
      background-color: rgba(155,155,155,0.5);
      background-blend-mode: lighten;
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>

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

<!--Registration form-->
  <div class="container inputcon h-50">
      <div class="row h-100 justify-content-center text-center">
          <div class="col-10 col-md-8 col-lg-6">
              <!-- form -->
                  <h1>Register</h1>
                  <br>
                  <!-- input -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" novalidate>
                                    <div class="form-row mb-3">
                                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                                        <div class="invalid-feedback">
                                            <p class="alert">
                                                Enter a valid username
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                        <div class="invalid-feedback">
                                            <p class="alert">
                                                Enter a valid email
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <input type="text" name="password" placeholder="Password" class="form-control" required>
                                        <div class="invalid-feedback">
                                            <p class="alert">
                                                Enter a valid password
                                            </p>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Register" class="btn btn-dark">
            </form> 

    <!--JS validator-->
    <script>
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {  
                    event.preventDefault(); //main event is cancelled -> stops submit
                    event.stopPropagation(); //prevent bubbling -> takes the inner object
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
        </script>

    <!--JS Bootstrap, Jquery & Popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    
</body>
</html>