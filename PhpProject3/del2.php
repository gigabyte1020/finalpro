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
    </style>
 <?php include ("admnbanner.php");
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

	$quer=mysqli_query($db_connection,"delete from `rent` where rent_id='$id'");
	if($quer)
        {echo '<script>alert("Successfully Deleted!!"); window.location.href = "admndisp.php"; </script>';}
        else{
            echo '<script>alert("Failed to delete")</script>';
        }
        }
 ?>
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="tittle-w3">Deletion</h2>
	<h2>Delete</h2><table>
        <form method="POST" action="">
            <tr><td><label>Rent Name:</label></td><td><input  class="fauxInput" disabled="disabled" type="text" value="<?php echo $row['rent_name']; ?>" name="rname"></td></tr>
            <tr><td><label>Rent Details:</label></td><td><input  class="fauxInput" disabled="disabled" type="text" value="<?php echo $row['rent_detail']; ?>" name="rdet"></td></tr>
            <tr><td><label>Rent Price:</label></td><td><input  class="fauxInput" disabled="disabled" type="text" value="<?php echo $row['rent_price']; ?>" name="rprice"></td></tr>
            <tr><td><label>Rent Summary:</label></td><td><input  class="fauxInput" disabled="disabled" type="text" value="<?php echo $row['rent_summary']; ?>" name="rsumm"></td></tr>
            <tr><td><label>Rent Rules:</label></td><td><input class="fauxInput" disabled="disabled" type="text"  value="<?php echo $row['rent_rules']; ?>" name="rrules"></td></tr>

		 <tr><td><input type="submit" value="DELETE" name="submit"></td></tr>
                 <tr><td><a href="admndisp.php">Back</a></td></tr>
        </form></table>
                </div></div>
         <?php include ("footer.php")?>
</body>
</html>