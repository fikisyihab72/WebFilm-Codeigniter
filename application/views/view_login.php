<!DOCTYPE html>
<html lang="en">
<head>
	<title>CinemaTV</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/main.css">
	<!--===============================================================================================-->
</head>
<body style="padding-top: 50px;">
	
	<div class="container" >
		
		<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"  style="background-color: #1F2533; color: white;">Login</a>
				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="background-color: #1F2533; color: white;">Register</a>

			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent" style="background-color: white;">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				
				<div class="limiter">
					<div class="container-login100" style="background-color: #1F2533;">
						<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
							<form class="login100-form validate-form" action="<?php echo base_url('index.php/Mahasiswa/login') ?>" method="post">

								<span class="login100-form-title p-b-33">
									Account Login
								</span>

								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="username" placeholder="Username">
									<span class="focus-input100-1"></span>
									<span class="focus-input100-2"></span>
								</div>

								<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
									<input class="input100" type="password" name="password" placeholder="Password">
									<span class="focus-input100-1"></span>
									<span class="focus-input100-2"></span>
								</div>

							
								
										<select class="form-control" name="role" placeholder>

											<option value="user">User</option>
											<option value="admin">Admin</option>
										</select>
									
								

								<div class="container-login100-form-btn m-t-20">
									<button class="login100-form-btn" style="background-color: red;">
										LOGIN
									</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>




			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<div class="limiter">
					<div class="container-login100" style="background-color: #1F2533;">
						<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
							<form action="<?php echo base_url('index.php/Mahasiswa/insert_mahasiswa') ?>" method="POST"> <!-- base url hanya bisa di php -->
								<span class="login100-form-title p-b-33">
									Registration
								</span>
								<div class="wrap-input100 validate-input">
									<input class="input100" type="text" name="nama" placeholder="Username">
									<span class="focus-input100-1"></span>
									<span class="focus-input100-2"></span>
								</div>
								<div class="wrap-input100 validate-input">
									<input class="input100" type="password" name="nim" placeholder="Password">
									<span class="focus-input100-1"></span>
									<span class="focus-input100-2"></span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="email" name="email" placeholder="Yourname@email.com">
									<span class="focus-input100-1"></span>
									<span class="focus-input100-2"></span>
								</div>

								<div class="container-login100-form-btn m-t-20">
									<button class="login100-form-btn" style="background-color: red;">
										SIGN UP
									</button>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
			
		</div>








		






		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/popper.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/vendor/daterangepicker/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/s/main.js"></script>

	</body>
	</html>