<?php
$fecha=$_GET["fechaincatrail"];
$spaces=$_GET["spaces"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trilha inca reserva</title>
<link href="http://www.nctravelcusco.com/formincatrail/archivos/styleform.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<div class="header">
<img src="archivos/logonc.jpg" />
<h1>FORMULARIO DE RESERVA TRILHA INCA</h1>
</div>
<br />
<h3 class="bg4">
Você vai reservar a data: 
<strong><?php echo $fecha ?></strong>
Espaços disponíveis para reserva: 
<strong><?php echo $spaces ?></strong>
</h3>
<form name="formulario" method="post" action="index.php">
<input name="fecha" type="hidden" value="<?php echo $fecha; ?>" />
<input name="spaces" type="hidden" value="<?php echo $spaces; ?>" />

<br />
<table style="text-align:center;">
  <tr>
    <td><strong>Selecione o<br />
      número de pessoas: </strong></td>
    <td><select name="npasajeros" id="npasajeros" class="np">
      <?php
$peoples="Pessoa";
for ($i = 1; $i <= $spaces; $i++) {
	if($i!=1){$peoples="Pessoas";}
	echo'<option value="'.$i.'">'.$i .' '. $peoples.'</option>';
}
?>
    </select></td>
    <td><strong>PREÇO <br />
      DA TRILHA:</strong></td>
    <td><select name="tren" id="npasajeros2" class="np">
      <option value="480">USD 480</option>
    </select>
    
    
    <!--
    <strong>Selecione o<br />
      tipo de trem: </strong>
      
    <select name="tren" id="npasajeros2" class="np">
      <option value="460">EXPEDITIONS: 16H22 /18H45 (USD 460)</option>
      <option value="520">VISTADOME: 15H48 /17H27 (USD 520)</option>
    </select> -->
    </td>
    <td><input name="enviarcp" type="submit" value="CLIQUE CONTINUAR" class="bselect" /></td>
  </tr>
</table>
<br />
</form>
</div>
</body>
</html>