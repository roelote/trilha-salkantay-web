<?php 

$title_tour = "Trilha Inca para Machu Picchu"; // NO PONER EN MAYUSCULA
$title_seo = "trilha inca para Machu Picchu";  // TITULO SEO
$description_seo = "TRILHA INCA CLÀSSICA, TRILHA INCA CURTA, machu picchu, huayna picchu";  // DESCRIPCION SEO 

$final = $_SERVER["REQUEST_URI"];

$url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
 ?>

<!doctype html>
<html lang="pt-BR">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?=$title_seo?></title>

    <meta content="<?=$description_seo?>" name="description" />

    <meta http-equiv="content-language" content="pt_BR" />
    <meta name="content-language" content="pt-BR" />

    <!-- open graph -->
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$title_seo?>" />
    <meta property="og:description" content="<?=$description_seo?>" />
    <meta property="og:url" content="<?=$url?>" />
    <meta property="og:site_name" content="Trilha Inca Cuzco" />
    <meta property="og:image" content="https://www.trilhaincacuzco.com/img/trilhasalkantay.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
      <link rel="manifest" href="/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">

  </head>
  <body>
<div id="wrapper">

<section class="top-page">
<?php include('includes/header.php') ?>
</section>

  <div id="page-content-wrapper">
    <section class="container bg-light shadow tours-body">
    <div class="row">
        <div class="col-12 col-sm-9">
          <h1 class="mt-1"><?=$title_tour?></h1>

          <article class="text-justify my-3 my-ms-5">
            <hr>
      <!--     <h2>PACOTES TURÍSTICOS PARA MACHU PICCHU: INCLUÍ COM CITY TOUR, VALE SAGRADO DOS INCAS, MARAS MORAY SAL</h2>
          <hr> -->

            
          
          <table class="table table-sm shadow-sm text-center size85">
            <tr class="text-center bg-dark text-white">
              <td colspan="2">TRILHA INCA CLÀSSICA 4 DIAS E 3 NOITES</td>
              </tr>
            <tr class="abg1">
              <td>PROGRAMAÇÃO:</td>
              <td> A PARTIR DE: $ 510</td>
            </tr>
            <tr>
              <td class="text-left"><strong>Dia 01:</strong> Trilha Inca Cusco - Km 82 - Huayllabamba<br>      <strong>Dia 02: </strong>Trilha Inca Huayllabamba - Warmiwanusca - Pacaymayu<br>      <strong>Dia 03:</strong> Trilha Inca Pacaymayu - Chaqicocha - Winahuayna<br>      
                <strong>Dia 04:</strong> Trilha Inca Winayhuayna - Machu Picchu - Cusco</td>
              <td class="introimg"><a href="trilhaincaclassica.php"><img class="img-thumbnail" src="img/tours/incatrail.jpg" alt="trilha inca classica"></a></td>
            </tr>
            <tr>
              <td colspan="2" class="maisinfo"><a href="trilhaincaclassica.php">MAIS INFORMAÇÕES ...</a></td>
            </tr>

          </table>
          <br>
          <table class="table table-sm shadow-sm text-center size85">
            <tr class="text-center bg-dark text-white">
              <td colspan="2">TRILHA INCA CURTA 2 DÍAS 1 NOITE</td>
            </tr>
            <tr class="abg1">
              <td>PROGRAMAÇÃO:</td>
              <td> A PARTIR DE: $ 420</td>
            </tr>
            <tr>
              <td class="text-left"><strong>Dia 1: </strong>Cusco - Wiñaywayna - Àguas Calientes<br>
                <strong>Dia 2:</strong> Àguas Calientes - Machu Picchu - Cusco</td>
              <td class="introimg"><a href="trilhaincacurta.php"><img class="img-thumbnail" src="img/tours/incatrail2.jpg" alt="TRILHA INCA CURTA "></a></td>
            </tr>
            <tr>
              <td colspan="2" class="maisinfo"><a href="trilhaincacurta.php">MAIS INFORMAÇÕES ...</a></td>
            </tr>
          </table>
            
  
          </article>

             
        </div>
        <div class="col-12 col-sm-3">
          <?php include('includes/aside.php') ?>
        </div>
    </div>
  </section>


  <section class="mt-2 bot-page">
        <?php include('includes/footer.php') ?>
  </section>

</div>
</div>
  <script src="https://code.jquery.com/jquery-2.2.1.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </body>
</html>