<?php

require('config/dbConnect.php');

$return = array();

//echo var_dump($_REQUEST);

$SQL = "SELECT * FROM radio";
$count = 1;

foreach ($_REQUEST as $key => $value) {
	if($count == 1)
		$SQL .= " WHERE ";
	else
	$SQL .= " AND ";
	
	if($value['type'] = 'binary') {
		$SQL .= $key.'='.$value['value'];
	} else if ($value['type'] = 'range') {
		$SQL .= $key.' BETWEEN '.$value['value'];
	} else {
		$SQL .= $key.' LIKE %'.$value['value'].'%';
	}
	$count++;
}
$SQL .= ";";

//echo $SQL;

$result = mysqli_query($db, $SQL);

$return['success'] = true;
$return['result'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($return);

?>
