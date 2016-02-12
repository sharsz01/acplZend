<?php

$db = mysqli_connect('localhost', 'root', '', 'audioreadingservice') or die('Error: ' . mysqli_connect_error($db));

$return = array();

$SQL = "INSERT INTO organization (dateRegistered, ipRegistered, organizationName,"
        . "organizationType, firstName, lastName, positionTitle, streetAddress,"
        . "altAddress, city, state, zip, phone, altPhone, email, numRadios,"
        . "howLearn, signature, dateSigned, notes)" .
        "VALUES ('" . isset($_REQUEST['dateRegistered']) . "', '" . isset($_REQUEST['ipRegistered'])
        . "', '" . isset($_REQUEST['organizationName']) . "', '" . isset($_REQUEST['organizationType'])
        . "', '" . isset($_REQUEST['firstName']) . "', '" . isset($_REQUEST['lastName']) 
        . "', '" . isset($_REQUEST['positionTitle']) . "', '" . isset($_REQUEST['streetAddress']) 
        . "', '" . isset($_REQUEST['altAddress']) . "', '" . isset($_REQUEST['city']) 
        . "', '" . isset($_REQUEST['state']) . "', '" . isset($_REQUEST['zip'])
        . "', '" . isset($_REQUEST['phone']) . "', '" . isset($_REQUEST['altPhone'])
        . "', '" . isset($_REQUEST['email']) . "', '" . isset($_REQUEST['numRadios'])
        . "', '" . isset($_REQUEST['howLearn']) . "', '" . isset($_REQUEST['signature'])
        . "', '" . isset($_REQUEST['dateSigned']) . "', '" . isset($_REQUEST['notes'])
        . "')";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);
?>
