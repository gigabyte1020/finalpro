<?php
session_start();
require 'db_connection.php';

$uid = $_SESSION['user_id'];


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lively Ride Travel Category Flat Bootstrap responsive Website Template | Gallery :: w3layouts</title>
	<!-- Meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Lively Ride Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
	</script>
	<!-- //Meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
    <style>
    .ig1 {
 
  
  width: 100%;
  height: auto;
  
  object-fit: cover;
  object-position: center;
}
.fauxInput{
	margin: 0;
        width:50%;
        padding: 12px 20px;
	line-height: 1em;
}

.social{
  width: 150px;
  height: 150px;
   text-align:center;
 display:block;  margin: auto;
  border-radius: 50%;
  position: relative;
  overflow: hidden;
}
input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #084cdf;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}
    </style>
 <?php 
 
 include ("banner.php");
 try{
	$query=mysqli_query($db_connection,"select * from `user_prof` where user_id='$uid'");
	$row=mysqli_fetch_array($query);
        if(isset($_POST['propic']))
        {
        $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
        move_uploaded_file($tempname, $folder);
        $quer1=mysqli_query($db_connection,"UPDATE `user_prof` SET `user_img`='$filename' where user_id='$uid'");
	if($quer1)
        {echo '<script>alert("Successfully Edited!!")</script>';}
        else{
            echo '<script>alert("Failed to make edit")</script>';
        }
        }
        if(isset($_POST['submit']))
        {
 	$uname=$_POST['uname'];
	$email=$_POST['email'];
 	$pno=$_POST['pno'];

	$quer=mysqli_query($db_connection,"UPDATE `user_prof` SET `user_name`='$uname',`user_email`='$email',`user_pno`='$pno' where user_id='$uid'");
	if($quer)
        {echo '<script>alert("Successfully Edited!!")</script>';}
        else{
            echo '<script>alert("Failed to make edit")</script>';
        }
        }
       
 }catch ( \Exception $e ) {
  echo "error";
}
 ?>
	<!-- gallery -->
        <div class="typo inner-padding">
                    <div class="container">

			<h2 class="tittle-w3">Profile</h2>
	

            <div class="social" id="social1">
                <img class="social" src="./image/<?php echo $row['user_img']; ?>">
              
        
</div><br>

  	<form method="POST" action="" enctype="multipart/form-data">
<label class="label1">
    Change Profile Picture<input class="inp" type="file" name="uploadfile" value="" /></label>       <input type="submit" value="Change profile pic" class="btn btn-info" name="propic">
    </form>
  	<form method="POST" action="" enctype="multipart/form-data">
            <label>Name:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['user_name']; ?>" name="uname"> <br>
		<label>Email:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['user_email']; ?>" name="email"><br>
                <label>Phone Number:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['user_pno']; ?>" name="pno"><br>
<br><br>
		<input type="submit" value="EDIT" class="btn btn-info btn-lg" name="submit">
		<br><br>
                <a href="index.php">Back</a>
	</form>
        </div>  </div>
         <?php include ("footer.php")?> 
</body>
</html>