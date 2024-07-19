<?php
session_start();
include("includes/db.php");


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

