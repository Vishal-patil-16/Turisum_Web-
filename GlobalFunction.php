<?php

class GlobalFunctions
{
	
	function getBookigSeatDetails($t_id) 
	{

		$db_host     = "localhost";
		 $db_username = "root";
 		 $db_password = "";
 		 $tr_details = array();

    	//connect to mysqli database (Host/Username/Password)
    	$connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error " . mysqli_error());


		//select MySQLi dabatase table
	    $db = mysqli_select_db($connection, "travelsystem") or die("Error " . mysqli_error());

	   	$sql = mysqli_query($connection, "SELECT * FROM travel_details where t_id='".$t_id."'");

	   	if($row = mysqli_fetch_array($sql)) 
	   	{
	   		$tr_details['t_id'] = $row['t_id'];
	   		$tr_details['bus_company_name'] = $row['bus_company_name'];
	   		$tr_details['bus_no'] = $row['bus_no'];
	   		$tr_details['source'] = $row['source'];
	   		$tr_details['destination'] = $row['destination'];
	   		$tr_details['t_price'] = $row['t_price'];
	   		$tr_details['about_route'] = $row['about_route'];
	   		$tr_details['bus_type'] = $row['bus_type'];
	   		$tr_details['duration'] = $row['duration'];
	   		$tr_details['source_time'] = $row['source_time'];
	   		$tr_details['destination_time'] = $row['destination_time'];

	   	}
	   //	print_r($tr_details);
	   	return $tr_details;
	}


function getBookigDetails($b_id) 
{

		$db_host     = "localhost";
		 $db_username = "root";
 		 $db_password = "";

    	//connect to mysqli database (Host/Username/Password)
    	$connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error " . mysqli_error());


		//select MySQLi dabatase table
	    $db = mysqli_select_db($connection, "travelsystem") or die("Error " . mysqli_error());

	   	$sql = mysqli_query($connection, "SELECT * FROM booking_details where b_id='".$b_id."'");

	   	if($row = mysqli_fetch_array($sql)) 
	   	{
	   		$tr_details['t_id'] = $row['t_id'];
	   		$tr_details['booking_by'] = $row['booking_by'];
	   		$tr_details['s_count'] = $row['s_count'];
	   		$tr_details['s_number'] = $row['s_number'];	   		
	   		$tr_details['bokking_mobile'] = $row['bokking_mobile'];	   		
	   		$tr_details['payment_sts'] = $row['payment_sts'];	
	   		$tr_details['ticker_d_gender'] = $row['ticker_d_gender'];
	   		$tr_details['travel_date'] = $row['travel_date'];
	   		$tr_details['ticket_sts'] = $row['ticket_sts'];
	   		$tr_details['booking_date'] = $row['booking_date'];
	   		

	   	}
	   //	print_r($tr_details);
	   	return $tr_details;
	}

	function getRemainingSeatDetail($t_id,$total_seat,$tr_date)  
{

		$db_host     = "localhost";
		 $db_username = "root";
 		 $db_password = "";

    	//connect to mysqli database (Host/Username/Password)
    	$connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error " . mysqli_error());


		//select MySQLi dabatase table
	    $db = mysqli_select_db($connection, "travelsystem") or die("Error " . mysqli_error());

	   	$sql = mysqli_query($connection, "SELECT * FROM booking_details where t_id='".$t_id."' AND travel_date='".$tr_date."' AND ticket_sts='Confirm'");
	   	$remainig_seat=0;
	   	$booking_seat=0;
	   	while($row = mysqli_fetch_array($sql)) 
	   	{
	   		$s_count = $row['s_count'];
	   		$booking_seat=$booking_seat+$s_count;
	   	}
	   	$remainig_seat=$total_seat-$booking_seat;
	   //	print_r($tr_details);
	   	return $remainig_seat;
}

}









function generate_string($input, $strength = 5) 
{
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}


function sendMsg($user_id,$msg)
{

	ob_start();

 	$msgc = urlencode($msg);

  //$msgc = URencode(msg, "UTF-8");
 /*$var ='http://sms.global91sms.in/api/mt/SendSMS?user=demo93&password=demo93&senderid=SGMSIN&channel=trans&DCS=8&flashsms=0&number='.$user_id.'&text='.$msgc.'&route=14';
*/
 /*$var='http://sms.360marketings.in/vendorsms/pushsms.aspx?user=yourUserID&password=yourPassword&msisdn='.$user_id.'&sid=TKUDHL&msg='.$msg.'&fl=0&dc=8';*/
 //echo $var;


$var='http://www.global91sms.in/app/smsapi/index.php?key=36073DF8C4E1E8&entity=1201161546490479562&tempid=1207161743839739518&routeid=459&type=text&contacts='.$user_id.'&senderid=SGMSIN&msg='.$msgc;
		
	$url = $var;
    $variablee = fopen($url, "rb"); 
    $mystring = stream_get_contents($variablee);
}



$car = new GlobalFunctions ();
$trr_de=$car->getBookigSeatDetails("1");
	//print_r("------------");
	//print_r($trr_de);


	
?>