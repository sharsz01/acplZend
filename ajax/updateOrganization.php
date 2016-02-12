<?php


$db = mysqli_connect('localhost', 'root', '', 'audioreadingservice') or die('Error: '.mysqli_connect_error($db));

$return = array();


$SQL = "UPDATE organization SET dateRegistered='" . isset($_REQUEST['dateRegistered']) . "', ipRegistered='" . isset($_REQUEST['ipRegistered'])
        . "', organizationName='" . isset($_REQUEST['organizationName']) . "', organizationType='" . isset($_REQUEST['organizationType'])
        . "', firstName='" . isset($_REQUEST['firstName']) . "', lastName='" . isset($_REQUEST['lastName'])
        . "', positionTitle='" . isset($_REQUEST['positionTitle']) . "', streetAddress='" . isset($_REQUEST['streetAddress'])
        . "', altAddress='" . isset($_REQUEST['altAddress']) . "', city='" . isset($_REQUEST['city'])
        . "', state='" . isset($_REQUEST['state']) . "', zip='" . isset($_REQUEST['zip'])
        . "', phone='" . isset($_REQUEST['phone']) . "', altPhone='" . isset($_REQUEST['altPhone'])
        . "', email='" . isset($_REQUEST['email']) . "', numRadios='" . isset($_REQUEST['numRadios'])
        . "', howLearn='" . isset($_REQUEST['howLearn']) . "', signature='" . isset($_REQUEST['signature'])
        . "', dateSigned='" . isset($_REQUEST['dateSigned']) . "', notes='" . isset($_REQUEST['notes'])
        . "' WHERE organizationId='" . $_REQUEST['organizationId'] . "';";

$result = mysqli_query($db, $SQL);

$return['success'] = $result;

echo json_encode($return);

?>
