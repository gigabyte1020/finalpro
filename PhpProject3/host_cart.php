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
			<h2 class="tittle-w3">Popular Rooms</h2>
			
<?php
require 'db_connection.php';

$hst=$_SESSION['user_id'];
$result = mysqli_query($db_connection,"SELECT * FROM cart WHERE host_id='$hst'");

if(mysqli_num_rows($result) > 0){    
echo 'You have received a booking!';
}
else{

echo 'No current bookings';

  }
	

	
	
	
echo "<table class='table' border='1'>

<tr>

<th>rent_hostid	</th>

<th>rent_name</th>

<th>rent_img</th>

<th>rent_detail</th>

<th>rent_price</th>

<th>rent_summary</th>

<th>rent_rules</th>

</tr>";


while($row = mysqli_fetch_array($result))

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
  ?><?php  $hid=$row['rent_hostid'];
  echo "</tr>";

  }

echo "</table>";

 

?>       
        
     <td><form method="post" action=""> <input type="hidden" name="hidd" value="<?php echo $hid; ?>"> <input type="submit"  name="nw" value="NW"></form></td>   
                </div>    
        
        
        
        
        
        
<!-- footer -->
<?php 

    include ("footer.php");
?>
<!-- //banner -->
