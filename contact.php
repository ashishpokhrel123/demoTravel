<?php include('header-component/head.php'); ?>
<?php include('header-component/mobile-nav.php'); ?>
<?php include('header-component/top-nav-colored.php'); ?>
	<?php include('header-component/nav.php'); ?>

	<section class="text-container py-5">
		<div class="container">

			<h1 class="font-weight-bold text-center mb-5">Contact us</h1>

			<div class="map row">
				
				<div class="col-md-4">
					<h6>
						<i class="fa fa-map-marker primary-color map-icon" aria-hidden="true"></i> Gaushala, Kathmandu
					</h6>
					<h6>
						<i class="fa fa-phone primary-color map-icon" aria-hidden="true"></i> +977 9862155336
					</h6>
					<h6>
						<i class="fa fa-envelope primary-color map-icon" aria-hidden="true"></i> nirajan@nirajandahal.com
					</h6>

					<div>
						<form>
							<div class="input-group form-group">								
								<input type="email" class="form-control" placeholder="Enter Email">
							</div>
							<div class="input-group form-group">								
								<input type="text" class="form-control" placeholder="Enter your Name">
							</div>
							<div class="input-group form-group">								
								<textarea class="form-control" placeholder="your Message here"></textarea>
							</div>
							
							<div class="form-group my-3">
								<input type="submit" value="Send" class="btn btn-block primary-background border">
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-8">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.22093767179!2d85.34654726480994!3d27.710463931962412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197922ea1e89%3A0x739090deff2ba4a6!2sShri%20Pashupatinath%20Temple!5e0!3m2!1sen!2snp!4v1633100712305!5m2!1sen!2snp"  style="border:0;width: 100%;height: 450px;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				
			</div>

		</div>

	</section>

	<section class="py-5 cover-background" style="background-image: linear-gradient(#ffffff, #f5f5f5);">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center py-3">
					<h2 class="font-weight-bold mb-0">Blog</h2>
					<p><a href="tour.php">View all Articals</a></p>	
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