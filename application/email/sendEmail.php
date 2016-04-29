<?php

/*
 * List keys:
 * [0] -> First Name
 * [1] -> Last Name
 * [2] -> Email
 * [3] -> Send Date
 */


//require('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
require 'listenerList.php';
require 'organizationList.php';

$nameFrom = 'Audio Reader';
$emailFrom = 'arst10tmp@gmail.com';
$pw = 'slsTv03*';

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$subject = 'Radio Application Update';

// Message content for individuals
$signature = '<p><br /><br />-Georgean Johnson-Coffey</p>'
        . '<p>Manager, Audio Reading Service</p>'
        . '<p>Allen County Public Library</p>'
        . '<p>Fort Wayne, IN</p>';

$listenerBody = '<p>Thank you for your application for a radio from the Audio Reading Service.</p>'
        . '<p>One of our staff will be in contact with you and your radio will be '
        . ' sent within two business days. If you have immediate questions, please '
        . 'feel free to call us at 260-421-1376 or email us at audioreader@acpl.info.</p>'
        . '<p>We are pleased to be of service to you.</p>'
        . '<p>' . $signature . '</p>';

$organizationBody = '<p>Thank you for your application to the Audio Reading Service.</p>'
        . '<p>One of our staff will be in contact with you within two business days '
        . 'regarding your needs for our service. If you have immediate questions, please '
        . 'feel free to call us at 260-421-1376 or email us at audioreader@acpl.info.</p>'
        . '<p>We are pleased to be of service to you.</p>'
        . '<p>' . $signature . '</p>';

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';

$mail->SMTPSecure = 'ssl';
$mail->Port = 465; // or 567
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;

$mail->Username = $emailFrom;
$mail->Password = $pw;

$mail->SetFrom($emailFrom, $nameFrom);
$mail->AddReplyTo('no-reply@mycomp.com', 'no-reply');
$mail->Subject = $subject;


// Send initial emails to individual listeners
foreach ($listeners as $list) {
    $mail->MsgHTML($listenerBody);
    $mail->AddAddress($list[2], $list[0]);

    $mail->send();
    // Clear this address
    $mail->clearAddresses();
}

// Send initial email to organizations
foreach ($organizations as $org) {
    $mail->MsgHTML($organizationBody);
    $mail->AddAddress($org[2], $org[0]);

    $mail->send();
    // Clear this address
    $mail->clearAddresses();
}

?>
