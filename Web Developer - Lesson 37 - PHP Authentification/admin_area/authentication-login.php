<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login example</title>
</head>

<body class="bg-login">
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="../assets/images/impact_logo-02.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Welcome Back</h3>
									</div>
									<div class="input-group shadow-sm rounded mt-5">
										<div class="input-group-prepend"> <span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="assets/images/icons/search.svg" alt="" width="16"></span>
										</div>
										<input type="button" class="form-control  border-0" value="Log in with google">
									</div>
									<div class="login-separater text-center"> <span>OR LOGIN WITH EMAIL</span>
										<hr />
									</div>
									<div class="form-group mt-4">
										<label>Email Address</label>
										<input id="email_l" type="text" class="form-control" placeholder="Enter your email address" />
										<?php if (isset($email_error_l)) { ?>
											<p class="error control"><?php echo $email_error_l ?></p>
										<?php } ?>
									</div>

									<div class="form-group">
										<label>Password</label>
										<input id="pswd_l" type="password" class="form-control" placeholder="Enter your password" />
									</div>
									<div class="form-row">
										<div class="form-group col">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
												<label class="custom-control-label" for="customSwitch1">Remember Me</label>
											</div>
										</div>
										<div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
										</div>
									</div>
									<div class="btn-group mt-3 w-100">
										<button type="button" class="btn btn-primary btn-block" onclick="log_in()">Log In</button>
										<button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
										</button>
									</div>
									<hr>
									<div class="text-center">
										<p class="mb-0">Don't have an account? <a href="authentication-register.html">Sign up</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="../assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
<script src="assets/js/auth.js"></script>

</html>