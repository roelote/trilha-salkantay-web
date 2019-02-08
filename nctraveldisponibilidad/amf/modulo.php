<?php
error_reporting(E_ALL); // <-- desactivar al subir al servidor
require_once('AMFX.php');
$carpeta_archivos='nctraveldisponibilidad/amf/archivos/';

if(isset($_POST['mes']) && isset($_POST['anho'])) {
	$smes=$_POST['mes'];
	$anho=$_POST['anho'];
	$carpeta_archivos='archivos/';
}

$mes=(int)$smes;

$primerdia=mktime(0,1,0,$mes,1,$anho);
$dias_mes=date("t",$primerdia);
$primerdia=date("w",$primerdia);


$amfx = new AMFX();

$amfx->setfecha($anho.'-'.$smes);
//echo $anho.'-'.$smes;
//archivos amf
$amfx->setruta($carpeta_archivos);

$espacios=$amfx->ObtenerDisponibilidad();
if(!is_array($espacios)){
	//segundo intento
	$espacios=$amfx->ObtenerDisponibilidad();
}

function ikdia($dia, $esp) {
	$xdia=$dia-1;
	if ($esp==0)
		$capacidad=0;
	else
		$capacidad=$esp[$xdia]['capacidad'];
	$classextra='';
	$style='';
	if($capacidad<500) {
		$style=' style="width:'.($capacidad*100/500).'%"';
	}
	if($capacidad<=50){
		$classextra=' ikalert';
		if($capacidad==0){
			$classextra=' ikgris';
		}
	}
	$cadena1='<div class="iktd"><div class="ikbox'.$classextra.'"><div class="iknum">';
	$cadena2='</div><div class="ikespacios">'.$capacidad.' </div><div class="ikcounter"><div'.$style.'></div></div></div></div>'."\r\n";
	return $cadena1.$dia.$cadena2;
}

?>
<div class="ikcontenedor">
	<div class="ikcalendar">
		<div class="ikrow ikheader">
			<div class="iktd"><div class="ikbox">DOM</div></div>
			<div class="iktd"><div class="ikbox">SEG</div></div>
			<div class="iktd"><div class="ikbox">TER</div></div>
			<div class="iktd"><div class="ikbox">QUA</div></div>
			<div class="iktd"><div class="ikbox">QUI</div></div>
			<div class="iktd"><div class="ikbox">SEX</div></div>
			<div class="iktd"><div class="ikbox">SAB</div></div>
		</div>
		<?php
		$totalCells = $primerdia + $dias_mes;
		if($totalCells < 36){
			$rowNumber = 5;
		} else {
			$rowNumber = 6;
		}
		$dayNumber = 1;
		for($currentRow=1; $currentRow <= $rowNumber; $currentRow++){
			if($currentRow == 1){
				?>
				<div class="ikrow">

					<?php
					for($currentCell  = 0; $currentCell<7; $currentCell++){
						if($currentCell == $primerdia){
							echo ikdia($dayNumber, $espacios);
							$dayNumber++;
						} else {
							if($dayNumber > 1){
								echo ikdia($dayNumber, $espacios);
								$dayNumber++;
							} else {
								echo '<div class="iktd">&nbsp;</div>'."\r\n";
							}
						}
					}
					?>

				</div>
				<?php
			} else {
				# Create Remaining Rows
				?>
				<div class="ikrow">

					<?php
					for($currentCell = 0; $currentCell < 7; $currentCell++){
						if($dayNumber > $dias_mes){
							# Days in month exceeded so display blank cell
							echo '<div class="iktd">&nbsp;</div>'."\r\n";
						} else {
							echo ikdia($dayNumber, $espacios);
							$dayNumber++;
						}
					}
					?>

				</div>
				<?php
			}
		}
		?>

	</div>
</div>
