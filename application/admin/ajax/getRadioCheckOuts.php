<?php

require('config/dbConnect.php');

$return = array();

$SQL = "SELECT userId, userType, DATE_FORMAT(dateOut,'%m/%d/%Y') AS 'dateOut', DATE_FORMAT(dateIn,'%m/%d/%Y') AS 'dateIn' "
			."FROM check_out WHERE radioId = '".$_REQUEST['radioId']."' ORDER BY dateOut DESC;";

$resultList = mysqli_query($db, $SQL);

$return['html'] = '';

if(mysqli_num_rows($resultList) == 0) {
	$return['html'] .= '<tr><td>No radios checked out</td></tr>';
	$return['success'] = true;
	exit(json_encode($return));
}

while($row = mysqli_fetch_assoc($resultList)) {
	
	$return['html'] .= '<tr class="checkOutRow" data-id="'.$row['userId'].'" data-type="'.$row['userType'].'">';
	
	 if ($row['userId'] == -1) {
		 
		$return['html'] .= '<td>Radio Recycled</td>';
		$return['html'] .= '<td>'.$row['dateOut'].'</td>';
		$return['html'] .= '<td>Recycled</td>';
		$return['html'] .= '</tr>';
		continue;
		 
	 } else if($row['userType'] == 'ind') {
		
		$SQL = "SELECT CONCAT(firstName, ' ', lastName) AS 'userName' "
				."FROM user WHERE userId = '".$row['userId']."';";
		
		$result = mysqli_query($db, $SQL);
		$name = mysqli_fetch_assoc($result);
		$return['html'] .= '<td>'.$name['userName'].'</td>';
		
	} else if ($row['userType'] == 'org') {
		
		$SQL = "SELECT organizationName "
				."FROM organization WHERE organizationId = '".$row['userId']."';";
		
		$result = mysqli_query($db, $SQL);
		$name = mysqli_fetch_assoc($result);
		$return['html'] .= '<td>'.$name['organizationName'].'</td>';
		
	} else {
		$return['success'] = false;
		$return['error'] = 'Invalid userType';
		exit(json_encode($return));
	}
	
	$return['html'] .= '<td>'.$row['dateOut'].'</td>';
	
	if($row['dateIn'] == '00/00/0000')
		$return['html'] .= '<td>Checked Out</td>';
	else
		$return['html'] .= '<td>'.$row['dateIn'].'</td>';
	
	$return['html'] .= '</tr>';

}

$return['success'] = true;

echo json_encode($return);

?>