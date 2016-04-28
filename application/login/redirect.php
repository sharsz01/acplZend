
<?php
session_start();
if (!isset($_SESSION['userid'])) {
    ?>
    <script>
        window.location = "loginForm.php";
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
            <?php
            header("location:../admin/admin.php");
            //echo $this->url(array('controller' => 'Admin', 'action' => 'admin'), 'default', true)
            ?>

        </p>
    </body>
</html>
