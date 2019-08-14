<!-- ASI SE DEBE TRABAJAR -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <main>
<h1 class="display-1">Ejemplo h1 display-1</h1>
		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-md-12">		            		
		                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-interval="2000" data-ride="carousel">

		              <!-- Indicadores -->
  						<ul class="carousel-indicators">
    						<li data-target="#demo" data-slide-to="0" class="active"></li>
    						<li data-target="#demo" data-slide-to="1"></li>
    						<li data-target="#demo" data-slide-to="2"></li>
  						</ul>	

		                    <div class="carousel-inner">
		                        <div class="carousel-item active">
		                            <img src="./assets/images/sliderSocios/build.jpg" class="d-block w-100" alt="...">
		                        </div>
		                        <div class="carousel-item">
		                            <img src="./assets/images/sliderSocios/arq.jpg" class="d-block w-100" alt="...">
		                        </div>
<!-- 		                        <div class="carousel-item">
		                            <img src="./assets/images/sliderSocios/pl3.jpg" class="d-block w-100" alt="...">
		                        </div> -->
		                    </div>

		                    <!-- controladores -->
		                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		                        <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
		                        <span class="sr-only">Previous</span>
		                    </a>
		                    <a class="carousel-control-next"  href="#carouselExampleFade" role="button" data-slide="next">
		                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                        <span class="sr-only">Next</span>
		                    </a>
		                </div>

		            </div>
		        </div>
		    </div>

		    <!-- BOTON UP -->
			<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>
  </div>
</div>
</main>



<!-- boton top -->
<script>
	// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
    </div>
  </div>
</div>