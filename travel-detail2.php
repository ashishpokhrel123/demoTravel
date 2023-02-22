<?php include('header-component/head.php'); ?>
<?php include('header-component/mobile-nav.php'); ?>
	<?php include('header-component/top-nav-colored.php'); ?>
	<?php include('header-component/nav.php'); ?>

		

	<!-- http://preview.themeforest.net/item/citytours-city-tours-tour-tickets-and-guides/full_screen_preview/10715647?_ga=2.207622036.7684096.1628704460-826735134.1624552264 -->

	<div class="container my-5">
		<div class="row">
			<div class="col-12">
				<h1 class="font-weight-bold mt-3 mb-5 border-bottom pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h1>
			</div>
			<div class="col-12 d-flex justify-content-between pb-2">
				<h4 class="font-weight-bold dim"><i class="mr-1 fa fa-clock-o primary-color" aria-hidden="true"></i> 10 days</h4>
				<h4 class="font-weight-bold dim"><i class="mr-1 fa fa-calendar primary-color" aria-hidden="true"></i> <span class="text-success">Available </span></h4>	
				<h4 class="font-weight-bold dim"><i class="mr-1 fa fa-child primary-color" aria-hidden="true"></i> Min Age : 13+</h4>
				<h4 class="font-weight-bold dim"><i class="mr-1 fa fa-user primary-color" aria-hidden="true"></i> Max people : 30</h4>
			</div>
			<div class="col-12 feature-slider">
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
			<div class="col-md-7 col-lg-8">
				<?php include('component/iterinary-2.php'); ?>

				<?php include('component/comment-section.php'); ?>
				
			</div>
			<div class="col-md-5 col-lg-4">
				
				<?php include('component/booking-form.php'); ?>
				<div class="contact-by-call p-5 text-center primary-background my-4"  style="background: url('images/cape9.jpg') center center no-repeat; background-size: 100% 100%;">
					<h1 class="font-weight-bold">Contact via Call</h1>
					<p class="font-weight-bold">+977 9862155336</p>
				</div>
			</div>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="row">
				<?php include('component/testimonials.php'); ?>
			</div>
		</div>		
	</section>

	<section class="py-5 cover-background" style="background-image: linear-gradient(#ffffff, #f5f5f5);">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center py-3">
						<h2 class="font-weight-bold mb-0">Related</h2>
						<p><a href="">View all Articals</a></p>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 px-3 mb-3">
						<?php include('card-component/top-destinations-card-7.php') ?>
					</div>
					<div class="col-md-4 col-sm-6 px-3 mb-3">
						<?php include('card-component/top-destinations-card-7.php') ?>
					</div>
					<div class="col-md-4 col-sm-6 px-3 mb-3">
						<?php include('card-component/top-destinations-card-7.php') ?>
					</div>
				</div>
				
			</div>
		</section>

	<?php include('footer-component/footer-2.php'); ?>

	<?php include('footer-component/foot.php'); ?>