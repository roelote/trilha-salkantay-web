<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>contato trilha inca</title>
<meta name="keywords" content="contato trilha inca">
<meta name="description" content="contato trilha inca">
<?php include("include/head.php") ?>
</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
  <?php include("include/sidebar.php") ?>
<div class="content col-xs-12 col-sm-12 col-md-9">
<h1> contato &quot; NC Travel Cusco &quot;</h1>
<br>






<?php
$para .= 'ottoparra@gmail.com';

// título
$título = 'Recordatorio de cumpleaños para Agosto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>¡Estos son los cumpleaños para Agosto!</p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>






</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>