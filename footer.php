<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Locus
 */

?>

<footer>
	<div class="container">
		<div class="row d-none d-lg-grid my-5 locus-footer">
			<div class="col my-3 widget-1">
				<h5>Products & Services</h5>
				<nav class="nav flex-column">
					<a class="nav-link" href="#">Dispatcher</a>
					<a class="nav-link" href="#">MotionTrack</a>
					<a class="nav-link" href="#">IntelliSort</a>
					<a class="nav-link" href="#">FieldPro</a>
					<a class="nav-link" href="#">Supply Chain Consulting</a>
				</nav>
			</div>
			<div class="col my-3 widget-2">
				<h5>Business Sectors</h5>
				<nav class="nav flex-column">
					<a class="nav-link" href="#">E-Commerce</a>
					<a class="nav-link" href="#">3PL</a>
					<a class="nav-link" href="#">Home Service</a>
					<a class="nav-link" href="#">Retail</a>
					<a class="nav-link" href="#">CPG & FMCG</a>
				</nav>
			</div>
			<div class="col my-3 widget-3">
				<h5>Features</h5>
				<nav class="nav flex-column">
					<a class="nav-link" href="#">Smart Geocoding</a>
					<a class="nav-link" href="#">Dispatch Overview</a>
					<a class="nav-link" href="#">Predictive Alerts</a>
					<a class="nav-link" href="#">Live Tracking</a>
					<a class="nav-link" href="#">Enroute Analysis</a>
				</nav>
			</div>
			<div class="col my-3 widget-4">
				<h5>Company</h5>
				<nav class="nav flex-column">
					<a class="nav-link" href="#">About Us</a>
					<a class="nav-link" href="#">Careers</a>
				</nav>
			</div>
			<div class="col my-3 widget-5">
				<h5>Products & Services</h5>
				<nav class="nav">
					<a class="nav-link" href="#">Route Planning Guide</a>
					<a class="nav-link" href="#">Route Planner</a>
					<a class="nav-link" href="#">Last Mile Delivery Optimization</a>
					<a class="nav-link" href="#">Google Maps vs Route</a>
					<a class="nav-link" href="#">Travelling Salesman Problem</a>
					<a class="nav-link" href="#">Optimization</a>
					<a class="nav-link" href="#">Same Day Delivery</a>
					<a class="nav-link" href="#">Route Optimization for 3PL</a>
					<a class="nav-link" href="#">e-Grocery Last Mile</a>
					<a class="nav-link" href="#">First Attempt Delivery Rate</a>
					<a class="nav-link" href="#">Optimization</a>
					<a class="nav-link" href="#">Future of Retail</a>
					<a class="nav-link" href="#">Pharma Delivery</a>
					<a class="nav-link" href="#">White Glove Delivery Services</a>
				</nav>
			</div>
			<div class="col my-3 widget-6">
				<h5>Resources</h5>
				<nav class="nav flex-column">
					<a class="nav-link" href="#">Bulletin</a>
					<a class="nav-link" href="#">Whitepaper</a>
					<a class="nav-link" href="#">Case Studies</a>
					<a class="nav-link" href="#">Infographics</a>
					<a class="nav-link" href="#">Blogs</a>
					<a class="nav-link" href="#">Videos</a>
					<a class="nav-link" href="#">News</a>
				</nav>
			</div>
			<div class="col my-3 widget-7 text-center">
				<h5>Languages</h5>
				<nav class="nav flex-column">
					<a class="nav-link mb-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/english.png" alt="English"><span class="d-block">English</span></a>
					<a class="nav-link mb-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/french.png" alt="French"><span class="d-block">French</span></a>
					<a class="nav-link mb-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/german.png" alt="German"><span class="d-block">German</span></a>
				</nav>
			</div>
			<div class="col my-3 widget-8">
				<h5>Stay Tuned</h5>
				<form>
					<div class="input-group input-group-sm mb-3">
						<input type="text" class="form-control" placeholder="Enter email id" aria-label="Recipient's username" aria-describedby="button-addon2">
						<button class="btn btn-primary text-uppercase" type="button" id="button-addon2">Subscribe</button>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
						<label class="form-check-label lh-sm" for="flexCheckDefault">
							<span style="font-size: 11px;">I would also like to subscribe to the Exclusive Product Updates, Content & Event invitations and notifications by Locus in related areas. You can refer to our Privacy Policy</span>
						</label>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row border-top border-secondary">
			<div class="col-12 my-3 d-flex justify-content-center align-items-center">
				<img class="mx-2" src="<?php echo get_template_directory_uri(); ?>/images/black.svg" width="90" alt="">
				<p class="mx-2 my-0" style="font-size: 10px;">&copy; 2020 Mara Labs, Inc. All rights reserved. Privacy and Terms</p>
			</div>
		</div>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>

</html>