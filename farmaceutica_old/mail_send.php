<?php 


    
$alertMessage = "";
$alertClass = "";
$emailTemplate = "mail_template.php";

if(isset($_POST["email"])){
    require_once('phpMailer/class.phpmailer.php');
    
	
	//*RECAPTCHA VALIDATION*//
    if(isset($_POST["g-recaptcha-response"])){
        $recaptchaSecret = "6Le5PJwUAAAAANJUSTN2M425rkWb93EvQcMukYUh";
        $recaptchaResponse = $_POST["g-recaptcha-response"];
        $recaptchaVerify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
        $captcha_success = json_decode($recaptchaVerify);
    
        if ($captcha_success->success==false) {
    		//This user was not verified by recaptcha.
    		$alertMessage = "<strong>Error</strong><br>Por favor completa el re-Captcha para verificar que no eres un robot.";
    	    $alertClass = "alert-danger";
        }
    }else{
    	$alertMessage = "<strong>Error</strong><br>Lo sentimos ha surgido un error. Error: WHFSM-002.";
    	$alertClass = "alert-danger";
    	
    }


	if($captcha_success->success==true){
	
    	$webSite = "farmaceuticamundial.com";
    	$companyFrom_email = "info@farmaceuticamundial.com";
    	$companyFrom_name = "Farmaceutica Mundial";
    	$AddBCC_1_email = "administrativo@laboratoriostierwelt.com";
    	$AddBCC_2_email = "franavenda33@hotmail.com";
    	$AddBCC_3_email = "";
    	$nameClean = ucwords(strtolower($_POST['name']));
    	$emailClean = strtolower($_POST["email"]);
    	$phoneClean = $_POST['phone'];
    	$commentsClean = $_POST['comments'];
    
    	// Remove all illegal characters from email
    	$emailClean = filter_var($emailClean, FILTER_SANITIZE_EMAIL);
    	
    	// Validate e-mail
    	if (!filter_var($emailClean, FILTER_VALIDATE_EMAIL) === false) {
    		
    		$mail = new PHPMailer(); // defaults to using php "mail()"
    	
    		//Datos del cliente
    		$mail->AddReplyTo($emailClean,$nameClean);
    		$mail->SetFrom($companyFrom_email,$companyFrom_name);
    		
    		if($AddBCC_1_email != ""){
    			$mail->AddBCC($AddBCC_1_email);
    		}
    		if($AddBCC_2_email != ""){
    			$mail->AddBCC($AddBCC_2_email);
    		}
    		if($AddBCC_3_email != ""){
    			$mail->AddBCC($AddBCC_3_email);
    		}
    		
    		//Datos del usuario que contacta
    		//$mail->AddAddress($emailClean, $nameClean);
    		$mail->AddAddress('info@farmaceuticamundial.com','Farmaceutica Mundial');
    		
    		
    		//Contenido del correo
    		$mail->Subject = $nameClean.": Ha contactado desde la pagina web.";
    		$mail->AltBody = $nameClean.", Ha contactado desde la pagina web. con el correo: ".$emailClean; // optional, comment out and test
    		$mail->MsgHTML(include($emailTemplate));
    		$mail->CharSet = 'UTF-8';
    		
    		//Funcion enviar correo
    		if(!$mail->Send()) {
    		  $alertMessage = "<strong>Error</strong><br>No se pudo enviar los datos, por favor intente de nuevo.<br>Referencia:".$mail->ErrorInfo;
    		  $alertClass = "alert-danger";
    		}else{
    		  $alertMessage = "<strong>¡Felicitaciones!</strong><br>Datos enviados correctamente.<br>Gracias por escribirnos.";
    		  $alertClass = "alert-success";
    		}
    	} else {
    		$alertMessage = "<strong>Error</strong><br>No se pudo enviar los datos, por favor verificar si el correo esta bien escrito e intente de nuevo.";
    		$alertClass = "alert-danger";
    	}
	
	}
}

?>