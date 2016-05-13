<?php

/*
 * Script is responsible for sending email reminders to Admin group to provide regular service check ups
 */


//require('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
require 'reminderEmailConfig.php';
require 'listenerList.php';
require 'organizationList.php';

// ======================================================= Send Emails
// Send service check up email for individual listeners
foreach ($listeners as $list) {
    $mail->MsgHTML($body . $list[0]);
	//echo $mail->MsgHTML($body . $list[0]) . "<br />";

    $mail->send();
}

// Send service check up email for organizations
foreach ($organizations as $org) {
    $mail->MsgHTML($body . $org[0]);
	//echo $mail->MsgHTML($body . $org[0]) . "<br />"; 
	
    $mail->send();
}

?>
