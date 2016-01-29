<?php

$db = mysqli_connect('localhost', 'root', '', 'audioreadingservice') or die('Error: '.mysqli_connect_error($db));

$return = array();

$SQL = "UPDATE radio SET controlNum='".$_REQUEST['controlNum']."', modelNum='".$_REQUEST['modelNum']."', manufacturer='".$_REQUEST['manufacturer'].
	"', dateOfPurchase='".$_REQUEST['dateOfPurchase']."', status='".$_REQUEST['status']."', headphones='".$_REQUEST['headphones'].
	"', battery='".$_REQUEST['battery']."', wave='".$_REQUEST['wave']."', radioCondition='".$_REQUEST['radioCondition']."', notes='".$_REQUEST['notes'].
	"' WHERE radioId='".$_REQUEST['radioId']."';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>