<?php
		
	if(isset($_POST['login']))
	{
		
		$email = mysql_real_escape_string($_POST['email']);
		$c_pass = mysql_real_escape_string($_POST['password']);
		
		$sel_c = "select * from customer_details where password='$c_pass' AND email='$c_username' ";
		print($sel_c);
		
		$run_c = mysqli_query($con,$sel_c);
		
		if($row=mysqli_fetch_array($run_c))
		{
			$_SESSION['username']=$c_username;
			
			echo "<script>alert('Login Successfull...!')</script>";
			echo "<script>window.open('userHome.php','_self')</script>";
			
				
		}
		else
		{
			echo "<script>alert('Your Email or Password is incorrect, Please try again..!1')</script>";
		}
	}
		
		
		?>
