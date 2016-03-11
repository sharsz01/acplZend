<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include 'process.php';?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Secure Login</title>
	<style type="text/css">
		.login input{
			margin-left: 135px;
		}

		.login label{
			margin-left: 55px;
			position: absolute;
		}

		.login form{
			width: 350px;
			border: 1px solid;
			margin: auto;
		}
	</style>
</head>

<body>
<div class="login" >
  <form id="form1" name="form1" method="post" action="process.php">
    <p>
      <label for="user">Username:</label>
      <input type="text" name="user" id="user" />
    </p>
    <p>
      <label for="pass">Password: </label>
      <input type="password" name="pass" id="pass" />
	  <input name="keep" type="checkbox" > Keep me logged in
	  <br>
	  <br>
      <input type="submit" name="submit" id="submit" value="Submit" />
    </p>
  </form>
</div>
</body>
</html>
