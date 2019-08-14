<!-- <style>
	.oresot{background: url(.assets/images/LogoFovimeOficial-Remasterizado-PPT-10.png);}
</style> -->

<main class="mt-5 oresot">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="font-family: 'Russo One', sans-serif; color: #02784B" align="center">OBRA TERMINADA CONJUNTO RESIDENCIAL "VISTA VERDE"
				</h2>

				<div class="container">
					<div class="card-columns galeria">
						<div class="card">
							<a href="" data-toggle="modal" data-target="#myModal">
								<img class="card-img-top" src="./assets/images/galeriaObrasTerminadas/1.jpg" alt="">		    					
							</a>		    				
						</div>

						<div class="container">
							
							<div class="modal fade" id="myModal">
								<button type="button" class="close 	mr-2" data-dismiss="modal">&times;</button>
								<div class="modal-dialog modal-lg modal-dialog-centered">	    						
									<img class="img-fluid rounded" src="./assets/images/galeriaObrasTerminadas/1.jpg" alt="">
								</div>
							</div>

						</div>

					</div>
					
				</div>

			</div>
		</div>
	</div>

</main>

<script>
	
	
	var imagenes = [2,3,4,5,6,7,8,9,10];
	var galeria = document.getElementsByClassName('galeria');
	
	for (imagen of imagenes){
		galeria.innerHTML += `<div class="card">
		    				<a href="" data-toggle="modal" data-target="#id${imagen}">
		    				<img class="card-img-top" src="./assets/images/galeriaObrasTerminadas/${imagen}.jpg" alt="">		    					
		    				</a>		    				
		    			</div>

		    			<div class="container">
		    				<!-- The Modal -->
		    				<div class="modal fade" id="id${imagen}">
		    					<button type="button" class="close 	mr-2" data-dismiss="modal">&times;</button>
		    					<div class="modal-dialog modal-lg modal-dialog-centered">	    						
		    						<img class="img-fluid rounded" src="./assets/images/galeriaObrasTerminadas/${imagen}.jpg" alt="">
		    					</div>
		    				</div>

		    			</div>
		` 
	}

</script>
