<?php
require_once('config.php');


$query = $conn->query("select * from user");

while($fetch = mysqli_fetch_array($query))
{
	//$output[] = array ($fetch[0], $fetch[1]);//, $fetch[2]);
	$output[] = array($fetch[0], $fetch[1], $fetch[2], $fetch[3], $fetch[4],
					$fetch[5], $fetch[6], $fetch[7], $fetch[8], $fetch[9],
					$fetch[10], $fetch[11], $fetch[12], $fetch[13], $fetch[14],
					$fetch[15], $fetch[16], $fetch[17], $fetch[18], $fetch[19],
					$fetch[20], $fetch[21], $fetch[22], $fetch[23], $fetch[24],
					$fetch[25], $fetch[26], $fetch[27], $fetch[28], $fetch[29]
				);
}
echo json_encode($output);

?>