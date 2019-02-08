<?php
	$meses = array('01'=>'Janeiro','02'=>'Feveiro','03'=>'Março','04'=>'Abril','05'=>'Maio', '06'=>'Junho', '07'=>'Julho', '08'=>'Agosto', '09'=>'Setembro', '10'=>'Outubro', '11'=>'Novembro', '12'=>'Dezembro');
	$smes=date('m');
	$anho=2019;
	//echo $smes;
	$curr_mes=(int)$smes;
	if($curr_mes==2) {
		$curr_mes=3;
		$smes='03';
	}
?>
<div class="divik">
	Seleccionar Mes:
	<select name="ik" id="ik">
	<?php for ($i=1; $i <=12 ; $i++): ?>
		<?php
		$j=sprintf('%02d',$i);
		if($i!=2):
		?>
		<option value="<?php echo $anho.'@'.$j ?>" <?php if($smes==$j) echo 'selected' ?>><?php echo $meses[$j].' '.$anho ?></option>
		<?php endif ?>
	<?php endfor ?>
	</select>
</div>
<div id="ikx">
<?php
include 'amf/modulo.php';
?>
</div>
