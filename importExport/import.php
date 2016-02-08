<?php
	if (isset($_POST['import']))
	{
		//open connection to database.
		$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
		mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
		//counter to indicate what row we are on
		//used so we can skip over the column titles
		$row = 1;
		
		//open the file
		if (($handle = fopen("test.csv", "r")) !== FALSE) 
		{
			//loop over the file
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
			{
			 	//if this is the first row, then it is the column titles
				if ($row != 1)
				{
				    	//otherwise add all of the data into the table temp
				    	//obviously we will replace this with a real table
					mysql_query("INSERT INTO temp VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."','".$data[21]."','".$data[22]."','".$data[23]."','".$data[24]."','".$data[25]."','".$data[26]."','".$data[27]."','".$data[28]."','".$data[29]."')");
				}
				//increment row counter
				$row++;
			}
			//close the file
			fclose($handle);
		}
	}
?>
