<?php 

$title_tour = "Rotas alternativas e caminha"; // NO PONER EN MAYUSCULA
$title_seo = "Cusco, Puno, Arequipa, Lima, City Tour Arqueologico cusco, Vale Sagrado dos Icas, Machu Picchu, Rota do Sol Puno, Lago Titicaca, Canyon de Colca, City tour Cusco, City Tour Lima";  // TITULO SEO
$description_seo = "Cusco, Puno, Arequipa, Lima, City Tour Arqueologico cusco, Vale Sagrado dos Icas, Machu Picchu, Rota do Sol Puno, Lago Titicaca, Canyon de Colca, City tour Cusco, City Tour Lima";  // DESCRIPCION SEO 

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
              <table class="table table-sm shadow-sm text-center size85">
                <tr>
                  <td colspan="2" class="text-center bg-dark text-white">TRILHA INCA JUNGLE MACHU PICCHU 4 DIAS E 3 NOITES</td>
                  </tr>
                <tr class="abg1">
                  <td>PROGRAMAÇÃO:</td>
                  <td> A PARTIR DE: $ 360</td>
                </tr>
                <tr>
                  <td class="text-left"><p><strong>Dia 01:</strong> Cusco - Santa Maria (Bike)<strong><br>
                    Dia 02:</strong> Santa Maria - Santa Teresa (Trekking)<strong><br>
                    Dia 03:</strong> Santa Teresa - Águas Calientes (Caminhada)<br>
                    <strong>Dia 04:</strong> Machu Picchu todo o dia</p></td>
                  <td class="introimg"><a href="trilhaincajungle.php"><img class="img-thumbnail w-100" src="img/tours/incajungle.jpg" alt="TRILHA INCA JUNGLE MACHU PICCHU"></a></td>
                </tr>
                <tr>
                  <td colspan="2" class="maisinfo"><a href="trilhaincajungle.php">MAIS INFORMAÇÕES ...</a></td>
                </tr>
              </table>
              <br>
              <table class="table table-sm shadow-sm text-center size85">
                <tr>
                  <td colspan="2" class="text-center bg-dark text-white">TRILHA SALKANTAY MACHU PICCHU  5 DIAS E 4 NOITES</td>
                </tr>
                <tr class="abg1">
                  <td>PROGRAMAÇÃO:</td>
                  <td> A PARTIR DE: $ 380</td>
                </tr>
                <tr>
                  <td class="text-left"><p><strong>Dia 01: </strong>Cusco - Mollepata - Soraypampa<br>
                      <strong>Dia 02:</strong> Soraypampa - Chaullay - Colpapampa<br>
                      <strong>Dia 03:</strong> Colpapampa - La Paya - Lucmabamba<br>
                      <strong>Dia 04:</strong> Lucmabamba - Llactapata - Águas Calientes<br>
                      <strong>Dia 05:</strong> Águas Calientes - Machu Picchu  - Cusco</p></td>
                  <td class="introimg"><a href="trilhasalkantay.php"><img class="img-thumbnail w-100" src="img/tours/salkantaytrek.jpg" alt="TRILHA SALKANTAY MACHU PICCHU"></a></td>
                </tr>
                <tr>
                  <td colspan="2" class="maisinfo"><a href="trilhasalkantay.php">MAIS INFORMAÇÕES ...</a></td>
                </tr>
              </table>
              <br>
              <table class="table table-sm shadow-sm text-center size85">
                <tr class="text-center bg-dark text-white">
                  <td colspan="2">TRILHA SALKANTAY MACHU PICCHU 4 DIAS E 3 NOITES</td>
                </tr>
                <tr class="abg1">
                  <td>PROGRAMAÇÃO:</td>
                  <td> A PARTIR DE: $ 380</td>
                </tr>
                <tr>
                  <td class="text-left"><strong>Dia 01: </strong>Cusco - Mollepata - Soraypampa<br>
                    <strong>Dia 02:</strong> Soraypampa - Colpapampa<br>
                    <strong>Dia 03: </strong>Colpapampa - Hidro - Aguas Calientes<br>
                    <strong>Dia 04:</strong> Àguas Calientes - Machu Picchu - Cusco</td>
                  <td class="introimg"><a href="trilhasalkantaymachupicchu.php"><img class="img-thumbnail w-100" src="img/tours/salkantaytrek4.jpg" alt="TRILHA SALKANTAY MACHU PICCHU"></a></td>
                </tr>
                <tr>
                  <td colspan="2" class="maisinfo"><a href="trilhasalkantaymachupicchu.php">MAIS INFORMAÇÕES ...</a></td>
                </tr>
              </table>
              <br>
              <table class="table table-sm shadow-sm text-center size85">
                <tr>
                  <td colspan="2" class="text-center bg-dark text-white">TRILHA CHOQUEQUIRAO - 5 DIAS E 4 NOITES</td>
                </tr>
                <tr class="abg1">
                  <td>PROGRAMAÇÃO:</td>
                  <td> A PARTIR DE: $ 400</td>
                </tr>
                <tr>
                  <td class="text-left"><strong>Dia 01:</strong> Cusco - Cachora - Cocamasana - Playa Rosalina<br>
                    <strong>Dia 02:</strong> Rosalina - Choquequirao<br>
                    <strong>Dia 03:</strong> Choquequirao - Rayanpata<br>
                    <strong>Dia 04:</strong> Raqaypata - Chikisca<br>
                    <strong>Dia 05:</strong> Chikisca - Cachora - Cusco</td>
                  <td class="introimg"><a href="trilhachoquequirao.php"><img class="img-thumbnail w-100" src="img/tours/choquequiraotrek.jpg" alt="TRILHA CHOQUEQUIRAO"></a></td>
                </tr>
                <tr>
                  <td colspan="2" class="maisinfo"><a href="trilhachoquequirao.php">MAIS INFORMAÇÕES ...</a></td>
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