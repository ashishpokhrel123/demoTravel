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
	
	<header>
		<div>
			  <!-- <div class="menu">
			    <ul class="d-flex flex-column">
			       <li><a href=""><i class="fa fa-terminal"></i>home</a></li>
			       <li><a href=""><i class="fa fa-codepen"></i>about</a></li>
			       <li><a href=""><i class="fa fa-newspaper-o"></i>news</a></li>
			       <li><a href=""><i class="fa fa-paper-plane-o"></i>contact</a></li>
			    </ul>
			  </div>
			  <div class="content">
			    <div class="button">
			      <div class="line first top"></div>
			      <div class="line second bottom"></div>
			    </div>
			  </div> -->

			    


		</div>		
	</header>

	<?php include('banner-component/banner-with-nav.php'); ?>

	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<h2 class="font-weight-bold mb-5">Top Destinations</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-6 px-3">
					<div class="top-destinations-card-1" style="background: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/nature-quotes-1557340276.jpg') center center no-repeat;">
						<div class="card-overlay text-white">
							<div class="overlay-text d-flex p-2">
								<div class="location mr-auto">
									<span class="mr-2"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="font-weight-bold">South America </span>
								</div>
								<div class="time">
									8 Hours
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-6 px-3">
					<div class="top-destinations-card-1" style="background: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/nature-quotes-1557340276.jpg') center center no-repeat;">
						<div class="card-overlay text-white">
							<div class="overlay-text d-flex p-2">
								<div class="location mr-auto">
									<span class="mr-2"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="font-weight-bold">South America </span>
								</div>
								<div class="time">
									8 Hours
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-6 px-3">
					<div class="top-destinations-card-1" style="background: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/nature-quotes-1557340276.jpg') center center no-repeat;">
						<div class="card-overlay text-white">
							<div class="overlay-text d-flex p-2">
								<div class="location mr-auto">
									<span class="mr-2"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="font-weight-bold">South America </span>
								</div>
								<div class="time">
									8 Hours
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-6 px-3">
					<div class="top-destinations-card-1" style="background: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/nature-quotes-1557340276.jpg') center center no-repeat;">
						<div class="card-overlay text-white">
							<div class="overlay-text d-flex p-2">
								<div class="location mr-auto">
									<span class="mr-2"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="font-weight-bold">South America </span>
								</div>
								<div class="time">
									8 Hours
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		this is the footer section
	</footer>

	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/owl-carousel.js"></script>
	<script src="js/bootstrap-4.min.js"></script>

	<script>
      	new WOW().init();
    </script>

    <script>
    	function expand(){
		  $(this).toggleClass("on");
		  $(".menu").toggleClass("active");
		};
		$(".button").on('click', expand);
    </script>

    <script>
    	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
	
</body>
</html>