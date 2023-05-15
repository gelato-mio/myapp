<?php
$to = "ch.cyber@proton.me";
$subject = "Text Message from {$_REQUEST[‘From’]} to {$_REQUEST[‘To’]}"; 
$message = "{$_REQUEST[‘Body’]}";
$headers = "From: webmaster@cohen.ro";
mail($to, $subject, $message, $headers);