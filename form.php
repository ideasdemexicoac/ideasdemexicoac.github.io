<?php
	$name = stripslashes($_POST["nombre"]);
	$email = stripslashes($_POST["email"]);
	$message = stripslashes($_POST["cuerpo"]);
 
	$recaptcha = $_POST["g-recaptcha-response"];
 
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6Lc0gkEUAAAAAAFBSVrVVIJEZ1b24F-rCt8cGaOk',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
		$msg = $name." ha dejado un mensaje:\n".$message."\n Su correo de contacto: ".$email;
		$msg = wordwrap($msg,70);
		mail("ideasmexac@hotmail.com","Contacto desde página web",$msg);
		header("Location: index.php?e=3");
		die();
	} else {
		header("Location: index.php?e=5");
		die();
	}
?>