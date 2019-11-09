<!DOCTYPE html>
<html lang="en">
<head>
	<title>university book-store | regsitration page</title>
<!--====================== META DATA ===========================-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="university bookstore, book shraing, free students notes, free notes downlaod">
	<meta name="description" content="university book store offer free platform to allows students from different universities and courses share important documents and notes online and provide free downloads">
	<meta name="author-name" content="festus murimi">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--==================== STYLE SHEETS ==================================-->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login-registration.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login" style="background-image: url('images/Essential-Books.jpg');">
			<div class="wrap-login p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login-form validate-form" action="registration.php" method="post">
				<?php if(!empty($message)): ?>
					<p class="txt1"><?= $message ?></p>
				<?php endif; ?>
					<span class="login-form-title p-b-59">
						Sign Up
					</span>
<!--================================ USERNAME INPUT SECTION    =============================================-->
					<div class="wrap-input validate-input" data-validate="Name is required">
						<input class="input" type="text" name="username" placeholder="Username">
						<span class="focus-input" data-placeholder="&#xf207;"></span>
					</div>
<!--================================ USER EMAIL INPUT SECTION    =============================================-->
					<div class="wrap-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input" type="text" name="email" placeholder="Email addess">
						<span class="focus-input" data-placeholder="&#9993;"></span>
					</div>
<!--================================= ADD UNIVERSITY SECTION ===============================================---->





<!--================================ PASSWORD INPUT SECTION    =============================================-->
					<div class="wrap-input validate-input" data-validate = "Password is required">
						<input class="input" type="password" name="password" placeholder="Password">
						<span class="focus-input"  data-placeholder="&#xf191;"></span>
					</div>
<!--================================ REPEAT PASSWORD INPUT SECTION    =============================================-->
					<div class="wrap-input validate-input" data-validate = "Repeat Password is required">
						<input class="input" type="password" name="repeat_password" placeholder="confirm_Password">
						<span class="focus-input"  data-placeholder="&#xf191;"></span>
					</div>
<!--================================ TERMS AND CONDITION SECTION    =============================================-->
					<div class="flex-m w-full p-b-33">
						<div class="contact-form-checkbox">
							<input class="input-checkbox" id="ckb1" type="checkbox" name="remember-me" required>
							<label class="label-checkbox" for="ckb1">
								<a href="terms.html" class="txt1">i agree to terms and conditions</a>
									</a>
								</span>
							</label>
						</div>		
					</div>
					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button class="login-form-btn"  name="reg-user">
								Sign Up
							</button>
						</div>

						<a href="login.php" class="dis-block txt1 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--====================SCRIPT SECTION============================-->

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>