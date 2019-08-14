<main>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container-fluid">
					<h1 class="titulo mt-5">ORES-FOVIME</h1>
					<!-- Banner-Video Inicio	 -->
					<iframe width="100%" height="500" src="https://www.youtube.com/embed/-RswX9JoLgU?autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<!-- Formulario Iniciar Sesión -->
				<div class="container col-md-6 mt-5">
					<section class="login_content">
						<form action="?c=Login&a=Acceder" method="post">
							<h1>ORES-FOVIME</h1>
							<div class="logo-login">
								<img class="card-img-top" src="./assets/images/logo-login.png" alt="">	
							</div>
							<div>
								<input type="text" name="cip" class="form-control" placeholder="CIP" required />
							</div>
							<div class="mt-4">
								<input type="password" name="password" class="form-control" placeholder="Contraseña" required/>
							</div>
							<div class="mt-5">
								<button type="submit" name="token" value="Login" class="btn btn-outline-primary">Iniciar Sesion</button>
								<!-- <a class="reset_pass" href="#">Olvidaste Tu contraseña?</a> -->
							</div>
						</form>
					</section>					
				</div>

				<!-- texto Bienvenida -->
				<div class="container mt-5">
					<h2>TE DAMOS LA MÁS CORDIAL BIENVENIDA</h2>
					<h4><p>A nombre del Consejo Directivo del Organismo Especial de Fondo de Vivienda Militar del Ejército (ORES - FOVIME), expreso una 			cordial bienvenida a nuestra plataforma de consulta. el cual tiene como objetivo fortalecer, renovar, enriquecer el servicio 		a nuestros aportantes a través de información en línea y en tiempo real, lo que nos permitirá brindarle una mejor atención 			y estar más cerca de ustedes.</p>
						<p>En esta plataforma los señores asociados podrían visualizar, imprimir y exportar sus estados de cuenta de aportes y financiamiento de créditos hipotecarios y/o préstamos.</p>
						<p>Asímismo, en el menú contactos encontrarán la dirección de los correos electrónicos y números telefónicos para que Ud. pueda estar en contactos directo con las diferentes áreas según su requerimiento.</p>
						<p>Esperando que utilizando este sistema, Uds. Señores socios sean los principales beneficiados.</p>
					</h4>
				</div>
				
				<!-- Modal de Bienvenida	 -->
				<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mymodalini">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<img class="card-img-top mvima" src="./assets/images/bienvenida.gif" alt="...">
						</div>
					</div>
				</div>

				<!-- Mapa de google -->
				<div class="container mt-5">
					<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
						<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
							var setting = {"height":600,"width":1200,"zoom":17,"queryString":"ORES FOVIME, San Juan de Miraflores, Perú","place_id":"ChIJsTf_7qi5BZERw8P7PTDw7o8","satellite":true,"centerCoord":[-12.171381627914695,-76.98225668232834],"cid":"0x8feef0303dfbc3c3","cityUrl":"/peru/lima","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"68831"};
							var d = document;
							var s = d.createElement('script');
							s.src = 'https://1map.com/js/script-for-user.js?embed_id=68831';
							s.async = true;
							s.onload = function (e) {
								window.OneMap.initMap(setting)
							};
							var to = d.getElementsByTagName('script')[0];
							to.parentNode.insertBefore(s, to);
						})();</script><a href="https://1map.com/map-embed?embed_id=68831">1map.com</a>
					</div>
				</div>














			</div>
		</div>
	</div>
</main>

<script>
	$(document).ready(function(){
		$('#mymodalini').modal('show')					

	});
</script>