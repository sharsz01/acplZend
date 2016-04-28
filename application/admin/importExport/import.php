<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

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
		
		//check if the file exists, if not alert the user
		if (!file_exists($file))
		{
			echo '<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Error</h4>
						  </div>
						  <div class="modal-body">
							<p>No file chosen or the file does not exists</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" id="closeBtn" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<script>
						$(\'#myModal\').modal({ show: true});
						document.getElementById("closeBtn").onclick = function () {
							location.href = "../admin.php";
						};
					</script>
					';
			return;
		}
		
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
					$dateRegistered_CorrectFormat = convertDate($data[1]);
					$birthday_CorrectFormat = convertDate($data[5]);
					mysql_query("REPLACE INTO user VALUES('".$data[0]."','".$dateRegistered_CorrectFormat."','".$data[2]."','".$data[3]."','".$data[4]."','".$birthday_CorrectFormat."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."','".$data[21]."','".$data[22]."','".$data[23]."','".$data[24]."','".$data[25]."','".$data[26]."','".$data[27]."','".$data[28]."','".$data[29]."','".$data[30]."','".$data[31]."','".$data[32]."','".$data[33]."','".$data[34]."','".$data[35]."','".$data[36]."')");
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
		
		//check if the file exists, if not alert the user
		if (!file_exists($file))
		{
			echo '<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Error</h4>
						  </div>
						  <div class="modal-body">
							<p>No file chosen or the file does not exists</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" id="closeBtn" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<script>
						$(\'#myModal\').modal({ show: true});
						document.getElementById("closeBtn").onclick = function () {
							location.href = "../admin.php";
						};
					</script>
					';
			return;
		}
		
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
					$dateOfPurchase_CorrectFormat = convertDate($data[4]);
					mysql_query("REPLACE INTO radio VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$dateOfPurchase_CorrectFormat."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."')");
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
		
		//check if the file exists, if not alert the user
		if (!file_exists($file))
		{
			echo '<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Error</h4>
						  </div>
						  <div class="modal-body">
							<p>No file chosen or the file does not exists</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" id="closeBtn" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
					<script>
						$(\'#myModal\').modal({ show: true});
						document.getElementById("closeBtn").onclick = function () {
							location.href = "../admin.php";
						};
					</script>
					';
			return;
		}
		
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
					$orgDateReg_CorrectFormat = convertData($data[1]);
					mysql_query("REPLACE INTO organization VALUES('".$data[0]."','".$orgDateReg_CorrectFormat."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."','".$data[21]."','".$data[22]."','".$data[23]."','".$data[24].")");
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
	
	function convertDate($oldDate)
	{
		if ($oldDate == "-")
		{
			return $oldDate;
		}
		$pieces = explode("/", $oldDate);
		$newDate = $pieces[2] . "-" . $pieces[0] . "-" . $pieces[1];
		
		return $newDate;
	}
?>

