<?php
        session_start();
	setcookie("user", "", time() -3600);
	setcookie("pass", "", time() -3600);
	setcookie(session_name(), "", time() - 3600);
	session_destroy();
        
	echo "<script>alert('Successfully logged out');window.location.href='loginForm.php';</script>";
?>
