<?php	

	//if is used to react to the button being pressed
	if (isset($_POST['exportUsers']))
	{
		//set up filename and tell the browser to download said filename instead of placing it in root
		$file = 'backupUsers_' . date('His') . '.csv';
		header('Content-Disposition: attachment; filename='.$file);
		$output = fopen('php://output', 'w');
		
		//open the connection to the database
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//add the column headings to the .csv file
		fputcsv($output, array('User ID', 'Date Registered', 'IP Registered', 'First Name', 'Last Name', 'Birthday', 'Address', 'Address', 'City', 'State', 'Zip', 'Primary Phone', 'Alternate Phone', 'Email Address', 'Contact Name', 'Relationship', 'Contact Address', 'Contact Address', 'Contact City', 'Contact State', 'Contact Zip', 'Contact Primary Phone', 'Contact Alternate Phone', 'Contact Email', 'Disability', 'How did you learn about us', 'Race', 'Income', 'Number of beds in home', 'Signature', 'Date Signed', 'Mail to', 'Notes'));
		
		//use a query to get all rows from the table user
		//to add support for other tables change user to a differnt table name
		$rows = mysql_query('SELECT * FROM user');
		
		//loop over the query and put the results into the .csv file
		while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
	}
	
	//if is used to react to the button being pressed
	if (isset($_POST['exportRadios']))
	{
		//set up filename and tell the browser to download said filename instead of placing it in root
		$file = 'backupRadios_' . date('His') . '.csv';
		header('Content-Disposition: attachment; filename='.$file);
		$output = fopen('php://output', 'w');
		
		//open the connection to the database
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//add the column headings to the .csv file
		fputcsv($output, array('Radio ID', 'Control Number', 'Model Number', 'Manufacturer', 'Date of Purchase', 'Radio Status', 'Headphones?', 'Battery?', 'Wave?', 'Radio Condition', 'Notes'));
		
		//use a query to get all rows from the table user
		//to add support for other tables change user to a differnt table name
		$rows = mysql_query('SELECT * FROM radio');
		
		//loop over the query and put the results into the .csv file
		while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
	}
?>
