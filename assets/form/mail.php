<?php

$destinatario = 'yamilespejoruiz@gmail.com';
$subject = "Mensaje enviado desde la pagina WEB";
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$header = "Enviado desde la pagina WEB";

$msg =  
        "Nombre: ".$name."\n
        Email: ".$email."\n
        Mensaje: ".$message.";

mail($destinatario,$subject,$msg,$header);
echo "<h4>¡Mail enviado exitosamente!</h2>";
echo "<script> setTimeout(\"location.href='../contact.html'\",1000) </script>";

?>