<?php

/*
 * Send the email to the POC for an organization on application submission
 */


//require('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
require 'applicationEmailConfig.php';

$mail->MsgHTML($organizationBody);
//$mail->AddAddress("[address]", "Audio Reader Admins");	// Set the target address 



//$mail->send();

?>