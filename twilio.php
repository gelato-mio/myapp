<?php 
/** 
* This section ensures that Twilio gets a response. 
*/ 
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response></Response>'; //Place the desired response (if any) here

/** 
* This section actually sends the email. 
*/ 


$to = "ch.cyber@proton.me";
$subject = "Text Message from {$_REQUEST[‘From’]} to {$_REQUEST[‘To’]}"; 
$message = "{$_REQUEST[‘Body’]}";
$headers = "From: webmaster@webs.com";
mail($to, $subject, $message, $headers);