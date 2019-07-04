<?php
require_once 'model/usuarioNotificacion.php';

class IndexController{

//    private $model;
    private $notificacion;

    public function __CONSTRUCT(){
//        $this->model = new Usuarios();
        $this->notificacion = new UsuarioNotificacion();
    }

    public function Index(){

        session_start();

        require_once 'view/header.php';
        require_once 'view/index/index.php';
        require_once 'view/footer.php';

    }

    public function cargarMenu(){

        session_start();

        $notis = $this->notificacion->Listar($_SESSION['id_usuario']);

        echo json_encode($notis);
    }
}
