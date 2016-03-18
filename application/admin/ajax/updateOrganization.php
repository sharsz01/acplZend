<?php

require('config/dbConnect.php');

$return = array();


$SQL = "UPDATE organization SET dateRegistered='" . $_REQUEST['org-dateRegistered'] . "', ipRegistered='" . $_REQUEST['org-ipRegistered']
        . "', organizationName='" . $_REQUEST['org-organizationName'] . "', organizationType='" . $_REQUEST['org-organizationType']
        . "', firstName='" . $_REQUEST['org-firstName'] . "', lastName='" . $_REQUEST['org-lastName']
        . "', positionTitle='" . $_REQUEST['org-positionTitle'] . "', street='" . $_REQUEST['org-street']
        . "', streetLine2='" . $_REQUEST['org-streetLine2'] . "', city='" . $_REQUEST['org-city']
        . "', state='" . $_REQUEST['org-state'] . "', zip='" . $_REQUEST['org-zip']
        . "', phone='" . $_REQUEST['org-phone'] . "', phone2='" . $_REQUEST['org-phone2']
        . "', email='" . $_REQUEST['org-email'] . "', numRadios='" . $_REQUEST['org-numRadios']
		. "', numLicensedBeds='" . $_REQUEST['org-numLicensedBeds'] . "', numResidentialUnits='" . $_REQUEST['org-numResidentialUnits']
        . "', howLearn='" . $_REQUEST['org-howLearn'] . "', signature='" . $_REQUEST['org-signature']
        . "', notes='" . $_REQUEST['org-notes']
        . "' WHERE organizationId='" . $_REQUEST['org-organizationId'] . "';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>