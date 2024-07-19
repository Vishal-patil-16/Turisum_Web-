<?php
session_start();
include("includes/db.php");
require_once("GlobalFunction.php");

$p_id=$_GET['p_id'];


//print_r("Ticket Booking Date".$c_date);
$delete_c = "DELETE FROM `package_details` WHERE p_id='".$p_id."'";
             
$run_c = mysqli_query($con,$delete_c);  
             
if($run_c!=1)
{

    echo "<script>alert('failure...!')</script>";
    echo "<script>window.open('adminViewPackage.php','_self')</script>";  
    
}else
{
    echo "<script>alert('Delete Package From Database.!')</script>";
    echo "<script>window.open('adminViewPackage.php','_self')</script>";  
}


?>