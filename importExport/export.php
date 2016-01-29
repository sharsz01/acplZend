<?php	

	//if is used to react to the button being pressed
	if (isset($_POST['button1']))
	{
		//set up filename and tell the browser to download said filename instead of placing it in root
		$file = 'backupUsers_' . date('His') . '.csv';
		header('Content-Disposition: attachment; filename='.$file);
		$output = fopen('php://output', 'w');
		
		//open the connection to the database
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//use a query to get all rows from the table user
		//to add support for other tables change user to a differnt table name
		$rows = mysql_query('SELECT * FROM user');
		
		//loop over the query and put the results into the .csv file
		while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
	}
?>
