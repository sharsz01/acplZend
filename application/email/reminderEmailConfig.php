<?php

$nameFrom = 'Audio Reader';				// Name of the sender
$emailFrom = 'arst10tmp@gmail.com';		// Email of the mail server sending the emails
$pw = 'slsTv03*';						// Password for the mail server

$mail = new PHPMailer();				// New PHPMailer instance
$mail->CharSet = 'UTF-8';

$adminEmail = 'audioreader@acpl.info';	// Address of the Admin group - Service reminders sent to this address
$subject = 'Radio Application Service Check Up';	// Subject line for service check ups
$body = 'Time to do a customer service check for: ';		// Start of body message for service reminders

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
$mail->AddAddress("simon_sharudin1@msn.com", "Audio Reader Admins");

?>