<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Verificar reCAPTCHA
      $captcha = $_POST['g-recaptcha-response'];
      $secretKey = '6Lfmt8oqAAAAANUOfnLZ4ijSWy9ZuWx0cmPd6HAo'; // Reemplaza con tu clave secreta de Google reCAPTCHA
  
      // Enviar solicitud a Google para validar el captcha
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
      $responseKeys = json_decode($response, true);
  
      if (!$responseKeys["success"]) {
          echo "<script>
              alert('Error: Captcha no validado. Intenta nuevamente.');
              window.location.href = '/'; // Redirige a la página de inicio
          </script>";
          exit; // Detener el procesamiento si el captcha falla
      }
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Servidor SMTP (ejemplo: Gmail)
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sym.cotizaciones.juan@gmail.com'; // Reemplaza con tu email
        $mail->Password   = 'dpzi tfco xfmk bvic'; // Reemplaza con tu contraseña o App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Configuración del correo
        $mail->setFrom($_POST["email"], $_POST["nombre"]);
        $mail->addAddress('contacto@salsaymiga.cl'); // Reemplaza con tu correo real
        $mail->Subject = 'Nueva Cotización de Catering';

        $pizzas_clasicas = isset($_POST["pizzas_clasicas"]) ? implode(", ", $_POST["pizzas_clasicas"]) : "No seleccionadas";
$pizzas_premium = isset($_POST["pizzas_premium"]) ? implode(", ", $_POST["pizzas_premium"]) : "No seleccionadas";


        // Construir el mensaje
        $mensaje = "
        <strong>Tipo de Cliente:</strong> {$_POST["tipo_cliente"]}<br>
        <strong>RUT:</strong> {$_POST["rut"]}<br>
        <strong>Nombre:</strong> {$_POST["nombre"]}<br>
        <strong>Email:</strong> {$_POST["email"]}<br>
        <strong>Teléfono:</strong> {$_POST["telefono"]}<br>
        <strong>Motivo del Catering:</strong> {$_POST["motivo"]}<br>
        <strong>N° de Personas:</strong> {$_POST["personas"]}<br>
        <strong>Dirección:</strong> {$_POST["direccion"]}<br>
        <strong>Comuna:</strong> {$_POST["comuna"]}<br>
        <strong>Fecha del Servicio:</strong> {$_POST["fecha_servicio"]}<br>
        <strong>Hora de Inicio:</strong> {$_POST["hora_inicio"]}<br>
        <strong>Hora de Término:</strong> {$_POST["hora_termino"]}<br>
       
         <strong>Pizzas Clásicas:</strong> {$pizzas_clasicas}<br>
        <strong>Pizzas Premium:</strong> {$pizzas_premium}
        <strong>Comentarios:</strong> {$_POST["comentarios"]}
        ";

        $mail->isHTML(true);
        $mail->Body = $mensaje;

        // Enviar correo
        $mail->send();
        echo "<script>
            alert('Mensaje enviado correctamente.');
            window.location.href = '/'; // Redirige a la página de inicio
        </script>";
    } catch (Exception $e) {
        echo "<script>
            alert('Error al enviar el mensaje: {$mail->ErrorInfo}');
            window.location.href = '/'; // Redirige a la página de inicio
        </script>";
    }
}
?>
