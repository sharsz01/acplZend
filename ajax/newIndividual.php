<?php

$db = mysqli_connect('localhost', 'root', '', 'audioreadingservice') or die('Error: ' . mysqli_connect_error($db));

$return = array();

$SQL = "INSERT INTO user (dateRegistered, ipRegistered, firstName, lastName, birthday, street, streetLine2, city, state, zip, phone, altPhone, email, contactName, contactRelationship, contactStreet, contactStreetLine2, contactCity, contactState, contactZip, contactPhone, contactAltPhone, contactEmail, disability, howLearn, race, income, inHomeNum, signature, dateSigned, mailTo, notes)" .
        "VALUES ('" . isset($_REQUEST['dateRegistered']) . "', '" . isset($_REQUEST['ipRegistered'])
        . "', '" . isset($_REQUEST['firstName']) . "', '" . isset($_REQUEST['lastName'])
        . "', '" . isset($_REQUEST['birthday']) . "', '" . isset($_REQUEST['street'])
        . "', '" . isset($_REQUEST['streetLine2']) . "', '" . isset($_REQUEST['city']) 
        . "', '" . isset($_REQUEST['state']) . "', '" . isset($_REQUEST['zip']) 
        . "', '" . isset($_REQUEST['phone']) . "', '" . isset($_REQUEST['altPhone']) 
        . "', '" . isset($_REQUEST['email']) . "', '" . isset($_REQUEST['contactName']) 
        . "', '" . isset($_REQUEST['contactRelationship'])
        . "', '" . isset($_REQUEST['contactStreet']) . "', '" . isset($_REQUEST['contactStreetLine2'])
        . "', '" . isset($_REQUEST['contactCity']) . "', '" . isset($_REQUEST['contactState'])
        . "', '" . isset($_REQUEST['contactZip']) . "', '" . isset($_REQUEST['contactPhone'])
        . "', '" . isset($_REQUEST['contactAltPhone']) . "', '" . isset($_REQUEST['contactEmail'])
        . "', '" . isset($_REQUEST['disability']) . "', '" . isset($_REQUEST['howLearn'])
        . "', '" . isset($_REQUEST['race']) . "', '" . isset($_REQUEST['income'])
        . "', '" . isset($_REQUEST['inHomeNum']) . "', '" . isset($_REQUEST['signature'])
        . "', '" . isset($_REQUEST['dateSigned']) . "', '" . isset($_REQUEST['mailTo'])
        . "', '" . isset($_REQUEST['notes']) . "')";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);
?>
