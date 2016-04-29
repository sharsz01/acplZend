<?php

require('config/dbConnect.php');

$return = array();

$SQL = "SELECT userId, DATE_FORMAT(dateRegistered,'%m/%d/%Y') AS 'dateRegistered', ipRegistered, firstName, lastName, "
			."DATE_FORMAT(birthday,'%m/%d/%Y') AS 'birthday', street, streetLine2, city, state, zip, phone, phone2, email, "
			."contactFirstName, contactLastName, contactRelationship, contactStreet, contactStreetLine2, contactCity, contactState, "
			."contactZip, contactPhone, contactPhone2, contactEmail, disability, otherDisability, howLearn, race, income, inHomeNum, "
			."status, medium, signature, mailTo, notes, alert_status FROM user ";

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