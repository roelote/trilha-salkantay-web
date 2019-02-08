<?php
include("trilhaincadisponibilidade2.php");
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>TRILHA INCA DISPONIBILIDADE 2015 - 2016</title>
<meta name="keywords" content="TRILHA TRILHA DISPONIBILIDADE 2015, Trilha Inca Disponibilidade Janeiro, Trilha Inca Disponibilidade Março, Trilha Inca Disponibilidade Abril, Trilha Inca Disponibilidade Maio, Trilha Inca Disponibilidade Julho, Trilha Inca Disponibilidade Agosto, Trilha Inca Disponibilidade Setembro, Trilha Inca Disponibilidade Outubro, Trilha Inca Disponibilidade Novembro, Trilha Inca Disponibilidade Dezembro, Trilha Inca Disponibilidade Janeiro 2016">
<meta name="description" content="TRILHA TRILHA DISPONIBILIDADE 2015, Trilha Inca Disponibilidade Janeiro, Trilha Inca Disponibilidade Março, Trilha Inca Disponibilidade Abril, Trilha Inca Disponibilidade Maio, Trilha Inca Disponibilidade Julho, Trilha Inca Disponibilidade Agosto, Trilha Inca Disponibilidade Setembro, Trilha Inca Disponibilidade Outubro, Trilha Inca Disponibilidade Novembro, Trilha Inca Disponibilidade Dezembro, Trilha Inca Disponibilidade Janeiro 2015">
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

<h1>TRILHA INCA DISPONIBILIDADE 2015 -2016</h1>
<br>

<?php
$fecha= $anoactivo."/".$mesactivo."/1";
$i = strtotime($fecha);
$psini = jddayofweek(cal_to_jd(CAL_GREGORIAN, date("m",$i),date("d",$i), date("Y",$i)) , 0 );

if($mesactivo==1){$mmostrar="JANEIRO";}
if($mesactivo==2){$mmostrar="FEVEREIRO";}
if($mesactivo==3){$mmostrar="MARÇO";}
if($mesactivo==4){$mmostrar="ABRIL";}
if($mesactivo==5){$mmostrar="MAIO";}
if($mesactivo==6){$mmostrar="JUNHO";}
if($mesactivo==7){$mmostrar="JULHO";}
if($mesactivo==8){$mmostrar="AGOSTO";}
if($mesactivo==9){$mmostrar="SETEMBRO";}
if($mesactivo==10){$mmostrar="OUTUBRO";}
if($mesactivo==11){$mmostrar="NOVEMBRO";}
if($mesactivo==12){$mmostrar="DEZEMBRO";}
?>

<div class="concal">

<?php
/*
for ($i = 1; $i <= 12; $i++) {
	echo 'aqui estamos';
}
*/
?>


<!--<a href="?mes=1&ano=2015"><img src="images/home/it1.png" alt="Janeiro" title="Janeiro"></a>
<a href="?mes=3&ano=2015"><img src="images/home/it3.png" alt="março" title="março"></a>
<a href="?mes=4&ano=2015"><img src="images/home/it4.png" alt="abril" title="abril"></a>
<a href="?mes=5&ano=2015"><img src="images/home/it5.png" alt="maio" title="maio"></a>
<a href="?mes=6&ano=2015"><img src="images/home/it6.png" alt="junho" title="junho"></a> -->
<a href="?mes=7&ano=2015"><img src="images/home/it7.png" alt="julho" title="julho"></a>
<a href="?mes=8&ano=2015"><img src="images/home/it8.png" alt="agosto" title="agosto"></a>
<a href="?mes=9&ano=2015"><img src="images/home/it9.png" alt="setembro" title="setembro"></a>
<a href="?mes=10&ano=2015"><img src="images/home/it10.png" alt="outubro" title="outubro"></a>
<a href="?mes=11&ano=2015"><img src="images/home/it11.png" alt="novembro" title="novembro"></a>
<a href="?mes=12&ano=2015"><img src="images/home/it12.png" alt="dezembro" title="dezembro"></a>
<a href="?mes=1&ano=2016"><img src="images/home/it2.png" alt="Janeiro" title="Janeiro"></a>


<h2>As licenças estão disponíveis desde o mês de : <?php echo $mmostrar." ".$anoactivo;  ?> </h2><br>
<div class="clear"></div>
<div class="fad">Domingo</div>
<div class="fad">Segunda-feira</div>
<div class="fad">Terça-feira</div>
<div class="fad">Quarta-feira</div>
<div class="fad">Quinta-feira</div>
<div class="fad">Sexta-feira</div>
<div class="fad">Sábado</div>
<?php
$diames=1;

for ($i = 1; $i <= $psini; $i++) {
	echo '<div class="fad"></div>';
}

foreach($archivo->page as $estudiante):
	 foreach($estudiante->text as $text):
	 	 foreach($text->textContent as $textContent):
		 	if(($textContent != "www.drc-cusco.gob.pe") and ($textContent != "Developed by O.I.S. - Cusco - Perú") and ($textContent != "Central Telefónica (5184) 58 - 2030") and ($textContent != "Developed by AFIT - Cusco - Perú - 2015")){
				if($diascal >= 6){
					
					
					if($diascal % 2==0){echo '<div class="fad">';}
					
					if($diascal % 2!=0){
						if($textContent==0){
							$imgdispo='<br><img src="http://www.nctravelcusco.com/images/home/vacio.gif"><br><br>';
						}else{
							$imgdispo='<br><img src="http://www.nctravelcusco.com/images/home/dispo.gif"><br>
							
							<a href="formtrilhainca/select.php?fechaincatrail='.$diames.'/'.$mesactivo.'/'.$anoactivo.'&spaces='.$textContent.'" class="a" target="_blank">Reserve Agora</a>
							
							<br>';
							}
							$diames=$diames+1;
					}
					
					if($diascal % 2!=0){echo $imgdispo;}
					echo $textContent;
					
					
					if($diascal % 2!=0){echo " Espaços</div>";}
				}
				$diascal=$diascal+1;
			}
		endforeach;
	endforeach; 
endforeach; 

if($diascal % 2!=0){echo "</div> ";}
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