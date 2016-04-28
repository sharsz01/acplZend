<?php

require '../configs/dbConnect.php';

$SQL = 'SELECT * FROM organization WHERE status="Applicant";';
$result = mysqli_query($db, $SQL);

$organizations = [];

while ($row = mysqli_fetch_assoc($result)) {
    $date = $row["dateRegistered"];
    $fname = $row["firstName"];
    $lname = $row["lastName"];
    $email = $row["email"];

    $arr = [];


    // Initial email send date for new applicants
    $sendDate = strtotime('+10 day', strtotime($date));
    $sendDate = date('Y-m-d', $sendDate);

    if (trim($email) != '') { // Use the Listener's email
        array_push($arr, $fname);
        array_push($arr, $lname);
        array_push($arr, $email);
        array_push($arr, $sendDate);

        array_push($organizations, $arr);
    } else {   // No email for organization - do nothing
    }

    // Delete the array
    unset($arr);
    
}

?>

