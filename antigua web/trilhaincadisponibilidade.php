<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>TRILHA INCA DISPONIBILIDADE 2016 - 2017</title>
<meta name="keywords" content="TRILHA TRILHA DISPONIBILIDADE 2016, Trilha Inca Disponibilidade Janeiro, Trilha Inca Disponibilidade Março, Trilha Inca Disponibilidade Abril, Trilha Inca Disponibilidade Maio, Trilha Inca Disponibilidade Julho, Trilha Inca Disponibilidade Agosto, Trilha Inca Disponibilidade Setembro, Trilha Inca Disponibilidade Outubro, Trilha Inca Disponibilidade Novembro, Trilha Inca Disponibilidade Dezembro, Trilha Inca Disponibilidade Janeiro 2017">
<meta name="description" content="TRILHA TRILHA DISPONIBILIDADE 2016, Trilha Inca Disponibilidade Janeiro, Trilha Inca Disponibilidade Março, Trilha Inca Disponibilidade Abril, Trilha Inca Disponibilidade Maio, Trilha Inca Disponibilidade Julho, Trilha Inca Disponibilidade Agosto, Trilha Inca Disponibilidade Setembro, Trilha Inca Disponibilidade Outubro, Trilha Inca Disponibilidade Novembro, Trilha Inca Disponibilidade Dezembro, Trilha Inca Disponibilidade Janeiro 2017">
<?php include("include/head.php") ?>
<style>
.concal{ width:715x; background:#FF6600; padding:10px; font-size:12px; text-align:center;}
.concal .a{ color:#FFF; background:#090; padding:0px 5px;}
.concal .a:hover{ color:#000; background:#F90;}
.concal h2{ background:#FFF;}
.fad{ width:94px; padding:2px; float:left; background:#F7F7F7; margin:2px;}
.clear{ clear:both;}
</style>
</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
  <?php include("include/sidebar.php") ?>
<div class="content col-xs-12 col-sm-12 col-md-9">

<h1>TRILHA INCA DISPONIBILIDADE 2016 -2017</h1>
<br>



<div class="concal">
<?php
$mmo1='<a href="?mes=1&ano=2016"><img src="images/home/it1.png" alt="Janeiro" title="Janeiro"></a>';
$mmo3='<a href="?mes=3&ano=2016"><img src="images/home/it3.png" alt="março" title="março"></a>';
$mmo4='<a href="?mes=4&ano=2016"><img src="images/home/it4.png" alt="abril" title="abril"></a>';
$mmo5='<a href="?mes=5&ano=2016"><img src="images/home/it5.png" alt="maio" title="maio"></a>';
$mmo6='<a href="?mes=6&ano=2016"><img src="images/home/it6.png" alt="junho" title="junho"></a>';
$mmo7='<a href="?mes=7&ano=2016"><img src="images/home/it7.png" alt="julho" title="julho"></a>';
$mmo8='<a href="?mes=8&ano=2016"><img src="images/home/it8.png" alt="agosto" title="agosto"></a>';
$mmo9='<a href="?mes=9&ano=2016"><img src="images/home/it9.png" alt="setembro" title="setembro"></a>';
$mmo10='<a href="?mes=10&ano=2016"><img src="images/home/it10.png" alt="outubro" title="outubro"></a>';
$mmo11='<a href="?mes=11&ano=2016"><img src="images/home/it11.png" alt="novembro" title="novembro"></a>';
$mmo12='<a href="?mes=12&ano=2016"><img src="images/home/it12.png" alt="dezembro" title="dezembro"></a>';
$mmo13='<a href="?mes=1&ano=2017"><img src="images/home/it2.png" alt="Janeiro" title="Janeiro"></a>';

$dpc=date("m");
if($dpc=="01"){echo $mmo1.$mmo3.$mmo4.$mmo5.$mmo6.$mmo7.$mmo8.$mmo9.$mmo10.$mmo11.$mmo12;}
if($dpc=="02"){echo $mmo3.$mmo4.$mmo5.$mmo6.$mmo7.$mmo8.$mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="03"){echo $mmo3.$mmo4.$mmo5.$mmo6.$mmo7.$mmo8.$mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="04"){echo $mmo4.$mmo5.$mmo6.$mmo7.$mmo8.$mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="05"){echo $mmo5.$mmo6.$mmo7.$mmo8.$mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="06"){echo $mmo6.$mmo7.$mmo8.$mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="07"){echo $mmo7.$mmo8.$mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="08"){echo $mmo8.$mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="09"){echo $mmo9.$mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="10"){echo $mmo10.$mmo11.$mmo12.$mmo13;}
if($dpc=="11"){echo $mm11.$mmo12.$mmo13;}
if($dpc=="12"){echo $mmo12.$mmo13;}



echo '<br><div class="clear"></div>';


$mesactivo=$_GET['mes'];
$anoactivo=$_GET['ano'];

if($mesactivo=="" and $anoactivo ==""){
	$mesactivo=date("m");
	$anoactivo=date("Y");
	}

if($mesactivo==1 and $anoactivo == 2016){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=1&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==2){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=2&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}

if($mesactivo==3){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=3&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==4){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=4&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==5){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=5&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==6){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=6&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==7){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=7&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==8){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=8&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==9){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=9&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==10){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=10&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==11){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=11&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==12){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=12&ano=2016&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}
	
if($mesactivo==1 and $anoactivo == 2017){
	echo '<iframe src="http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=1&ano=2017&formatoImpresion=pdf" style="width:100%; height:1000px; border:0px; background:#CCC; padding:11px 0px 0px 0px;"></iframe>';
	}

?>




<div class="clear"></div>
</div>
      
      
      <br>

</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>