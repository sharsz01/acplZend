<?php

require('config/dbConnect.php');

function array_map_callback($a) {
	global $db;
	return mysqli_real_escape_string($db, $a);
}
$_REQUEST = array_map('array_map_callback', $_REQUEST);

$return = array();

$SQL = "INSERT INTO radio (controlNum, modelNum, manufacturer, dateOfPurchase, radioStatus, headphones, battery, wave, radioCondition, notes)".
	" VALUES ('".$_REQUEST['radio-controlNum']."', '".$_REQUEST['radio-modelNum']
	."', '".$_REQUEST['radio-manufacturer']."', STR_TO_DATE('".$_REQUEST['radio-dateOfPurchase'] ."', '%m/%d/%Y')"
	.", '"."Checked In', '".$_REQUEST['radio-headphones']
	."', '".$_REQUEST['radio-battery']."', '".$_REQUEST['radio-wave']
	."', '".$_REQUEST['radio-radioCondition']."', '".$_REQUEST['radio-notes']."');";
	
$result = mysqli_query($db, $SQL);
$return['success'] = $result;

$SQL = "SELECT radioId FROM radio ORDER BY radioId DESC";
$result = mysqli_query($db, $SQL);
$id = mysqli_fetch_assoc($result);
$return['id'] = $id['radioId'];

echo json_encode($return);

?>