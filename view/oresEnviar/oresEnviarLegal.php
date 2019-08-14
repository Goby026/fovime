<?php
$destino = "46203691@continental.edu.pe";
$cip = $_POST["cip"];
$apellidos = $_POST["apellidos"];
$nombres = $_POST["nombres"];
$grado = $_POST["grado"];
$tiemposerv = $_POST["tiemposerv"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];

$contenido = "Cip: " . $cip . "\nApellidos: " . $apellidos . "\nNombres: " . $nombres . "\nGrado: " . $grado . "\Tiempo de Servicio: " . $tiemposerv . "\nTeléfono: " . $telefono . "\nE-mail: " . $email . "\nConsulta: " . $consulta;

mail($destino,"Asesoria legal", $contenido);
header("location:oresConfirmaLegal.html")



  ?>

