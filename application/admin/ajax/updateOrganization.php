<?php

require('config/dbConnect.php');

$return = array();


$SQL = "UPDATE organization SET dateRegistered='" . $_REQUEST['dateRegistered'] . "', ipRegistered='" . $_REQUEST['ipRegistered']
        . "', organizationName='" . $_REQUEST['organizationName'] . "', organizationType='" . $_REQUEST['organizationType']
        . "', firstName='" . $_REQUEST['firstName'] . "', lastName='" . $_REQUEST['lastName']
        . "', positionTitle='" . $_REQUEST['positionTitle'] . "', street='" . $_REQUEST['street']
        . "', streetLine2='" . $_REQUEST['streetLine2'] . "', city='" . $_REQUEST['city']
        . "', state='" . $_REQUEST['state'] . "', zip='" . $_REQUEST['zip']
        . "', phone='" . $_REQUEST['phone'] . "', phone2='" . $_REQUEST['phone2']
        . "', email='" . $_REQUEST['email'] . "', numRadios='" . $_REQUEST['numRadios']
		. "', numLicensedBeds='" . $_REQUEST['numLicensedBeds'] . "', numResidentialUnits='" . $_REQUEST['numResidentialUnits']
        . "', howLearn='" . $_REQUEST['howLearn'] . "', signature='" . $_REQUEST['signature']
        . "', dateSigned='" . $_REQUEST['dateSigned'] . "', notes='" . $_REQUEST['notes']
        . "' WHERE organizationId='" . $_REQUEST['organizationId'] . "';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>
