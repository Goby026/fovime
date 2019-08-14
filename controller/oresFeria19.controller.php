<?php
//require_once 'model/usuarios.php';

class OresFeria19Controller{

//    private $model;

    public function __CONSTRUCT(){
//        $this->model = new Usuarios();
    }

    public function Index(){

        session_start();

        require_once 'view/header.php';
        require_once 'view/Oresferia19/OresFeria19.php';
        require_once 'view/footer.php';

    }
}
