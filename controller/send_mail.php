<?php
$to = 'lmtortelli@hotmail.com';
$subject = 'Formulário de Contato - Elimu Website';
$message = $_GET['message'];
$headers = 'From: '.$_GET['email']. "\r\n" .
    'Reply-To: contato@elimusocial.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo 'sent'
?> 