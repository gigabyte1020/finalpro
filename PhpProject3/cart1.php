
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Lively Ride Travel Category Flat Bootstrap responsive Website Template | About :: w3layouts</title>
	<!-- Meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Lively Ride Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	
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

<body><script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>
	<!-- banner -->
	 <?php include ("banner.php");?>
	<!-- //banner -->
 	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="tittle-w3">Checkout</h2>
	<?php
require 'db_connection.php';
error_reporting(0);
$rid=$_SESSION['user_id'];

$result = mysqli_query($db_connection,"SELECT * FROM cart WHERE user_id='$rid'");

while($row1 = mysqli_fetch_array($result))

  {
    $crt1 =mysqli_query($db_connection,"SELECT * FROM rent WHERE rent_id='$row1[rent_id] '");
    $rentid=$row1['rent_id'];
    $userid=$row1['user_id'];
 $fro_dt=$row1['from_date']; 
     $to_dt=$row1['to_date']; 
}
	
	
if(isset($_POST['nw'])){
$check_email = mysqli_query($db_connection, "DELETE FROM `cart` WHERE rent_id = '$rentid' AND user_id='$userid'");
}
	


while($row = mysqli_fetch_array($crt1))

  {
//$images_field= $row['rent_img'];
//$image_show= "/images/$images_field";
  echo "<br>";

  echo "<br><h1>" . $row['rent_name'] . "</h1><br>";
?>
                        <img class="ig1" src="./image/<?php echo $row['rent_img'] ?>"><br><br><br>
    
    <?php
//    echo "<div align=center><img src=". $image_show."></div>";
  echo "<h4 class='sub-head'>Details:</h4>" . $row['rent_detail'] . "<br><br><br>";
  echo "<h4 class='sub-head'>Pricing:</h4>" . $row['rent_price'] . "<br><br><br>";
  echo "<h4 class='sub-head'>Summary:</h4>" . $row['rent_summary'] . "<br><br><br>";
  
  
  ?>
     <h4 class='sub-head'>What this place offers:</h4> 
      <script type="application/x-javascript">
		
$(document).ready(function() {

//$("#demo").html($("#demo").text().replace(/wifi,/g, "<i class='fa fa-check'>Wifi </i> <br>"));
const container = document.getElementById('demo');

// 👇️ "One, Two, Three"
const result = container.textContent.trim();
let wifi = result.includes("wifi");
if(wifi){
$("#demo2").append("<i class='fa fa-wifi' style='font-size:26px'>Free WiFi</i>");
}
});
	</script>
      <?php
  
  
  echo "<div id='demo' style='display: none;'>" . $row['rent_rules'] . "</div><br><br><br>";
  ?><div id='demo2' ></div> <br><h4 class='sub-head'>Location:</h4><td><div id="myspecialdiv" style="  min-width: 500px;
  min-height: 475px;
  width: fit-content;
  height: fit-content;">
             <iframe id="iframeid" style="  min-width: 500px;
  min-height: 475px;
  width: fit-content;
  height: fit-content;" frameborder="0" src="defaul1.php?lid=<?php echo $row['rent_latln'] ?>"></iframe>
</div>

  <?php
  $hid=$row['rent_hostid']; 
?>
      <form method="post" action="">    
          <label>From:</label>
          <input type="date" id="from" value="<?= $fro_dt;?>" disabled name="dte1">
     <label>To:</label>
     <input type="date" id="tod"  value="<?= $to_dt;?>" disabled="" name="dte2"> 
     <input type="hidden" name="hidd" value="<?php echo $hid; ?>"> 
     <br> 
     <br> <br> <br> <input type="submit" class="btn btn-info btn-lg" name="nw" value="Clear Cart"><?php } ?></form><br>
    
            
            
            
            
            
            
<!-- footer -->
<?php 

include ("footer.php")?>
<!-- //banner -->
