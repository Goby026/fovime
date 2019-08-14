<?php
//require_once 'model/usuarios.php';

class OresFeria18Controller{

//    private $model;

    public function __CONSTRUCT(){
//        $this->model = new Usuarios();
    }

    public function Index(){

        session_start();

        require_once 'view/header.php';
        require_once 'view/Oresferia18/OresFeria18.php';
        require_once 'view/footer.php';

    }
}
