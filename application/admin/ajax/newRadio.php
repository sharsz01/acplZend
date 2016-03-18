<<<<<<< HEAD
<?php

require('config/dbConnect.php');

$return = array();

$SQL = "INSERT INTO radio (controlNum, modelNum, manufacturer, dateOfPurchase, radioStatus, headphones, battery, wave, radioCondition, notes)".
	" VALUES ('".$_REQUEST['controlNum']."', '".$_REQUEST['modelNum']."', '".$_REQUEST['manufacturer']."', '".$_REQUEST['dateOfPurchase']."', '".
	"Checked In', '".$_REQUEST['headphones']."', '".$_REQUEST['battery']."', '".$_REQUEST['wave']."', '".$_REQUEST['radioCondition']."', '".$_REQUEST['notes']."');";
	
$result = mysqli_query($db, $SQL);
$return['success'] = $result;

$SQL = "SELECT radioId FROM radio ORDER BY radioId DESC";
$result = mysqli_query($db, $SQL);
$id = mysqli_fetch_assoc($result);
$return['id'] = $id['radioId'];

echo json_encode($return);

?>
=======
<?php

require('config/dbConnect.php');

$return = array();

$SQL = "INSERT INTO radio (controlNum, modelNum, manufacturer, dateOfPurchase, radioStatus, headphones, battery, wave, radioCondition, notes)".
	" VALUES ('".$_REQUEST['controlNum']."', '".$_REQUEST['modelNum']."', '".$_REQUEST['manufacturer']."', '".$_REQUEST['dateOfPurchase']."', '".
	"Checked In', '".$_REQUEST['headphones']."', '".$_REQUEST['battery']."', '".$_REQUEST['wave']."', '".$_REQUEST['radioCondition']."', '".$_REQUEST['notes']."');";
	
$result = mysqli_query($db, $SQL);
$return['success'] = $result;

$SQL = "SELECT radioId FROM radio ORDER BY radioId DESC";
$result = mysqli_query($db, $SQL);
$id = mysqli_fetch_assoc($result);
$return['id'] = $id['radioId'];

echo json_encode($return);

?>
>>>>>>> origin/master
