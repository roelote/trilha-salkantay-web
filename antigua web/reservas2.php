<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Obrigado por reservar conosco</title>
<meta name="keywords" content="Obrigado por reservar conosco, reservas trilha inca cuzco, Trilha Salkantay, Trilha Inca Machu Picchu, Trilha Machu Oicchu">
<meta name="description" content="Obrigado por reservar conosco, reservas trilha inca cuzco, Trilha Salkantay, Trilha Inca Machu Picchu, Trilha Machu Oicchu">

<?php
if ($_POST["Enviar"]=="ENVIAR" and $_POS["randon"]==$_POS["randone"]){
	$header = 'From: ' . $_POST["nombres"] ."<niko@nctravelcusco.com>";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "NOMBRES: " . $_POST["nombres"] . " \r\n";
if($_POST["apellido"] !=''){ $mensaje .= "APELLIDOS: " . $_POST["apellido"] . " \r\n";}
if($_POST["Telefono"] !=''){ $mensaje .= "TELEFONO: " . $_POST["Telefono"] . " \r\n";}
if($_POST["correo"] !=''){ $mensaje .= "EMAIL: " . $_POST["correo"] . " \r\n";}
if($_POST["Country"] !=''){ $mensaje .= "PAIS: " . $_POST["Country"] . " \r\n";}
if($_POST["ciudad"] !=''){ $mensaje .= "CIUDAD: " . $_POST["ciudad"] . " \r\n";}
if($_POST["tour"] !=''){ $mensaje .= "TOUR DE RESERVA: " . $_POST["tour"] . " \r\n";}
if($_POST["npasajeros"] !=''){ $mensaje .= "NUMERO DE PASAJEROS: " . $_POST["npasajeros"] . " \r\n";}
if($_POST["fllegada"] !=''){ $mensaje .= "FECHA DE INICIO: " . $_POST["fllegada"] . " \r\n";}

if($_POST["tservicio"] !=''){ $mensaje .= "TIPO SE SERVICIO: " . $_POST["tservicio"] . " \r\n";}
if($_POST["fpago"] !=''){ $mensaje .= "FORMA DE PRE-PAGO: " . $_POST["fpago"] . " \r\n";}

if($_POST["comentario"] !=''){ $mensaje .= "COMENTARIOS / PREGUNTAS: " . $_POST["comentario"] . " \r\n";}
if($_POST["referencia"] !=''){ $mensaje .= "REFERENCIA: " . $_POST["referencia"] . " \r\n";}

$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'info@nctravelcusco.com';
$asunto = "Reserva: ".$_POST["tour"];
mail($para, $asunto, utf8_decode($mensaje), $header);

$confi= '<div style=" background:#FF6600; color:#FFFFFF; padding:20px;">
Sua mensagem foi enviada com sucesso!...<br />
Obrigado por sua reserva <strong style="color:#FF0;">'.$_POST["nombres"].'</strong>, De aqui a pouco iremos responder a seu e-mail: <strong style="color:#FF0;">'.$_POST["correo"].'</strong><br />
não esqueça de adicionar nosso e-mail para seus contatos : <strong style="color:#FF0;"> info@nctravelcusco.com / reservas@nctravelcusco.com </strong><br />
</div>';
	
	}else{
		echo '<script language="JavaScript" type="text/javascript">
var pagina="reservas.php"
function redireccionar() 
{location.href=pagina} 
setTimeout ("redireccionar()", 1000);
</script>';
		}

?>

<?php include("include/head.php") ?>
</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
  <?php include("include/sidebar.php") ?>
<div class="content col-xs-12 col-sm-12 col-md-9">
  <h1>Obrigado por reservar conosco</h1>
  <br>
  <?php echo $confi; ?><br>
<div class="payment">
<input type="button" onclick="window.open('https://cuscoperu.com/payments/pagos.php?Codigo=MjAxMjEwMjkxMTI2MTc' ,'Reservas','width=730, height=635, scrollbars=YES, resizable=0')" value="Payments On-Line" name="btnreservas"/><br />
<img src="http://nctravelcusco.com/payment/1.png" alt="payment"/>
<img src="http://nctravelcusco.com/payment/2.png" alt="payment"/>
<img src="http://nctravelcusco.com/payment/3.png" alt="payment"/>
<img src="http://nctravelcusco.com/payment/4.png" alt="payment"/>
</div>
  <br>
</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>