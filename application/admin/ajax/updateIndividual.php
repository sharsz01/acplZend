<?php

require('config/dbConnect.php');

$return = array();


$SQL = "UPDATE user SET dateRegistered='" . $_REQUEST['ind-dateRegistered']// . "', ipRegistered='" . $_REQUEST['ind-ipRegistered']
        . "', firstName='" . $_REQUEST['ind-firstName'] . "', lastName='" . $_REQUEST['ind-lastName']
        . "', birthday='" . $_REQUEST['ind-birthday'] . "', street='" . $_REQUEST['ind-street']
        . "', streetLine2='" . $_REQUEST['ind-streetLine2'] . "', city='" . $_REQUEST['ind-city']
        . "', state='" . $_REQUEST['ind-state'] . "', zip='" . $_REQUEST['ind-zip']
        . "', phone='" . $_REQUEST['ind-phone'] . "', phone='" . $_REQUEST['ind-phone2']
        . "', email='" . $_REQUEST['ind-email'] . "', contactFirstName='" . $_REQUEST['ind-contactFirstName']
        . "', contactLastName='" . $_REQUEST['ind-contactLastName'] . "', contactRelationship='" . $_REQUEST['ind-contactRelationship']
        . "', contactStreet='" . $_REQUEST['ind-contactStreet'] . "', contactStreetLine2='" . $_REQUEST['ind-contactStreetLine2']
        . "', contactCity='" . $_REQUEST['ind-contactCity'] . "', contactState='" . $_REQUEST['ind-contactState']
        . "', contactZip='" . $_REQUEST['ind-contactZip'] . "', contactPhone='" . $_REQUEST['ind-contactPhone']
        . "', contactPhone2='" . $_REQUEST['ind-contactPhone2'] . "', contactEmail='" . $_REQUEST['ind-contactEmail']
        . "', disability='" . $_REQUEST['ind-disability'] . "', otherDisability='" . $_REQUEST['ind-otherDisability'] . "', howLearn='" . $_REQUEST['ind-howLearn']
        . "', race='" . $_REQUEST['ind-race'] . "', income='" . $_REQUEST['ind-income']
        . "', inHomeNum='" . $_REQUEST['ind-inHomeNum'] . "', status='" . $_REQUEST['ind-status']
        . "', medium='" . $_REQUEST['ind-medium']
        . "', signature='" . $_REQUEST['ind-signature'] . "', mailTo='" . $_REQUEST['ind-mailTo']
        . "', notes='" . $_REQUEST['ind-notes'] . "', alert_status='" . $_REQUEST['ind-alertStatus']
        . "' WHERE userId='" . $_REQUEST['ind-userId'] . "';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);
?>
