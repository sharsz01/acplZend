<?php

$db = mysqli_connect('localhost', 'root', '', 'audioreadingservice') or die('Error: '.mysqli_connect_error($db));

$return = array();

$SQL = "INSERT INTO radio (controlNum, modelNum, manufacturer, dateOfPurchase, status, headphones, battery, wave, radioCondition, notes)".
	"VALUES ('".$_REQUEST['controlNum']."', '".$_REQUEST['modelNum']."', '".$_REQUEST['manufacturer']."', '".$_REQUEST['dateOfPurchase']."', '".
	$_REQUEST['status']."', '".$_REQUEST['headphones']."', '".$_REQUEST['battery']."', '".$_REQUEST['wave']."', '".$_REQUEST['radioCondition']."', '".$_REQUEST['notes']."')";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>