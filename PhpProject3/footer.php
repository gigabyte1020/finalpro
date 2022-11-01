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