<?php	

	//if is used to react to the button being pressed
	if (isset($_POST['button1']))
	{
		//specify the filename
		//date is used to give each file a unique name (h = hour, i = minute, s = second)
		$file = 'backupUsers_' . date('His') . '.csv';
		$output = fopen($file, 'w');
		
		//open the connection to the database
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//use a query to get all rows from the table user
		$rows = mysql_query('SELECT * FROM user');
		
		//loop over the query and put the results into the .csv file
		while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
		
	}
?>

<html>
	<head>
		<title>Export</title>
	</head>
	<body>
		<form method="POST" action=''>
			<input type="submit" name="button1" value="My Button">
		</form>
	</body>
</html>
