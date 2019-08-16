<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h1 class="titulo">ORES-FOVIME</h1>
                        </div>
                        <div class="card-text">
                            <iframe width="100%" height="500"
                                    src="https://www.youtube.com/embed/-RswX9JoLgU?autoplay=1&rel=0"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">

            <!-- texto Bienvenida -->
            <div class="col-md-8">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h5>TE DAMOS LA MÁS CORDIAL BIENVENIDA</h5>
                                    </div>
                                    <div class="card-text text-justify">
                                        <p class="font-weight-light">A nombre del Consejo Directivo del Organismo Especial de Fondo de Vivienda Militar del Ejército (ORES - FOVIME), expreso una cordial bienvenida a nuestra plataforma de consulta. el cual tiene como objetivo fortalecer, renovar, enriquecer el servicio a nuestros aportantes a través de información en línea y en tiempo real, lo que nos permitirá brindarle una mejor atención y estar más cerca de ustedes.</p>
                                        <p>En esta plataforma los señores asociados podrían visualizar, imprimir y exportar sus estados de cuenta de aportes y financiamiento de créditos hipotecarios y/o préstamos.</p>
                                        <p>Asímismo, en el menú contactos encontrarán la dirección de los correos electrónicos y números telefónicos para que Ud. pueda estar en contactos directo con las diferentes áreas según su requerimiento.</p>
                                        <p>Esperando que utilizando este sistema, Uds. Señores socios sean los principales
                                            beneficiados.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
<!--                            <img src="..." class="d-block w-100" alt="...">-->
                            <img class="d-block w-100" src="./assets/images/inicio/1.jpg" alt="">
                        </div>
                        <div class="carousel-item">
<!--                            <img src="..." class="d-block w-100" alt="...">-->
                            <img class="d-block w-100" src="./assets/images/inicio/2.jpg" alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>

            <!-- Formulario Iniciar Sesión -->
            <div class="col-md-4">

                <div class="card border-0">
                    <form action="?c=Login&a=Acceder" method="post" class="p-4">
                        <div class="form-group text-center">
                            <img class="h-50 img-fluid" src="./assets/images/logo-login.png" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CIP</label>
                            <input type="text" name="cip" class="form-control" placeholder="CIP" required/>
                        </div>
                        <div class="form-group">
                            <label for="password">CONTRASEÑA</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required/>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-block">Iniciar Sesión</button>

                    </form>
                </div>


            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <!-- Mapa de google -->
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                    <script>(function () {
                            var setting = {
                                "height": 300,
                                "width": 1200,
                                "zoom": 17,
                                "queryString": "ORES FOVIME, San Juan de Miraflores, Perú",
                                "place_id": "ChIJsTf_7qi5BZERw8P7PTDw7o8",
                                "satellite": true,
                                "centerCoord": [-12.171381627914695, -76.98225668232834],
                                "cid": "0x8feef0303dfbc3c3",
                                "cityUrl": "/peru/lima",
                                "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                "embed_id": "68831"
                            };
                            var d = document;
                            var s = d.createElement('script');
                            s.src = 'https://1map.com/js/script-for-user.js?embed_id=68831';
                            s.async = true;
                            s.onload = function (e) {
                                window.OneMap.initMap(setting)
                            };
                            var to = d.getElementsByTagName('script')[0];
                            to.parentNode.insertBefore(s, to);
                        })();</script>
                    <a href="https://1map.com/map-embed?embed_id=68831">1map.com</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal de Bienvenida	 -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true" id="mymodalini">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <img class="card-img-top mvima" src="./assets/images/bienvenida.gif" alt="...">
            </div>
        </div>
    </div>
</main>

<script>
    $(document).ready(function () {
        $('#mymodalini').modal('show')

    });
</script>
