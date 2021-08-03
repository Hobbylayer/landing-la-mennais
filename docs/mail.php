<?php 
	$name = $_POST['fullName'];
    $correo = $_POST['email'];
	$mensaje = $_POST['mensaje'];
    $telefono = $_POST['telf'];
    $destinatario = "javier@expressativo.com";

    $header ="Enviado desde La Mennais formulario de contacto";
    $mensajeCompleto = $telefono . "\n" . $mensaje . "\nAtentamente: " . $name;
    
	if(mail($destinatario, $correo , $mensajeCompleto, $header) ){
        echo "<script> alert('Mensaje enviado exitosamente')</script>";
        echo "<script> setTimeout(\"location.href='index.html'\", 10 )</script>";
	}else{
        echo "<script> alert('Algo falló intenta nuevamente')</script>";
        echo "<script> setTimeout(\"location.href='index.html'\", 10 )</script>";
	}
 ?>