<?php


$nameFrom = 'Audio Reader';				// Name of the sender
$emailFrom = 'arst10tmp@gmail.com';		// Email of the mail server sending the emails
$pw = 'slsTv03*';						// Password for the mail server

$mail = new PHPMailer();				// New PHPMailer instance
$mail->CharSet = 'UTF-8';

$subject = 'Radio Application Received';// Subject line for submitted radio applications

// ======================================================================== Body for radio application submissions
// Signature for emails sent from new individual/organization applications
$signature = '<p><br /><br />-Georgean Johnson-Coffey</p>'
        . '<p>Manager, Audio Reading Service</p>'
        . '<p>Allen County Public Library</p>'
        . '<p>Fort Wayne, IN</p>';

// Message content for individual radio applications
$listenerBody = '<p>Thank you for your application for a radio from the Audio Reading Service.</p>'
        . '<p>One of our staff will be in contact with you and your radio will be '
        . ' sent within two business days. If you have immediate questions, please '
        . 'feel free to call us at 260-421-1376 or email us at audioreader@acpl.info.</p>'
        . '<p>We are pleased to be of service to you.</p>'
        . '<p>' . $signature . '</p>';

// Message content for organization radio applications
$organizationBody = '<p>Thank you for your application to the Audio Reading Service.</p>'
        . '<p>One of our staff will be in contact with you within two business days '
        . 'regarding your needs for our service. If you have immediate questions, please '
        . 'feel free to call us at 260-421-1376 or email us at audioreader@acpl.info.</p>'
        . '<p>We are pleased to be of service to you.</p>'
        . '<p>' . $signature . '</p>';
// ========================================================================

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';	// Email host - currently using Google's service

$mail->SMTPSecure = 'ssl';
$mail->Port = 465; // or 567
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;

$mail->Username = $emailFrom;	// User-name for mail service
$mail->Password = $pw;			// Password for mail service

$mail->SetFrom($emailFrom, $nameFrom);	// Set the sending address and name
$mail->AddReplyTo('no-reply@mycomp.com', 'no-reply');		// Enforce no-reply
$mail->Subject = $subject;				// Set the subject line

//$mail->AddAddress($adminEmail, "Audio Reader Admins");	// Set the target address 
//$mail->AddAddress("simon_sharudin1@msn.com", "Audio Reader Admins");


?>