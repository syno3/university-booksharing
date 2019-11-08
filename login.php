<?php
// track user
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'php/database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>University book store | login page</title>
<!--==================== WEBSITE META DATA ====================================-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="kabarak university book-store, book shraing, free students notes, free notes downlaod">
	<meta name="description" content="kabarak university book store offer free platform to allows students from different courses share important documents and notes online and provide free downloads">
	<meta name="author-name" content="festus murimi">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--========================= STYLE SHEETS =======================================-->
	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login-registration.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login" style="background-image: url('images/Essential-Books.jpg');">
			<div class="wrap-login">
				<form class="login-form validate-form">
<!---============================= USER ICON PNG======================================================-->
					<span>
						<img src="images/logo_3.png" class="login-form-logo" alt="user_icon.png">
					</span>

					<span class="login-form-title p-b-34 p-t-27">
						Log in
					</span>

					<?php if(!empty($message)): ?>
						<p class="txt1"> <?= $message ?></p>
					<?php endif; ?>
<!--================================ USERNAME INPUT SECTION    =============================================-->
					<div class="wrap-input validate-input" data-validate = "Enter username">
						<input class="input" type="text" name="username" placeholder="Username">
						<span class="focus-input" data-placeholder="&#xf207;"></span>
					</div>
<!--================================ PASSWORD INPUT SECTION    =============================================-->
					<div class="wrap-input validate-input" data-validate="Enter password">
						<input class="input" type="password" name="pass" placeholder="Password">
						<span class="focus-input" data-placeholder="&#xf191;"></span>
					</div>
<!--================================ REMEMBER ME CHECH BOX SECTION    =============================================-->
					<div class="contact-form-checkbox">
						<input class="input-checkbox" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox" for="ckb1">
							Remember me
						</label>
					</div>
<!--================================ LOGIN BUTTON SECTION    =============================================-->
					<div class="container-login-form-btn">
						<button class="login-form-btn" name="login-user">
							Login
						</button>
					</div>
<!--================================ FORGOT PASSWORD SECTION    =============================================-->
					<div class="text-center">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
<!--================================ SIGN UP SECTION    =============================================-->
					<div class="text-center">
						<a class="txt1" href="registration.html">
							sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--================================ SCRIPT SECTION    =============================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>