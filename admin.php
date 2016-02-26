<!DOCTYPE html>
<?php $db = mysqli_connect('localhost', 'root', '', 'audioreadingservice') or die('Error: '.mysqli_connect_error($db)); ?>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta content="width=device-width" name="viewport">
		<title>ARS Admin</title>
		
		<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		
		<link href='admin.css' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="admin.js"></script>
	</head>
	
	<body>
		<div id="body">
			<div class="page-header"><img src="http://www.acpl.lib.in.us/images/default-source/logos/ars-logo-blue-acpl-web-01-final.tmb-medium.png?sfvrsn=3"></div>
			
			<ul class="nav nav-tabs">
				<li class="active"><a id="home-tab" data-toggle="tab" href="#home">Home</a></li>
				<li><a id="users-tab" data-toggle="tab" href="#users">Users</a></li>
				<li><a id="user-details-tab" data-toggle="tab" href="#user-details">User Details</a></li>
				<li><a id="radios-tab" data-toggle="tab" href="#radios">Radios</a></li>
				<li><a id="radio-details-tab" data-toggle="tab" href="#radio-details">Radio Details</a></li>
			</ul>

			<div class="tab-content">
				
				<?php
					require('tabs/home.php');
					require('tabs/userList.php');
					require('tabs/userDetails.php');
					require('tabs/radioList.php');
					require('tabs/radioDetails.php');
				?>
				
			</div>
		</div>
		
	</body>
	
</html>