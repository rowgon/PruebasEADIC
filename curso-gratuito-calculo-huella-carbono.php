<?php
$VariableIframe = "CJ4CwrKWWmg";
///?feature=share

$url_actual = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_parseada = parse_url($url_actual);
$dominio_actual = $url_parseada['host'];
$dominio_nuevo = 'etrainingpills.eadic.com';
$ruta_relativa = $_SERVER['REQUEST_URI'];


$ruta_relativa = str_replace('/etrainINGPills', '', $ruta_relativa);

if ($dominio_actual != $dominio_nuevo) {
    $url_redireccion = 'https://' . $dominio_nuevo . $ruta_relativa;
    header('Location: ' . $url_redireccion);
    exit;
}

?>
<!doctype html>
<html lang="en">


<?php

include('include/head.php');

//echo "muestrate:<pre>".print_r($getEvento,TRUE)."</pre>";
?>

<style>
	* {
		box-sizing: border-box;
	}

	body {
		background-color: #f1f1f1;
		font-family: Roboto;
	}

	#regForm {
		background-color: #ffffff;
		margin: 100px auto;
		font-family: Roboto;
		/*padding: 40px;*/
		width: 70%;
		min-width: 300px;
		font-size: 14px;
	}

	@media only screen and (max-width: 500px) {
		#regForm {
			width: 107%;
			margin-left: -2%;

		}
	}

	h1 {
		text-align: center;
	}


	@media only screen and (max-width: 600px) {
		.relativo {
			font-size: 11px;
		}
	}

	p {
		font-size: 16px;
	}

	@media (min-width: 768px) and (max-width: 810px) {
		.favoritos {
			background-image: linear-gradient(263deg, #00a9bf 0%, #003da6 80%);
			width: 90%;
			max-width: 100%;
			padding: 2%;
			font-size: 16px;
			font-weight: 800;
			color: #ffffff;
			text-align: center;
			border-radius: 10px;
		}
	}

	@media (min-width: 375px) and (max-width: 390px) {
		.favoritos {
			background-image: linear-gradient(263deg, #00a9bf 0%, #003da6 80%);
			width: 60%;
			max-width: 100%;
			padding: 2%;
			font-size: 16px;
			font-weight: 800;
			color: #ffffff;
			text-align: center;
			border-radius: 10px;
		}
	}
</style>

</head>

<body>
	<section>
		<div alt="Responsive image">
			<img src="img/BannerFT.png">
		</div>
	</section>
	<!-- breadcrumb start-->
	<?php



	//echo "muestrate:<pre>".print_r($getEvento,TRUE)."</pre>";
	?>
	<!--================ Start Course Details Area =================-->
	<section class="course_details_area " style="background-color: #ffffff;padding-top: 4%;">






		<div class="container" style="margin-bottom: 1%;">

			<div id="visualizar" class="row">

				<div class="col-lg-8 embed-responsive embed-responsive-21by9">

					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $VariableIframe; ?>?rel=0&showinfo=0&controls=1&autoplay=1&modestbranding=1" frameborder="0"></iframe>
				</div>


				<iframe width="350" height="500" src="https://www.youtube.com/live_chat?v=<?php echo $VariableIframe; ?>&embed_domain=eadic.org" frameborder="0"></iframe>

			</div>



		</div>






		<section class="grids-asides">
			<div class="container">
				<div class="pb-5 row justify-content-md-center">





					<div class="col-md-8 col-12">


						<div class="mb-3 sticky-top">
							<div class="card">


								<div class="card-body">


									<!--div class="row">

										<div class="p-4 row" >
											<div class="col-12">



												<img src="img/BannerLanding-ExperienciaUB.png" alt="" width="100%">







											</div>
										</div>
									</div-->



									<!--div class="mt-3 row justify-content-md-center" style="text-align: center;">
	<p>Conviértete en un especialista en cálculo y rehabilitación de obras civiles como edificaciones, puentes, cimentaciones, muros de contención, entre otras; mediante el uso de software avalado en normativas internacionales.</p>
</div-->
									<!--div class="mt-3 row justify-content-md-center">
	<center><p>Perfecciona tu perfil profesional por medio de estos tres pilares:</p></center>
</div-->



									<div class="col-md-12" style="">

									</div>

									<div class="col-md-12" style="margin-top: 2%;">
										<img src="img/BannerEpills-Dimensiones.png">
									</div>

									<center><a href="https://grupoeadic.ac-page.com/maestrias-eadic" class="btn_1">Solicita más información</a></center>











								</div>





							</div>

						</div>

					</div>




					<div class="col-md-3 col-12">
						<div class="mb-1 col-12">

							<div class="info-box">
								<center>
									<strong>
										<h3 style="color:#5bc09a;">Solicita Información
									</strong></h3>
								</center>
								<div>
									<div class="" id="success" style="display:none;">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
									</div>

									<form id="fupForm" name="form1" method="post">
										<div class="form-group row">

											<div class="col-12">
												<input id="Nombre" name="Nombre" placeholder="Nombre" type="text" class="form-control" required="">
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12">
												<input id="Apellido" name="Apellido" placeholder="Apellido" type="text" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12">
												<input id="Correo" name="Correo" placeholder="Correo" type="text" class="form-control" required>
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12">
												<select class="form-control UnBorde" name="master" id="master" required="">
													<option value="" selected="" disabled="">Master de interés
													</option>
													<option value="MCARRE">Máster en Diseño, Construcción y Mantenimiento de Carreteras</option>
													<option value="MTTSEG">Máster Internacional en Tráfico, Transportes y Seguridad Vial</option>
													<option value="MAEROP">Máster en Aeropuertos: Diseño, Construcción y Mantenimiento</option>
													<option value="MPUERT">Máster en Diseño, Construcción y Explotación de Puertos, Costas y Obras Marítimas Especiales</option>
													<option value="MIFFCC">Máster en Infraestructuras Ferroviarias</option>
													<option value="MTRANV">Máster en Construcción, Mantenimiento y Explotación de Metros, Tranvías y Ferrocarriles Urbanos</option>
													<option value="MASOST">Máster en Planificación, Construcción y Explotación de Infraestructuras Ambientalmente Sostenibles</option>
													<option value="MCONSER">Máster en Conservación de Carreteras</option>




												</select>
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12">
												<input id="Telefono" name="Telefono" placeholder="Telefono" type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12">
												<select name="pais" id="pais" class="form-control UnBorde">
													<option value="Afganistán">Afganistán</option>
													<option value="Albania">Albania</option>
													<option value="Alemania">Alemania</option>
													<option value="Andorra">Andorra</option>
													<option value="Angola">Angola</option>
													<option value="Antigua y Barbuda">Antigua y Barbuda</option>
													<option value="Arabia Saudita">Arabia Saudita</option>
													<option value="Argelia">Argelia</option>
													<option value="Argentina">Argentina</option>
													<option value="Armenia">Armenia</option>
													<option value="Australia">Australia</option>
													<option value="Austria">Austria</option>
													<option value="Azerbaiyán">Azerbaiyán</option>
													<option value="Bahamas">Bahamas</option>
													<option value="Bangladés">Bangladés</option>
													<option value="Barbados">Barbados</option>
													<option value="Baréin">Baréin</option>
													<option value="Bélgica">Bélgica</option>
													<option value="Belice">Belice</option>
													<option value="Benín">Benín</option>
													<option value="Bielorrusia">Bielorrusia</option>
													<option value="Birmania/Myanmar">Birmania/Myanmar</option>
													<option value="Bolivia">Bolivia</option>
													<option value="Bosnia y Herzegovina">Bosnia y Herzegovina
													</option>
													<option value="Botsuana">Botsuana</option>
													<option value="Brasil">Brasil</option>
													<option value="Brunéi">Brunéi</option>
													<option value="Bulgaria">Bulgaria</option>
													<option value="Burkina Faso">Burkina Faso</option>
													<option value="Burundi">Burundi</option>
													<option value="Bután">Bután</option>
													<option value="Cabo Verde">Cabo Verde</option>
													<option value="Camboya">Camboya</option>
													<option value="Camerún">Camerún</option>
													<option value="Canadá">Canadá</option>
													<option value="Catar">Catar</option>
													<option value="Chad">Chad</option>
													<option value="Chile">Chile</option>
													<option value="China">China</option>
													<option value="Chipre">Chipre</option>
													<option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
													<option value="Colombia">Colombia</option>
													<option value="Comoras">Comoras</option>
													<option value="Corea del Norte">Corea del Norte</option>
													<option value="Corea del Sur">Corea del Sur</option>
													<option value="Costa de Marfil">Costa de Marfil</option>
													<option value="Costa Rica">Costa Rica</option>
													<option value="Croacia">Croacia</option>
													<option value="Cuba">Cuba</option>
													<option value="Dinamarca">Dinamarca</option>
													<option value="Dominica">Dominica</option>
													<option value="Ecuador">Ecuador</option>
													<option value="Egipto">Egipto</option>
													<option value="El Salvador">El Salvador</option>
													<option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos
													</option>
													<option value="Eritrea">Eritrea</option>
													<option value="Eslovaquia">Eslovaquia</option>
													<option value="Eslovenia">Eslovenia</option>
													<option value="España">España</option>
													<option value="Estados Unidos">Estados Unidos</option>
													<option value="Estonia">Estonia</option>
													<option value="Etiopía">Etiopía</option>
													<option value="Filipinas">Filipinas</option>
													<option value="Finlandia">Finlandia</option>
													<option value="Fiyi">Fiyi</option>
													<option value="Francia">Francia</option>
													<option value="Gabón">Gabón</option>
													<option value="Gambia">Gambia</option>
													<option value="Georgia">Georgia</option>
													<option value="Ghana">Ghana</option>
													<option value="Granada">Granada</option>
													<option value="Grecia">Grecia</option>
													<option value="Guatemala">Guatemala</option>
													<option value="Guyana">Guyana</option>
													<option value="Guinea">Guinea</option>
													<option value="Guinea ecuatorial">Guinea ecuatorial</option>
													<option value="Guinea-Bisáu">Guinea-Bisáu</option>
													<option value="Haití">Haití</option>
													<option value="Honduras">Honduras</option>
													<option value="Hungría">Hungría</option>
													<option value="India">India</option>
													<option value="Indonesia">Indonesia</option>
													<option value="Irak">Irak</option>
													<option value="Irán">Irán</option>
													<option value="Irlanda">Irlanda</option>
													<option value="Islandia">Islandia</option>
													<option value="Islas Marshall">Islas Marshall</option>
													<option value="Islas Salomón">Islas Salomón</option>
													<option value="Israel">Israel</option>
													<option value="Italia">Italia</option>
													<option value="Jamaica">Jamaica</option>
													<option value="Japón">Japón</option>
													<option value="Jordania">Jordania</option>
													<option value="Kazajistán">Kazajistán</option>
													<option value="Kenia">Kenia</option>
													<option value="Kirguistán">Kirguistán</option>
													<option value="Kiribati">Kiribati</option>
													<option value="Kuwait">Kuwait</option>
													<option value="Laos">Laos</option>
													<option value="Lesoto">Lesoto</option>
													<option value="Letonia">Letonia</option>
													<option value="Líbano">Líbano</option>
													<option value="Liberia">Liberia</option>
													<option value="Libia">Libia</option>
													<option value="Liechtenstein">Liechtenstein</option>
													<option value="Lituania">Lituania</option>
													<option value="Luxemburgo">Luxemburgo</option>
													<option value="Macedonia del Norte">Macedonia del Norte</option>
													<option value="Madagascar">Madagascar</option>
													<option value="Malasia">Malasia</option>
													<option value="Malaui">Malaui</option>
													<option value="Maldivas">Maldivas</option>
													<option value="Malí">Malí</option>
													<option value="Malta">Malta</option>
													<option value="Marruecos">Marruecos</option>
													<option value="Mauricio">Mauricio</option>
													<option value="Mauritania">Mauritania</option>
													<option value="México">México</option>
													<option value="Micronesia">Micronesia</option>
													<option value="Moldavia">Moldavia</option>
													<option value="Mónaco">Mónaco</option>
													<option value="Mongolia">Mongolia</option>
													<option value="Montenegro">Montenegro</option>
													<option value="Mozambique">Mozambique</option>
													<option value="Namibia">Namibia</option>
													<option value="Nauru">Nauru</option>
													<option value="Nepal">Nepal</option>
													<option value="Nicaragua">Nicaragua</option>
													<option value="Níger">Níger</option>
													<option value="Nigeria">Nigeria</option>
													<option value="Noruega">Noruega</option>
													<option value="Nueva Zelanda">Nueva Zelanda</option>
													<option value="Omán">Omán</option>
													<option value="Países Bajos">Países Bajos</option>
													<option value="Pakistán">Pakistán</option>
													<option value="Palaos">Palaos</option>
													<option value="Panamá">Panamá</option>
													<option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
													<option value="Paraguay">Paraguay</option>
													<option value="Perú">Perú</option>
													<option value="Polonia">Polonia</option>
													<option value="Portugal">Portugal</option>
													<option value="Reino Unido">Reino Unido</option>
													<option value="República Centroafricana">República
														Centroafricana</option>
													<option value="República Checa">República Checa</option>
													<option value="República del Congo">República del Congo</option>
													<option value="República Democrática del Congo">República
														Democrática del Congo</option>
													<option value="República Dominicana">República Dominicana
													</option>
													<option value="República Sudafricana">República Sudafricana
													</option>
													<option value="Ruanda">Ruanda</option>
													<option value="Rumanía">Rumanía</option>
													<option value="Rusia">Rusia</option>
													<option value="Samoa">Samoa</option>
													<option value="San Cristóbal y Nieves">San Cristóbal y Nieves
													</option>
													<option value="San Marino">San Marino</option>
													<option value="San Vicente y las Granadinas">San Vicente y las
														Granadinas</option>
													<option value="Santa Lucía">Santa Lucía</option>
													<option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe
													</option>
													<option value="Senegal">Senegal</option>
													<option value="Serbia">Serbia</option>
													<option value="Seychelles">Seychelles</option>
													<option value="Sierra Leona">Sierra Leona</option>
													<option value="Singapur">Singapur</option>
													<option value="Siria">Siria</option>
													<option value="Somalia">Somalia</option>
													<option value="Sri Lanka">Sri Lanka</option>
													<option value="Suazilandia">Suazilandia</option>
													<option value="Sudán">Sudán</option>
													<option value="Sudán del Sur">Sudán del Sur</option>
													<option value="Suecia">Suecia</option>
													<option value="Suiza">Suiza</option>
													<option value="Surinam">Surinam</option>
													<option value="Tailandia">Tailandia</option>
													<option value="Tanzania">Tanzania</option>
													<option value="Tayikistán">Tayikistán</option>
													<option value="Timor Oriental">Timor Oriental</option>
													<option value="Togo">Togo</option>
													<option value="Tonga">Tonga</option>
													<option value="Trinidad y Tobago">Trinidad y Tobago</option>
													<option value="Túnez">Túnez</option>
													<option value="Turkmenistán">Turkmenistán</option>
													<option value="Turquía">Turquía</option>
													<option value="Tuvalu">Tuvalu</option>
													<option value="Ucrania">Ucrania</option>
													<option value="Uganda">Uganda</option>
													<option value="Uruguay">Uruguay</option>
													<option value="Uzbekistán">Uzbekistán</option>
													<option value="Vanuatu">Vanuatu</option>
													<option value="Venezuela">Venezuela</option>
													<option value="Vietnam">Vietnam</option>
													<option value="Yemen">Yemen</option>
													<option value="Yibuti">Yibuti</option>
													<option value="Zambia">Zambia</option>
													<option value="Zimbabue">Zimbabue</option>
											</div>
										</div>
										<br>
										<div class="form-group row">

											<div class="col-12">
												<input id="Ciudad" style="margin-top: 4%;" name="text" placeholder="Ciudad" type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12">
												<select class="form-control UnBorde" name="designation" id="designation" required="">
													<option value="" selected="" disabled="">Nivel de estudios
														culminados *</option>
													<option value="Doctorado">Doctorado</option>
													<option value="Maestria / Postgrado">Maestría / Postgrado
													</option>
													<option value="Licenciatura / Ingenieria / Arquitectura / Pregrado / Grado">
														Licenciatura / Ingeniería / Arquitectura / Pregrado / Grado
													</option>
													<option value="Diplomatura / Ingenieria o Arquitectura tecnica">
														Diplomatura / Ingeniería o Arquitectura técnica</option>
													<option value="Formacion profesional / Tecnico / Tecnologo / TSU">
														Formación profesional / Técnico / Tecnólogo / TSU</option>
													<option value="Bachillerato">Bachillerato</option>
													<option value="Bachillerato Perú">Bachillerato (Perú)</option>
												</select>
											</div>
										</div>
										<div class="form-group row">

											<div class="col-12">
												<select class="form-control UnBorde" name="situaciones" id="situaciones" required="">
													<option value="" selected="" disabled="">¿En cuál de estas
														situaciones te encuentras? *</option>
													<option value="Solo información">Solo quiero información por
														email, prefiero que no me llamen</option>
													<option value="Realizar llamada">Me gustaría que me llamaran
														para informarme</option>
													<option value="Muy interesado">Estoy decidido a realizar una
														Maestría de esta especialidad y me interesa que me informen
														y me llamen</option>
												</select>
											</div>
										</div>

										<div class="form-group row">

											<div class="col-12">
												<select class="form-control UnBorde" name="conociste" id="conociste" required="">
													<option value="" selected="" disabled="">¿Cómo conociste Eadic?
														*</option>
													<option value="Portal Universia">Portal Universia</option>
													<option value="Blog especializado">Blog especializado (indica
														cual)</option>
													<option value="Comunicacion de EADIC">Comunicacion de EADIC
													</option>
													<option value="Soy antiguo alumno-a">Soy antiguo alumno-a
													</option>
													<option value="Facebook EADIC o anuncios">Facebook EADIC o
														anuncios</option>
													<option value="Prensa en papel o digital">Prensa en papel o
														digital</option>
													<option value="Comunicado de tu empresa">Comunicado de tu
														empresa</option>
													<option value="Pagina web OEA">Pagina web OEA</option>
													<option value="Linkedin">Linkedin</option>
													<option value="Civilgeeks">Civilgeeks</option>
													<option value="Pagina web EADIC-OEA">Pagina web EADIC-OEA
													</option>
													<option value="Twitter">Twitter</option>
													<option value="Por un amigo/a o exalumno/a">Por un amigo/a o
														exalumno/a</option>
													<option value="Buscando en Google la tematica que me interesaba">
														Buscando en Google la tematica que me interesaba</option>
													<option value="Comunicado de colegios profesionales">Comunicado
														de colegios profesionales</option>
													<option value="Otro">Otro (por favor</option>
													<option value="Comunicado de universidades">Comunicado de
														universidades</option>
													<option value="Instagram">Instagram</option>
												</select>
											</div>
										</div>


										<div class="form-group row">
											<div class="offset-4 col-8">
												<button onclick="alertar('¡Gracias por tu interés!');" type="button" name="save" class="btn_1" value="Enviar" id="butsave">
													Enviar
												</button>



											</div>
										</div>
									</form>
								</div>




							</div>


						</div>


						<h4 style="color: black;" class="mb-3">Contacta con nosotros </h4>
						<div class="row">


							<div class="mb-1 col-12">
								<div class="info-box">



									<a href="https://eadic.com/faqs/" target="_blank" data-toggle="modal" data-target="#exampleModalCenter">
										<img src="img/botón_03.png" alt="" style="  width:100%;">
									</a>




								</div>

							</div>
							<div class="mb-1 col-12">
								<div class="info-box">



									<a target="_blank" href=" https://us06web.zoom.us/j/93151603423

				Join our Cloud HD Video Meeting

				https://us06web.zoom.us

				">
										<img src="img/oficina virtual.png" alt="" style="  width:100%;">
									</a>
									<p style="font-size: 10px;">lunes a viernes de 08:00 a 16:45 <strong> Hora
											COLOMBIA.</strong></p>




								</div>

							</div>





						</div>
						<!-- /.col -->

						<!-- /.col -->





						<!-- /.col -->









					</div>
				</div>








			</div>






















			</div>
			</div>


		</section>
		<!--<div class="fuck" id="fuck">
		<div style="border: 0px none #D5CC5A; overflow: hidden; margin: 15px auto; max-width: 575px;">

<iframe scrolling="no" src="certificado.php" style="border: 0px none; margin-left: -163px; margin-right: 283px; height: 640px; margin-top: -499px;
margin-bottom: -100px; width: 400px;">
</iframe>
</div>
</div>-->
		<!--================ End Course Details Area =================-->


		<script>
			$(document).ready(function() {
				$('#butsave').on('click', function() {
					$("#butsave").attr("disabled", "disabled");
					var Nombre = $('#Nombre').val();
					var Apellido = $('#Apellido').val();
					var Correo = $('#Correo').val();
					var Ciudad = $('#Ciudad').val();
					var pais = $('#pais').val();
					var conociste = $('#conociste').val();
					var situaciones = $('#situaciones').val();
					var designation = $('#designation').val();
					var master = $('#master').val();
					if (Nombre != "" && Apellido != "" && Correo != "" && Ciudad != "" && master != "" && situaciones != "") {
						$.ajax({
							url: '../WAdmin/Controll/RFormulario.php',
							type: "POST",
							data: {
								Nombre: Nombre,
								Apellido: Apellido,
								Correo: Correo,
								Ciudad: Ciudad,
								pais: pais,
								conociste: conociste,
								situaciones: situaciones,
								designation: designation,
								master: master,
							},
							cache: false,
							success: function(dataResult) {
								var dataResult = JSON.parse(dataResult);

								$("#butsave").removeAttr("disabled");
								$('#fupForm').find('input:text').val('');
								$("#success").show();
								$('#success').html('¡Gracias por tu interés!');
								alert("¡Gracias por tu interés!");


							}
						});
					} else {
						alert('Por Favor Llena todo los campos');
					}
				});
			});
		</script>
		<script type="text/javascript">
			function alertar(texto) {
				alert(texto);
			}
		</script>
		<!--================ End NELSON AQUIIIIIII PASALO A 1000 =================-->

		<!--  1000 ms = 1 second
	  900000  ms = 15 min
	   300000 5min
   -->


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"></script>




		<?php include 'footer.php'; ?>

		<!-- footer part end-->

		<!-- jquery plugins here-->
		<!-- jquery -->
		<script src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


		<!-- popper js -->
		<script src="js/popper.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- easing js -->
		<script src="js/jquery.magnific-popup.js"></script>
		<!-- swiper js -->
		<script src="js/swiper.min.js"></script>
		<!-- swiper js -->
		<script src="js/masonry.pkgd.js"></script>
		<!-- particles js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- swiper js -->
		<script src="js/slick.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<!-- custom js -->
		<script src="js/custom.js"></script>



</body>

</html>