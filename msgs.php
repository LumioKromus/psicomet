<!DOCTYPE html>
<html lang="es">
<head>
  <title>Psicomet</title>
  <meta name="robots" content="noindex, nofollow">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logo.png" type="image" sizes="512x512">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <!-- main script -->
  <script>
    $(document).ready(function() {
      // pre cargar cotenido
      $('#headerDiv').load('/include/header.html');
      $('#footerDiv').load('/include/footer.html');
      $('#backArrow').load('/include/content.html #backArrow');
    });

    function goBack() {
      window.history.back();
      }
  </script>
</head>
<body>
    <div id="backArrow"></div>
    <div id="headerDiv"></div>
   
    <center>
      <br>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if ($_POST["who"] == "mainForm"){

        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];
        // Destinatario y asunto
        $destinatario = "federicobina@hotmail.com"; // Cambia esto al email al que deseas enviar los datos
        $asunto = "Psicomet - Consulta general";
        // Cabeceras del email
        $cabeceras = "From: $email\r\n";
        // Enviar el email
        mail($destinatario, $asunto, $mensaje, $cabeceras);
        // Mensaje de éxito
        echo "¡El formulario se envió correctamente!";
        } else {
            // Si el formulario no se envió correctamente
            echo "Error al enviar el formulario";
        }

    if ($_POST["who"] == "secondaryForm"){

      $nombre = $_POST["nombre"];
      $pais = $_POST["pais"];
      $telefono = $_POST["telefono"];
      $destinatario = "federicobina@hotmail.com"; // Cambia esto al pais al que deseas enviar los datos
      $asunto = "Psicomet - Consulta de servicio";
      $mensaje = "$nombre\r\n$pais\r\n$telefono"
      // Cabeceras del pais
      $cabeceras = "From: PSICOMET";
      // Enviar el pais
      mail($destinatario, $asunto, $mensaje, $cabeceras);
      // telefono de éxito
      echo "¡El mensaje se envió correctamente! Nos comunicaremos con Ud a la brevedad.";
      } else {
          // Si el formulario no se envió correctamente
          echo "Error al enviar el mensaje";


  }

}

    
?>
<br>
<br>
<button onclick="goBack()">Volver Atrás</button>
</center>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
    <div id="footerDiv"></div>
    
</body>
</html>

<!--

      <h3>Psicomet Apps</h3>
      <a href="apps/memopix/index.html">MEMOPIX</a>


-->