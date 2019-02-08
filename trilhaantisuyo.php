<?php 

$title_tour = "Trilha Inca Antisuyo 1 Dia "; // NO PONER EN MAYUSCULA
$title_seo = "TRILHA INCA ANTISUYO";  // TITULO SEO
$description_seo = "A trilha Antisuyo e verdadeiramente a única trilha que começará direitamente desde a cidade de Cusco, onde foi o caminho que usarão os incas para trasladasse ao vale sagrado dos incas e também ao palácio do Inca tupac yupanqui que este localizado no povoado de chinchero, que é um sitio pitoresco da cidade de Cusco";  // DESCRIPCION SEO 

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
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
            <p>A trilha Antisuyo  e verdadeiramente a única trilha que começará direitamente desde a cidade de Cusco, onde foi o caminho que usarão os incas para trasladasse ao vale sagrado dos incas e também ao palácio do Inca tupac yupanqui que este localizado no povoado de chinchero, que é um sitio pitoresco da cidade de Cusco.<br>
            A trilha Antisuyo é a única trilha recomendável para fazer durante tudo o ano, sem restrições das chuvas e não corre perigo.</p>
          </article>

            <div class="near_by_hotel_wrapper">
            <div class="near_by_hotel_container">
              <table class="table no-border custom_table dataTable no-footer dtr-inline">
                <colgroup>
                <col width="22%">
                <col width="78%">
                </colgroup>
                <tbody>
                  <tr>
                    <td class="first-td">DURAÇÂO:</td>
                    <td>1 Dia  </td>
                  </tr>
                  <tr>
                     <td class="first-td">TIPO DE CIRCUITO:</td>
                    <td>Aventura, Caminhada, hospedagem. </td>
                  </tr>
                  <tr>
                     <td class="first-td">LOCAIS A VISITAR:</td>
                    <td>Observaremos as 5 montanhas mais altas de    Cusco ,Nevados, Trilha Inca, lagunas, paissagens,  e povoados. </td>
                  </tr>
                  <tr>
                     <td class="first-td">TOTAL DA CAMINHADA</td>
                    <td>14  Quilômetros. </td>
                  </tr>

                </tbody>
              </table>
            </div>
            </div>
             <div id="horizontalTab" class="mt-3">
                   <ul class="resp-tabs-list">
                        <li><i class="fa fa-list" aria-hidden="true"></i> Roteiro</li>
                        <li> <i class="fa fa-usd" aria-hidden="true"></i> Preços</li>
                        <li><i class="fa fa-list-ol" aria-hidden="true"></i> O que Inclui </li>
                        <li><i class="fa fa-cog" aria-hidden="true"></i> Opcionais</li>
                       <li><i class="fa fa-question-circle-o" aria-hidden="true"></i> Condições Gerais</li>
                       <li><i class="fa fa-credit-card" aria-hidden="true"></i> Pagamento</li>
                        <li class="bg-danger text-white"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Reserva</li>
                    
                 
                  </ul>

                   <div class="resp-tabs-container text-justify">
                        <div class="termin">
                          
                          
                            <strong>ROTEIRO:</strong>
                          <h2>1º DIA - CUSCO - LAGUNA QORI COCHA - CHINCHERO - CUSCO</h2>
                          <p>Pela manhã buscaremos no hotel as 07h00 e em 20 minutos chegaremos ao Parque Arqueológico de Sacsayhuaman Chincana Grande (Caverna grande), onde iniciaremos nossa caminhada de 4 horas a ritmo moderado. Passando por Nusta pakana, Balcão do diabo, mirador del cóndor y Pucamocco (4.100  m.a.n.m). Até chegar ao Lago de Qori cocha (lago de ouro) e almoçaremos na margem do lago.</p>
                          <p>No trajeto apreciaremos as 5 montanhas mais altas da região de Cusco, <strong>APU SALKANTAY, VERONICA , CHICON, PITUSIRAY, Y AUSANGATE</strong> simplesmente maravilhoso. </p>
                          
                          <p>À tarde desceremos aproximadamente por 2 horas apreciando todas as paisagens da região. Visitaremos o Templo Sixtina de Humasbamba a ( 3,700 m.a.n.m). O complexo arqueológico de pucamarca e logo Chegaremos ao povoado de Chinchero, apos teremos tempo para visitar ao centro artesanato de chinchero onde as pessoas locais fazem os melhores tecidos com cores naturais, depois tomaremos um transporte para a cidade de Cusco, por 1h00 hora de viagem.</p>
                          
                          <div class="text-center my-2"><img class="thumbnail m-1" src="img/tours/antisuyo3.jpg" alt="TRILHA INCA ANTISUYO"><img class="thumbnail m-1" src="img/tours/antisuyo4.jpg" alt="TRILHA INCA ANTISUYO"></div>
                          

                        </div>

                     <div>
                              <table class="table table-sm shadow-sm text-center font-table table-bordered">
                                <thead>
                                  <tr>
                                    <th colspan="6" class="bg-dark text-white"><?=$title_tour?></th>
                                  </tr>
                                </thead>
                               <tbody>
                                 <tr class="abg1">
                                  <td>NUMER DO GRUPO:</td>
                                  <td>1 Pax</td>
                                  <td> 2 a 4 Paxs</td>
                                  <td>5 a mais pessoas</td>
                                </tr>
                                <tr>
                              <td>PREÇO POR PESSOA: </td>
                              <td>USD 100</td>
                              <td>USD 70 </td>
                              <td>USD 55</td>
                            </tr>
                               </tbody>
                             </table>
                       
                        
                     </div>
                      <div>
                        <div class="d-block d-sm-flex">
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE INCLUI :</h3>
                              <ul class="listok">
                                  <li>Translado do seu hotel </li>
                                  <li>Alimentação 1 Almoço </li>
                                  <li>Equipamento de 1º  socorros </li>
                                  <li>Guia Profissional (inglês,português  e espanhol) </li>
                                  <li>Passeio no Lago  coricocha ou Piuray </li>
                                  <li>Transporte  a  Chincana</li>
                                  <li>Translado de Chinchero  . Cusco </li>
          
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE NAO INCLUI :​</h3>
                              <ul class="listnot">
                                <li>Café da manhã e Janta </li>
                                <li>Outros que não estão  acima. </li>
                                <li>Gorjetas.</li>
                              </ul>
                          </div>
                        </div>
                        </div>

                    <div>
                      <div class="d-block d-sm-flex">
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>RECOMENDAÇÕES :</h3>
                              <ul class="listot">
                                    <li>Bloqueador solar </li>
                                    <li>Uma garrafa da água </li>
                                    <li>Gorro para o frio </li>
                                    <li>Protetor de sol </li>
                                    <li>Capa de chuva </li>
                                    <li>Roupas para o frio e calor </li>
                                    <li>Câmera fotográfica </li>
          
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>SERVIÇOS OPCIONAIS :</h3>
                              <ul class="listot">
                                    <li>Cavalho ou Lam  20 dólares</li>
                                    <li>Serviço privado </li>
                                    <li>Outros hotéis</li>
                              </ul>
                          </div>
                      </div>
                   </div>
                  <div>
                      <?php include('includes/condicoesgerais.php') ?>
                   </div>
                    <div>
                      <?php include('includes/metodospagamento.php') ?>
                   </div>
                   <div>
                      <?php include('includes/bookingtours.php') ?>    
                   </div>

              </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js?hl=pt'></script>
  <script src="js/validator.js"></script>
  <script src="js/tours.js"></script>

  </body>
</html>