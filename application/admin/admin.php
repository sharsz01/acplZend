<!DOCTYPE html>
<?php
session_start();

// Ensure user is authenticated to access admin interface
if (!($_SESSION["authenticated"])) { 
    header("location:../login/loginForm.php");
} else {
    // user is authenticated - show admin interface
}
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width" name="viewport">
        <title>ARS Admin</title>

        <script type="text/javascript" src="../../public/js/jquery-1.11.3.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

        <!-- for datatables -->
        <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.3.1/css/colReorder.dataTables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.3.1/js/dataTables.colReorder.min.js"></script>

        <!-- for input masks -->
        <script type="text/javascript" src="../../public/js/mask/jquery.inputmask.bundle.min.js"></script>
        <script type="text/javascript" src="../../public/js/mask/jquery.maskedinput.min.js"></script>
        
        
        <link href='../../public/css/admin.css' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="../../public/js/admin.js"></script>
    </head>

    <body>
        <div id="body">
            <button type="submit" value="Logout" class="btn btn-primary" style="float: right;" onClick="self.location = '../login/logout.php'">Logout</button>
            <div class="page-header"><img src="http://www.acpl.lib.in.us/images/default-source/logos/ars-logo-blue-acpl-web-01-final.tmb-medium.png?sfvrsn=3"></div>

            <ul class="nav nav-tabs">
                <li class="active"><a id="home-tab" data-toggle="tab" href="#home">Home</a></li>
                <li><a id="users-tab" data-toggle="tab" href="#users">Listeners</a></li>
                <li><a id="user-details-tab" data-toggle="tab" href="#user-details">Listener Details</a></li>

                <li><a id="organizations-tab" data-toggle="tab" href="#organizations">Organizations</a></li>
                <li><a id="organization-details-tab" data-toggle="tab" href="#organization-details">Organization Details</a></li>

                <li><a id="radios-tab" data-toggle="tab" href="#radios">Radios</a></li>
                <li><a id="radio-details-tab" data-toggle="tab" href="#radio-details">Radio Details</a></li>

                <li><a id="userManagment-tab" data-toggle="tab" href="#userManagement">User Management</a></li>
            </ul>

            <div class="tab-content">
                <?php
                require('../configs/dbConnect.php');

                require('tabs/home.php');
                require('tabs/userList.php');
                require('tabs/userDetails.php');
                require('tabs/organizationList.php');
                require('tabs/organizationDetails.php');
                require('tabs/radioList.php');
                require('tabs/radioDetails.php');
                require('tabs/userManagement.php');
                ?>
            </div>
        </div>

    </body>

</html>
