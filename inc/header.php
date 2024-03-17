<?php 

if(isset($_POST['logout'])){
session_unset();
session_destroy();
header("location:login.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Attendance</title>
	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

	<script src="js/main.js"></script>
</head>
<body style="
background-image:url('assets/img/bg.jpg');
background-size:cover;
background-repeat:no-repeat;
">
	<div class="container mb-3">
		<div class="card card-body bg-light text-center">
			<h2>Attendance management system</h2>
		</div>
	</div>
	<?Php if(isset($_SESSION['admin'])){?>
	<div class="text t" style="text-align: right; padding-right:80px">
		<form method="post">
		<input type="submit" class="btn btn-danger" value="Logout" name="logout">
			</form>
	</div>

	<?Php }?>