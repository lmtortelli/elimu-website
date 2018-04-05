<?php

$to = 'contato@elimusocial.com.br';
$subject = 'Contato - Elimu Website -'.$_POST['name'];;
$message = $_POST['message'];
$headers = 'From: '.$_POST['email']. "\r\n" .
    'Reply-To: contato@elimusocial.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo 1
?> 