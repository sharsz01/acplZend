<?php

require('config/dbConnect.php');

$return = array();

$SQL = "SELECT radioStatus FROM radio WHERE controlNum='".$_REQUEST['controlNum']."';";

$result = mysqli_query($db, $SQL);

$return['success'] = true;
$return['result'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($return);

?>