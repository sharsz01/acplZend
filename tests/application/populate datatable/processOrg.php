<?php
require_once('config.php');


$query = $conn->query("select birthday, city, email from user");

while($fetch = mysqli_fetch_array($query))
{
	//$output[] = array ($fetch[0], $fetch[1]);//, $fetch[2]);
	$output[] = array ($fetch[0], $fetch[1], $fetch[2]);
}
echo json_encode($output);

?>