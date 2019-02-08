<div class="sidebar col-xs-12 col-sm-12 col-md-3">
<?php 

$r2="";
$tipo1="1";//trilha
$tipo2="2";//pacote

if($final == $r2."/trilhaincajungle.php"){
  $directory="imgtours/incajungle";$title="TRILHA INCA JUNGLE MACHU PICCHU 4 DIAS";$pprice="360";$tipo=$tipo1;}
if($final == $r2."/trilhaincacurta.php"){
  $directory="imgtours/IncaTrail2";$title="TRILHA INCA CURTA 2 DIAS";$pprice="420";$tipo=$tipo1;}
if($final == $r2."/trilhaincaclassica.php"){
  $directory="imgtours/IncaTrail2";$title="TRILHA INCA CLÀSSICA 4 DIAS";$pprice="510";$tipo=$tipo1;}
if($final == $r2."/trilhasalkantay.php"){
  $directory="imgtours/salkantay";$title="SALKANTAY MACHU PICCHU 5 DIAS";$pprice="380";$tipo=$tipo1;}
if($final == $r2."/trilhasalkantaymachupicchu.php"){
  $directory="imgtours/salkantay";$title="SALKANTAY MACHU PICCHU 4 DIAS";$pprice="380";$tipo=$tipo1;}

if($final == $r2."/cuscoclassicotradicional.php"){
  $directory="imgtours/mapitra";$title="CUSCO CLASSICO TRADICIONAL 4 DIAS";$pprice="465";$tipo=$tipo2;}
if($final == $r2."/cuscoclassicopernoite.php"){
  $directory="imgtours/mapiover";$title="CUSCO CLASSICO PERNOITE 4 DIAS";$pprice="455";$tipo=$tipo2;}
if($final == $r2."/cuscoclassicoopcional.php"){
  $directory="imgtours/MachuPicchu";$title="CUSCO CLASSICO OPCIONAL 3 DIAS";$pprice="360";$tipo=$tipo2;}
if($final == $r2."/cuscoclassicomoderno.php"){
  $directory="imgtours/PSacredMapi4";$title="CUSCO CLASSICO MODERN0 3 DIAS";$pprice="375";$tipo=$tipo2;}
if($final == $r2."/cuscoclassicimperial.php"){
  $directory="imgtours/mapimp";$title="CUSCO CLASSIC0 IMPERIAL 6 DIAS";$pprice="565";$tipo=$tipo2;}
if($final == $r2."/cuscoclassicocultural.php"){
  $directory="imgtours/PSacredMapi";$title="CUSCO CLASSIC0 CULTURAL 2 DIAS";$pprice="350";$tipo=$tipo2;}
if($final == $r2."/cuscoclassicoconvencional.php"){
  $directory="imgtours/mapiconv";$title="CUSCO CLASSICO CONVENCIONAL 5 DIAS";$pprice="510";$tipo=$tipo2;}
if($final == $r2."/cuscoclassicarqueologico.php"){
  $directory="imgtours/mapiarch";$title="CUSCO CLASSICO ARQUEOLOGICO 5 DIAS";$pprice="410";$tipo=$tipo2;}

if($final == $r2."/cuscopunoalternativo.php"){
  $directory="imgtours/mapipuno";$title="PACOTE CUSCO PUNO 7 DIAS";$pprice="735";$tipo=$tipo2;}
if($final == $r2."/lima-cusco-puno-9d8n.php"){
  $directory="";$title="PACOTE: LIMA CUSCO E PUNO 9 DIAS";$pprice="950";$tipo=$tipo2;}
if($final == $r2."/lima-cusco-puno.php"){
  $directory="";$title="PACOTE: LIMA – CUSCO E PUNO 11 DIAS";$pprice="1045";$tipo=$tipo2;}
if($final == $r2."/cusco-puno-arequipa-lima.php"){
  $directory="";$title="PACOTE: CUSCO – PUNO – AREQUIPA – LIMA 12 DIAS";$pprice="1175";$tipo=$tipo2;}
if($final == $r2."/pacotetudoperu.php"){
  $directory="";$title="PACOTE: MARAVILHOSO PERU 14 DIAS";$pprice="1540";$tipo=$tipo2;}


if($final == $r2."/trilhachoquequirao.php"){
  $directory="imgtours/choquequirao";$title="TRILHA CHOQUEQUIRAO 5 DIAS";$pprice="400";$tipo=$tipo1;}
if($final == $r2."/vallesagrado.php"){
  $directory="imgtours/valle";$title="VALLE SAGRADO DOS INCAS 1 DIA";$pprice="45";$tipo=$tipo1;}
if($final == $r2."/trilhaantisuyo.php"){
  $directory="imgtours/trilhaantisuyo1";$title="TRILHA ANTISUYO 1 DIA";$pprice="55";$tipo=$tipo1;}
if($final == $r2."/trilhaantisuyomachupicchu.php"){
  $directory="imgtours/trilhaantisuyo2";$title="TRILHA ANTISUYO MACHU PICCHU 2 DIAS";$pprice="335";$tipo=$tipo1;}
if($final == $r2."/trilhaantisuyopiuraymachupicchu.php"){
  $directory="imgtours/trilhaantisuyo3";$title="TRILHA ANTISUYO MACHU PICCHU 3 DIAS";$pprice="380";$tipo=$tipo1;}

if($final == $r2."/machupicchu.php"){$directory="imgtours/mapi";$title="PACOTES MACHU PICCHU";}
if($final == $r2."/alternativas.php"){$directory="imgtours/alternativeroutes";$title="RUTAS ALTERNATIVAS";}
if($final == $r2."/lagotiticaca.php"){$directory="imgtours/lagotiticaca";$title="LAGO TITICACA - PUNO";}
if($final == $r2."/cityarqueologico.php"){$directory="imgtours/citycusco";$title="CITY TOUR ARQUEOLOGICO - CUSCO";}


  if($title<>"" and $pprice<>""){
    $pprincipales='
      <img src="/images/home/orcamento.png" class="pimg">
      <div class="pricetour">
        <div class="ptitle">'.$title.'</div>
        <div class="pprice"><p> A partir de </p> <strong> USD $ </strong><span> '.$pprice.'</span><p><center>PARA ESTUDANTES</center></p></div>
        <div class="penlace"><a href="orcamento.php?orcamento='.$title.'&tipo='.$tipo.'">QUERO MEU  ORÇAMENTO</a></div>
      </div>
    ';
    }
  
  echo $pprincipales;
?>


<a href="depoimentos.php" class="depoimentos">Ler mais depoimentos</a>





<h2>VIAGENS NO PERU</h2>
<div class="st">
<a href="machupicchu.php" title="PACOTES MACHU PICCHU">PACOTES MACHU PICCHU</a>
<a href="trilhainca.php" title="TRILHA INCA CLASSICA">TRILHA INCA CLASSICA</a>
<a href="trilhaincaantisuyo.php" title="TRILHA INCA ANTISUYO">TRILHA INCA ANTISUYO</a>
<a href="salkantay.php" title="TRILHA SALKANTAY">TRILHA SALKANTAY</a>
<a href="incajungle.php" title="TRILHA INCA JUNGLE">TRILHA INCA JUNGLE</a>
<a href="choquequirao.php" title="TRILHA CHOQUEQUIRAO">TRILHA CHOQUEQUIRAO</a>
<a href="alternativas.php" title="ROTAS ALTERNATIVAS">ROTAS ALTERNATIVAS</a>
<a href="vallesagrado.php" title="VALLE SAGRADO DOS INKAS">VALE SAGRADO DOS INKAS</a>
<a href="marasmoraysalineras.php" title="MARAS - MORAY - SALINERAS">MARAS - MORAY - SALINERAS</a>
<a href="cityarqueologico.php" title="CITY TOUR ARQUEOLÓGICO">CITY TOUR ARQUEOLÓGICO</a>
<a href="lagotiticaca.php" title="PUNO - LAGO TITICACA">PUNO - LAGO TITICACA</a>
</div>
<br />


<img src="/images/home/reclamos.jpg" alt="reivindicações livro" onclick="window.open('http://www.nctravelcusco.com/LibroReclamos/' ,'Reservas','width=730, height=635, scrollbars=YES, resizable=0')" class="libroreclamos">

<br /><br />


<?php
if($directory != ""){
echo '<div class="imgtours">';
if ($final != "index.php" and $final != "/" and $final != "wNCTRAVEL"){
  echo "<h2>$title</h2>";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        //if (eregi(".gif", $archivo) || eregi(".jpg", $archivo) || eregi(".png", $archivo)){
    if ($archivo == "." || $archivo == ".."){
        }else{
      echo '<img class="img-responsive" src="'.$directory."/".$archivo.'" alt="'.$title.'" title="'.$title.'">';
      }
    }
    $dirint->close();
}
echo "</div>";
}

?>

</div>