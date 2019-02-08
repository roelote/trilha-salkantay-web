<?php 

$title_tour = "Galeria de Fotos NC TRAVEL CUSCO"; // NO PONER EN MAYUSCULA
$title_seo = "Cusco, Puno, Lima, City Tour Arqueologico cusco, Vale Sagrado dos Icas, Machu Picchu, Rota do Sol Puno, Lago Titicaca, City tour Cusco, City Tour Lima, Machu Picchu";  // TITULO SEO
$description_seo = "Pacote: Lima, Cusco e Puno 9 Dias / 8 Noites. Este Pacote Você visitará os principais pontos do país, iniciando pela capital, Lima . Seguindo para Cidade de Cusco, sítios arqueológicos, Valle Sagrado dos Incas - uma das maravilhas do mundo moderno: Machu Picchu. Seguindo a rota de Cusco a Puno, Lago Titicaca";  // DESCRIPCION SEO 

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
    <link rel="stylesheet" href="css/tours.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
    
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

  <style>
    .gallery {
-webkit-column-count: 4;
-moz-column-count: 4;
column-count: 4;
-webkit-column-width: 20%;
-moz-column-width: 20%;
column-width: 20%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}

  </style>
  <body>
<div id="wrapper">

<section class="top-page">
<?php include('includes/header.php') ?>
</section>

  <div id="page-content-wrapper">
    <section class="container bg-light shadow tours-body">
    <div class="row">
        <div class="col">
          <h1 class="mt-1"><?=$title_tour?></h1>

             <article class="text-justify my-3 my-ms-5 termin">
            
                            <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-12 mb-4">

                    <button type="button" class="btn btn-nc  filter" data-rel="all">Todas as Fotos</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="1">Sacsayhuaman</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="2">trilha Salkantay</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="3">Ciudad Cusco</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="4">Complexo Arq. Choquequirao</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="5">Templo del sol Coricancha</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="6">Lago Titicaca Puno</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="7">Trilha-inca</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="8">Antisuyo-trek</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="9">Sitio Arq. Puca Pukara</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="10">Sitio Arq.Tambo Machay</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="11">Valle Sagrado dos Incas</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="12">Sitio Arq.Quenko</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="13">Inti Raymi </button>
                    <button type="button" class="btn btn-nc  filter" data-rel="14">Mercado San Pedro</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="15">Sitio Arq.Chincheros</button>
                    <button type="button" class="btn btn-nc  filter" data-rel="16">Sitio Arq.Maras Moray</button>
                  </div>
                  <!-- Grid column -->
                </div>
                <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo01.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo02.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo03.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo04.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo05.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo05.jpg"></a>
                  </div>
                                     <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo06.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo07.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 1">
                      <a data-fancybox="gallery" href="img/gallery/Ollantaytambo/ollantaytambo08.jpg"><img class="img-fluid" src="img/gallery/Ollantaytambo/ollantaytambo08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                       <!-- Grid column -->
                </div>
                <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay1.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay1.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay2.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay2.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay3.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay3.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay4.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay4.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay5.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay5.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay6.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay6.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay7.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay7.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 2">
                      <a data-fancybox="gallery" href="img/gallery/Salkantay/salkantay8.jpg"><img class="img-fluid" src="img/gallery/Salkantay/salkantay8.jpg"></a>
                  </div>
                       <!-- Grid column -->
                       <!-- Grid column -->
                </div>
                <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco01.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco02.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco03.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco04.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco05.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco05.jpg"></a>
                  </div>
                                     <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco06.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco07.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 3">
                      <a data-fancybox="gallery" href="img/gallery/cusco/cusco08.jpg"><img class="img-fluid" src="img/gallery/cusco/cusco08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                       <!-- Grid column -->
                </div>
                <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao01.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao02.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao03.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao04.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao05.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao06.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao07.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 4">
                      <a data-fancybox="gallery" href="img/gallery/Choquequirao/Choquequirao08.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                             <!-- Grid column -->
                </div>
                <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha01.jpg"><img class="img-fluid" src="img/gallery/coricancha/koricancha01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha02.jpg"><img class="img-fluid" src="img/gallery/coricancha/koricancha02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha03.jpg"><img class="img-fluid" src="img/gallery/coricancha/koricancha03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha04.jpg"><img class="img-fluid" src="img/gallery/coricancha/koricancha04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha05.jpg"><img class="img-fluid" src="img/gallery/coricancha/koricancha05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha06.jpg"><img class="img-fluid" src="img/gallery/coricancha/koricancha06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha07.jpg"><img class="img-fluid" src="img/gallery/coricancha/koricancha07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 5">
                      <a data-fancybox="gallery" href="img/gallery/coricancha/koricancha08.jpg"><img class="img-fluid" src="img/gallery/Choquequirao/Choquequirao08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                                <!-- Grid column -->
                </div>
                <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-tlago-titicaca/lago-titicaca01.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-titicaca/lago-titicaca02.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-titicaca/lago-titicaca03.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-titicaca/lago-titicaca04.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-titicaca/lago-titicaca05.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-titicaca/lago-titicaca06.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-titicaca/lago-titicaca07.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 6">
                      <a data-fancybox="gallery" href="img/gallery/lago-titicaca/lago-titicaca08.jpg"><img class="img-fluid" src="img/gallery/lago-titicaca/lago-titicaca08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                                  <!-- Grid column -->
                </div>
                <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail01.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail02.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail03.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail04.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail05.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail06.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail07.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 7">
                      <a data-fancybox="gallery" href="img/gallery/trilha-inca/incatrail08.jpg"><img class="img-fluid" src="img/gallery/trilha-inca/incatrail08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo01.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo02.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo03.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo04.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo05.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo05.jpg">
                      </a>
                  </div>
                   <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo06.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo07.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 8">
                      <a data-fancybox="gallery" href="img/gallery/antisuyo-trek/antisuyo08.jpg"><img class="img-fluid" src="img/gallery/antisuyo-trek/antisuyo08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                        <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara01.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara02.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara03.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara04.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara05.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara06.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara07.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 9">
                      <a data-fancybox="gallery" href="img/gallery/puca-pucara/pucapucara08.jpg"><img class="img-fluid" src="img/gallery/puca-pucara/pucapucara08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                        <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay01.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay02.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay03.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay04.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay05.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay06.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay07.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 10">
                      <a data-fancybox="gallery" href="img/gallery/tambo-machay/tambomachay08.jpg"><img class="img-fluid" src="img/gallery/tambo-machay/tambomachay08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                       <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado01.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado02.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado03.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado04.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado05.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado06.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado07.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 11">
                      <a data-fancybox="gallery" href="img/gallery/valle-sagrado/valle-sagrado08.jpg"><img class="img-fluid" src="img/gallery/valle-sagrado/valle-sagrado08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                       <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo01.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo02.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo03.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo04.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo05.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo06.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo07.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 12">
                      <a data-fancybox="gallery" href="img/gallery/quenko/qenqo08.jpg"><img class="img-fluid" src="img/gallery/quenko/qenqo08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                        <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi01.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi02.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi03.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi04.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi05.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi06.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi07.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 13">
                      <a data-fancybox="gallery" href="img/gallery/inti-raymi/inti-raymi08.jpg"><img class="img-fluid" src="img/gallery/inti-raymi/inti-raymi08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                        <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallery/mercado-san-pedro/mercado-de-san-pedro01.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallery/mercado-san-pedro/mercado-de-san-pedro02.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallery/mercado-san-pedro/mercado-de-san-pedro03.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallery/mercado-san-pedro/mercado-de-san-pedro04.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallery/mercado-san-pedro/mercado-de-san-pedro05.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallerymercado-san-pedro/mercado-de-san-pedro06.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallerymercado-san-pedro/mercado-de-san-pedro07.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 14">
                      <a data-fancybox="gallery" href="img/gallery/mercado-san-pedro/mercado-de-san-pedro08.jpg"><img class="img-fluid" src="img/gallery/mercado-san-pedro/mercado-de-san-pedro08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                        <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/gallery/Chincheros/chincheros01.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/gallery/Chincheros/chincheros02.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/gallery/Chincheros/chincheros03.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/gallery/Chincheros/chincheros04.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/gallery/Chincheros/chincheros05.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/galleryChincheros/chincheros06.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/galleryChincheros/chincheros07.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 15">
                      <a data-fancybox="gallery" href="img/gallery/Chincheros/chincheros08.jpg"><img class="img-fluid" src="img/gallery/Chincheros/chincheros08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                       <!-- Grid column -->
                </div>
                 <div class="gallery" id="gallery">
                  <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallery/maras-moray/maras-moray01.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray01.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallery/maras-moray/maras-moray02.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray02.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallery/maras-moray/maras-moray03.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray03.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallery/maras-moray/maras-moray04.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray04.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallery/maras-moray/maras-moray05.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray05.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallerymaras-moray/maras-moray06.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray06.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallerymaras-moray/maras-moray07.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray07.jpg"></a>
                  </div>
                   <div class="mb-3 pics animation all 16">
                      <a data-fancybox="gallery" href="img/gallery/maras-moray/maras-moray08.jpg"><img class="img-fluid" src="img/gallery/maras-moray/maras-moray08.jpg"></a>
                  </div>
                       <!-- Grid column -->
                </div>
          </article>

        
             
        </div>
    </div>
  </section>


  <section class="mt-2 bot-page">
        <?php include('includes/footer.php') ?>
  </section>

</div>
</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-2.2.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    <script src="js/script.js"></script>
  <script>
    $(function() {
    var selectedClass = "";
    $(".filter").click(function(){
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
    setTimeout(function() {
    $("."+selectedClass).fadeIn().addClass('animation');
    $("#gallery").fadeTo(300, 1);
    }, 300);
    });
    });
  </script>

  </body>
</html>