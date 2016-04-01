<?php

require('config/dbConnect.php');

$return = array();

$SQL = "UPDATE radio SET controlNum='".$_REQUEST['radio-controlNum']."', modelNum='".$_REQUEST['radio-modelNum']
	."', manufacturer='".$_REQUEST['radio-manufacturer']."', dateOfPurchase='".$_REQUEST['radio-dateOfPurchase']
	."', headphones='".$_REQUEST['radio-headphones']."', battery='".$_REQUEST['radio-battery']
	."', wave='".$_REQUEST['radio-wave']."', radioCondition='".$_REQUEST['radio-radioCondition']
	."', notes='".$_REQUEST['radio-notes'].
	"' WHERE radioId='".$_REQUEST['radio-radioId']."';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>
