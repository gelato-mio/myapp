<?php
$to = "ch.cyber@proton.me";
$subject = "Text Message from {$_REQUEST[‘From’]} to {$_REQUEST[‘To’]}"; 
$message = "{$_REQUEST[‘Body’]}";
$headers = "From: ch.cyber@proton.me";
mail($to, $subject, $message, $headers);