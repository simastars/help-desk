<?php
ob_start();
session_start();

require_once"dbcon.php";

if (!isset($_SESSION['admin'])) {
    header("location: ../admin/logout.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Replies</title>
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

	if (isset($_POST['add'])) {
		
		$query = $_POST['query'];
		$reply = $_POST['reply'];

		$sql = "SELECT * FROM messages WHERE  replies = '$reply' AND queries = '$query' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			?><script>swal("Query Already Exist");</script><?php
		}
		else{
			
			$sql = "INSERT INTO `messages` (`replies`, `queries`, `sn`) VALUES ('$reply', '$query', NULL)";
			if (mysqli_query($conn, $sql)) {

				?><script>swal("Success");</script><?php
				
			}
			else{

				?><script>swal("Fail, Try Again");</script><?php

			}
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
						<h6>Add FAQs and Answers</h6>
					</span>

					

					<div class="wrap-input100 validate-input" data-validate = "Add FAQs">
						<input class="input100" type="text" name="query" placeholder="Add FAQs">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Add Answers to FAQs">
						<input class="input100" type="text" name="reply" placeholder="Add Answers to FAQs">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-file" aria-hidden="true"></i>
						</span>
					</div>


					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="add">
							Add     
						</button>
					</div>


						<div class="text-center">
					<a href="../admin/admin.php" class="bg-primary rounded text-light">Back to Admin</a>
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