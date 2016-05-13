<?php

/*
 * Send the email to the listener on application submission
 */


//require('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
require 'applicationEmailConfig.php';


$return = array();

$mail->MsgHTML($listenerBody);
//$mail->AddAddress("[address]", "Audio Reader Admins");	// Set the target address 


$listenerEmail = $_REQUEST['email'];
$contactEmail = $_REQUEST['contact'];

if($listenerEmail === ''){	// No email given
}
else{
	$mail->AddAddress($listenerEmail, "");	// Set the target address 
}
if($contactEmail === ''){	// No email given
}
else{
	$mail->AddAddress($contactEmail, "");	// Set the target address 
}

$mail->send();

$return['success'] = true;

echo json_encode($return);



?>