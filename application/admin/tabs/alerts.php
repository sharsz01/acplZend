<?php 
		
	$id = "userId";
	$status = "alert_status";
	$fname = "firstName";
	$lname = "lastName";
	$dateReg = "dateRegistered";
		
		
	$SQL = "SELECT * FROM user";
	$result = mysqli_query($db, $SQL);
		
	$count = 0;
		
	while($row = mysqli_fetch_assoc($result)){
			
		if(strcmp("Unread", $row[$status]) == 0){
			buildUserAlert($row[$id], $row[$fname], $row[$lname], $row[$dateReg]);
			
			$count++;
		}		
	}
		
	function buildUserAlert($id, $fname, $lname, $date){
		$name = $fname . ' ' . $lname;
		$msg = $name . ' has applied for an individual radio on ' . $date;
		
		echo('<div class="panel panel-primary"><div class="panel-heading">Unread alert - Individual Application</div><div class="row">');
			
		echo('<div class="col-sm-10"><div class="panel-body">' . $msg . '</div></div>');
		echo('<div class="col-sm-2"><button type="button" class="btn btn-primary" style="margin: 10px;">View Details</button></div>');
		echo('<div class="pull-right col-sm-2"><button type="button" class="btn btn-warning" style="margin: 10px;">Dismiss</button></div>');
			
		echo('</div></div>');
	}
	
	function buildOrganizationAlert($orgName, $date){
		$msg = $orgName . ' has applied for radios on ' . $date;
	}
		
		
?>