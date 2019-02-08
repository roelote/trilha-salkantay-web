<?php 

$title_tour = "Quem Somos"; // NO PONER EN MAYUSCULA
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
    
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

          <article class="text-justify my-3 my-ms-5 termin">
            
            
                <p>Somos uma agência de viagens com grande experiência no campo do turismo. Dispomos de um grupo de profissional qualificados e com serviços de primeira qualidade, que se encarregarão para que sua estadia em nosso país seja de seu completo agrado e facilidade. Desenvolvemos um trabalho coordenado e bem organizado, para promover um intercâmbio intercultural com respeito pelos nossos clientes, sua cultura e seus costumes.</p>
              
              <span><strong>VISÃO</strong></span>
              <p>Ser líder no mercado do turismo dentro e fora de nosso país.<br>
              Oferecemos um serviço de alta qualidade, com responsabilidade social.<br>
              Capacitando constantemente o pessoal de nossa organização. <br>
              Cumprindo rigorosamente com as expectativas de nossos visitantes.<br></p>
              
              <span><strong>MISSÃO</strong></span>
              <p>Prestar um serviço de alta qualidade técnica e humana, para o benefício criativo do tempo livre de nossos clientes, satisfazendo assim, seus gostos e necessidades. Todo o serviço é disposto em um ambiente seguro, com serviços pessoais de primeira linha e de alta capacidade científica, técnica e humanística, que garante nossa contribuição ao desenvolvimento de uma consciência turística e prosperidade integral.</p>
              
              <span><strong>TURISMO RESPONSÁVEL</strong></span>
              <p>Nossa organização pratica o Turismo Responsável, portanto, temos o compromisso com uma forma de trabalho cujo objetivo é alcançar um sistema econômico, social e cultural que respeite não apenas os direitos à diversidade cultural, mas também o cuidado e a proteção ao meio ambiente.</p>
              
              <span><strong>NOSSOS GUIAS</strong></span>
              <p>Nós somos muito exigentes com nosso pessoal, a equipe de guias é capacitada e com vários anos de experiência, todos licenciados em Turismo, de onde se distinguem a cordialidade com nossos clientes, facilidade de comunicação, com domínio nos idiomas: inglês, francês e português. Nossos guias são capacitados em seminários e possuem conhecimentos em primeiros-socorros, resgates e estão regulares com as regras da Unidade de Gestão do Santuário Histórico de Machu Picchu e o DIRECTUR.</p>

              <img src="img/quemsomos.jpg" alt="quemsomos" class="img-thumbnail mx-auto d-block">

          </article>

          <h4 class="text-center certificados text-uppercase my-3">Certificados</h4>

                   <div class="row">
                      <div class="col-6 col-sm-3 p-1"><a data-fancybox="gallery" href="img/autorizado-agencia-operadora.jpg"><img class="img-fluid" alt="" style="height: 285px;" src="img/autorizado-agencia-operadora.jpg"></a></div>
                      <div class="col-6 col-sm-3 p-1"><a data-fancybox="gallery" href="img/autorizado-agencia-viagens-peru.jpg"><img class="img-fluid" src="img/autorizado-agencia-viagens-peru.jpg" alt=""></a></div>
                      <div class="col-6 col-sm-3 p-1"><a data-fancybox="gallery" href="img/autorizado-trilha-inca-machupicchu.jpg"><img class="img-fluid" src="img/autorizado-trilha-inca-machupicchu.jpg" alt=""></a></div>
                      <div class="col-6 col-sm-3 p-1"><a data-fancybox="gallery" href="img/licenciadefuncionamiento.jpg"><img class="img-fluid" src="img/licenciadefuncionamiento.jpg" alt=""></a></div>
                    </div>

        
             
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
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
  <script src="js/tours.js"></script>

  </body>
</html>