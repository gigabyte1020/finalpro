<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Lively Ride Travel Category Flat Bootstrap responsive Website Template | About :: w3layouts</title>
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
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
	<!-- banner -->
	 <?php include ("banner.php")?>
	<!-- //banner -->
 	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="tittle-w3">CART</h2>
			
<?php
require 'db_connection.php';

$rid=$_SESSION['user_id'];

$result = mysqli_query($db_connection,"SELECT * FROM cart WHERE user_id='$rid'");

while($row1 = mysqli_fetch_array($result))

  {
    $crt1 =mysqli_query($db_connection,"SELECT * FROM rent WHERE rent_id='$row1[rent_id] '");
}
	
	
if(isset($_POST['nw'])){
// CHECK IF EMAIL IS ALREADY REGISTERED
$check_email = mysqli_query($db_connection, "SELECT `rent_id` FROM `cart` WHERE rent_id = '$uid'");
}
	
echo "<table class='table' border='1'>

<tr>


<th>Name</th>

<th>Image</th>

<th>Details</th>

<th>Price per night</th>

<th>Summary</th>

<th>Availables</th>

</tr>";


while($row = mysqli_fetch_array($crt1))

  {
//$images_field= $row['rent_img'];
//$image_show= "/images/$images_field";
  echo "<tr>";


  echo "<td>" . $row['rent_name'] . "</td>";
?>
                        <td><img class="ig1" src="./image/<?php echo $row['rent_img'] ?>"></td>
    
    <?php
//    echo "<div align=center><img src=". $image_show."></div>";
  echo "<td>" . $row['rent_detail'] . "</td>";
  echo "<td>" . $row['rent_price'] . "</td>";
  echo "<td>" . $row['rent_summary'] . "</td>";
  echo "<td>" . $row['rent_rules'] . "</td>";
 $hid=$row['rent_hostid'];
  echo "</tr>";

  }

echo "</table>";

 

?>       
                        <input type="submit" class="btn btn-info btn-lg" name="nw" value="Checkout"><br>
                        <input type="submit" class="btn btn-info btn-lg" name="del" value="Clear Cart">
                </div>    
        
        
        
        
        
        
<!-- footer -->
<?php 

    include ("footer.php");
?>
<!-- //banner -->
