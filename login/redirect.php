
<?php
	session_start();
	if(!isset($_SESSION['userid']))
	{
		?>
        <script>
			window.location="loginForm.php";
		</script>
        <?php
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Section</title>
</head>

<body>

<p> 
	Hi 
	<?php if(isset($_SESSION['userid'])) { echo $_SESSION['user'];}
        
        //header("location:databaseView.php");
        
        ?>
        
        <br /><br />
        <button id="redirect">View Database</button>

</p>
    
    <script>
        var btn = document.getElementById('redirect');
        btn.addEventListener('click', function(){
            document.location.href = "databaseView.php";
        });
    </script>

</body>
</html>
