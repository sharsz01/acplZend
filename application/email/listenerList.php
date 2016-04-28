<?php

require '../configs/dbConnect.php';

$SQL = 'SELECT * FROM user WHERE status="Applicant";';
$result = mysqli_query($db, $SQL);

$listeners = [];

while ($row = mysqli_fetch_assoc($result)) {
    $date = $row["dateRegistered"];
    $fname = $row["firstName"];
    $lname = $row["lastName"];
    $email = $row["email"];
    $contactEmail = $row["contactEmail"];


    $arr = [];


    // Initial email send date for new applicants
    $sendDate = strtotime('+10 day', strtotime($date));
    $sendDate = date('Y-m-d', $sendDate);

    if (trim($email) != '') { // Use the Listener's email
        array_push($arr, $fname);
        array_push($arr, $lname);
        array_push($arr, $email);
        array_push($arr, $sendDate);

        array_push($listeners, $arr);
    } else if (trim($contactEmail) != '') { // Use the Contact's email
        array_push($arr, $fname);
        array_push($arr, $lname);
        array_push($arr, $contactEmail);
        array_push($arr, $sendDate);

        array_push($listeners, $arr);
    } else {   // No email for contact or listener - do nothing
    }

    // Delete the array
    unset($arr);
    
}


?>

