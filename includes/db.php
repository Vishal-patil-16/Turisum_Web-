<?php

$con = mysqli_connect("localhost","root","","tours_travels");

if(mysqli_connect_errno())
{
	echo "Failed to Connect to Mysql: " . mysqli_connect_error();
}

?>