<!DOCTYPE html>
<html>
<head>
	<title>Sitio web próximamente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<style type="text/css">
		body,html{
			margin: 0px;
		}
		body{
			text-align: center;
			background: #56CCF2;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to bottom,#2F80ED, #FFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			height: 100vh;
			font-family: 'Muli', sans-serif;
		}
		#campo img{
			margin: 0px;
			width: 100%;
			position: fixed;
			left:0px;
			bottom: 0px;
			z-index: -90;
		}
		#logo{
			width: 100%;
			background-color: white;
		}

		#logo object{
			width: 200px;
		}
		
		h1,h2{
			color: white;
			text-shadow: 0px 5px 5px grey;
		}
		
		p,span{
			color: white;
			font-size: 18px;
			text-align: justify;
		}

		.info-item img{
			width: 30px;
			vertical-align: middle;
			margin-right: 10px;
		}

		.info-item{
			text-align: left;
			padding-left: 100px;
			margin-bottom: 10px;
		}

		.container{
			/*display: inline-block;*/
			float: left;
			width: 49%;
			position: relative;
		}

		.contact-form, .contact-info{
			margin:10px 20px 10px 20px;
			background-color: rgba(0,0,0,0.6);
			border-radius: 10px;
			padding: 10px;
		}
		
		input,textarea{
			width: 95%;
			font-size: 16px;
			height: 22px;
			font-family: 'Muli', sans-serif;
			margin: 5px 0px 5px 0px;
			border-radius: 5px;
		}
		textarea{height: 65px;}
		
		input[type='submit'],input[type='reset']{
			width: 30%;
			height: 26px;
		}
		
		textarea{
			width: 95%;
		}

		.g-recaptcha div{
			margin: 0 auto;
		}
		
		@media screen and (max-width: 801px) {
  			.container{
  				width: 99%;
  			}
  			.info-item{
				padding-left: 50px;
				margin-bottom: 10px;
			}
			.contact-form{margin-bottom: 100px;}
  		}
  		@media screen and (max-height: 500px){
  			.contact-form{margin-bottom: 100px;}
  		}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div id="logo">
		<object type="image/svg+xml" data="images/ideas_logo_completo.svg"></object>		
	</div>
	<h1>Próximamente...</h1>
	<div class="row">
		<div class="container">
			<div class="contact-info">
				<p>
				Estamos trabajando en la construcción del sitio.
				Mientras tanto puedes contactarnos por los siguientes medios:
				</p>	
				<p>
					<div class="info-item">
						<img src="images/icons//tel.png">
						<span> +52 (273) 7390179</span>
					</div>
					<div class="info-item">
						<img src="images/icons/whatsapp-icon.png">
						<span> +52 (273) 1348038</span>
					</div>
					<div class="info-item">
						<img src="images/icons/email.png">
						<span> ideasmexac@hotmail.com</span>
					</div>
				</p>			
			</div>
			
		</div>
		<div class="container">
			<div class="contact-form">
				<p>O escríbenos desde aquí:</p>
				<form id="comment_form" action="form.php" method="post">
					<input type="text" name="nombre" placeholder="Nombre" maxlength="100" required>
					<input type="email" name="email" placeholder="Correo electrónico" maxlength="100" required>
					<textarea name="cuerpo" placeholder="Cuéntanos" maxlength="500" required></textarea>
					<div class="g-recaptcha" data-sitekey="6Lc0gkEUAAAAAH6OFbBKUkqDb4T2nkhpWgrIp4kZ" required></div>
					<input type="submit" name="enviar" value="Enviar">
				</form>
			</div>
		</div>
	</div>
	<div id="campo">
		<img src="images/campo.png">
	</div>
	<script type="text/javascript">
		<?php
		if($_GET["e"]==3)echo "alert('¡Gracias por comunicarte con nosotros!')";
		else if($_GET["e"]==5)echo "alert('Por favor selecciona la casilla de No soy un robot')";
		?>
	</script>
</body>
</html>