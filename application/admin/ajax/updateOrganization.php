<?php

require('config/dbConnect.php');

function array_map_callback($a) {
	global $db;
	return mysqli_real_escape_string($db, $a);
}
$_REQUEST = array_map('array_map_callback', $_REQUEST);

$return = array();

$SQL = "UPDATE organization SET dateRegistered=STR_TO_DATE('" . $_REQUEST['org-dateRegistered'] ."', '%m/%d/%Y')"//. "', ipRegistered='" . $_REQUEST['org-ipRegistered']
        . ", organizationName='" . $_REQUEST['org-organizationName'] . "', organizationType='" . $_REQUEST['org-organizationType']
        . "', firstName='" . $_REQUEST['org-firstName'] . "', lastName='" . $_REQUEST['org-lastName']
        . "', positionTitle='" . $_REQUEST['org-positionTitle'] . "', street='" . $_REQUEST['org-street']
        . "', streetLine2='" . $_REQUEST['org-streetLine2'] . "', city='" . $_REQUEST['org-city']
        . "', state='" . $_REQUEST['org-state'] . "', zip='" . $_REQUEST['org-zip']
        . "', phone='" . $_REQUEST['org-phone'] . "', phone2='" . $_REQUEST['org-phone2']
        . "', email='" . $_REQUEST['org-email'] . "', numRadios='" . $_REQUEST['org-numRadios']
        . "', numLicensedBeds='" . $_REQUEST['org-numLicensedBeds'] . "', numResidentialUnits='" . $_REQUEST['org-numResidentialUnits']
        . "', howLearn='" . $_REQUEST['org-howLearn']
        . "', status='" . $_REQUEST['org-status'] . "', medium='" . $_REQUEST['org-medium']
        . "', signature='" . $_REQUEST['org-signature']
        . "', notes='" . $_REQUEST['org-notes'] . "', alert_status='" . $_REQUEST['org-alertStatus']
        . "' WHERE organizationId='" . $_REQUEST['org-organizationId'] . "';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;
//$return['theid'] = $_REQUEST['org-organizationId'];

echo json_encode($return);
?>