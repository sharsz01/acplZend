<!--allows us to use modal dialog boxes -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<?php
	//variables for the creation of a new user
	$username = mysql_real_escape_string($_POST['newUsername']);
	$password = mysql_real_escape_string($_POST['newUserPassword']);
	$passwordAgain = mysql_real_escape_string($_POST['newUserPasswordAgain']);
	
	//set up database connection
	$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
	mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
	
	//check if username exists already
	$res = mysql_query("select * from login_master where username = '".$username."'");
	if(mysql_num_rows($res) > 0)
	{
		//inform the user the username already exists
		echo '<div id="alreadyExistsModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Error</h4>
						</div>
						<div class="modal-body">
							<p>Error: The username already exists.</p>
						</div>
						<div class="modal-footer">
							<button type="button" id="closeBtn" class="btn btn-default" data-dismiss="modal">Close</button>
						<div>
					</div>
				</div>
			</div>
			
			<script>
				$(\'#alreadyExistsModal\').modal(\'show\');
				document.getElementById("closeBtn").onclick = function () 
				{
					location.href = "../admin.php";
				};
			</script>';
	}
	else
	{
		//check if the passwords match
		if($password == $passwordAgain)
		{
			//add the new user to the database
			mysql_query("insert into login_master (username,password) values('".$username."','".md5($password)."')");
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}
		else
		{
			//inform the user the passwords do not match
			echo '<div id="alreadyExistsModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Error</h4>
							</div>
							<div class="modal-body">
								<p>Error: The passwords do not match.</p>
							</div>
							<div class="modal-footer">
								<button type="button" id="closeBtn" class="btn btn-default" data-dismiss="modal">Close</button>
							<div>
						</div>
					</div>
				</div>
				
				<script>
					$(\'#alreadyExistsModal\').modal(\'show\');
					document.getElementById("closeBtn").onclick = function () 
					{
						location.href = "../admin.php";
					};
				</script>';
		}
	}
?>
