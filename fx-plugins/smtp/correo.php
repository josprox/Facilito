<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$correo = $_POST['correo'];
$asunto = $_POST['Asunto'];
$mensaje = $_POST['Mensaje'];


$cuerpo = 'Nombre completo: '. $nombre . " " . $apellido . "<br>Correo: " . $correo . "<br>Asunto: " . $asunto . "<br>Mensaje: " . $mensaje;
$cuerpohtml='<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.josprox.com/css/correo-paoo.css">
    <title>JOSPROX Correo</title>
</head>
<body>

    <div class="cabeza--titulo">

    <section class="group">
        <div class="container container--flex">
            <div class="column column--50">
                <img src="https://cdn.josprox.com/img/PicsArt_02-03-07.35.11-1024x1024.png" alt="" class="cabeza--img">
            </div>
            <div class="column column--50">
                <h3 class="column__title">Correo JOSPROX</h3>
                <p class="column__txt">Tienes un nuevo correo por responder.</p>
            </div>
        </div>
    </section>

    <section class="group contact">
        <h2 class="group__title">Tenemos los siguientes datos:</h2>
        <div class="container container--flex">
            <div class="contact-information column column--50">
                <p class="formulario__label">Nombre:</p>
                        <p class="formulario__input-txt">' . $nombre . '</p>
                        <p class="formulario__label">Apellidos:</p>
                        <p class="formulario__input-txt">'. $apellido . '</p>
                        <p class="formulario__label">Correo:</p>
                        <p class="formulario__input-txt">' . $correo . '</p>
                        <p class="formulario__label">Asunto:</p>
                        <p class="formulario__input-txt">' . $asunto . '</p>
                        </div>
            
                        <div class="formulario column column--50">
                            <p class="formulario__label">Mensaje:</p>
                            <p class="formulario__textarea justificacion">' . $mensaje . '</p>
                            </div>
                    
                            </div>
                        </section>
                    
                    </div>
                        
                    </body>
                    </html>';

$cuerpohtml_envio='<!DOCTYPE html>
                    <html lang="es-MX">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="https://cdn.josprox.com/css/correo-paoo.css">
                        <title>JOSPROX Correo</title>
                    </head>
                    <body>
                    
                        <div class="cabeza--titulo">
                    
                        <section class="group">
                            <div class="container container--flex">
                                <div class="column column--50">
                                    <img src="https://cdn.josprox.com/img/PicsArt_02-03-07.35.11-1024x1024.png" alt="" class="cabeza--img">
                                </div>
                                <div class="column column--50">
                                    <h3 class="column__title">Correo JOSPROX</h3>
                                    <p class="column__txt">Se ha mandado la siguiente información.</p>
                                    <br><a href="/" class="btn2">Regresar a Dev</a>
                                </div>
                            </div>
                        </section>
                    
                        <section class="group contact">
                            <h2 class="group__title">Tenemos los siguientes datos:</h2>
                            <div class="container container--flex">
                                <div class="contact-information column column--50">
                                    <p class="formulario__label">Nombre:</p>
                                            <p class="formulario__input-txt">' . $nombre . '</p>
                                            <p class="formulario__label">Apellidos:</p>
                                            <p class="formulario__input-txt">'. $apellido . '</p>
                                            <p class="formulario__label">Correo:</p>
                                            <p class="formulario__input-txt">' . $correo . '</p>
                                            <p class="formulario__label">Asunto:</p>
                                            <p class="formulario__input-txt">' . $asunto . '</p>
                                            </div>
                                
                                            <div class="formulario column column--50">
                                                <p class="formulario__label">Mensaje:</p>
                                                <p class="formulario__textarea justificacion">' . $mensaje . '</p>
                                                </div>
                                        
                                                </div>
                                            </section>
                                        
                                        </div>
                                            
                                        </body>
                                        </html>';

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'Pon el servidor smtp';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Pon el usuario';                     //SMTP username
    $mail->Password   = 'Pon la contraseña';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom( $correo, $nombre);
    $mail->addAddress('agrega el correo donde lo envías');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensaje enviado desde JOSPROX con el siguiente asunto: ' . $asunto;
    $mail-> CharSet = 'UTF-8';
    $mail->Body    = $cuerpohtml;

    $mail->send();
    echo "{$cuerpohtml_envio}";
} catch (Exception $e) {
    echo "Tuvimos un error, pruebalo mas tarde: {$mail->ErrorInfo}";
}
?>