<?php
$conn = new mysqli('localhost','root','', 'audioreadingservice');

if($conn->connect_errno){
	echo "Failed to connect.";
}

?>