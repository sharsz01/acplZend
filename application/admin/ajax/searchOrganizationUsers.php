<?php

require('config/dbConnect.php');

$return = array();

$SQL = "SELECT organizationId, DATE_FORMAT(dateRegistered,'%m/%d/%Y') AS 'dateRegistered', ipRegistered, organizationName, "
			."organizationType, firstName, lastName, positionTitle, street, streetLine2, city, state, zip, phone, phone2, email, numRadios, "
			."numLicensedBeds, numResidentialUnits, howLearn, status, medium, signature, notes, alert_status FROM organization ";
$count = 1;

if (array_key_exists('search', $_REQUEST)) {
    foreach ($_REQUEST['search'] as $key => $value) {
        if ($count == 1)
            $SQL .= " WHERE ";
        else
            $SQL .= " AND ";

        if ($value['type'] == 'binary') {
            $SQL .= $key . "='" . $value['value'] . "'";
        } else if ($value['type'] == 'range') {
            $SQL .= $key . " BETWEEN '" . $value['value1'] . "' AND '" . $value['value2'] . "'";
        } else {
            $SQL .= $key . " LIKE '%" . $value['value'] . "%'";
        }
        $count++;
    }
}
$SQL .= ";";

//echo $SQL;

$result = mysqli_query($db, $SQL);

$return['success'] = true;
$return['result'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($return);
?>