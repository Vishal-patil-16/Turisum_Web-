<?php 

session_start();
include("includes/db.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
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

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

	<header id="header" class="fixed-top d-flex align-items-center">
	<div class="container">
		<div
			class="header-container d-flex align-items-center justify-content-between">
			<div class="logo">
				<h1 class="text-light">
					<a href="home.jsp"><span>Tourism Software</span></a>
				</h1>
			</div>

			<nav id="navbar" class="navbar">
			<ul>
            <li><a href="userHome.php" class="nav-link scrollto active" >Home</a></li>
            <li><a href="userHome.php" class="nav-link scrollto active" >View Package</a></li>
            <li><a href="userHome.php" class="nav-link scrollto active" >Booking</a></li>
            <li><a href="adminLogin.php" class="nav-link scrollto active" >logout</a></li>
            
			<li><a href="#" class="nav-link scrollto active" ></a></li>
			<li><a href="#" class="nav-link scrollto active" ></a></li>
		</ul> 

			<i class="bi bi-list mobile-nav-toggle"></i> </nav>
			<!-- .navbar -->

		</div>
		<!-- End Header Container -->
	</div>
	</header>
	<br>
	<br>
	<br>
	<!-- ======= Contact Section ======= -->

	<section id="contact" class="contact">
	<div class="container">
		<div class="row">
			<?php
		         	
		         	$sel_c="select * from package_details ORDER BY p_id DESC";
					$run_c =mysqli_query($con,$sel_c);
					$sr_no=0;
					while($row=mysqli_fetch_array($run_c ))
					{
						$sr_no++;
						$p_id=$row['p_id'];
						$package_name=$row['package_name'];
						$place_name =$row['place_name'];
						$place_img=$row['place_img'];	
						$hotel_name=$row['hotel_name'];
						$hotel_city=$row['hotel_city'];
						$hotel_img=$row['hotel_img'];
						$about_place=$row['about_place'];
						$visit_location=$row['visit_location'];
						$p_price=$row['p_price'];
			   ?>


               <div class="row">
               		<div class="section-title" data-aos="fade-left">
						<h2><?php echo $package_name; ?></h2>
					</div>
               		<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
               			<img src="image/<?php echo $place_img; ?>" style="width: 100%; height: 50%;">
               			<div class="section-title">
							<h2><?php echo $place_name; ?></h2>
						</div>
						<div class="icon">
						</div>
					</div>
					
					<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
               			<img src="image/<?php echo $hotel_img; ?>" style="width: 100%;height: 50%;">
               			<div class="section-title">
							<h2><?php echo $hotel_name; ?></h2>
						</div>
						<div class="icon">
						</div>
					</div>
					
					<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
               				<p>
               					<i class="fa fa-info-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;<?php echo $about_place; ?></i>
							</p>
							<p>
								<i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;<?php echo $visit_location; ?></i>
							</p>
							<p>
								<i class="fa fa-inr">&nbsp;&nbsp;&nbsp;<?php echo $p_price; ?></i>
							</p>
							<p><button type="button" class="btn btn-success"><a href="deletePackage.php?p_id=<?php echo $p_id; ?>" style="color: white">Booking</a></button>							
							</p>

					</div>
				</div>
<hr/>	
 				<?php 
					}
				?>

		</div>
	</div>
	</section>



	<!-- ======= Footer ======= -->
	<footer id="footer">
	<div class="container">


		<div class="container d-md-flex py-4">

			<div class="me-md-auto text-center text-md-start">
				<div class="copyright">
					&copy; Copyright <strong><span>Bethany</span></strong>. All Rights
					Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> <a
					href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a
					href="#" class="instagram"><i class="bx bxl-instagram"></i></a> <a
					href="#" class="google-plus"><i class="bx bxl-skype"></i></a> <a
					href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			</div>
		</div>
	</div>
	</footer>
	<!-- End Footer -->

	<a href="#"
		class="back-to-top d-flex align-items-center justify-content-center"><i
		class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/purecounter/purecounter.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>