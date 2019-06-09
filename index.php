<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- MENYESUAIKAN TAMPILAN WEB -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="logo/logo.png">
	<!-- CSS BOOTSTRAP 4 -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- FONT AWESOME 5 -->
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<!-- STYLE SWEETALERT 2 -->
	<link rel="stylesheet" type="text/css" href="sweetalert2/css/sweetalert2.css">
	<!-- STYLE CUSTOME-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper-login">
		<div class="wrapper-img-login">
			<img src="images/20190502_091550_Richtone(HDR).jpg" class="img-login">
			<div class="overlay login-img-screen"></div>
		</div>
		<div class="wrapper-login-form content-login">
			<div class="container form-login">
				<form action="" method="POST">
					<div class="wrapper-icon-login text-center">
						<img src="images/wedding-flourish-clipart-black.png" class="img-icon-login logo-black">
						<img src="images/wedding-flourish-clipart-1.png" class="img-icon-login logo-white">
					</div>
					<div class="form-inline justify-content-center">
						<div class="form-group mg-button">
					    	<div class="input-group">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text"><i class="fas fa-user"></i></div>
					        	</div>
					        	<input name="inp_user_nm" type="text" class="form-control form-input-login" autofocus placeholder="Username">
					      	</div>
						</div>
					</div>
					<div class="form-inline justify-content-center">
						<div class="form-group mg-button">
					    	<div class="input-group">
					        	<div class="input-group-prepend">
					          		<div class="input-group-text"><i class="fas fa-unlock"></i></div>
					        	</div>
					        	<input name="inp_password" type="password" class="form-control form-input-login" placeholder="Password">
					      	</div>
						</div>
					</div>
					<div class="wrap text-center">
						<button type="submit" name="submit-login" class="btn btn-primary btn-login" onclick="btnLogin()">LOGIN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- JS - JQ -->
	<!-- JS LIBRARY GLOBAL -->
	<script type="text/javascript" src="js/JQuery-3.3.1.min.js"></script>
	<!-- JS LIBRARY SWEETALERT -->
	<script type="text/javascript" src="sweetalert2/js/sweetalert2.js"></script>
	<!-- JS LIBRARY FONT AWESOME 5 -->
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<?php
	$users = "admin";
	$pass = "admin";
	if(isset($_POST["submit-login"])){
		if($_POST["inp_user_nm"] == $users && $_POST["inp_password"] == $pass) {
			echo "<script>
	 			Swal.fire ({
					type: 'success',
					showConfirmButton: false,
					timer: 3000,
					title: 'Halo!'
	 			}).then(function(){
					window.location.href = 'dashboard.php'
	 			});
			</script>";
		} else {
			echo "<script>
	 			Swal.fire ({
					type: 'error',
	 				title: 'Wrong username / Password',
	 				showConfirmButton: false,
					timer: 2000
				})
	   		</script>";
		}
	}
	?>
</body>
</html>