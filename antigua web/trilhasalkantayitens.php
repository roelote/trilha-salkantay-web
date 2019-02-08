<?php

if ($_POST["Enviar"]=="Enviar" and $_POST["randon"]==$_POST["randone"]){
	
$header = 'From: ' . $_POST["nombres"] ."<niko@nctravelcusco.com>";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

$mensaje = "<strong>NOME COMPLETO:</strong> " . $_POST["nombres"] . " <br>";
if($_POST["Telefono"] !=''){ $mensaje .= "<strong>TELEFONE:</strong> " . $_POST["Telefono"] . " <br>";}
if($_POST["correo"] !=''){ $mensaje .= "<strong>EMAIL:</strong> " . $_POST["correo"] . " <br>";}
if($_POST["Country"] !=''){ $mensaje .= "<strong>PAIS:</strong> " . $_POST["Country"] . " <br>";}
if($_POST["ciudad"] !=''){ $mensaje .= "<strong>CIDADE:</strong> " . $_POST["ciudad"] . " <br>";}
if($_POST["npasajeros"] !=''){ $mensaje .= "<strong># PESSOAS:</strong> " . $_POST["npasajeros"] . " <br>";}
if($_POST["fllegada"] !=''){ $mensaje .= "<strong>DATA DA CHEGADA:</strong> " . $_POST["fllegada"] . " <br>";}
if($_POST["finicio"] !=''){ $mensaje .= "<strong>DATA DA INICIO DA CAMINHADA:</strong> " . $_POST["finicio"] . " <br>";}
if($_POST["hotel"] !=''){ $mensaje .= "<strong>HOTEL EM MACHU PICCHU:</strong> " . $_POST["hotel"] . " <br>";}
if($_POST["tipohotel"] !=''){ $mensaje .= "<strong>TIPO DE ACOMODAÇÃO:</strong> " . $_POST["tipohotel"] . " <br>";}
if($_POST["tour"] !=''){ $mensaje .= "<strong>CAMINHADA:</strong> " . $_POST["tour"] . " <br>";}

$mensaje .="<table>";
$mensaje .="<tr><td style='border-right:1px solid #666; padding:3px;'></td><td style='border-right:1px solid #666; padding:3px;'><strong>NOME COMPLETO</strong></td><td style='border-right:1px solid #666; padding:3px;'><strong># DE PASSAPORTE</strong></td><td style='border-right:1px solid #666; padding:3px;'><strong>NACIONALIDADE</strong></td><td style='border-right:1px solid #666; padding:3px;'><strong>VEGETARIANO</strong></td><td><strong>DATA DE NASCIMENTO</strong></td></tr>";
for ($i = 1; $i <= $_POST["npasajeros"]; $i++) {
    $mensaje .="<tr>
	<td style='border-right:1px solid #666; padding:3px;'>".$i."</td>
	<td style='border-right:1px solid #666; padding:3px;'>".$_POST["nombre".$i]."</td>
	<td style='border-right:1px solid #666; padding:3px;'>".$_POST["pasoporte".$i]."</td>
	<td style='border-right:1px solid #666; padding:3px;'>".$_POST["nacionalidad".$i]."</td>
	<td style='border-right:1px solid #666; padding:3px;'>".$_POST["vegetariano".$i]."</td>
	<td>".$_POST["nacimineto".$i]."</td>
	</tr>";
}
$mensaje .="</table>";


if($_POST["CasacoPolar"] !='--'){ $mensaje .= "<strong>Casaco Polar:</strong> " . $_POST["CasacoPolar"] . " <br>";}
if($_POST["BotasTrekking"] !='--'){ $mensaje .= "<strong>Botas de Trekking:</strong> " . $_POST["BotasTrekking"] . " <br>";}
if($_POST["CalcaAdequada"] !='--'){ $mensaje .= "<strong>Calca Adequada:</strong> " . $_POST["CalcaAdequada"] . " <br>";}
if($_POST["GorraChapeu"] !='--'){ $mensaje .= "<strong>Gorra Chapeu:</strong> " . $_POST["GorraChapeu"] . " <br>";}
if($_POST["SacoDormir"] !='--'){ $mensaje .= "<strong>Saco de Dormir:</strong> " . $_POST["SacoDormir"] . " <br>";}
if($_POST["Bastoes"] !='--'){ $mensaje .= "<strong>Bastoes:</strong> " . $_POST["Bastoes"] . " <br>";}
if($_POST["CapaChuva"] !='--'){ $mensaje .= "<strong>Capa de Chuva:</strong> " . $_POST["CapaChuva"] . " <br>";}
if($_POST["Lanterna"] !='--'){ $mensaje .= "<strong>Lanterna:</strong> " . $_POST["Lanterna"] . " <br>";}
if($_POST["Mochila"] !='--'){ $mensaje .= "<strong>Mochila:</strong> " . $_POST["Mochila"] . " <br>";}

if($_POST["comentario"] !=''){ $mensaje .= "<strong>COMENTÁRIOS OU REQUISITOS:</strong> " . $_POST["comentario"] . " <br>";}

$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'info@nctravelcusco.com';
$asunto = "RESERVA TRILHA SALKANTAY";
mail($para, $asunto, utf8_decode($mensaje), $header);

$confi= '<div style=" background:#FF6600; color:#FFFFFF; padding:20px;">
Sua mensagem foi enviada com sucesso!...<br />
Obrigado por sua solicitacao dos itens para trilha Salkantay : <strong style="color:#FF0;">'.$_POST["nombres"].'</strong>, em um momento em que irá responder ao seu e-mail: <strong style="color:#FF0;">'.$_POST["correo"].'</strong><br />
não se esqueça de adicionar o nosso e-mail para seus contatos: <strong style="color:#FF0;"> info@nctravelcusco.com / reservas@nctravelcusco.com </strong></div>';
	
	}

?>



<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Formulário de Reserva - Caminhata Salkantay - Machu Picchu 5 Dias</title>
<meta name="keywords" content="Formulário de Reserva - Caminhata Salkantay - Machu Picchu 5 Dias">
<meta name="description" content="Formulário de Reserva - Caminhata Salkantay - Machu Picchu 5 Dias">
<?php include("include/head.php") ?>
</head>
<body>

<?php include("include/header.php") ?>
<div class="csc">
  <?php include("include/sidebar.php") ?>
<div class="content col-xs-12 col-sm-12 col-md-9">
<h1>FORMULARIO de Reserva - Trilha Salkantay - Machu Picchu 5 Dias</h1>

<?php echo $confi; ?>

<?php include("include/formsalkantay.php") ?>
<br>
  <br>
  <br>
</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>