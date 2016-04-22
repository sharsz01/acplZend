<?php

require('config/dbConnect.php');

$return = array();

$SQL = "UPDATE check_out SET dateIn = CURDATE() WHERE checkOutId = '".$_REQUEST['checkOutId']."';".
			"UPDATE  radio SET radioStatus = 'Checked In' WHERE controlNum = '".$_REQUEST['controlNum']."'";

$result = mysqli_multi_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>