
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
	 <?php include ("banner.php")?>
	<!-- //banner -->
 	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="tittle-w3">More Details</h2>
			
<?php

require 'db_connection.php';
$unemail=$_SESSION['user_email'];
$unrol=$_SESSION['user_role'];
$rid=$_GET['rid'];

$uid= $_SESSION['user_id'];
$result = mysqli_query($db_connection,"SELECT * FROM rent WHERE rent_id='$rid'");


if(isset($_POST['nw'])){
// CHECK IF EMAIL IS ALREADY REGISTERED
$check_email = mysqli_query($db_connection, "SELECT `rent_id` FROM `cart` WHERE rent_id = '$uid'");

if(mysqli_num_rows($check_email) > 0){    
echo '<script>alert("You already have an item in the cart. Please empty the cart before booking another one")</script>';
}
else{
$uid= $_SESSION['user_id'];
$hid1=$_POST['hidd'];

$fro=$_POST['dte1'];
$tod=$_POST['dte2'];
$sql = "INSERT INTO `cart`( `user_id`, `rent_id`, `host_id`, `from_date`, `to_date`)  VALUES ('$uid','$rid','$hid1','$fro','$tod')";
mysqli_query($db_connection, $sql);
echo '<script>alert("Successfully Booked!!")</script>';
  }
	
}


while($row = mysqli_fetch_array($result))

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
                        <form method="post" action="">    <label>From:</label>
  <input type="date" id="from" name="dte1">
     <label>To:</label>
     <input type="date" id="tod" name="dte2"> <input type="hidden" name="hidd" value="<?php echo $hid; ?>"> <br> 
     <br> <br> <br><?php if ($unrol=="guest"){ ?> <input type="submit" class="btn btn-info btn-lg" name="nw" value="Add to Cart"><?php } ?></form><br>
             <?php

  }
 
//FEEDBACK SECTION 

$fd1 = mysqli_query($db_connection,"SELECT * FROM rent_feed");



if(isset($_POST['fdb']) )
{
    $t1 = $_POST['t1'];
    $sql1= "INSERT INTO `rent_feed`( `rent_id`, `user_id`, `fdbk_det`) VALUES ('$rid','$uid','$t1')";
    $chck=mysqli_query($db_connection,$sql1);
    
   
}
 

?>       
        
        
                </div>    
        
        
            <hr>
        
            <br>
            
            	<div class="gallery">
		<div class="container">
   
              
            
                    <h2>FEEDBACK</h2>   <br>   <br>   <br>   <br>
            			
<?php

 

$result = mysqli_query($db_connection,"SELECT * FROM rent_feed where rent_id = '$rid'");
	
echo "<table>

";

 

while($row = mysqli_fetch_array($fd1))

  {
//$images_field= $row['rent_img'];
//$image_show= "/images/$images_field";
  echo "<tr>";

//  echo "<td>" . $row['rent_hostid'] . "</td>";

  echo "<td><i class='fa fa-location-arrow'></i></td>";
  echo "<td>" . $row['fdbk_det'] . "</td>";

  echo "</tr>";                  }?>
            <tr>
                    <td><?= $unemail ?></td>
                    <td> <form method="post"> <input type="text" name="t1" placeholder="Add your feedback"></td>
                </tr>
                <tr><td><input type="submit" name="fdb"></form></td></tr>
</table>
  </div></div>
 

            
            
            
            
            
            
            
            
            
            
            
            
            
            
<!-- footer -->
<?php 

include ("footer.php")?>
<!-- //banner -->
