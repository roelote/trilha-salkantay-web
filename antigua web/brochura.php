<?php
if ($_POST["Enviar"]=="ENVIAR SOLICITAÇÃO"){
	$header = 'From: ' . $_POST["nombres"] ."<niko@nctravelcusco.com>";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "NOMBRES: " . $_POST["nombres"] . " \r\n";
if($_POST["correo"] !=''){ $mensaje .= "CORREO: " . $_POST["correo"] . " \r\n";}
$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'info@nctravelcusco.com';
$asunto = 'Brochure "NC TRAVEL CUSCO"';
mail($para, $asunto, utf8_decode($mensaje), $header);

$confi= '<div style=" background:#FF6600; color:#FFFFFF; padding:20px;">
este pedido foi enviado com sucesso, não se esqueça de adicionar o nosso e-mail para seus contatos "info@nctravelcusco.com"
</div><br>';
	
	}

?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>DOWNLOAD GRATUITO BROCHURA</title>
<meta name="keywords" content="DOWNLOAD GRATUITO BROCHURA, Trilaha Salkantay, Trilha Inca Cuzco, Trilha Machu Picchu, Trilha Inca Machu Picchu, Agência de viagens em Cusco, Peru agência de viagem, mapa de localização da agência, agências de viagens em Cusco, Cusco Viagem, Viagem a Machu Picchu">
<meta name="description" content="DOWNLOAD GRATUITO BROCHURA, Trilaha Salkantay, Trilha Inca Cuzco, Trilha Machu Picchu, Trilha Inca Machu Picchu, Agência de viagens em Cusco, Peru agência de viagem, mapa de localização da agência, agências de viagens em Cusco, Cusco Viagem, Viagem a Machu Picchu">
<?php include("include/head.php") ?>

<script language="javascript"> 
function validar(formulario) {
	
if (formulario.nombres.value.length < 4) { 
alert("Digite pelo menos 4 caracteres nos nomes de campo"); 
formulario.nombres.focus();
return(false); }

var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ" + "abcdefghijklmnñopqrstuvwxyzáéíóú ";
var checkStr = formulario.nombres.value;
var allValid = true;
for (i = 0; i < checkStr.length; i++) {
    ch = checkStr.charAt(i);
    for (j = 0; j < checkOK.length; j++)
        if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length) {
       allValid = false;
    break; }
}
if (!allValid) {
alert("Digite únicas letras em nomes");
formulario.nombres.focus();
return(false);
}

if (formulario.correo.value.length < 1) { 
alert("Digite o seu e-mail pessoal!"); 
formulario.correo.focus();
return(false); }

return (true);
}
</script>

</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
  <?php include("include/sidebar.php") ?>
<div class="content col-xs-12 col-sm-12 col-md-9">
  <h1> DOWNLOAD GRATUITO BROCHURA</h1>
  <br>
  <?php echo $confi; ?>
  <div style="background:url(images/home/bro.png); width:290px; height:178px; margin:0 auto; padding:50px 0px 0px 210px;">
    <form method = "POST" name = "registro" onSubmit = "return validar(this)" action = "brochura.php">
      <table>
        <tr>
          <td>nome completo</td>
          <td><input type="text" name="nombres"></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input name="correo" type="text" id="correo"></td>
        </tr>
        <tr>
          <td colspan="2"><br>
            <input type="submit" value="ENVIAR SOLICITAÇÃO" name="Enviar" style=" padding:8px 20px;"></td>
        </tr>
      </table>
    </form>
  </div>
  <br>
  <br>
  <img src="/images/home/brochu.jpg" alt="free download brochure"><br>
</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>