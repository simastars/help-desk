<?php
ob_start();
session_start();

require_once"dbcon.php";





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Send Equiry</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- Favicons -->
  <link href="../images/logo.png" rel="icon">
  <link href="../images/logo.png" rel="apple-touch-icon">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->
</head>
<body>

	<?php

	if (isset($_POST['send'])) {
		
		$email = $_POST['email'];
		$dates = date("d/m/Y");
		$message = $_SESSION['message'];
		$yet = "yet";

				$sql = "INSERT INTO `emails` (`sn`, `email`, `message`, `dates`, `status`) VALUES (NULL, '$email', '$message', '$dates', '$yet')";
			if (mysqli_query($conn, $sql)) {

				header("location: ../help_desk1.php");
				
			}
			else{

				?><script>swal("Fail, Try Again");</script><?php

			}
		
	}



	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						<h6>Send Enquiry</h6>
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="email" placeholder="Please Enter Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					

					<div class="wrap-input100 validate-input" data-validate = "Your Message">
						<textarea class="input100" type="text" name="query"  placeholder="Your Message" required><?php echo $_SESSION['message']; ?></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-file" aria-hidden="true"></i>
						</span>
					</div>


					


					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="send">
							Send    
						</button>
					</div>


					
					

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>