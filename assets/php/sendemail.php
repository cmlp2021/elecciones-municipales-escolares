<?php

	$Nombre = @trim(stripslashes($_POST['Nombre']));
	$Email = @trim(stripslashes($_POST['Email']));
	$Asunto = @trim(stripslashes($_POST['Asunto']));
	$Mensaje = @trim(stripslashes($_POST['Mensaje']));

	$email_from = $email;
	$email_to = 'informes@leoncioprado.com';

	$body = 'Nombre: ' . $Nombre . "\n\n" . 'Email: ' . $email . "\n\n" . 'Asunto: ' . $Asunto . "\n\n" . 'Mensaje: ' . $Mensaje;

	$success = @mail($email_to, $body, 'Nombre: ' . $Nombre . "\n\n" . 'Email: ' . $email . "\n\n" . 'Asunto: ' . $Asunto . "\n\n" . 'Mensaje: ' . $Mensaje);

?>