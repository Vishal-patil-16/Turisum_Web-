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

<!-- ------------Form------------- -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="assets/css/addNewForm.css" rel="stylesheet">

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
            <li><a href="adminHome.php" class="nav-link scrollto active" >Home</a></li>
            <li class="dropdown"><a href="#"><span>Package</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="addNewPackage.php">Add New Package</a></li>
              <li><a href="adminViewPackage.php">View All Package</a></li>
            </ul>
            </li>
            <li><a href="#" class="nav-link scrollto active" >View Booking</a></li>
            <li><a href="#" class="nav-link scrollto active" >View Booking</a></li>
            <li><a href="index.php" class="nav-link scrollto active" >Logout</a></li>
            <li><a href="#" class="nav-link scrollto active" ></a></li>
            <li><a href="#" class="nav-link scrollto active" ></a></li>
        </ul>

			<i class="bi bi-list mobile-nav-toggle"></i> </nav>
			<!-- .navbar -->

		</div>
		<!-- End Header Container -->
	</div>
	</header>
	
	<!-- ======= Contact Section ======= -->
	
<div class="container contact-form">
            <div class="contact-image">
                <img src="image/1.jpg" alt="rocket_contact"/>
            </div>
            <form action="addNewPackage.php" method="post" enctype="multipart/form-data" id="frm1">
                <h3>Add Package Details</h3>
               
               <div class="row">

                    <div class="col-md-4">
                    	<div class="form-group">
                            <input type="text" name="package_name" class="form-control" placeholder="Package Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="place_name" class="form-control" placeholder="Place Name *" value="" />
                        </div>
                        <div class="form-group">
                           <label>Place Image</label>
                           </div>
                        <div class="form-group">
                            <input type="file" name="place_image" class="form-control" placeholder="Place Image" value="" />
                        </div>
                                          	
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="hotel_name" class="form-control" placeholder="Hotel Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="hotel_city" class="form-control" placeholder="Hotel City *" value="" />
                        </div>
                        <div class="form-group">
                            <label>Hotel Image</label>
                        </div>
                        <div class="form-group">
                            <input type="file" name="hotel_image" class="form-control" placeholder="Place Image" value="" />
                        </div>                        
                        
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <div class="form-group">
                            <textarea name="about_place" class="form-control" placeholder="About Places Information *" style="width: 100%; height: 80px;"></textarea>
                        </div>
                        <div class="form-group">
                           	<textarea name="tourist_places_info" class="form-control" placeholder="Included Tourist Places *" style="width: 100%; height: 80px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" name="package_amount" class="form-control" placeholder="Package Amount *" value="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="add_package" class="btn btn-success">Add Package</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
</div>



	<section id="contact" class="contact">
	<div class="container">
		<div class="row">
			<div class="section-title" data-aos="fade-left">
				<h2>Family Packages</h2>
			</div>


			<div class="row">
				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
					<img src="assets/img/a.jpg"
						style="width: 350px; height: 240px">
				</div>
				<div class="col-lg-6" data-aos="fade-right">
					<div align="left">
						<div class="section-title">
							<h2>Rajstan</h2>
						</div>
						<div class="icon">
							<p>
								<i class="bi bi-clock">No of days</i>
							</p>
						</div>
						<p>Charges</p>
						<button type="button" class="btn btn-success">Success</button>
						<br>
					</div>
				</div>
				<div class="col-lg-2" data-aos="fade-right">Helllo</div>
			</div>
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

<?php


				global $con;
		
		if(isset($_POST['add_package']))
		{
				 
				$package_name = $_POST['package_name'];
				$place_name = $_POST['place_name'];
				$place_image = $_FILES['place_image']['name'];
				$place_image_tmp = $_FILES['place_image']['tmp_name'];

				move_uploaded_file($place_image_tmp,"image/$place_image");
			 


				$hotel_name = $_POST['hotel_name'];
				$hotel_city = $_POST['hotel_city'];
				$hotel_image = $_FILES['hotel_image']['name'];
				$hotel_image_tmp = $_FILES['hotel_image']['tmp_name'];
				move_uploaded_file($hotel_image_tmp,"image/$hotel_image");
				
				
				$about_place = $_POST['about_place'];
				$tourist_places_info = $_POST['tourist_places_info'];
				$package_amount = $_POST['package_amount'];
				
				
				// Insert Record in DB
			 
				$insert_c = "INSERT INTO `package_details`(`package_name`, `place_name`, `place_img`, `hotel_name`, `hotel_city`, `hotel_img`, `about_place`, `visit_location`, `p_price`, `package_status`) VALUES ('$package_name','$place_name','$place_image','$hotel_name','$hotel_city','$hotel_image','$about_place','$tourist_places_info','$package_amount','Available')";
			 
				//print($insert_c);
				
				$run_c = mysqli_query($con,$insert_c);	
			 
				if($run_c!=1)
				{
				
					echo "<script>alert('failure...!')</script>";
					
				}else{
							echo "<script>alert('Package Add successful, Thanks...!')</script>";
							echo "<script>window.open('addNewPackage.php','_self')</script>";	
						}
				
		
		}
		?>



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
