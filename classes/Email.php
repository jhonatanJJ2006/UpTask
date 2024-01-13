<?php

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;

class Email {
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {
        // Crear el objeto de Email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 25;
        $mail->Username = 'c26ebabbabb5ca';
        $mail->Password = 'ddaf3d80b52619';
        $mail->SMTPSecure = 'tls';

        // Configuracion del contenido del email
        $mail->setFrom('cuentas@UpTask.com');
        $mail->addAddress('cuentas@UpTask.com', 'UpTask.com');
        $mail->Subject = 'Confirma tu Cuenta';

        // Habilitar html
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><stong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en UpTask, solo debes confirmarla preionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:8080/confirmar?token=" . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el email
        $mail->send();
    }

    public function enviarInstrucciones() {
        // Crear el objeto de Email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 25;
        $mail->Username = 'c26ebabbabb5ca';
        $mail->Password = 'ddaf3d80b52619';
        $mail->SMTPSecure = 'tls';

        // Configuracion del contenido del email
        $mail->setFrom('cuentas@UpTask.com');
        $mail->addAddress('cuentas@UpTask.com', 'UpTask.com');
        $mail->Subject = 'Confirma tu Cuenta';

        // Habilitar html
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo <p/>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:8080/reestablecer?token=" . $this->token . "'>Reestablecer Password</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el email
        $mail->send();
    }
}
