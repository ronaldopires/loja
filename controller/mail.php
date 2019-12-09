<?php

$to      = Config::EMAIL_USER;
$subject = $_POST['assunto'];
$message = 'Email de ' .$_POST['nome']. "\r\n" .$_POST['menssagem'];
$destinatario = $_POST['email'];

$headers = "From: " . $destinatario;

mail($to, $subject, $message, $headers);
?>


<script>alert('E-mail enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">