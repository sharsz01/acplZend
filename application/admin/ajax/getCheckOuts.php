<?php

require('config/dbConnect.php');

$return = array();

$SQL = "SELECT c.checkOutId, r.controlNum, c.dateOut, c.dateIn "
			."FROM check_out c "
			."LEFT JOIN radio r "
			."ON (c.radioId = r.radioId) "
			."WHERE c.userType = '".$_REQUEST['userType']."' "
			."AND c.userId = '".$_REQUEST['userId']."';";

$result = mysqli_query($db, $SQL);

$return['success'] = true;
$return['result'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($return);

?>