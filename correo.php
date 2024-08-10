<?php 
$name = $_POST['name'];

$email = $_POST['email'];
$mensaje2 = $_POST['comments'];
$telefono = $_POST['phone'];
$operacion = $_POST['operacion'];

session_start();




$cadena_de_texto = $email;
$cadena_buscada1   = 'csdinterpretingonline.com';
$cadena_buscada2   = 'tournament-challenge.com';
$cadena_buscada3   = 'onlinewcm.com';
$cadena_buscada4   = 'chemodanymos.com';
$cadena_buscada5   = 'plitkagranit.com';
$cadena_buscada6   = 'mail.ru';



$posicion_coincidencia1 = strpos($cadena_de_texto, $cadena_buscada1);
$posicion_coincidencia2 = strpos($cadena_de_texto, $cadena_buscada2);
$posicion_coincidencia3 = strpos($cadena_de_texto, $cadena_buscada3);
$posicion_coincidencia4 = strpos($cadena_de_texto, $cadena_buscada4);
$posicion_coincidencia5 = strpos($cadena_de_texto, $cadena_buscada5);
$posicion_coincidencia6 = strpos($cadena_de_texto, $cadena_buscada6);

 
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia1 === false && $posicion_coincidencia2 === false  && $posicion_coincidencia3 === false && $posicion_coincidencia4 === false && $posicion_coincidencia5 === false && $posicion_coincidencia6 === false && $operacion=='53') {
   




	$header = "From: " . $email . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";
	
	$mensaje = " " . $name .",  telefono: " . $telefono . ", correo: " . $email . " \r\n ";
	$mensaje .= " escribe desde farmaceuticamundial.com el siguiente comentario: \r\n \r\n";
		
	$mensaje .= $mensaje2."\r\n ";
	$mensaje .= "\n Enviado el " . date('d/m/Y', time());
	
	$para = "farmuvenca@gmail.com,info@farmaceuticamundial.com";
	$asunto = "Contacto desde Portal Web";
	
	mail($para, $asunto, utf8_decode($mensaje), $header);
	

	header("location: index.html?mensaje=si"); 



 } else {
           header("location: index.html?mensaje=noenviado");
            }

