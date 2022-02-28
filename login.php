<?php include('header-component/head.php'); ?>
<?php include('header-component/mobile-nav.php'); ?>
	<?php include('header-component/top-nav-colored.php'); ?>
	<?php include('header-component/nav.php'); ?>

	<section class="text-container pt-3 pb-5 login-register-form" style="background-image: linear-gradient(#ffffff, #ffe7db);">
		<div class="container">
			<div>
				<h1 class="font-weight-bold text-center border-bottom pb-3 mb-5">Login</h1>

				<div class="row">
					<div class="container">
						<div class="d-flex justify-content-center h-100">
							<div class="card ">
								<div class="card-header">
									<h3>Sign In</h3>
									<div class="d-flex justify-content-end social_icon px-2">
										<div class="ml-2"><a href="" class="primary-color"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></div>
										<div class="ml-2"><a href="" class="primary-color"><i class="fa fa-google-plus-square"></i></a></div>
										<div class="ml-2"><a href="" class="primary-color"><i class="fa fa-twitter-square"></i></a></div>
									</div>
								</div>
								<div class="card-body">
									<form>
										<div class="input-group form-group">
											
											<input type="text" class="form-control" placeholder="username">
											
										</div>
										<div class="input-group form-group">
										
											<input type="password" class="form-control" placeholder="password">
										</div>
										<div class="row align-items-center">
											<input type="checkbox">Remember Me
										</div>
										<div class="form-group my-3">
											<input type="submit" value="Login" class="btn btn-block primary-background border">
										</div>
									</form>
								</div>
								<div class="card-footer pb-2">
									<div class="d-flex justify-content-center">
										Don't have an account? &nbsp; <a href="register.php" class="primary-color">Sign Up</a>
									</div>
									<div class="d-flex justify-content-center">
										<a href="#" class="primary-color">Forgot your password?</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			
		</div>
	</section>


	<?php include('footer-component/footer-2.php'); ?>

	<?php include('footer-component/foot.php'); ?>