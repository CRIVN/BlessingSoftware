<?php
$to_email = "cesarlarios@gmail.com";
$subject = "Simple test de email";
$body = "Hola, este es un test de email en php";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email enviado satisfactoriamente a $to_email...";
} else {
    echo "Envio de email fallido";
}
?>