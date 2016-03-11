<?php

require('config/dbConnect.php');

$return = array();

$SQL = "INSERT INTO organization (dateRegistered, ipRegistered, organizationName,"
        . "organizationType, firstName, lastName, positionTitle, street, streetLine2"
        . "city, state, zip, phone, phone2, email, numRadios, numLicensedBeds,"
        . "numResidentialUnits, howLearn, signature, dateSigned, notes)" .
        "VALUES ('" . $_REQUEST['dateRegistered'] . "', '" . $_REQUEST['ipRegistered']
        . "', '" . $_REQUEST['organizationName'] . "', '" . $_REQUEST['organizationType']
        . "', '" . $_REQUEST['firstName'] . "', '" . $_REQUEST['lastName']
        . "', '" . $_REQUEST['positionTitle'] . "', '" . $_REQUEST['street']
        . "', '" . $_REQUEST['streetLine2'] . "', '" . $_REQUEST['city']
        . "', '" . $_REQUEST['state'] . "', '" . $_REQUEST['zip']
        . "', '" . $_REQUEST['phone'] . "', '" . $_REQUEST['phone2']
        . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['numRadios']
		. "', '" . $_REQUEST['numLicensedBeds'] . "', '" . $_REQUEST['numResidentialUnits']
        . "', '" . $_REQUEST['howLearn'] . "', '" . $_REQUEST['signature']
        . "', '" . $_REQUEST['dateSigned'] . "', '" . $_REQUEST['notes']
        . "')";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);
?>
