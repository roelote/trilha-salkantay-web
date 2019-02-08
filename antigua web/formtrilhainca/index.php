<?php
$spaces=$_POST["spaces"];
$npasajeros=$_POST["npasajeros"];
$fecha=$_POST["fecha"];
$prep=$_POST["tren"];
$totalp = $npasajeros * $prep;

if($spaces==""){
	echo '
	<script type="text/javascript">
	function redireccionar(){
  window.location="../trilhaincadisponibilidade.php";
} 
setTimeout ("redireccionar()", 100);
</script>
	';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trilha inca reserva</title>
<!--<link href="http://www.nctravelcusco.com/formincatrail/archivos/styleform.css" rel="stylesheet" type="text/css" /> -->
<link href="archivos/styleform.css" rel="stylesheet" type="text/css" />

<script language="javascript"> 
function validar(formulario) {

if (formulario.namecont.value.length < 4) { 
alert("Digite um nome de contato"); 
formulario.namecont.focus();
return(false); }


var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ" + "abcdefghijklmnñopqrstuvwxyzáéíóú ";
var checkStr = formulario.namecont.value;
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
alert("Somente letras no campo Nome");
formulario.namecont.focus();
return(false);
}


var s = formulario.emailcont.value;
if (s.length == 0 ){
alert("Digite o seu Email!");
formulario.emailcont.focus();
return(false);
}

var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_-]+\.[A-Za-z0-9_.]+[A-za-z]$/;
if (filter.test(s));
else{
alert("Digite um e-mail válido!.");
formulario.emailcont.focus();
return(false);}

if (formulario.telecont.value.length < 4) { 
alert("Digite seu telefone de contato"); 
formulario.telecont.focus();
return(false); }




if (formulario.nombre1.value.length < 4) { 
alert("Digite um nome"); 
formulario.nombre1.focus();
return(false); }

if (formulario.apellido1.value.length < 4) { 
alert("Digite o sobrenome"); 
formulario.apellido1.focus();
return(false); }

if (formulario.birth1.value.length < 4) { 
alert("Digite a data de nascimento"); 
formulario.birth1.focus();
return(false); }

if (formulario.nacionalidad1.value.length < 2) { 
alert("Digite sua nacionalidade"); 
formulario.nacionalidad1.focus();
return(false); }

if (formulario.pasaporte1.value.length < 8) { 
alert("Digite o número do passaporte"); 
formulario.pasaporte1.focus();
return(false); }

if (formulario.terminos.checked == false) { 
alert("Aceitar os termos e condições"); 
formulario.terminos.focus();
return(false); }

return (true);
}
</script>


</head>

<body>
<div class="container">
<div class="header">
<img src="archivos/logonc.jpg" />
<h1>FORMULARIO DE RESERVAS</h1>
</div>

<form name="formulario" method="post" action="enviartrilhainca.php" onSubmit="return validar(this)">

<input name="npasajeros" type="hidden" value="<?php echo $npasajeros; ?>" />
<input name="fecha" type="hidden" value="<?php echo $fecha; ?>" />
<input name="totalp" type="hidden" value="<?php echo $totalp; ?>" />
<input name="spaces" type="hidden" value="<?php echo $spaces; ?>" />

<br />
<h3 class="bg4">A reserva sera feita para a data  : <strong><?php echo $fecha; ?></strong></h3>
<br />
<h2><strong>PARTICIPANTES NA TRILHA # 1 INFORMAÇÃO : </strong>* Por favor insira tudo seus dados pessoais completos.</h2>
<table class="table1">
  <tr class="bg1">
    <td colspan="9">NOME DO CONTATO:
      <input type="text" name="namecont" id="namecont" />
| TELEFONE DE CONTATO:
      <input type="text" name="telecont" id="telecont" /> 
      | 
      EMAIL DE CONTATO:
      <input type="text" name="emailcont" id="emailcont" /></td>
    </tr>
  <tr class="bg1">
    <td>Nº:</td>
    <td>Nome:</td>
    <td>Sobrenome:</td>
    <td>Sexo:</td>
    <td>Data de nascimento:</td>
    <td>Nacionalidade:</td>
    <td>Número do passaporte:</td>
    <td>Vegetariano:</td>
    <td>Estudante:</td>
    </tr>
    
    <?php
for ($i = 1; $i <= $npasajeros; $i++) {
	if($i%2=="0"){
			$fcolor=' class="bg2"';
		}else{
			$fcolor=' class="bg3"';
			}
		
	echo '
	<tr '.$fcolor.'>
    <td>'.$i.'</td>
    <td><input type="text" name="nombre'.$i.'" id="nombre'.$i.'" class="input"/></td>
    <td><input type="text" name="apellido'.$i.'" id="apellido'.$i.'" class="input"/></td>
    <td><select name="genero'.$i.'" id="genero'.$i.'">
      <option value="MASCULINO" selected="selected">M</option>
      <option value="FEMENINO">F</option>
    </select></td>
    <td><input type="text" name="birth'.$i.'" id="birth'.$i.'" class="input"/></td>
    <td><input type="text" name="nacionalidad'.$i.'" id="nacionalidad'.$i.'" class="input"/></td>
    <td><input type="text" name="pasaporte'.$i.'" id="pasaporte'.$i.'" class="input"/></td>
    <td><select name="vegetariano'.$i.'" id="vegetariano'.$i.'">
      <option value="SI">Sim</option>
      <option value="NO" selected="selected">Não</option>
    </select></td>
    <td><select name="estudiante'.$i.'" id="estudiante'.$i.'">
      <option value="SI">Sim</option>
      <option value="NO" selected="selected">Não</option>
    </select></td>
    </tr>
	
	';
}
?>
    
    
</table>


<br />
<table class="table1">
  <tr class="bg4">
    <td>Preço da trilha para :  <strong><?php echo $npasajeros; ?> </strong>pessoas : USD<strong> <?php echo $totalp; ?></strong></td>
    <td>Depósito adiantado para <strong><?php echo $npasajeros; ?></strong> pessoas: USD <strong><?php echo $totalp/2; ?></strong></td>
    <td>Saldo remanescente será : USD  <strong><?php echo $totalp/2; ?></strong></td>
  </tr>
</table>
Os estudantes que  possuem uma carteira internacional <strong><a href="http://www.carteiradoestudante.com.br/" target="_blank">ISIC CARDS</a></strong> de cor verde e  de menores de 17 anos passaporte ou RG, conseguem um desconto de  <em>40 dólares</em>, Más tem que enviar uma  cópia no ato da reserva a  nosso email: <strong>info@nctravelcusco.com</strong><br />
<br />

<h2>SOLICITE OS SERVICIOS ADICIONAIS PARA A TRILHA:</h2>
<table class="table1">
  <tr class="bg1">
    <td>Requisitos</td>
    <td>Quantidade</td>
    <td>Requisitos</td>
    <td>Quantidade</td>
    </tr>
  <tr class="bg3">
    <td>Solicitar noites adicionais em AGUAS CALIENTES <strong>USD 40 (Basico)</strong></td>
    <td><select name="v1" id="v1" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    <td>Pedir Saco de dormir <strong>USD 20</strong></td>
    <td><select name="v3" id="v3" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    </tr>
  <tr class="bg2">
    <td>Pedir carregador extra para a Trilha Inca  <strong>USD 120</strong></td>
    <td><select name="v4" id="v4" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    <td>Pedir barraca extra <strong>USD 25</strong></td>
    <td><select name="v5" id="v5" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    </tr>
  <tr class="bg3">
    <td>Camiseta para a Trilha Inca  <strong>USD 10</strong></td>
    <td><select name="v6" id="v6" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    <td>Pedir Huayna Picchu bilhete <strong>USD 70</strong></td>
    <td><select name="v7" id="v7" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    </tr>
    <tr class="bg2">
    <td>Entrada adicional Machu Picchu <strong>USD 60</strong></td>
    <td><select name="v2" id="v2" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    <td>Ticket de bus de Machu Picchu - Águas Calientes <strong>USD 10</strong></td>
    <td><select name="v8" id="v8" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    </tr>
    <tr class="bg3">
    <td>Bastão <strong>USD 10</strong></td>
    <td><select name="v9" id="v9" onchange="javascript:ver()">
      <option value="0" selected="selected">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</table>
<table class="table1">
  <tr class="bg2">
    <td class="bg2">Necessidades especiais / comentários:<br />
    <textarea name="Requerimientos_especiales" id="Requerimientos_especiales" cols="100"></textarea></td>
    </tr>
  <tr class="bg3">
    <td class="bg3">Declaro que li e aceito todos os <a href="term.php" target="_blank" onclick="popup = window.open('term.php','Terms', 'height=600,width=600,scrollbars=yes,resizable=no,location=no'); return false"> termos e condições</a> cancelamentos de acordo com a política explicada. Eu aceito o uso do meu e-mail para comunicar a NcTravelCusco para qualquer emergenca:
<input name="terminos" type="checkbox" value="Si" id="terminos" /></td>
    </tr>
  <tr class="bg2">
    <td class="bg2">Como você encontra a nós: 
      <select name="Referente">
        <option value="Google">A pesquisa do Google</option>
        <option value="Yahoo">Yahoo</option>
        <option value="SA Explorers">SA Explorers</option>
        <option value="LA Travel Show">LA Travel Show</option>
        <option value="Amigo">Amigo</option>
        <option value="Outro">Outro</option>
       </select></td>
    </tr>
    <tr>
    <td style="text-align:right;">
    <input name="send" type="submit" value="ENVIAR RESERVA" class="bselect" />
    </td>
    </tr>
</table>

</form>
</div>
</body>
</html>