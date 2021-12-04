<?php 
include("../admin/includes/config.php");
if (isset($_POST['login'])) {
    $users_query        = "SELECT * FROM user";
    $users_query_result = mysqli_query($conn,$users_query);
    $check              = false;
    while($row = mysqli_fetch_assoc($users_query_result)){
    if ($_POST['email']==$row['user_email']){
        $check              = true;
        $pass               = $_POST['pass'];
        $email              = $_POST['email'];
        if ($pass==$row['user_password']){
        header('Location: http://localhost/pharmacy/');
        }else{
        $passC = false;     
        $passM="Your Password Incorrect";
        }
        break;
    } }
    if ($check==false) {
        $registerM = "You Dont Have an Account, Pleas Creat an Account";
        $class     = 'false';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .error{
             width: 100%;
             color: red;
             font-weight: bold;
             }
        .true{
             width: 90%;
             color: rgb(0, 212, 0);
             font-weight: bold;}
        .false{
        width: 90%;
        color: red;
        font-weight: bold;}
        .true-login{
            color: rgb(109,171,228);
        }     

    </style>
</head>
<body>
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/login.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signin" class="form-submit" value="Log in"/>
                            </div>
                            <?php
                                  if (@$$check==false) {
                                      echo "<div class='false'>";
                                      echo @$registerM . "<br>";
                                      echo "</div>";
                                  }
                                  if (@$passC==false) {
                                    echo "<div class='false'>";
                                    echo @$passM . "<br>";
                                    echo "</div>";
                                }  
                                  ?>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    i
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>