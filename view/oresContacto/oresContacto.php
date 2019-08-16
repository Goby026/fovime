<main class="mt-6">
    <!-- ASI SE DEBE TRABAJAR -->
    <div class="container p-5" id="contenedorCon">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card box ">
                    <div class="card-header text-center">
                        PRESTAMOS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-light"><i class="fas fa-phone-volume"> 014660638</i></h5>
                        <p class="card-text text-center text-light">Opcion 1 - Opcion 2</p>
                        <p class="card-text text-center text-primary">prestamos@fovime.com</p>
                        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal"
                                data-target="#prestamos" data-whatever="prestamos@fovime.com"><i
                                    class="far fa-envelope" style="font-size: 2em"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card box">
                    <div class="card-header  text-center">
                        PATRIMONIO
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-light"><i class="fas fa-phone-volume"> 014660638</i></h5>
                        <p class="card-text text-center text-light">Opcion 3</p>
                        <p class="card-text text-center text-primary">patrimonio@fovime.com</p>
                        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal"
                                data-target="#patrimonio" data-whatever="patrimonio@fovime.com"><i
                                    class="far fa-envelope" style="font-size: 2em"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card box">
                    <div class="card-header text-center">
                        POST - VENTA
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-light"><i class="fas fa-phone-volume"> 014660638</i></h5>
                        <p class="card-text text-center text-light">Opcion 4</p>
                        <p class="card-text text-center text-primary">post-venta@fovime.com</p>
                        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal"
                                data-target="#postVenta" data-whatever="post-venta@fovime.com"><i
                                    class="far fa-envelope" style="font-size: 2em"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card box">
                    <div class="card-header text-center">
                        ASESORÍA LEGAL
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-light"><i class="fas fa-phone-volume"> 014660638</i></h5>
                        <p class="card-text text-center text-light">Opcion 5</p>
                        <p class="card-text text-center text-primary">legal@fovime.com</p>
                        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal"
                                data-target="#myModal4" data-whatever="legal@fovime.com"><i class="far fa-envelope"
                                                                                            style="font-size: 2em"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Prestamos -->
        <div class="modal fade" id="prestamos">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Mensaje para: prestamos@fovime.com</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="?c=oresContacto&a=enviarCorreo" method="POST">

                        <input type="hidden" name="tipoCorreo" value="prestamos">

                        <!-- Modal body -->
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">CIP:</label>
                                <input type="number" required class="form-control" id="recipient-name1" name="cip">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name2" class="col-form-label">Apellidos:</label>
                                <input type="text" class="form-control" id="recipient-name2" name="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name3" class="col-form-label">Nombres:</label>
                                <input type="text" class="form-control" id="recipient-name3" name="nombres">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name4" class="col-form-label">Grado:</label>
                                <input type="text" class="form-control" id="recipient-name4" name="grado">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name5" class="col-form-label">Tiempo de Servicio:</label>
                                <input type="text" class="form-control" id="recipient-name5" name="tiemposerv">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name6" class="col-form-label">Telefono:</label>
                                <input type="number" size="9" class="form-control" id="recipient-name6" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name7" class="col-form-label">E-mail:</label>
                                <input type="text" class="form-control" id="recipient-name7" name="email">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Consulta:</label>
                                <textarea class="form-control" id="message-text" name="consulta"></textarea>
                            </div>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <!-- Modal Patrimonio -->
        <div class="modal fade" id="patrimonio">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Mensaje para: patrimonio@fovime.com</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="?c=oresContacto&a=enviarCorreo" method="POST">
                        <input type="hidden" name="tipoCorreo" value="patrimonio">
                        <!-- Modal body -->
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">CIP:</label>
                                <input type="number" required class="form-control" id="recipient-name1" name="cip">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name2" class="col-form-label">Apellidos:</label>
                                <input type="text" class="form-control" id="recipient-name2" name="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name3" class="col-form-label">Nombres:</label>
                                <input type="text" class="form-control" id="recipient-name3" name="nombres">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name4" class="col-form-label">Grado:</label>
                                <input type="text" class="form-control" id="recipient-name4" name="grado">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name5" class="col-form-label">Tiempo de Servicio:</label>
                                <input type="text" class="form-control" id="recipient-name5" name="tiemposerv">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name6" class="col-form-label">Telefono:</label>
                                <input type="number" size="9" class="form-control" id="recipient-name6" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name7" class="col-form-label">E-mail:</label>
                                <input type="text" class="form-control" id="recipient-name7" name="email">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Consulta:</label>
                                <textarea class="form-control" id="message-text" name="consulta"></textarea>
                            </div>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <!-- Modal Post venta -->
        <div class="modal fade" id="postVenta">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Mensaje para: post-venta@fovime.com</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="?c=oresContacto&a=enviarCorreo" method="POST">
                        <input type="hidden" name="tipoCorreo" value="postVenta">
                        <!-- Modal body -->
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">CIP:</label>
                                <input type="number" required class="form-control" id="recipient-name1" name="cip">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name2" class="col-form-label">Apellidos:</label>
                                <input type="text" class="form-control" id="recipient-name2" name="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name3" class="col-form-label">Nombres:</label>
                                <input type="text" class="form-control" id="recipient-name3" name="nombres">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name4" class="col-form-label">Grado:</label>
                                <input type="text" class="form-control" id="recipient-name4" name="grado">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name5" class="col-form-label">Tiempo de Servicio:</label>
                                <input type="text" class="form-control" id="recipient-name5" name="tiemposerv">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name6" class="col-form-label">Telefono:</label>
                                <input type="number" size="9" class="form-control" id="recipient-name6" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name7" class="col-form-label">E-mail:</label>
                                <input type="text" class="form-control" id="recipient-name7" name="email">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Consulta:</label>
                                <textarea class="form-control" id="message-text" name="consulta"></textarea>
                            </div>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <!-- Modal Asesoria legal -->
        <div class="modal fade" id="myModal4">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Mensaje para: legal@fovime.com</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="?c=oresContacto&a=enviarCorreo" method="POST">
                        <input type="hidden" name="tipoCorreo" value="legal">
                        <!-- Modal body -->
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">CIP:</label>
                                <input type="number" required class="form-control" id="recipient-name1" name="cip">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name2" class="col-form-label">Apellidos:</label>
                                <input type="text" class="form-control" id="recipient-name2" name="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name3" class="col-form-label">Nombres:</label>
                                <input type="text" class="form-control" id="recipient-name3" name="nombres">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name4" class="col-form-label">Grado:</label>
                                <input type="text" class="form-control" id="recipient-name4" name="grado">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name5" class="col-form-label">Tiempo de Servicio:</label>
                                <input type="text" class="form-control" id="recipient-name5" name="tiemposerv">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name6" class="col-form-label">Telefono:</label>
                                <input type="number" size="9" class="form-control" id="recipient-name6" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name7" class="col-form-label">E-mail:</label>
                                <input type="text" class="form-control" id="recipient-name7" name="email">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Consulta:</label>
                                <textarea class="form-control" id="message-text" name="consulta"></textarea>
                            </div>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>
</main>

<!-- <div class="container" > 

  <div class="modal fade" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo mensaje</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Mensaje:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Enviar mensaje</button>
        </div>
      </div>
    </div>
  </div>

</div>
-->


<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Nuevo mensaje para ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>


