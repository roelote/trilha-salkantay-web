<?php
$npasajeros=$_POST['npasajeros'];
$totalp=$_POST['totalp'];
$totalpd=$totalp/2;


if ($_POST["send"]=="ENVIAR RESERVA"){
	$header = 'From: ' . $_POST["namecont"] ."<niko@nctravelcusco.com>";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$mensaje ='<strong>TOTAL EL PRECIO DEL TREK:</strong> $ '.$totalp . " <br>";
$mensaje .='<strong>MONTO A DEPOSITAR:</strong> $ '.$totalpd . " <br>";
$mensaje .='<strong>MONTO PENDIENTE:</strong> $ '.$totalpd . " <br>";
$mensaje .='<strong>ESPACIOS DISPONIBLES:</strong> '.$_POST["spaces"] . " Espacios <br>";
$mensaje .='<strong>FECHA A RESERVAR:</strong> '.$_POST["fecha"] . " <br>";
$mensaje .='<strong>NUMERO DE PASAJEROS:</strong> '.$_POST["npasajeros"] . " <br> <br>";

$mensaje .='<strong>NOMBRE DE CONTACTO:</strong> ' .$_POST["namecont"] . " <br>";
$mensaje .='<strong>TELEFONO DE CONTACTO:</strong> ' .$_POST["telecont"] . " <br>";
$mensaje .='<strong>EMAIL DE CONTACTO:</strong> ' .$_POST["emailcont"] . " <br> <br>";

$mensaje .='

<table style="font-size:11px; width:100%;">
  <tr style="text-align:center; background:#000; color:#FFF;">
    <td>NOMBRE</td>
    <td>APELLIDO</td>
    <td>GENERO</td>
    <td>FECHA DE NACIMIENTO</td>
    <td>NACIONALIDAD</td>
    <td>PASAPORTE</td>
    <td>VEGETARIANO</td>
    <td>ESTUDIANTE</td>
  </tr>
  
  ';
  
  for ($i = 1; $i <= $npasajeros; $i++) {
	  $nombre='nombre'.$i;
	  $apellido='apellido'.$i;
	  $genero='genero'.$i;
	  $birth='birth'.$i;
	  $nacionalidad='nacionalidad'.$i;
	  $pasaporte='pasaporte'.$i;
	  $vegetariano='vegetariano'.$i;
	  $estudiante='estudiante'.$i;
	  $mensaje .='
	  <tr>
    <td>'.$_POST["$nombre"].'</td>
    <td>'.$_POST["$apellido"].'</td>
    <td>'.$_POST["$genero"].'</td>
    <td>'.$_POST["$birth"].'</td>
    <td>'.$_POST["$nacionalidad"].'</td>
    <td>'.$_POST["$pasaporte"].'</td>
    <td>'.$_POST["$vegetariano"].'</td>
    <td>'.$_POST["$estudiante"].'</td>
	</tr>
	  ';
  }
  
  $mensaje .='
  <tr>
    <td colspan="8"> </td>
  </tr>
  <tr style=" background:#000; color:#FFF; text-align:center;">
    <td colspan="8">REQUERIMIENTOS ADICIONALES</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Adicional en Aguas Calientes 40 $:</strong></td>
    <td colspan="4">'.$_POST["v1"].'</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Entrada adicional Machu Picchu 60 $:</strong></td>
    <td colspan="4">'.$_POST["v2"].'</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Sleeping 20 $:</strong></td>
    <td colspan="4">'.$_POST["v3"].'</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Porteador adicional 120 $:</strong></td>
    <td colspan="4">'.$_POST["v4"].'</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Carpa individual 25 $:</strong></td>
    <td colspan="4">'.$_POST["v5"].'</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Camiseta para la Caminata 10 $:</strong></td>
    <td colspan="4">'.$_POST["v6"].'</td>
  </tr>
  <tr>
    <td colspan="4"><strong>Ticket Wayna Picchu 70 $:</strong></td>
    <td colspan="4">'.$_POST["v7"].' </td>
  </tr>
  <tr>
    <td colspan="4"><strong>Ticket de bus de Machu Picchu - Águas Calientes 10 $:</strong></td>
    <td colspan="4">'.$_POST["v8"].' </td>
  </tr>
  <tr>
    <td colspan="4"><strong>Baston 10 $:</strong></td>
    <td colspan="4">'.$_POST["v9"].' </td>
  </tr>
  <tr>
    <td colspan="8"> </td>
  </tr>
  <tr>
    <td colspan="8"><strong>REQUERIMIENTOS Y COMENTARIOS:</strong> '.$_POST["Requerimientos_especiales"].'</td>
  </tr>
  <tr>
    <td colspan="8"><strong>COMO NOS ENCONTRO:</strong> '.$_POST["Referente"].'</td>
  </tr>
</table>

';


$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'info@nctravelcusco.com';
$asunto = 'Reserva trilha inca "NC TRAVEL CUSCO"';
mail($para, $asunto, utf8_decode($mensaje), $header);

$confi= '<div style=" background:#FF6600; color:#FFFFFF; padding:20px; margin:5px;">
Sua mensagem foi enviada com sucesso!...<br />
Obrigado por seu senhor ou senhora de reserva: <strong style="color:#FF0;">'.$_POST["namecont"].'</strong>, em um momento em que irá responder ao seu e-mail: <strong style="color:#FF0;">'.$_POST["emailcont"].'</strong><br />
não se esqueça de adicionar o nosso e-mail para seus contatos:<strong style="color:#FF0;"> info@nctravelcusco.com / reservas@nctravelcusco.com </strong></div>';
	
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar Reservas Trilha Inca</title>
<link href="http://www.nctravelcusco.com/formincatrail/archivos/styleform.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<div class="header">
<img src="archivos/logonc.jpg" />
<h1>FORMULÁRIO DE RESERVA</h1>
</div>
<?php echo $confi; ?>
<br />
<a href="http://www.trilhaincacuzco.com">PÁGINA PRINCIPAL </a></div>
</body>
</html>