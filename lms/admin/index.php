<!-- START OF HEADER -->

<?php include("admin_page/homepage/includes/header.php"); ?>

<!-- END OF HEADER -->

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('admin_page/homepage/assets/images/lib.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					ADMIN LOGIN
				</span>

<!-- START OF FORM LOGIN -->

				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

<!-- START OF LOGIN BUTTON -->

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" style="background: khaki;">
							<a href="dashboard.php">
								Login
							</a>
						</button>
					</div>

<!-- END OF LOGIN BUTTON -->

				</form>

<!-- END OF FORM LOGIN -->

			</div>
		</div>
	</div>


<!-- START OF FOOTER -->
	
<?php include("admin_page/homepage/includes/footer.php"); ?>

<!-- END OF FOOTER -->