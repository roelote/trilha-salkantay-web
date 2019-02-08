<?php
$mesactivo=$_GET["mes"];
$anoactivo=$_GET["ano"];
if($mesactivo=="" and $anoactivo==""){$mesactivo= date("n");$anoactivo= date("Y");}
$archivo = simplexml_load_file("http://www.machupicchu.gob.pe/rpt/DisponibilidadPorMes.cfm?idLugar=2&mes=".$mesactivo."&ano=".$anoactivo."&formatoImpresion=xml");
?>