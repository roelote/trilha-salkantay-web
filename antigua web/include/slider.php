<?php 

//echo "<h5>".$final."</h5>";
//POR SIACA
$r1="";

if($final == $r1."/trilhaincajungle.php"){$directory="toursdata/incajungle";$title="TRILHA INCA JUNGLE MACHU PICCHU 4 DIAS";}
if($final == $r1."/trilhaincacurta.php"){$directory="toursdata/shortincatrail";$title="TRILHA INCA CURTA 2 DIAS";}
if($final == $r1."/trilhasalkantay.php"){$directory="toursdata/salkantay";$title="SALKANTAY MACHU PICCHU 5 DIAS";}
if($final == $r1."/trilhasalkantaymachupicchu.php"){$directory="toursdata/salkantay";$title="SALKANTAY MACHU PICCHU 4 DIAS";}
if($final == $r1."/cuscopunoalternativo.php"){$directory="toursdata/packagecuscopuno";$title="PACOTE CUSCO PUNO 7 DIAS";}
//if($final == "/laresmachupicchu.php"){$directory="toursdata/larestrek";$title="LARES TREK TO MACHU PICCHU";}
//if($final == "/huchuyqosqo.php"){$directory="toursdata/huchuyqosqo";$title="HUCHUY QOSQO";}
if($final == $r1."/cuscoclassicotradicional.php"){$directory="toursdata/traditional";$title="TOURS TRADICIONAL 4 DIAS";}
if($final == $r1."/cuscoclassicopernoite.php"){$directory="toursdata/overnight";$title="CUSCO CLASSICO PERNOITE 4 DIAS";}
if($final == $r1."/cuscoclassicoopcional.php"){$directory="toursdata/optional";$title="CUSCO CLASSICO OPCIONAL 3 DIAS";}
if($final == $r1."/cuscoclassicomoderno.php"){$directory="toursdata/modern";$title="CUSCO CLASSIC0 MODERN0 3 DIAS";}
if($final == $r1."/cuscoclassicimperial.php"){$directory="toursdata/imperial";$title="CUSCO CLASSICO IMPERIAL 6 DIAS";}
if($final == $r1."/cuscoclassicocultural.php"){$directory="toursdata/cultural";$title="CUSCO CLASSICO CULTURAL 2 DIAS";}
if($final == $r1."/cuscoclassicoconvencional.php"){$directory="toursdata/conventional";$title="CUSCO CLASSICO CONVENCIONAL 5 DIAS";}
if($final == $r1."/cuscoclassicarqueologico.php"){$directory="toursdata/archaeological";$title="CUSCO CLASSICO ARQUEOLOGICO 5 DIAS";}
if($final == $r1."/cuscoclassicomachupicchu.php"){$directory="toursdata/machupicchu";$title="CUSCO CLASSICO MACHU PICCHU 1 DIA";}
if($final == $r1."/trilhaincaclassica.php"){$directory="toursdata/classicincatrail";$title="TRILHA INCA CLÀSSICA 4 DIAS";}
if($final == $r1."/trilhachoquequirao.php"){$directory="toursdata/choquequirao";$title="TRILHA CHOQUEQUIRAO 5 DIAS";}
if($final == $r1."/lagotiticaca.php"){$directory="toursdata/lagotiticaca";$title="LAGO TITICACA - PUNO";}
if($final == $r1."/cityarqueologico.php"){$directory="toursdata/citytour";$title="CITY TOUR ARQUEOLOGICO";}
if($final == $r1."/vallesagrado.php"){$directory="toursdata/valle";$title="VALLE SAGRADO DOS INCAS";}
if($final == $r1."/marasmoraysalineras.php"){$directory="toursdata/marasmoray";$title="MARAS MORAY SALINERAS";}
if($final == $r1."/rafting.php"){$directory="toursdata/rafting";$title="RAFTING NO RIO APURIMAC";}
if($final == $r1."/cabalgata.php"){$directory="toursdata/cabalgata";$title="TOUR A CAVALO";}
//if($final == "/choquequiraomachupicchu.php"){$directory="toursdata/choquequiraomachupicchu";$title="CHOQUEQUIRAO MACHU PICCHU";}
//if($final == "/ausangatetrek.php"){$directory="toursdata/ausangate";$title="AUSANGATE TREK";}
if($final == $r1."/trilhaantisuyo.php"){$directory="toursdata/trilhaantisuyo1";$title="TRILHA ANTISUYO 1 DIA";}
if($final == $r1."/trilhaantisuyomachupicchu.php"){$directory="toursdata/trilhaantisuyo2";$title="TRILHA ANTISUYO MACHU PICCHU 2 DIAS";}
if($final == $r1."/trilhaantisuyopiuraymachupicchu.php"){$directory="toursdata/trilhaantisuyo3";$title="TRILHA ANTISUYO MACHU PICCHU 3 DIAS";}


if($final == $r1."/cuscopunoarequipa9dias.php"){$directory="toursdata/cuscopunoarequipa9dias";$title="PACOTE: CUSCO - PUNO - AREQUIPA 9 DIAS";}
if($final == $r1."/pacotetodoperu.php"){$directory="toursdata/pacotetodoperu";$title="PACOTE TODO PERU 9 DIAS";}
if($final == $r1."/pacotecuscopunoalternativo.php"){$directory="toursdata/pacotecuscopunoalternativo";$title="PACOTE CUSCO - PUNO ALTERNATIVO 7 DIAS";}
if($final == $r1."/pacotecuscoclassico.php"){$directory="toursdata/pacotecuscoclassico";$title="PACOTE CUSCO CLASSICO 5 DIAS";}

//pacotes
if($final == $r1."/pacotesperu.php"){$directory="toursdata/pacotesperu";$title="PACOTES TURÍSTICOS EM TODO O PERU: CUSCO, PUNO, AREQUIPA, LIMA";}
if($final == $r1."/lima-cusco-puno.php"){$directory="toursdata/lima-cusco-puno";$title="PACOTE LIMA - CUSCO E PUNO 11 DIAS";}
if($final == $r1."/lima-cusco-puno-9d8n.php"){$directory="toursdata/lima-cusco-puno-9d8n";$title="LIMA - CUSCO E PUNO 9 DIAS";}
if($final == $r1."/cusco-puno-arequipa-lima.php"){$directory="toursdata/cusco-puno-arequipa-lima";$title="PACOTE: CUSCO - PUNO – AREQUIPA – LIMA 12 DIAS";}
if($final == $r1."/pacotetudoperu.php"){$directory="toursdata/pacotetudoperu";$title="LIMA - PARACAS - NAZCA - AREQUIPA - PUNO - CUSCO - MACHU PICCHU 14 DIAS";}




if($directory != ""){
echo '
<div class="mb-4">
   <div id="main_area">
        <div class="row">

			<div class="col-xs 12 col-sm-10 pr-0">
                <div class="col-xs-12" id="slider">
                    
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
							  <div class="carousel-inner">';
$id=0;
	if ($final != "index.php" and $final != "/" and $final != "wNCTRAVEL" and $final != "wNCTRAVEL"){


		$dirint = dir($directory);

		while (($archivo = $dirint->read()) !== false)
		{
			if ($archivo == "." || $archivo == ".."){
			}
			else{
				if($id == 0)
				{
					echo '<div class="item active" data-slide-number='.$id.' > <img src="'.$directory."/".$archivo.'" alt="'.$title.'" title="'.$title.'"></div>';
				}
				else
				{
						echo '<div class="item" data-slide-number='.$id.' > <img src="'.$directory."/".$archivo.'" alt="'.$title.'" title="'.$title.'"></div>';
				}
				$id=$id+1;
				}
		}
		$dirint->close();
	}
echo'                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}

if($directory != ""){
echo '<div class="col-xs-12 col-sm-2 p-0" id="slider-thumbs">
                <ul class="hide-bullets">';
$id=0;
	if ($final != "index.php" and $final != "/" and $final != "wNCTRAVEL"){
		$dirint = dir($directory);
		while (($archivo = $dirint->read()) !== false)
		{

			if ($archivo == "." || $archivo == ".." || $archivo == "Thumbs.db"){
			// if ($archivo == "." || $archivo == ".."){
			}else{

				 echo '<li class="col-xs-3 col-sm-12 p-1"><a class="thumbnail mb-2" id="carousel-selector-'.$id.'"><img width="" height="50" src="'.$directory."/".$archivo.'" alt="'.$title.'" title="'.$title.'"/></a></li>';
				$id=$id+1;
				}
		}
		$dirint->close();
	}
echo '                </ul>
            </div>
         
        </div>

    </div>
</div>';

}

?>

