<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel Site</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick-slider.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/owl-carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
	<?php include('header-component/mobile-nav.php'); ?>

	<?php include('header-component/top-nav-colored.php'); ?>
	<?php include('header-component/nav.php'); ?>

	<section class="text-container py-5">
		<div class="container">

			<div>
				<h1 class="font-weight-bold text-center mb-5">About Travelsite</h1>

				<div class="row">
					
					<div class="col-sm-8">

						<div class="feature-slider">
									<div class="owl-carousel owl-theme">
									    <div class="slide" style="background: url('images/cape9.jpg') center center no-repeat;">
									    	<div class="slider-text-box">
									    		<!-- <h1>Lets travel together</h1>
									    		<p>
									    			We travel together. Move whole Nepal. Eat dal bhat. 
									    		</p>
									    		<a href="" class="btn primary-background">Click me!</a>
									    		<a href="" class="btn primary-background-reverse">Click me too!</a> -->
									    	</div>
									    </div>
									    <div class="slide" style="background: url('images/D189-hero-south-africa-safari-elephant-spraying-zebras-2000x837.jpg') center center no-repeat;">
									    	<div class="slider-text-box">
									    		<!-- <h1>Lets travel together</h1>
									    		<p>
									    			We travel together. Move whole Nepal. Eat dal bhat. 
									    		</p>
									    		<a href="" class="btn primary-background">Click me!</a>
									    		<a href="" class="btn primary-background-reverse">Click me too!</a> -->
									    	</div>
									    </div>
									</div>
								</div>

						


						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>

						<div class="border-bold">
							<img src="https://theo.minuspoint.com/wooobooru/_images/5f8c441bfa5f07cc4677e3dc2cda5cf5/14185%20-%20kane%20mask%20wwf.jpg" alt="" class="img-100">
						</div>

						
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						
						
						
					</div>

					<div class="col-sm-4 order-md-2 mb-3">
						
						
						

						<div class="mb-4"></div>

						<?php include('component/booking-form.php'); ?>
						

					</div>
				</div>
			</div>	

			
			
				
				
				

				

				<div class="row">
					<div class="col-sm-12">
						<?php include('component/faq.php'); ?>		
					</div>
				</div>
			
			<section class="py-5 cover-background" style="background-image: linear-gradient(#ffffff, #f5f5f5);">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center py-3">
							<h2 class="font-weight-bold mb-0">Our Destinations</h2>
							<p><a href="tour.php">View all Articals</a></p>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 px-3 mb-3">
							<?php include('card-component/top-destinations-card-3.php') ?>
						</div>
						<div class="col-md-4 col-sm-6 px-3 mb-3">
							<?php include('card-component/top-destinations-card-3.php') ?>
						</div>
						<div class="col-md-4 col-sm-6 px-3 mb-3">
							<?php include('card-component/top-destinations-card-3.php') ?>
						</div>
					</div>
					
				</div>
			</section>
 

			
			
		</div>
	</section>

	


	<?php include('footer-component/footer-2.php'); ?>

	<?php include('footer-component/foot.php'); ?>