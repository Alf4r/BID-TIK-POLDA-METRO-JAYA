
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="img/foto_empJAKPUSK.png"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="lib/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/BACKGROUND-2.jpg');">
			<div class="wrap-login100">
				<form action="login.php" method="post">
					<span class="login100-form-logo">
						<img src="img/foto_empJAKPUSK.png" style="height: auto; width: 113px;">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                    <?php if (isset($_GET['error'])) { ?>
    				<p class="error"><?php echo $_GET['error']; ?> </p>
					<?php } ?>

					<div class="wrap-input100 validate-input" data-validate = "Enter NPP">
						<input class="input100" type="text" name="NPP" placeholder="NPP">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="dropdown-user" >
  						<select name="user" style="height: 43px; width: 392px; margin-bottom: 21px;">
    						<option style="text-align: center;" >Login Sebagai</option>
    						<option value="Admin" style="text-align: center;">Admin</option>
    						<option value="Atasan" style="text-align: center;">Atasan</option>
							<option value="Anggota" style="text-align: center;">Anggota</option>
  						</select>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="login.php">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>