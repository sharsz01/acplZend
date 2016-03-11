<?php

require('config/dbConnect.php');

$return = array();


$SQL = "UPDATE user SET dateRegistered='".$_REQUEST['dateRegistered']."', ipRegistered='".$_REQUEST['ipRegistered']
        . "', firstName='".$_REQUEST['firstName']."', lastName='".$_REQUEST['lastName']
        . "', birthday='".$_REQUEST['birthday']."', street='".$_REQUEST['street']
        . "', streetLine2='".$_REQUEST['streetLine2']."', city='".$_REQUEST['city']
	    . "', state='".$_REQUEST['state']."', zip='".$_REQUEST['zip']
        . "', phone='".$_REQUEST['phone']."', phone='".$_REQUEST['phone2']
        . "', email='" . $_REQUEST['email'] . "', contactFirstName='" . $_REQUEST['contactFirstName']
        . "', contactFirstName='" . $_REQUEST['contactFirstName'] . "', contactRelationship='" . $_REQUEST['contactRelationship']
        . "', contactStreet='" . $_REQUEST['contactStreet'] . "', contactStreetLine2='" . $_REQUEST['contactStreetLine2']
        . "', contactCity='" . $_REQUEST['contactCity'] . "', contactState='" . $_REQUEST['contactState']
        . "', contactZip='" . $_REQUEST['contactZip'] . "', contactPhone='" . $_REQUEST['contactPhone']
        . "', contactPhone2='" . $_REQUEST['contactPhone2'] . "', contactEmail='" . $_REQUEST['contactEmail']
        . "', disability='" . $_REQUEST['disability'] . "', otherDisability='" . $_REQUEST['otherDisability'] . "', howLearn='" . $_REQUEST['howLearn']
        . "', race='" . $_REQUEST['race'] . "', income='" . $_REQUEST['income']
        . "', inHomeNum='" . $_REQUEST['inHomeNum'] . "', status='" . $_REQUEST['status'] 
		. "', type='" . $_REQUEST['type'] . "', medium='" . $_REQUEST['medium']
		. "', signature='" . $_REQUEST['signature'] . "', dateSigned='" . $_REQUEST['dateSigned']
        . "', mailTo='" . $_REQUEST['mailTo'] . "', notes='" . $_REQUEST['notes']
	. "' WHERE userId='".$_REQUEST['userId']."';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>
