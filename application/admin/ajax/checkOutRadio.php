<?php

require('config/dbConnect.php');

$return = array();

if(array_key_exists('userId', $_REQUEST)) {
	
	$SQL = "SELECT radioId, radioStatus FROM radio WHERE controlNum IN ('".implode("', '", $_REQUEST['inputList'])."') AND radioStatus = 'Checked In';";
	$resultList = mysqli_query($db, $SQL);
	
	if(mysqli_num_rows($resultList) != count($_REQUEST['inputList'])) {
		$return['success'] = false;
		$return['error'] = 'Please enter only available radios';
		exit(json_encode($return));
	}
	
	while($row = mysqli_fetch_assoc($resultList)) {
		
		if ($_REQUEST['userId'] == -1) {
			$status = 'Recycled';
		} else {
			$status = 'Checked Out';
		}
			
		$SQL = "INSERT INTO check_out (radioId, userId, userType, dateOut, dateIn) VALUES ".
		"('".$row['radioId']."', '".$_REQUEST['userId']."', '".$_REQUEST['userType']."', CURDATE(), '0000-00-00'); ".
		"UPDATE radio SET radioStatus = '".$status."' WHERE radioId = '".$row['radioId']."'";
		$result = mysqli_multi_query($db, $SQL);
		
		if(!$result) {
			$return['success'] = false;
			$return['error'] = 'Error creating check out';
			exit(json_encode($return));
		}
		while(mysqli_next_result($db) != 0) {}
		$return['success'] = true;
	}
} else {
	$return['success'] = false;
	$return['error'] = 'No user selected';
}

echo json_encode($return);

?>
