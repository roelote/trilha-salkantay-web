<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Galeria de Fotos <?php echo $_GET["gallery2"] ?></title> 
<meta name="keywords" content="Galeria de Fotos <?php echo $_GET["gallery2"] ?>">
<meta name="description" content="Galeria de Fotos <?php echo $_GET["gallery2"] ?>">
<?php include("include/head.php") ?>
<style>
.gales{  margin:5px 0px;}
.gales a{ display: block;
padding: 5px;
float: left;
margin: 2px 7px;
border: 1px solid #cebcbc;
/*font-weight: 600;*/
background-color: #EC6A13;
color: #fff;}
.gales a:hover{ background:#F60; color:#FFF;}
</style>
<!-- GALLERY -->
<link rel="stylesheet" href="http://www.nctravelcusco.com/Gallery-ar/css/galleriffic-2.css" type="text/css" />
<script type="text/javascript" src="http://www.nctravelcusco.com/Gallery-ar/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="http://www.nctravelcusco.com/Gallery-ar/js/jquery.opacityrollover.js"></script>
<script type="text/javascript">
	document.write('<style>.noscript { display: none; }</style>');
</script>
<!-- GALLERY -->
</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
<!--   <?php include("include/sidebar.php") ?> -->
<div class="content col-xs-12- col-sm-12 col-md-12">

<a name="galleries"></a>
      <h1>Galeria de Fotos NC TRAVEL CUSCO</h1>


<div class="gales">      
	  <?php
$directorio = opendir("Gallery");
while ($archivo = readdir($directorio))
   {
   $nombreArch = $archivo;
   		if( $nombreArch <>".." and $nombreArch <>"." ){
			echo '<a href="galeria.php?gallery2='.$nombreArch.'&#galleries" class="as">'.$nombreArch.'</a>';
		}
   }
closedir($directorio);

echo '<div style=" clear:both;"></div></div>';

if($_GET["gallery2"] != ''){echo '
<br>
<h2 class="titulo font-h2">Galeria de Fotos '.$_GET["gallery2"].'</h2>
<br>
';}



if($_GET["gallery2"] != ''){echo '

<div class="row">
<div id="gallery" class="contentgallery col-xs-12 col-sm-9">
					<div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					
				</div>

<div id="thumbs" class="navigation col-xs-12 col-sm-3">
					<ul class="thumbs noscript">
';}

$nombregallery = $_GET["gallery2"];
if ($nombregallery != ""){
	$directory2="Gallery/".$nombregallery;
    $dirint = dir($directory2);
    while (($archivo = $dirint->read()) !== false)
    {
        if ($archivo == "." || $archivo == ".." || $archivo == "Thumbs.db"){
        }else{
			echo '
			<li>
            <a class="thumb" href="'.$directory2."/".$archivo.'" title="'.$nombregallery.'">
                <img src="'.$directory2."/".$archivo.'" alt="'.$nombregallery.'" title="'.$nombregallery.'">
            </a>
        </li>';
        }
    }
    $dirint->close();
	
}


if($_GET["gallery2"] != ''){echo '
</ul>
</div>
';}

?>

</div>

					
				<div style="clear: both;"></div>
                
        
		<script type="text/javascript">
			jQuery(document).ready(function($) {
		
				$('div.content').css('display', 'block');
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              '<i class="far fa-play-circle"></i> Reproduzir',
					pauseLinkText:             '<i class="fas fa-pause"></i></i> Pausa',
					prevLinkText:              '&lsaquo; Foto Anterior',
					nextLinkText:              'Próxima Foto &rsaquo;',
					nextPageLinkText:          'Próximo &rsaquo;',
					prevPageLinkText:          '&lsaquo; Anterior',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>
  
  


</div>


<div class="clear"></div>
</div>
</div>

<?php include("include/footer.php") ?>


</body>
</html>