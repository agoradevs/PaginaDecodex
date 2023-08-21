<?php
$data = json_decode(file_get_contents('php://input'), true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($data["nombre"]) && isset($data["correo"]) && isset($data["mensaje"])) {
    
    require './PhpMailer/PHPMailer.php';
    require './PhpMailer/Exception.php';
    require './PhpMailer/SMTP.php';
    $nombre = $data["nombre"];
    $correo = $data["correo"];
    $mensaje = $data["mensaje"];

    $mail = new PHPMailer(true);

    $mailUser = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.office365.com'; // Servidor SMTP de Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'turisclapaz@hotmail.com'; // Tu dirección de correo Gmail
        $mail->Password   = 'Borderlands788'; // Tu contraseña de Gmail
        $mail->SMTPSecure = 'tls';
        $mail->Port       = '587';

        $mail->CharSet = 'UTF-8';
        $mail->setFrom('turisclapaz@hotmail.com');
        $mail->addAddress($correo);
        $mail->Subject = 'Mensaje de contacto desde tu sitio web';
        $mail->Body    = 'Gracias por tu mensaje, ' . $nombre . '. Nos pondremos en contacto contigo lo antes posible.  Este es tu mensaje: ' . $mensaje;'';  

        $mail->send();
        $mailUser->isSMTP();
        $mailUser->Host       = 'smtp.office365.com'; // Servidor SMTP de Gmail
        $mailUser->SMTPAuth   = true;
        $mailUser->Username   = 'turisclapaz@hotmail.com'; // Tu dirección de correo Gmail
        $mailUser->Password   = 'Borderlands788'; // Tu contraseña de Gmail
        $mailUser->SMTPSecure = 'tls';
        $mailUser->Port       = '587';

        $mailUser->CharSet = 'UTF-8';
        $mailUser->setFrom('turisclapaz@hotmail.com');
        $mailUser->addAddress('turisclapaz@hotmail.com');
        $mailUser->Subject = 'Mensaje de ' . $nombre . '';
        $mailUser->Body    =  $mensaje;

        $mailUser->send();
        header('Content-Type: application/json');
        echo json_encode(true);

    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode(false); }
}
?>
