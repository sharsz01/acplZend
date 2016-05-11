<?php

require('config/dbConnect.php');

function array_map_callback($a) {
	global $db;
	return mysqli_real_escape_string($db, $a);
}
$_REQUEST = array_map('array_map_callback', $_REQUEST);

$return = array();

$SQL = "INSERT INTO user (dateRegistered, firstName, lastName, birthday, street, streetLine2, city, state, zip, phone, phone2, email, contactFirstName, contactLastName, contactRelationship, contactStreet, contactStreetLine2, contactCity, contactState, contactZip, contactPhone, contactPhone2, contactEmail, disability, otherDisability, howLearn, race, income, inHomeNum, status, medium, signature, mailTo, notes, alert_status)" .
        "VALUES (STR_TO_DATE('".$_REQUEST['ind-dateRegistered'] ."', '%m/%d/%Y')"// . "', '" . $_REQUEST['ind-ipRegistered']
        . ", '" . $_REQUEST['ind-firstName'] . "', '" . $_REQUEST['ind-lastName']
        . "', STR_TO_DATE('" . $_REQUEST['ind-birthday'] ."', '%m/%d/%Y')" 
        
        . ", '" . $_REQUEST['ind-street']
        . "', '" . $_REQUEST['ind-streetLine2'] . "', '" . $_REQUEST['ind-city']
        . "', '" . $_REQUEST['ind-state'] . "', '" . $_REQUEST['ind-zip']
        . "', '" . $_REQUEST['ind-phone'] . "', '" . $_REQUEST['ind-phone2']
        . "', '" . $_REQUEST['ind-email'] . "', '" . $_REQUEST['ind-contactFirstName']
        . "', '" . $_REQUEST['ind-contactLastName'] . "', '" . $_REQUEST['ind-contactRelationship']
        . "', '" . $_REQUEST['ind-contactStreet'] . "', '" . $_REQUEST['ind-contactStreetLine2']
        . "', '" . $_REQUEST['ind-contactCity'] . "', '" . $_REQUEST['ind-contactState']
        . "', '" . $_REQUEST['ind-contactZip'] . "', '" . $_REQUEST['ind-contactPhone']
        . "', '" . $_REQUEST['ind-contactPhone2'] . "', '" . $_REQUEST['ind-contactEmail']
        . "', '" . $_REQUEST['ind-disability'] . "', '" . $_REQUEST['ind-otherDisability']
        . "', '" . $_REQUEST['ind-howLearn'] . "', '" . $_REQUEST['ind-race']
        . "', '" . $_REQUEST['ind-income'] . "', '" . $_REQUEST['ind-inHomeNum']
        . "', '" . $_REQUEST['ind-status'] 
        . "', '" . $_REQUEST['ind-medium'] . "', '" . $_REQUEST['ind-signature']
        . "', '" . $_REQUEST['ind-mailTo'] . "', '" . $_REQUEST['ind-notes']
        . "', '" . $_REQUEST['ind-alertStatus']
        . "')";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>
