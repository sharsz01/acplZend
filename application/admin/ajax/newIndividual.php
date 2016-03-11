<?php

require('config/dbConnect.php');

$return = array();

$SQL = "INSERT INTO user (dateRegistered, ipRegistered, firstName, lastName, birthday, street, streetLine2, city, state, zip, phone, phone2, email, contactFirstName, contactLastName, contactRelationship, contactStreet, contactStreetLine2, contactCity, contactState, contactZip, contactPhone, contactPhone2, contactEmail, disability, otherDisability, howLearn, race, income, inHomeNum, status, type, medium, signature, dateSigned, mailTo, notes)" .
        "VALUES ('" . isset($_REQUEST['dateRegistered']) . "', '" . isset($_REQUEST['ipRegistered'])
        . "', '" . isset($_REQUEST['firstName']) . "', '" . isset($_REQUEST['lastName'])
        . "', '" . isset($_REQUEST['birthday']) . "', '" . isset($_REQUEST['street'])
        . "', '" . isset($_REQUEST['streetLine2']) . "', '" . isset($_REQUEST['city']) 
        . "', '" . isset($_REQUEST['state']) . "', '" . isset($_REQUEST['zip']) 
        . "', '" . isset($_REQUEST['phone']) . "', '" . isset($_REQUEST['phone2']) 
        . "', '" . isset($_REQUEST['email']) . "', '" . isset($_REQUEST['contactFirstName']) 
        . "', '" . isset($_REQUEST['contactLastName']) . "', '" . isset($_REQUEST['contactRelationship'])
        . "', '" . isset($_REQUEST['contactStreet']) . "', '" . isset($_REQUEST['contactStreetLine2'])
        . "', '" . isset($_REQUEST['contactCity']) . "', '" . isset($_REQUEST['contactState'])
        . "', '" . isset($_REQUEST['contactZip']) . "', '" . isset($_REQUEST['contactPhone'])
        . "', '" . isset($_REQUEST['contactPhone2']) . "', '" . isset($_REQUEST['contactEmail'])
        . "', '" . isset($_REQUEST['disability']) . "', '" . isset($_REQUEST['otherDisability'])
		. "', '" . isset($_REQUEST['howLearn']) . "', '" . isset($_REQUEST['race']) 
		. "', '" . isset($_REQUEST['income']) . "', '" . isset($_REQUEST['inHomeNum']) 
		. "', '" . isset($_REQUEST['status']) . "', '" . isset($_REQUEST['type'])
		. "', '" . isset($_REQUEST['medium']) . "', '" . isset($_REQUEST['signature'])
        . "', '" . isset($_REQUEST['dateSigned']) . "', '" . isset($_REQUEST['mailTo'])
        . "', '" . isset($_REQUEST['notes']) . "')";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);
?>
