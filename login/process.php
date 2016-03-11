
<?php
	$link = mysql_connect("localhost", "root", "") or die("Cannot Connect");
	mysql_select_db("audioreadingservice", $link) or die("Cannot select database");
		
	if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"]))
	{
		$res = mysql_query("select * from login_master where username = '".$_COOKIE['user']."'");
		$row = mysql_fetch_assoc($res);
		
		if(md5($_COOKIE["pass"])==$row['password'])
		{
			$_SESSION["authenticated"] = true;
			$_SESSION["user"] = $row['username'];
			$_SESSION["userid"] = $row['id'];
			
			setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);
			setcookie("pass", $_POST["pass"], time() + 7 * 24 * 60 * 60);
			
			header("location:redirect.php");
		}
		else
		{
			echo "<script>alert('Wrong username and/or password');window.location.href='loginForm.php';</script>";
		}
	}
	else if(isset($_POST['submit']))
	{
		$res = mysql_query("select * from login_master where username = '".$_POST['user']."'");
		$row = mysql_fetch_assoc($res);
		
		if(md5($_POST['pass'])==$row['password'])
		{
			$_SESSION["authenticated"] = true;
			$_SESSION["user"] = $row['username'];
			$_SESSION["userid"] = $row['id'];
			
			setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);
			if($_POST["keep"])
			{
				setcookie("pass", $_POST["pass"], time() + 7 * 24 * 60 * 60);
			}
			
			header("location:redirect.php");
		}
		else
		{
			echo "<script>alert('Wrong username and/or password');window.location.href='loginForm.php';</script>";
		}
	}
?>
