<?php

require '../configs/dbConnect.php';

// Only provide service check-ups for Active listeners
$SQL = 'SELECT * FROM user WHERE status="Applicant";';
//$SQL = 'SELECT * FROM user WHERE status="Active";';
$result = mysqli_query($db, $SQL);

$listeners = [];
$today = date('Y-m-d');

while ($row = mysqli_fetch_assoc($result)) {
    $date = $row["dateRegistered"];
    $fname = $row["firstName"];
    $lname = $row["lastName"];
    $email = $row["email"];
    $contactEmail = $row["contactEmail"];

    $arr = [];

    // Service check reminder conditions
	/////////////////////////////////////////////////////////////////////
	// Loop by 6 month intervals until it's time for next service check
	while($date < $today){
		$date = strtotime('+6 months', strtotime($date)); // Add desired amount of interval by months
		$date = date('Y-m-d', $date);
		if ($date == $today){	// Time to perform a service check - send email alert
			
			$name = $fname . " " . $lname;	// Name of listener to check up on
			array_push($arr, $name);
			array_push($listeners, $arr);
			
		}
	}
	
    // Delete the array
    unset($arr);
    
}

?>

