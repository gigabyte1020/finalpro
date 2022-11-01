<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require 'db_connection.php';
$unemail=$_SESSION['user_email'];
$unrol=$_SESSION['user_role'];
?>
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
<!-- banner -->
	<div class="banner inner-bg-w3" id="home">
		<!-- header -->
		<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul>
					<li>
						<a href="#">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li>
						<i class="fa fa-envelope" aria-hidden="true"></i>
                                                <a href=""><?php echo $unemail;?></a>
					</li>
					<li>
						<a href="logout.php" class="btn btn-info btn-lg">Logout</a>
<!--					<li>
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder="Search..." required="" />
									<input type="submit" value="Send" />
								</form>
							</div>
						</div>
					</li>-->
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<header>
			<div class="container">

				<!-- navigation -->
				<div class="w3_navigation">
					<nav class="navbar navbar-default">
						<div class="navbar-header navbar-left">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="w3_navigation_pos">
								<h1>
									<a href="index.php">
										<span>L</span>ively
										<span>R</span>ide</a>
								</h1>
                                                            <a href="index.php">Home</a>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						
					</nav>
				</div>
				<div class="clearfix"></div>
				<!-- //navigation -->
			</div>
		</header>
		<!-- //header -->
	</div>
	<!-- //banner -->