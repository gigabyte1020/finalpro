<?php
session_start();
require 'db_connection.php';
if(isset($_POST['user_email']) && isset($_POST['user_password'])){
    

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['user_email'])) && !empty(trim($_POST['user_password']))){

// Escape special characters.
$user_email = mysqli_real_escape_string($db_connection, htmlspecialchars(trim($_POST['user_email'])));

//$user_role = mysqli_real_escape_string($db_connection, htmlspecialchars(trim($_POST['user_role'])));
$query = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");

if(mysqli_num_rows($query) > 0){

$row = mysqli_fetch_assoc($query);
$user_db_pass = $row['user_password'];
$user_db_id = $row['user_id'];
$user_db_role = $row['user_role'];
$user_db_email = $row['user_email'];

$_SESSION['user_id'] = $user_db_id;  
$_SESSION['user_role'] = $user_db_role;
$_SESSION['user_email'] = $user_db_email;
// VERIFY PASSWORD
$check_password = password_verify($_POST['user_password'], $user_db_pass);

if($check_password === TRUE){

session_regenerate_id(true);

$_SESSION['user_id'] = $user_db_id;  
$_SESSION['user_role'] = $user_db_role;
header('Location: index.php');
exit;

}
else{
// INCORRECT PASSWORD
$error_message = "Incorrect Email Address or Password.";

}

}
else{
// EMAIL NOT REGISTERED
$error_message = "Incorrect Email Address or Password.";
}

}
else{

// IF FIELDS ARE EMPTY
$error_message = "Please fill in all the required fields.";
}

}
// IF USER LOGGED IN
//if(isset($_SESSION['user_email'])){
//header('Location: succ.php');
//exit;
//}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Hotair Login Form Responsive Widget Template :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Hotair Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="logn/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="logn/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1>Travel & Home Rentals</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                 
                    <div class="content-wthree">
                        <h2>Log In</h2>
                        <p>To Your Account</p>
                        <form action="#" method="post">
                            <input type="text" class="text" id="user_email" name="user_email" placeholder="User Email" required="">
                            <input type="password" class="password" id="user_password" name="user_password" placeholder="User Password" required="">
                            <button class="btn" type="submit">Log In</button>
                        </form>
                        <p>Or Connect With Social Media</p>
                        <div class="social-icons w3layouts">
                            <ul>
                                <li>
                                    <a href="#url" class="facebook"><span class="fa fa-facebook"></span> </a>
                                </li>
                                <li>
                                    <a href="#url" class="twitter"><span class="fa fa-twitter"></span> </a>
                                </li>
                                <li>
                                    <a href="#url" class="pinterest"><span class="fa fa-pinterest"></span> </a>
                                </li>
                            </ul>
                        </div>
                        <p class="account">Don't have an account? <a href="register.php">Register</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2020 Hotair Log In Form. All rights reserved | Design by <a
                        href="https://w3layouts.com">W3layouts</a></p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-hotair').fadeOut('slow', function (c) {
                    $('.main-hotair').remove();
                });
            });
        });
    </script>

</body>

</html>