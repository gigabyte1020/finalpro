<?php
require 'db_connection.php';$message= "";
if(isset($_POST['username']) && isset($_POST['user_email']) && isset($_POST['user_password'])){

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['username'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_password'])){

// Escape special characters.
$username = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['username']));
$user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));

$role = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['role']));

//IF EMAIL IS VALID
if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {  

// CHECK IF EMAIL IS ALREADY REGISTERED
$check_email = mysqli_query($db_connection, "SELECT `user_email` FROM `users` WHERE user_email = '$user_email'");

if(mysqli_num_rows($check_email) > 0){    
$error_message = "This Email Address is already registered. Please Try another.";

}
else{
// IF EMAIL IS NOT REGISTERED
$uppercase = preg_match('@[A-Z]@', $_POST['user_password']);
$lowercase = preg_match('@[a-z]@', $_POST['user_password']);
$number    = preg_match('@[0-9]@', $_POST['user_password']);
$specialChars = preg_match('@[^\w]@', $_POST['user_password']);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $pwstat=0;
}else{
    $pwstat=1;
}
$user_hash_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

// INSER USER INTO THE DATABASE
$insert_user = mysqli_query($db_connection, "INSERT INTO `users` (username, user_email, user_password,user_role) VALUES ('$username', '$user_email', '$user_hash_password','$role')");
$query2 = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
 



$row = mysqli_fetch_assoc($query2);
$user_db_id = $row['user_id'];
if($pwstat==1){
$insert_user_prof = mysqli_query($db_connection, "INSERT INTO `user_prof`(`user_id`, `user_name`, `user_email`, `user_img`) VALUES ('$user_db_id','$username', '$user_email', 'blnk.jpg')");

$message = "Thanks! You have successfully signed up.";
}
else
{
    $message= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    
}



if($insert_user === TRUE){
$success_message = "Thanks! You have successfully signed up.";

}
else{
$error_message = "Oops! something wrong.";
}
}    
}
else {
// IF EMAIL IS INVALID
$error_message = "Invalid email address";
}
}
else{
// IF FIELDS ARE EMPTY
$error_message = "Please fill in all the required fields.";
}
}
?>
 
<?php 
//session_start();
//require 'db_connection.php';
//// IF USER LOGGED IN
//if(isset($_SESSION['user_email'])){
//header('Location: index.php');
//exit;
//}
//?>
<!DOCTYPE html>
<html lang="zxx">
    <style>
        select {

  /* styling */
  background-color: #f7fafc;
  border-color: #e7e7e7;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}


/* arrows */


select.minimal {
  background-image:
    linear-gradient(45deg, transparent 50%, gray 50%),
    linear-gradient(135deg, gray 50%, transparent 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
}

select.minimal:focus {
  background-image:
    linear-gradient(45deg, green 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, green 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
  border-color: green;
  outline: 0;
}


select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}


</style>
<head>
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
                        <h2>Register</h2>
                        <p>Your Account</p>
                        
                        
                        
                        
                        <form action="#" method="post">
                            <input type="text" class="text" id="user_email" id="username" name="username" placeholder="Username" required="">
                            
                            <input type="email" class="email" id="email" name="user_email" " placeholder="Email" required="">
                            <input type="password" class="password" id="password" name="user_password" placeholder="Password" required="">
                            <?=$message;?>
<br><br>Employee List :  
<select class="minimal" name="role">  
  <option value="">Select</option>}  
  <option value="guest">Guest</option>  
  <option value="host">Host</option>  
  <!--<option value="hotel">Business Hotel</option>-->  
</select> <br><br><br>
                            <button class="btn" type="submit">Sign Up</button>
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
                                    <a href="login.php" class="pinterest"><span class="fa fa-pinterest"></span> </a>
                                </li>
                            </ul>
                        </div>
                        <p class="account">Already have an account? <a href="login.php">Login</a></p>
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