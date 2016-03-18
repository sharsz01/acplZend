<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Radio Application</title>
        <link type="text/css" rel="stylesheet" href="css/formCSS.css">
    </head>
	<body>
		<div class="container">
			<div style="width: 3000px;">
				<div style="background-color: #004c97; font-weight: 700; color: #FFFFFF;">
					<div style="float: left; width: 100px;">First Name</div>
                                        <div style="float: left; width: 100px;">Last Name</div>
					<div style="float: left; width: 100px;">DOB</div>
					<div style="float: left; width: 200px;">Street</div>
<!--                                        <div style="float: left; width: 200px;">Street Line 2</div>-->
					<div style="float: left; width: 150px;">City</div>
					<div style="float: left; width: 50px;">State</div>
					<div style="float: left; width: 50px;">Zip</div>
                                        <div style="float: left; width: 100px;">Phone</div>
<!--                                        <div style="float: left; width: 100px;">Alt. Phone</div>-->
                                        <div style="float: left; width: 200px;">Email</div>
					
					<div style="float: left; width: 100px;">Contact</div>
					<div style="float: left; width: 150px;">Relationship</div>
					<div style="float: left; width: 200px;">Street</div>
<!--                                        <div style="float: left; width: 200px;">Street Line 2</div>-->
					<div style="float: left; width: 150px;">City</div>
					<div style="float: left; width: 50px;">State</div>
					<div style="float: left; width: 50px;">Zip</div>
                                        <div style="float: left; width: 100px;">Phone</div>
<!--                                        <div style="float: left; width: 100px;">Alt. Phone</div>-->
					<div style="float: left; width: 200px;">Email</div>
					
					<div style="float: left; width: 150px;">Disability</div>
					<div style="float: left; width: 300px;">How Learned</div>
					<div style="float: left; width: 100px;">Race</div>
					<div style="float: left; width: 75px;">Income</div>
					<div style="float: left; width: 100px;">People in House</div>
					<div style="float: left; width: 100px;">Mail To</div>
					<div style="clear: both;"></div>
				</div>
				<?php
				$onRecord = 0;
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "audioreadingservice";
				
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				$SQL = "SELECT * FROM user ORDER BY userId";
				$result = mysqli_query($conn, $SQL);
				while($userRow = mysqli_fetch_assoc($result)) {
				?>
				<div style="background-color: <?php if($onRecord%2 == 0) { echo '#FFFFFF'; } else { echo '#EEEEEE'; } ?>;">
					<div id="user-<?php echo $userRow['userId']; ?>" class="userRow">
						<div style="float: left; width: 100px;"><?php echo $userRow['firstName']; ?></div>
						<div style="float: left; width: 100px;"><?php echo $userRow['lastName']; ?></div>
                                                <div style="float: left; width: 100px;"><?php echo $userRow['birthday']; ?></div>
						<div style="float: left; width: 200px;"><?php echo $userRow['street']; ?></div>
<!--                                                <div style="float: left; width: 100px;"><?php echo $userRow['streetLine2']; ?></div>-->
						<div style="float: left; width: 150px;"><?php echo $userRow['city']; ?></div>
						<div style="float: left; width: 50px;"><?php echo $userRow['state']; ?></div>
						<div style="float: left; width: 50px;"><?php echo $userRow['zip']; ?></div>
                                                <div style="float: left; width: 100px;"><?php echo $userRow['phone']; ?></div>
<!--                                                <div style="float: left; width: 100px;"><?php echo $userRow['altPhone']; ?></div>-->
                                                <div style="float: left; width: 200px;"><?php echo $userRow['email']; ?></div>
						
						<div style="float: left; width: 100px;"><?php echo $userRow['contactName']; ?></div>
						<div style="float: left; width: 150px;"><?php echo $userRow['contactRelationship']; ?></div>
						<div style="float: left; width: 200px;"><?php echo $userRow['contactStreet']; ?></div>
<!--						<div style="float: left; width: 100px;"><?php echo $userRow['contactStreetLine2']; ?></div>-->
						<div style="float: left; width: 150px;"><?php echo $userRow['contactCity']; ?></div>
						<div style="float: left; width: 50px;"><?php echo $userRow['contactState']; ?></div>
						<div style="float: left; width: 50px;"><?php echo $userRow['contactZip']; ?></div>
                                                <div style="float: left; width: 100px;"><?php echo $userRow['contactPhone']; ?></div>
<!--                                                <div style="float: left; width: 100px;"><?php echo $userRow['contactAltPhone']; ?></div>-->
						<div style="float: left; width: 200px;"><?php echo $userRow['contactEmail']; ?></div>
						
						<div style="float: left; width: 150px;"><?php echo $userRow['disability']; ?></div>
						<div style="float: left; width: 300px;"><?php echo $userRow['howLearn']; ?></div>
						<div style="float: left; width: 100px;"><?php echo $userRow['race']; ?></div>
						<div style="float: left; width: 75px;"><?php echo $userRow['income']; ?></div>
						<div style="float: left; width: 100px;"><?php echo $userRow['inHomeNum']; ?></div>
						<div style="float: left; width: 100px;"><?php echo $userRow['mailTo']; ?></div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<?php
					$onRecord++;
				}
				?>
			</div>
		</div>
	</body>
</html>