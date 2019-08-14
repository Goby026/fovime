<?php
//require_once 'model/usuarios.php';

require 'assets/PHPMailer/PHPMailerAutoload.php';

class OresContactoController
{

//    private $model;

    public function __CONSTRUCT()
    {
//        $this->model = new Usuarios();
    }

    public function Index()
    {

        session_start();

        require_once 'view/header.php';
        require_once 'view/oresContacto/oresContacto.php';
        require_once 'view/footer.php';

    }

    public function enviarCorreo()
    {

        //data
        $cip = $_POST["cip"];
        $apellidos = $_POST["apellidos"];
        $nombres = $_POST["nombres"];
        $grado = $_POST["grado"];
        $tiemposerv = $_POST["tiemposerv"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $consulta = $_POST["consulta"];

        $contenido = "Cip: " . $cip . "\nApellidos: " . $apellidos . "\nNombres: " . $nombres . "\nGrado: " . $grado . "\Tiempo de Servicio: " . $tiemposerv . "\nTeléfono: " . $telefono . "\nE-mail: " . $email . "\nConsulta: " . $consulta;


        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '45068903@continental.edu.pe';                 // SMTP username
        $mail->Password = 'U2319189';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('45068903@continental.edu.pe', 'Mailer');
        $mail->addAddress('45068903@continental.edu.pe', 'Joe User');     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Prueba de mail';
        $mail->Body    = $contenido;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }


    }
}
