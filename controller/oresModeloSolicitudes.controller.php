<?php
//require_once 'model/usuarios.php';

class OresModeloSolicitudesController{

//    private $model;

    public function __CONSTRUCT(){
//        $this->model = new Usuarios();
    }

    public function Index(){

        session_start();

        require_once 'view/header.php';
        require_once 'view/oresModeloSolicitudes/oresModeloSolicitudes.php';
        require_once 'view/footer.php';

    }
}
