<?php

$db = mysqli_connect('localhost', 'root', '', 'audioreadingservice') or die('Error: '.mysqli_connect_error($db));

$return = array();

$SQL = "SELECT * FROM organization ";
$count = 1;

foreach ($_REQUEST as $key => $value) {
	if($count == 1)
		$SQL .= "WHERE ";
	else
	$SQL .= " AND ";
	$SQL .= "$key LIKE '%$value%'";
	$count++;
}
$SQL .= ";";

echo $SQL;

$result = mysqli_query($db, $SQL);

$return['success'] = true;
$return['result'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($return);

?>