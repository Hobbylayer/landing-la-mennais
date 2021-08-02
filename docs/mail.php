<?php 
	$name = $_POST['fullName'];
    $from = $_POST['email'];
	$msg = $_POST['mensaje'];
    $telefono = $_POST['telf'];
    $to = "secretaria@lamennais.edu.uy";

    $subject ="Enviado desde La Mennais formulario de contacto";
    $body = $telefono . "\n" . $msg . "\nAtentamente: " . $name;
    
	if(mail($to, $from , $body, $subject) ){
        echo "<script> alert('Mensaje enviado exitosamente')</script>";
        echo "<script> setTimeout(\"location.href='index.html'\", 10 )</script>";
	}else{
        echo "<script> alert('Algo falló intenta nuevamente')</script>";
        echo "<script> setTimeout(\"location.href='index.html'\", 10 )</script>";
	}
 ?>