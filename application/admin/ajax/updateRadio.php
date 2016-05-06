<?php

require('config/dbConnect.php');

function array_map_callback($a) {
	global $db;
	return mysqli_real_escape_string($db, $a);
}
$_REQUEST = array_map('array_map_callback', $_REQUEST);

$return = array();

$SQL = "UPDATE radio SET controlNum='".$_REQUEST['radio-controlNum']."', modelNum='".$_REQUEST['radio-modelNum']
	."', manufacturer='".$_REQUEST['radio-manufacturer']."', dateOfPurchase=STR_TO_DATE('".$_REQUEST['radio-dateOfPurchase'] ."', '%m/%d/%Y')"
	.", headphones='".$_REQUEST['radio-headphones']."', battery='".$_REQUEST['radio-battery']
	."', wave='".$_REQUEST['radio-wave']."', radioCondition='".$_REQUEST['radio-radioCondition']
	."', notes='".$_REQUEST['radio-notes'].
	"' WHERE radioId='".$_REQUEST['radio-radioId']."';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>
