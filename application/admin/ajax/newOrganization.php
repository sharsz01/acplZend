<?php

require('config/dbConnect.php');

$return = array();

$SQL = "INSERT INTO organization (dateRegistered, ipRegistered, organizationName,"
        . "organizationType, firstName, lastName, positionTitle, street, streetLine2,"
        . "city, state, zip, phone, phone2, email, numRadios, numLicensedBeds,"
        . "numResidentialUnits, howLearn, signature, notes)" .
        "VALUES ('" . $_REQUEST['org-dateRegistered'] . "', '" . $_REQUEST['org-ipRegistered']
        . "', '" . $_REQUEST['org-organizationName'] . "', '" . $_REQUEST['org-organizationType']
        . "', '" . $_REQUEST['org-firstName'] . "', '" . $_REQUEST['org-lastName']
        . "', '" . $_REQUEST['org-positionTitle'] . "', '" . $_REQUEST['org-street']
        . "', '" . $_REQUEST['org-streetLine2'] . "', '" . $_REQUEST['org-city']
        . "', '" . $_REQUEST['org-state'] . "', '" . $_REQUEST['org-zip']
        . "', '" . $_REQUEST['org-phone'] . "', '" . $_REQUEST['org-phone2']
        . "', '" . $_REQUEST['org-email'] . "', '" . $_REQUEST['org-numRadios']
        . "', '" . $_REQUEST['org-numLicensedBeds'] . "', '" . $_REQUEST['org-numResidentialUnits']
        . "', '" . $_REQUEST['org-howLearn'] . "', '" . $_REQUEST['org-signature']
        . "', '" . $_REQUEST['org-notes'] . "');";
		
$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);
?>
