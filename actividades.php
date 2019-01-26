<?php
    if(!isset($_GET["evento"]) || $_GET["evento"]>3 || $_GET["evento"]<1 || !is_numeric($_GET["evento"])){
    	header("Location: actividades.php?evento=1");
    }
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>IDEAS de México A.C.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113808397-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-113808397-1');
		</script>
	</head>
	<body>
		<div id="inicio"></div>
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<a href="index.html#inicio" style="all:initial;cursor: pointer;"><img src="images/nombre.png" style="width:100px; margin:10px 20px;"></a>
				<nav id="nav">
					<ul>
						<li><a href="index.html#quienes-somos" class="scrolly">¿Quiénes somos?</a></li>
						<li><a href="index.html#mision" class="scrolly">Misión</a></li>
						<li><a href="index.html#vision" class="scrolly">Visión</a></li>
						<li><a href="index.html#filosofia" class="scrolly">Filosofía</a></li>
						<li><a href="index.html#valores" class="scrolly">Valores</a></li>
						<li><a href="index.html#actividades" class="scrolly">Actividades</a></li>
						<li><a href="index.html#contacto" class="scrolly">Contacto</a></li>
					</ul>
				</nav>
			</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<?php

								$titulo = "Taller de Capacitación";
								$subtitulo = "Programas de apoyo y fuentes de financiamiento a proyectos productivos del sector rural";
								if(isset($_GET["evento"]) && $_GET["evento"] == 2){
									$titulo = "Taller de Capacitación";
									$subtitulo = "Evaluación financiera de proyectos productivos del sector rural";
								}
								elseif(isset($_GET["evento"]) && $_GET["evento"] == 3){
									$titulo = "Asamblea General Nacional";
									$subtitulo = "IDEAS de México A. C. 2017";
								}
							?>
							<h2><?php echo($titulo); ?></h2>
							<p><?php echo($subtitulo); ?></p>
						</header>
						<div class="row 150%">
							<div class="8u 12u$(medium)">
								<style type="text/css">
									.row img{
										width: 90%;
										margin: 30px 0 30px 0;
									}
								body {
								   counter-reset: item;
								 }
								 ol {
								   list-style: none;
								   text-align: justify;
								 }
								ol li {
								   margin-bottom: 10px;
								   counter-increment: item;
								 }
								 ol li:before {
								 	content: counter(item);
								   margin-right: 10px;
								   background: #409629;
								   border-radius: 20%;
								   color: white;
								   width: 30px;
								   text-align: center;
								   display: inline-block;
								 }
								 @media screen and (max-width: 600px) {
									ol{
										padding-left: 0;
									}
								}
								</style>
								<!-- Content -->
								<section id="content">

								<?php if (isset($_GET["evento"]) && $_GET["evento"] == 1) { ?>
									<img src="images/actividades/financiamiento01.JPG" >
									<p>Los días 8 y 9 de Diciembre de 2017 se impartió este taller a productores diversos de diferentes municipios de las áreas de influencia de nuestra A. C. </p>
									<img src="images/actividades/financiamiento02.JPG" >
									<img src="images/actividades/financiamiento03.JPG" >
									<img src="images/actividades/financiamiento04.JPG" >
									<p>La divulgación y exposición detallada de los programas gubernamentales de apoyos al sector rural, fue agradecido ampliamente y con gran satisfacción por parte de los productores, que manifestaron su beneplácito de recibir la capacitación en el conocimiento de los múltiples programas de apoyo y sus reglas de operación. Argumentaron que fueron expuestos de una manera fácil de entender y de asimilar y que regresarían a sus comunidades para ser portavoces de los mismos.</p>
									<img src="images/actividades/financiamiento05.JPG">
									<img src="images/actividades/financiamiento06.JPG">
									<img src="images/actividades/financiamiento07.JPG">
									<img src="images/actividades/financiamiento08.JPG">
									<img src="images/actividades/financiamiento09.JPG">
									<img src="images/actividades/financiamiento10.JPG">
									<img src="images/actividades/financiamiento11.JPG">
									<img src="images/actividades/financiamiento12.JPG">
									<img src="images/actividades/financiamiento13.JPG">
									<img src="images/actividades/financiamiento14.JPG">
									<img src="images/actividades/financiamiento15.JPG">
									<img src="images/actividades/financiamiento16.JPG">
									<img src="images/actividades/financiamiento17.JPG">
									<img src="images/actividades/financiamiento18.JPG">
									<img src="images/actividades/financiamiento19.JPG">
									<img src="images/actividades/financiamiento19_1.JPG">
									<img src="images/actividades/financiamiento19_2.JPG">
									<img src="images/actividades/financiamiento20.JPG">
									<p>Gracias a SAGARPA se cumplió con el objetivo previsto.</p>

								<?php }elseif(isset($_GET["evento"]) && $_GET["evento"] == 2){ ?>
									
										<img src="images/actividades/evaluacion01.JPG">
										<p>Continuando con las labores de capacitación de IDEAS de México A. C. los días 16, 17, 18 y 19 de Noviembre de 2017 se impartió este taller a 21 técnicos invitados por la asociación, mismos que fortalecieron y actualizaron sus conocimientos en esta temática.</p>
										<img src="images/actividades/evaluacion02.JPG">
										<img src="images/actividades/evaluacion03.JPG">
										<p>Estos profesionistas se preparan para aplicar sus conocimientos en la formulación y evaluación de proyectos que inciden directamente en el sector rural.</p>
										<img src="images/actividades/evaluacion04.JPG">
										<img src="images/actividades/evaluacion06.JPG">
										<img src="images/actividades/evaluacion07.JPG">
										<img src="images/actividades/evaluacion08.JPG">
										<p>Este taller se realizó en el Hotel Misión Los Cocuyos en Huatusco, Ver., fue impartido por INDEN (Inteligencia en Desarrollo de Negocios S. C.). Realizado así mismo, con recursos del programa de apoyos a pequeños productores, en su componente: fortalecimiento a organizaciones rurales 2017 de SAGARPA.</p>
										<img src="images/actividades/evaluacion09.JPG">
										<img src="images/actividades/evaluacion10.JPG">
										<img src="images/actividades/evaluacion11.JPG">
										<img src="images/actividades/evaluacion12.JPG">
										<img src="images/actividades/evaluacion12_2.JPG">
										<img src="images/actividades/evaluacion13.JPG">
										<img src="images/actividades/evaluacion14.JPG">
										<img src="images/actividades/evaluacion15.JPG">
										<p>Enhorabuena para estos profesionistas que se incorporan a la plantilla de especialistas en proyectos de inversión en nuestra asociación civil.</p>
									
							<?php }elseif(isset($_GET["evento"]) && $_GET["evento"] == 3){ ?>
								<p>Esta asamblea se realiza anualmente con el propósito fundamental de nutrir con propuestas a nuestra organización, para la elaboración del plan anual de trabajo del año siguiente (2018); independientemente del informe de labores y de la evaluación del desempeño en el desahogo de las metas y objetivos previstos en el plan anual de trabajo del año anterior (2017).</p>
								<img src="images/actividades/asamblea01.JPG">
								<img src="images/actividades/asamblea02.JPG">
								<img src="images/actividades/asamblea03.JPG">
								<p>Con el mínimo de protocolo se realizó la asamblea general nacional los días 16 y 17 de Diciembre de 2017 en la ciudad sede de nuestra A. C. Huatusco, Ver.</p>
								<img src="images/actividades/asamblea04.JPG">
								<img src="images/actividades/asamblea04_2.JPG">
								<p>Con la fuerza de la juventud y la experiencia de los mayores, avanza IDEAS de México A. C.</p>
								<img src="images/actividades/asamblea05.JPG">
								<img src="images/actividades/asamblea05_2.JPG">
								<p>Atentos al informe de labores.</p>
								<img src="images/actividades/asamblea06.JPG">
								<img src="images/actividades/asamblea07.JPG">
								<p>Se recibió el apoyo de SAGARPA para su realización.</p>
								<img src="images/actividades/asamblea08.JPG">
								<img src="images/actividades/asamblea09.JPG">
								<p>La asamblea en su desarrollo.</p>
								<img src="images/actividades/asamblea10.JPG">
								<p>Rafael Martínez Cruz, Presidente del Comité Ejecutivo Nacional, presenta su informe de labores.</p>
								<img src="images/actividades/asamblea11.JPG">
								<p>El Secretario General de IDEAS de México A. C. difunde y reafirma el concepto de la Asociación Civil.</p>
								<img src="images/actividades/asamblea12.JPG">
								<p>Intervención del C. Francisco Tontle Guerrero, distinguido activista social.</p>
								<img src="images/actividades/asamblea13.JPG">
								<p>Ing. Efraín Miranda Blanco, representante de SAGARPA.</p>
								<img src="images/actividades/asamblea14.JPG">
								<P>Victor Hugo Velazquez Ramos, líder productor de café y limón.</P>
								<img src="images/actividades/asamblea15.JPG">
								<p>C. José Guilebaldo Reyes Bautista, líder cañero y piloncillero.</p>
								<img src="images/actividades/asamblea16.JPG">
								<p>Maestro Esteban Peña Gutiérrez del Tecnológico Superior de Huatusco participando en nombre de las instituciones educativas presentes.</p>
								<img src="images/actividades/asamblea17.JPG">
								<p>Erasmo Cruz Pérez, luchador social y líder moral de la organización.</p>
								<img src="images/actividades/asamblea18.JPG">
								<p>Para IDEAS de México la participación de la mujer es fundamental.</p>
								<img src="images/actividades/asamblea19.JPG">
								<p>Gracias a todas las delegaciones asistentes de los diferentes municipios de las áreas de influencia de nuestra A. C. por sus propuestas y valiosas aportaciones para el plan de trabajo del año venidero. De manera genérica se exponen las actividades a realizar o de seguimiento para el año 2018, captadas de los asambleístas: </p>
								<ol>
									<li>Continuar con las tareas de difusión y divulgación de nuestra A. C.</li>
									<li>Continuar prestando el servicio de gestión a los productores y/o ciudadanos interesados en los diferentes programas de apoyo del Gobierno Federal, estatales y municipales.</li>
									<li>Continuar con las actividades de acercamiento con los diversos actores sociales: Universidades, Instituciones de educativas, Instituciones de investigación, ONG’s, etc.</li>
									<li>Labores de gestión ante los 3 niveles de gobierno, relativos a la asistencia social.</li>
									<li>Seguir promoviendo y gestionando los estudios de gran visión intermunicipales o interregionales en materia de desarrollo integral y sustentable.</li>
									<li>Actividades de divulgación de políticas públicas gubernamentales, reformas de ley y nuevas leyes para fomentar la vinculación entre sociedad y gobierno. “Divulgarlas con palabras de campesino”.</li>
									<li>Continuar con los programas de cursos de capacitación de productores rurales y profesionistas, sobre diversos temas de desarrollo.</li>
									<li>Continuaremos prestando el servicio de orientación y asistencia técnica en la formulación y evaluación de proyectos.</li>
									<li>Seguir con las actividades de promoción de la mujer en todos sus aspectos a través de la secretaría abocada a la misma.</li>
									<li>Continuar con la participación en el fomento de eventos, recreativos y culturales.</li>
									<li>Continuaremos con las labores de detección y aplicación de actividades agrónicas.</li>
									<li>Seguir fomentando la agroempresa, soportada en figuras jurídicas legalmente constituidas y capacitadas.</li>
									<li>En general, buscar el fortalecimiento interno para un mejor desahogo de nuestro objeto social.</li>
								</ol>
							<?php } ?>
							</section>
							</div>
							<div class="4u$ 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
										<hr />
										<h2>Más en Actividades:</h2>
										<hr />
										<?php if(isset($_GET["evento"]) && $_GET["evento"] != 1){ ?>
										<section>
											<h3>Programas de apoyo y fuentes de financiamiento a proyectos productivos del sector rural</h3>
											<p>Los días 8 y 9 de Diciembre de 2017 se impartió este taller a productores diversos de diferentes municipios de las áreas de influencia de nuestra A. C. ..</p>
											<footer>
												<ul class="actions">
													<li><a href="actividades.php?evento=1" class="button">Ver</a></li>
												</ul>
											</footer>
										</section>
										<hr />
										<?php }if(isset($_GET["evento"]) && $_GET["evento"] != 2){ ?>
										<section>
											<h3>Evaluación financiera de proyectos productivos del sector rural</h3>
											<p>Continuando con las labores de capacitación de IDEAS de México A. C. los días 16, 17, 18 y 19 de Noviembre de 2017 se impartió este taller a 21 técnicos invitados por la asociación..</p>
											<footer>
												<ul class="actions">
													<li><a href="actividades.php?evento=2" class="button">Ver</a></li>
												</ul>
											</footer>
										</section>
										<hr />
										<?php }if(isset($_GET["evento"]) && $_GET["evento"] != 3){ ?>
										<section>
											<h3>Asamblea General Nacional 2017</h3>
											<p>Con el mínimo de protocolo se realizó la asamblea general nacional los días 16 y 17 de Diciembre de 2017 en la ciudad sede de nuestra A. C. Huatusco, Ver. ..</p>
											<footer>
												<ul class="actions">
													<li><a href="actividades.php?evento=3" class="button">Ver</a></li>
												</ul>
											</footer>
										</section>
										<?php } ?>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
			<a class="scrolly goup" href="#inicio" id="rtop">
				<img src="images/icons/arrow-up.svg">
			</a>
			<footer id="footer" style="padding-top: 0; padding-bottom: 30px;">
				<ul class="copyright">
					<li>&copy; IDEAS de México A. C. 2018</li><li style="color:#272833">Diseño basado en: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
				</ul>
			</footer>

		</div>
		<style type="text/css">
			/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    /*height: 600px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    /*background-color: #fefefe;*/
    /*margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 100%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.modal-content img{
	height: 100vh;
}
@media (orientation:portrait) {

   .modal-content img{
   	height: auto;
   	width: 100%;
   }

}
		</style>
<!-- Trigger/Open The Modal -->
<!--button id="myBtn">Open Modal</button-->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <img src="images/actividades/asamblea13.JPG">
  </div>

</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script type="text/javascript">
				$('.row img').addClass('aparece');
			</script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			
	</body>
</html>