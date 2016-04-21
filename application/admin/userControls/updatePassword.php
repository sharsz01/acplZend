<!--allows us to use modal dialog boxes -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<?php
	//get the variables from the html page
	$username = $_POST['username'];
	$currentPassword = $_POST['currentPassword'];
	$newPassword = $_POST['newPassword'];
	$newPasswordAgain = $_POST['newPasswordAgain'];
	
	//establish a connection to the database
	$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
	mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
	
	//first check to verify the username and current password exist and are valid
	$res = mysql_query("select * from login_master where username = '".$username."'");
	$row = mysql_fetch_assoc($res);
	
	//verify the password entered matches what is in the database
	//if not throw an error, otherwise continue
	if(md5($currentPassword)==$row['password'])
	{
		//check if the new password and confirmation of new password match
		//if not throw an error, otherwise continue with password update
		if($newPassword == $newPasswordAgain)
		{
			mysql_query("update login_master set password = '".md5($newPassword)."' where username = '".$username."'");
		}
		else
		{
			//display a modal indicating the confirmation and new passwords do not match
			echo '<div id="alreadyExistsModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Error</h4>
						</div>
						<div class="modal-body">
							<p>Error: The new password and confirmation password does not match.</p>
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
	else
	{
		//display a modal indicating the current passwords do not match
		echo '<div id="alreadyExistsModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Error</h4>
						</div>
						<div class="modal-body">
							<p>Error: The password and username do not match.</p>
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
	header('Location: '.$_SERVER['HTTP_REFERER']);
?>
