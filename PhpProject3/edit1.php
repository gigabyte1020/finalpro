<?php
session_start();
require 'db_connection.php';

$hstid = $_SESSION['user_id'];


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
    </style>
 <?php include ("banner.php");
 	$id=$_GET['id'];
	$query=mysqli_query($db_connection,"select * from `rent` where rent_id='$id'");
	$row=mysqli_fetch_array($query);
        if(isset($_POST['submit']))
        {
 	$rname=$_POST['rname'];
	$rdet=$_POST['rdet'];
 	$rprice=$_POST['rprice'];
	$rsumm=$_POST['rsumm'];
	$rrules=$_POST['rrules'];

	$quer=mysqli_query($db_connection,"update `rent` set rent_name='$rname', rent_detail='$rdet',rent_price='$rprice',rent_summary='$rsumm',rent_rules='$rrules' where rent_id='$id'");
	if($quer)
        {echo '<script>alert("Successfully Edited!!")</script>';}
        else{
            echo '<script>alert("Failed to make edit")</script>';
        }
        }
 ?>
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="tittle-w3">Editing</h2>
	<h2>Edit</h2>
	<form method="POST" action="">
            <label>Rent Name:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['rent_name']; ?>" name="rname"> <br>
		<label>Rent Details:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['rent_detail']; ?>" name="rdet"><br>
                <label>Rent Price:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['rent_price']; ?>" name="rprice"><br>
		<label>Rent Summary:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['rent_summary']; ?>" name="rsumm"><br>
		<label>Rent Rules:</label> <br><input class="fauxInput" type="text" value="<?php echo $row['rent_rules']; ?>" name="rrules"><br>

		<input type="submit" value="EDIT" name="submit">
		<a href="display_mine.php">Back</a>
	</form>
                </div></div>
         <?php include ("footer.php")?>
</body>
</html>