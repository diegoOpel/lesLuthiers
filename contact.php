<?php
$nameSurname = $_POST ['nameSurname'];
$telephone = $_POST ['telephone'];
$email = $_POST ['email'];
$messaje = $_POST ['messaje'];

$mensaje = "Este mensaje fue enviado por: " . $nameSurname . ",\r\n";
$mensaje .= "Su teléfono es: " . $telephone . ",\r\n";
$mensaje .= "Su mail es: " . $email . ",\r\n";
$mensaje .= "Mensaje: " . $messaje . ",\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'diego.opel@gmail.com';
$asunto = 'Te han enviado un mensaje en Les Luthiers';

mail($para, $asunto, utf8_decode($mensaje), $header);
header('Location:./paginas/contacto.html');

?>