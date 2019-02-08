<?PHP 
$mapa=$_GET["maps"];
if($mapa==1){	
	$mm="/images/maps/incatrail.jpg";
	$mmt="MAPA TRILHA INCA MACHU PICCHU 4 DIAS E 3 NOITES";
	}
	
if($mapa==2){	
	$mm="/images/maps/salkantay.jpg";
	$mmt="MAPA TRILHA SALKANTAY MACHU PICCHU 5 DIAS E 4 NOITES";
	}
	
if($mapa==3){	
	$mm="/images/maps/Salkantay-Altitude.jpg";
	$mmt="ALTITUDE TRILHA SALKANTAY MACHU PICCHU 5 DIAS E 4 NOITES";
	}
	
?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>MAPA <?php echo $mmt; ?></title>
<meta name="keywords" content="MAPA NC TRAVEL CUSCO, <?php echo $mmt; ?>">
<meta name="description" content="MAPA NC TRAVEL CUSCO, <?php echo $mmt; ?>">
<?php include("include/head.php") ?>
</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
  <?php include("include/sidebar.php") ?>
<div class="content col-xs-12 col-sm-12 col-md-9">
<h1> MAPA <?php echo $mmt; ?></h1>
<br>
 <a href="<?php echo $mm; ?>" target="_blank"> <img src="<?php echo $mm; ?>" alt="<?php echo $mmt; ?>" title="<?php echo $mmt; ?>" style="width:100%;"/></a>
 
<?php include("include/book.php") ?>
</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>