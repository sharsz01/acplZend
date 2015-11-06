
<?php

@session_start();

	$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
	mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
	
	$q = "select * from login_master where username = '".$_POST['user']."'";
	
	$res = mysql_query($q,$link) or die("Wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	if(!empty($row))
	{
		if($_POST['pass']==$row['password'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION["user"] = $row['username'];
			$_SESSION["userid"] = $row["id"];
			
			header("location:redirect.php");
		}
		else
		{
			echo "<script>alert('Wrong username and/or password');window.location.href='loginForm.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('No such user');window.location.href='loginForm.php';</script>";
	}
?>
