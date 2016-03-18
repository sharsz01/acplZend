<?php
	if (isset($_POST['importUsers']))
	{
		//open a connection to the database
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//counter to indicate what row we are on
		//this is used to figure out if we are at column titles or not
		$row = 1;
		//set file location sent from the html page
		$file = $_FILES['userFile']['tmp_name'];		
		
		//opens the file
		if (($handle = fopen($file, "r")) !== FALSE) 
		{
			//loop over the .csv file
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
			{
				//count the number of columns
				$num = count($data);
				//if this isn't the first row (and not the row titles)
				//run the query
				//change temp to an actual table containing user information
				if ($row != 1)
				{
					mysql_query("REPLACE INTO user VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."','".$data[21]."','".$data[22]."','".$data[23]."','".$data[24]."','".$data[25]."','".$data[26]."','".$data[27]."','".$data[28]."','".$data[29]."','".$data[30]."','".$data[31]."','".$data[32]."','".$data[33]."','".$data[34]."','".$data[35]."','".$data[36]."','".$data[37]."')");
					echo "<br />\n";
				}
				//used for column titles
				else
				{
					for ($c=0; $c < $num; $c++)
					{
						$array[$c] = $data[$c];
					}
						
				}
				$row++;
			}
			//close file and return to previous page
			fclose($handle);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
	
	if (isset($_POST['importRadios']))
	{
		//open a connection to the database
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//counter to indicate what row we are on
		//this is used to figure out if we are at column titles or not
		$row = 1;
		//set file location sent from the html page
		$file = $_FILES['userFile']['tmp_name'];		
		
		//opens the file
		if (($handle = fopen($file, "r")) !== FALSE) 
		{
			//loop over the .csv file
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
			{
				//count the number of columns
				$num = count($data);
				//if this isn't the first row (and not the row titles)
				//run the query
				//change temp to an actual table containing user information
				if ($row != 1)
				{
					mysql_query("REPLACE INTO radio VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."')");
					echo "<br />\n";
				}
				//used for column titles
				else
				{
					for ($c=0; $c < $num; $c++)
					{
						$array[$c] = $data[$c];
					}
						
				}
				$row++;
			}
			//close file and return to previous page
			fclose($handle);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
	
	if (isset($_POST['importOrganization']))
	{
		//open a connection to the database
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//counter to indicate what row we are on
		//this is used to figure out if we are at column titles or not
		$row = 1;
		//set file location sent from the html page
		$file = $_FILES['userFile']['tmp_name'];		
		
		//opens the file
		if (($handle = fopen($file, "r")) !== FALSE) 
		{
			//loop over the .csv file
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
			{
				//count the number of columns
				$num = count($data);
				//if this isn't the first row (and not the row titles)
				//run the query
				//change temp to an actual table containing user information
				if ($row != 1)
				{
					mysql_query("REPLACE INTO organization VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."','".$data[21]."','".$data[22]."','".$data[23]."','".$data[24]."','".$data[25]."')");
					echo "<br />\n";
				}
				//used for column titles
				else
				{
					for ($c=0; $c < $num; $c++)
					{
						$array[$c] = $data[$c];
					}
						
				}
				$row++;
			}
			//close file and return to previous page
			fclose($handle);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
?>
