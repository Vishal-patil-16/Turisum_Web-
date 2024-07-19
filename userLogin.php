<?php
session_start();
include("includes/db.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Tourism Software</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Load icon library -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
	rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
	rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css"
	rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css"
	rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<style>
body,html {
	height: 100%;
	font-family: Arial, Helvetica, sans-serif;
}

* {
	box-sizing: border-box;
}

.bg-img {
	/* The image used */
	background-image: url("assets/img/h7.jpg");
	min-height: 800px;
	/* Center and scale the image nicely */
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
}

/* Add styles to the form container */
.contain {
	position: fixed;
	right: 50;
	margin: 70px;
	max-width: 500px;
	padding: 60px;
	background-color: #fff;
}

/* Full-width input fields */
input[type=text],input[type=password] {
	width: 100%;
	padding: 6px;
	margin: 5px 0 22px 0;
	border: none;
	background: #f1f1f1;
}

input[type=text]:focus,input[type=password]:focus {
	background-color: #ddd;
	outline: none;
}

/* Set a style for the submit button */
.btn {
	background-color: #3751ad;
	color: white;
	padding: 16px 20px;
	border: none;
	cursor: pointer;
	width: 100%;
	opacity: 0.9;
}

.btn:hover {
	opacity: 1;
}
</style>
</head>

<body>


	<!-- ======= Header ======= -->

	<header id="header" class="fixed-top d-flex align-items-center">
	<div class="container">
		<div
			class="header-container d-flex align-items-center justify-content-between">
			<div class="logo">
				<h1 class="text-light">
					<a href="home.jsp"><span>Tourism Software</span></a>
				</h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>
			<nav id="navbar" class="navbar">
			<ul>
            <li><a href="index.php" class="nav-link scrollto active" >Home</a></li>
			<li class="dropdown"><a href="viewPackageDetails.php"><span>Packages</span></a></li>
			<li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="userRegistration.php">User Registration</a></li>
                <li><a href="userLogin.php">User Login</a></li>
              </ul>
			</li>
			<li><a href="adminLogin.php" class="nav-link scrollto active" >Admin Login</a></li>
            
			<li><a href="#" class="nav-link scrollto active" ></a></li>
			<li><a href="#" class="nav-link scrollto active" ></a></li>
		</ul>  
			<i class="bi bi-list mobile-nav-toggle"></i></nav>
			<!-- .navbar -->

		</div>

		<!-- End Header Container -->
		<br> <br>
	</div>

	</header>
	<!-- End Header -->
	
	<div class="bg-img" align="left">
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="row">
			<div class="col-lg-6"></div>
			
			<div class="col-lg-5">
				<form action="userLogin.php" class="contain" method="post">
				<h1>User Login</h1>

				<label for="username"><b>Email ID</b></label> <input type="text"
					placeholder="Enter username" name="email" required> <label
					for="password"><b>Password</b></label> <input type="password"
					placeholder="Enter Password" name="password" required>

				<button type="submit" class="btn" name="login" value="Login">Login</button>
			</form>
			</div>		
			<div class="col-lg-1"></div>		
	</div>
</div>
		<?php
		
	if(isset($_POST['login']))
	{
		
		$email = mysql_real_escape_string($_POST['email']);
		$c_pass = mysql_real_escape_string($_POST['password']);
		
		$sel_c = "select * from customer_details where password='$c_pass' AND email='$email' ";
		print($sel_c);
		
		$run_c = mysqli_query($con,$sel_c);
		
		if($row=mysqli_fetch_array($run_c))
		{
			$_SESSION['email']=$email;
			
			echo "<script>alert('Login Successfull...!')</script>";
			echo "<script>window.open('userHome.php','_self')</script>";
			
				
		}
		else
		{
			echo "<script>alert('Your Email or Password is incorrect, Please try again..!1')</script>";
		}
	}
		
		
		?>


	<!-- ======= Footer ======= -->
	<footer id="footer">
	<div class="container d-md-flex py-4">

		<div class="me-md-auto text-center text-md-start">
			<div class="copyright">
				&copy; Copyright <strong><span></span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
				Designed by <a href="#">Student</a>
			</div>
		</div>
		<div class="social-links text-center text-md-right pt-3 pt-md-0">
		</div>
	</div>
	</footer>
	<!-- End Footer -->
</body>
</html>
