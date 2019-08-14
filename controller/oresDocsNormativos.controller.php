<?php
//require_once 'model/usuarios.php';

class OresDocsNormativosController{

//    private $model;

    public function __CONSTRUCT(){
//        $this->model = new Usuarios();
    }

    public function Index(){

        session_start();

        require_once 'view/header.php';
        require_once 'view/oresDocsNormativos/oresDocsNormativos.php';
        require_once 'view/footer.php';

    }
}
