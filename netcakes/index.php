<?php
session_start()
?>
<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Netcakes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
                            <div id="logo">
                               <h1 ><img src="images/icon07.png" alt=""><a href="index.php">Netcakes</a></h1>
                            </div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
                                    
									<li class="current"><a href="index.php">Welcome</a></li>
									<li><a href="about-us.php">About Us</a></li>
									</li>
									<li><a href="contactUs.php">Contact Us</a></li>
                                    <?php 
										if(isset($_SESSION['username'])){
											echo "<li><a href='member_index.php'>".$_SESSION['username']."</a></li>";
											echo "<li><a href='logout.php'>Log Out</a></li>";
										}
										else{
											echo "<li><a href='signUp.php'>Sign Up</a></li>";
											echo "<li><a href='login.php'>Log In</a></li>";
										}
									?>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2>Hi. This is Netcakes.</h2>
								<p style="font-size:140%;">Order customized cakes delivered directly to your door for less. We are able to save you time and money because we deliver from our bakery directly to your home; no need to have brick and mortar stores. In addition, we let you build your cake exactly how you want it with higher degree of customization thanks to our intuitive website and our high tech bakeries.</p>
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><a href="product.php" class="button large icon fa-arrow-circle-right">Order Now</a></li>
									<li><a href="about-us.php" class="button alt large icon fa-question-circle">More info</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/homepagecake03.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Order online</h2>
												<p>Build and customize your cake</p>
											</header>
											
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/homepagecake01.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>We bake it</h2>
												<p>Prepared exactly how you want it</p>
											</header>
											
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/cakehands01.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>And... we deliver</h2>
												<p>Receive your cake at your home</p>
											</header>
											
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			
			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Directory</h3>
										<ul class="style2">
                                        <li><a href="index.php">Welcome</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        </li>
                                        <li><a href="contactUs.php">Contact Us</a></li>
                                        <li class="current"><a href="signUp.php">Sign Up</a></li>
                                        <li><a href="login.php">Log In</a></li>
                                            </ul>
                                        </section>

							</div>
							
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
										<p>1234 Fictional Road<br />
										Charlottesville, VA 22904<br />
										(800) 555-0000</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>
										&copy; Netcakes. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
