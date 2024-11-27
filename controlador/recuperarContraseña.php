<?php
session_start();
require_once '../modelo/conexion.php'; // Asegúrate de que la ruta es correcta
require_once '../modelo/usuario.php';  // Llama al archivo del modelo para trabajar con usuarios
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    // Obtener conexión
    $conn = Database::StartUp(); // Usar la clase Database y su método StartUp

    // Obtener email del formulario
    $email = trim($_POST['email']); // Asegurarnos de que la variable es minúscula

    // Consultar si el usuario existe
    $usuario = obtenerUsuarioPorEmail($email, $conn); // Asegurarnos de que la variable es minúscula

    if ($usuario) {
        // Generar token
        $token = bin2hex(random_bytes(50));

        // Actualizar token en la base de datos
        if (actualizarTokenUsuario($email, $token, $conn)) { // Asegurarnos de que la variable es minúscula
            // Crear el enlace de recuperación
            $recuperarLink = "http://localhost/EL%20RINCON%20DE%20LAS%20DELICIAS%20WEB/recuperarcontraseña.php" . $token;

            // Configuración de PHPMailer
            $mail = new PHPMailer(true); // Instanciamos PHPMailer

            try {
                // Configurar el servidor SMTP de Gmail
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
                $mail->SMTPAuth = true;
                $mail->Username = 'cristicorojas@gmail.com'; // Tu correo Gmail
                $mail->Password = 'cwkr bznx lwky rrtq'; // Contraseña o contraseña de aplicación de Gmail

                // Usar SSL o STARTTLS dependiendo de lo que funcione
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Cambiar a SSL si necesario
                $mail->Port = 587; // Usar el puerto 587 para STARTTLS, o prueba con 465 para SSL

                // Configurar el correo
                $mail->setFrom('cristicorojas@gmail.com', 'El Rincón de las Delicias'); // Cambia a un correo válido
                $mail->addAddress($email);

                // Contenido del correo
                $mail->isHTML(true);
                $mail->Subject = 'Recuperación de contraseña - El Rincón de las Delicias';

                // Personalización del cuerpo del correo en HTML con estilos
                $mail->Body = '
                <!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Recuperación de contraseña</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f9;
                            color: #333;
                            padding: 20px;
                            margin: 0;
                        }
                        .container {
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #eccb5e;
                            padding: 20px;
                            border-radius: 8px;
                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        }
                        h1 {
                            color: #ec6767;
                        }
                        p {
                            font-size: 16px;
                        }
                        a {
                            background-color: #ec6767;
                            color: white;
                            padding: 10px 20px;
                            text-decoration: none;
                            border-radius: 5px;
                            font-weight: bold;
                        }
                        a:hover {
                            background-color: #d15d5d;
                        }
                        .footer {
                            text-align: center;
                            font-size: 12px;
                            color: #999;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <h1>Recuperación de Contraseña</h1>
                        <p>Hola,</p>
                        <p>Hemos recibido una solicitud para restablecer tu contraseña. Si no realizaste esta solicitud, ignora este correo.</p>
                        <p>Haz clic en el siguiente enlace para restablecer tu contraseña:</p>
                        <p><a href="' . $recuperarLink . '">Restablecer Contraseña</a></p>
                        <p>Si tienes algún problema o pregunta, no dudes en contactarnos.</p>
                        <p class="footer">El Rincón de las Delicias &copy; 2024</p>
                    </div>
                </body>
                </html>
                ';

                // Mensaje alternativo en texto plano para clientes que no soporten HTML
                $mail->AltBody = 'Hola, haz clic en el siguiente enlace para restablecer tu contraseña: ' . $recuperarLink;

                // Deshabilitar la verificación de certificados SSL si es necesario (solo en desarrollo)
                // Asegúrate de eliminar esto en producción para no comprometer la seguridad
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                // Enviar el correo
                if ($mail->send()) {
                    $_SESSION['mensaje'] = "Se ha enviado un enlace de recuperación a tu correo.";
                } else {
                    $_SESSION['mensaje'] = "Error al enviar el correo electrónico.";
                }
            } catch (Exception $e) {
                $_SESSION['mensaje'] = "Error al enviar el correo electrónico. " . $mail->ErrorInfo;
            }
        } else {
            $_SESSION['mensaje'] = "Error al generar el enlace de recuperación.";
        }
    } else {
        $_SESSION['mensaje'] = "El correo electrónico no está registrado.";
    }

    $conn = null; // Cerrar conexión
    header('Location: ../recuperarcontraseña.php'); // Redirigir después de procesar
    exit();
}
?>
