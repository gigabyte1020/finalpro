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
 
  
  width: 50%;
  
  object-fit: cover;
  object-position: center;
}
    </style>
 <?php include ("banner.php")?>
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="tittle-w3">Popular Rooms</h2>
			
<?php

require 'db_connection.php';
 

$result = mysqli_query($db_connection,"SELECT * FROM rent where rent_approv");


	
	
	
	
	
	
echo "<table class='table' border='1'>

<tr>


<th>Name</th>

<th style='  
  width: 50%'>Image</th>


<th>Price per Night</th>



</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['rent_name'] . "</td>";
?>
                        <td><img class="ig1" src="./image/<?php echo $row['rent_img'] ?>"></td>
    
    <?php
//    echo "<div align=center><img src=". $image_show."></div>";
$rid=    $row['rent_id'];
//  echo "<td>" . $row['rent_detail'] . "</td>";
  echo "<td>" . $row['rent_price'] . "</td>";
//  echo "<td>" . $row['rent_summary'] . "</td>";
//  echo "<td>" . $row['rent_rules'] . "</td>";
?><td><a href="view_more_2.php?rid=<?php echo $rid; ?>" class="btn btn-success">View More</a></td><?php
  echo "</tr>";

  }

echo "</table>";

 

?>
		</div>
	</div>
	<!-- //gallery -->
	<!-- Newsletter -->
	<div class="w3layouts_newsletter_right">
		<div class="container">
			<div class="col-md-4 n-left">
				<h6>Newsletter</h6>
			</div>
			<div class="col-md-8 n-right">
				<form action="#" method="post">
					<div class="input-flds">
						<input type="text" name="Name" placeholder="Name" required="">
					</div>
					<div class="input-flds">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="input-flds">
						<input type="submit" value="Subscribe">
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //Newsletter -->
	<!-- Footer -->
	<div class="w3ls_address_mail_footer_grids">
		<div class="container">
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-head">Address</h5>
				<p>Northways Rd Churchill VIC
					<span>3842 Australia.</span>
				</p>
			</div>
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-head">Contact Us</h5>
				<p>+(012) 345 6789
					<span>+(012) 678 3459</span>
				</p>
			</div>
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-head">Mail Us</h5>
				<p>
					<a href="mailto:info@example.com">info@example1.com</a>
					<span>
						<a href="mailto:info@example.com">info@example2.com</a>
					</span>
				</p>
			</div>
			<div class="clearfix"> </div>
			<h6 class="footer-logo">
				<a href="index.php">
					<span>L</span>ively
					<span>R</span>ide</a>
			</h6>
			<div class="w3l-social">
				<ul>
					<li>
						<a href="#" class="fa fa-facebook"></a>
					</li>
					<li>
						<a href="#" class="fa fa-twitter"></a>
					</li>
					<li>
						<a href="#" class="fa fa-google-plus"></a>
					</li>
					<li>
						<a href="#" class="fa fa-instagram"></a>
						<li>
							<li>
								<a href="#" class="fa fa-linkedin"></a>
								<li>
				</ul>
			</div>
		</div>
	</div>
	<div class="copyright-wthree">
		<div class="container">
			<p>&copy; 2018 Lively Ride . All Rights Reserved | Design by
				<a href="http://w3layouts.com/"> W3layouts </a>
			</p>
		</div>
	</div>
	<!-- //Footer -->
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //gallery -->
	<script src="js/lightbox-plus-jquery.min.js">
	</script>
	<!-- //gallery -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->


	<!-- script-for-menu -->
	<script>
		$("span.menu").click(function () {
			$(".top-nav ul").slideToggle("slow", function () {});
		});
	</script>
	<!-- script-for-menu -->
</body>

</html>