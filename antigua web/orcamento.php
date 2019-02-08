<?php

if ($_POST["Enviar"]=="ENVIAR" and $_POS["randon"]==$_POS["randone"]){
	
$header = 'From: ' . $_POST["nombres"] ."<niko@nctravelcusco.com>";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "NOMBRE: " . $_POST["nombres"] . " \r\n";
if($_POST["orcamento"] !=''){ $mensaje .= "PRESUPUESTO PARA: " . $_POST["orcamento"] . " \r\n";}
if($_POST["satasaida"] !=''){ $mensaje .= "FECHA SALIDA: " . $_POST["satasaida"] . " \r\n";}
if($_POST["npadultos"] !=''){ $mensaje .= "CANTIDAD DE ADULTOS: " . $_POST["npadultos"] . " \r\n";}
if($_POST["npninos"] !=''){ $mensaje .= "CANTIDAD DE NIÑOS: " . $_POST["npninos"] . " \r\n";}

if ($_POST['tipo']=="2"){
	if($_POST["categoria"] !=''){ $mensaje .= "CATEGORIA DE PAQUETE: " . $_POST["categoria"] . " \r\n";}
	if($_POST["ncuartos"] !=''){ $mensaje .= "CANTIDAD DE CUARTOS: " . $_POST["ncuartos"] . " \r\n";}
}

if($_POST["email"] !=''){ $mensaje .= "EMAIL: " . $_POST["email"] . " \r\n";}
if($_POST["telefono"] !=''){ $mensaje .= "TELEFONO: " . $_POST["telefono"] . " \r\n";}
if($_POST["celular"] !=''){ $mensaje .= "CELULAR: " . $_POST["celular"] . " \r\n";}
if($_POST["comentario"] !=''){ $mensaje .= "OBSERVACIONES: " . $_POST["comentario"] . " \r\n";}
if($_POST["referencia"] !=''){ $mensaje .= "REFERENCIA: " . $_POST["referencia"] . " \r\n";}

$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'info@nctravelcusco.com';
$asunto = 'Orçamento "NC Travel Cusco"';
mail($para, $asunto, utf8_decode($mensaje), $header);

$confi= '<div style=" background:#FF6600; color:#FFFFFF; padding:20px;">
Sua mensagem foi enviada com sucesso!...<br />
Obrigado por sua orçamento: <strong style="color:#FF0;">'.$_POST["nombres"].'</strong>, De aqui a pouco iremos responder a seu e-mail: <strong style="color:#FF0;">'.$_POST["email"].'</strong><br />
não esqueça de adicionar nosso e-mail para seus contatos : <strong style="color:#FF0;"> info@nctravelcusco.com / reservas@nctravelcusco.com </strong></div>';
	
	}

?>


<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Quero meu orçamento <?php echo $_GET["orcamento"];?></title>
<meta name="keywords" content="Quero meu orçamento <?php echo $_GET["orcamento"];?>">
<meta name="description" content="Quero meu orçamento <?php echo $_GET["orcamento"];?>">
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

if (formulario.satasaida.value.length < 1) { 
alert("Digite partida"); 
formulario.satasaida.focus();
return(false); }

if (formulario.email.value.length < 1) { 
alert("Digite o seu e-mail pessoal!"); 
formulario.email.focus();
return(false); }

if (formulario.telefono.value.length < 1) { 
alert("Digite o seu número de telefone"); 
formulario.telefono.focus();
return(false); }

if (isNaN(formulario.telefono.value)) {
alert("Este campo deve ter apenas números.");
formulario.telefono.focus();
return false;
 }

if (formulario.randon.value != <?php echo $randon; ?>) { 
alert("Digite o números: <?php echo $randon; ?>"); 
formulario.randon.focus();
return(false); }

return (true);
}
</script>
<?php include("include/head.php") ?>
</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">

<div class="content col-xs-12 col-sm-12 col-md-9">
<h1>
Quero meu orçamento: <?php echo $_GET["orcamento"]; ?>
</h1><br>

<?php echo $confi;?>

<em>Os campos marcados com ‘*’ são de preenchimento obrigatório.</em><br><br>


<form method = "POST" name = "registro" onSubmit = "return validar(this)" action = "orcamento.php">

<input name="orcamento" type="hidden" value="<?php echo $_GET["orcamento"]; ?>" />
<input name="tipo" type="hidden" value="<?php echo $_GET["tipo"]; ?>" />

<div class="formularion">
  <div class="row">
    <div class="col-md-12">
      <h4 class="mb-2">INFORMAÇÕES DA VIAGEM</h4>
    </div>
    <div class="col-xs-12 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
            *Data de saída:
          </div>
           <div class="col-xs-12 col-sm-6 p-2">
            <input name="satasaida" type="text" id="datepicker" size="30">
          </div>
    </div>
    <div class="col-xs-12 col-sm-12 mt-2">
        <div class="title3">*Nº de passageiros </div>
    </div>



    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
             Adultos:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
             <select name="npadultos" id="npadultos">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
            </select>
          </div>
    </div>
    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
             Crianças:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
              <select name="npninos" id="npninos">
              <option value="00" selected>00</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              </select>
          </div>
    </div>

         <?php if ($_GET['tipo']=="2"){?>

     <div class="col-xs-6 col-sm-12">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
              Categoria do Hotel:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
             <select name="categoria" id="categoria">
              <option value="Sem Hotel" selected>Sem Hotel</option>
              <option value="Clase Economico">Clase Economico</option>
              <option value="ClaseTurística">ClaseTurística</option>
              <option value="Clase Superior">Clase Superior</option>
              <option value="Clase Premium">Clase Premium</option>
              <option value="Premium Plus">Premium Plus</option>
              </select>
          </div>
    </div>
    <div class="col-xs-6 col-sm-12">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
             Quantidade de apartamento:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
                 <select name="ncuartos" id="ncuartos">
                  <option value="01" selected>00</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  </select>
          </div>
    </div>
    <?php } ?>

    
   <div class="col-xs-12 col-sm-12 mt-2">
        <div><h4>DADOS DO SOLICITANTE</h4> </div>
    </div>

    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
             *Nome completo:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
              <input type="text" name="nombres">
          </div>
    </div>

    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
             *E-mail:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
             <input name="email" type="email" id="email">
          </div>
    </div>
    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
             *Telefone:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
             <input name="telefono" type="text" id="telefono">
          </div>
    </div>
    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
            *Celular:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
             <input name="celular" type="text" id="celular">
          </div>
    </div>

     <div class="col-xs-12 col-sm-12">
          <div class="col-xs-12 col-sm-12 p-2 color-text2">
            Observações:
          </div>
           <div class="col-xs-12 col-sm-12 p-2 input-full text-center">
             <textarea name="comentario" id="comentario" cols="74" rows="10"></textarea>
          </div>
    </div>

    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
            Como nos contato:
          </div>
           <div class="col-xs-12 col-sm-6 p-2 input-full">
              <select id="field17" name="referencia" title="Reference">
              <option value="Mochileiros.com">Mochileiros.com</option>
              <option value="Orkut">Orkut</option>
              <option value="FaceBook">FaceBook</option>
              <option value="Google">Google</option>
              <option value="Yahoo">Yahoo</option>
              <option value="Others">Outros</option>
              </select>
          </div>
    </div>

    <div class="col-xs-6 col-sm-6">
          <div class="col-xs-12 col-sm-6 p-2 color-text2">
            *Digite o número:
          </div>
           <div class="col-xs-12 col-sm-6 p-2">
              <input name="randone" type="hidden" value="<?php echo $randon; ?>"> <span class="randon"><?php echo $randon; ?></span> 
              <input name="randon" type="text" id="randon" size="3" maxlength="3">
          </div>
    </div>

    <div class="col-md-12">
      <div class="abg1 noinput">

          <input type="submit" value="ENVIAR" name="Enviar"">
      </div>
    </div>
 
</div>
</div>


</form>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script>
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
     </script>

</div>
  <?php include("include/sidebar.php") ?>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>