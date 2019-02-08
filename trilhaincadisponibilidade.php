
<?php 

$title_tour = 'Trilha Inca Disponibilidade 2019'; // NO PONER EN MAYUSCULA
$title_seo = "Trilha Inca Disponibilidade 2019 - trilha Inca Cuzco";  // TITULO SEO
$description_seo = "Disponibilidade de espaços na Trilha Inca 2018. Reserva a sua disponibilidade Trilha Inca 2019 , promoções e descontos com Nc Travel Cusco.";  // DESCRIPCION SEO 

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
    <link rel="stylesheet" href="nctraveldisponibilidad/css/disponibilidad.css" charset="utf-8">

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
           <div class="col-sm-9">
             <h1 class="my-1"><?=$title_tour?></h1>

              <div class="concal disponi">

              <?php include "nctraveldisponibilidad/caminoinca.php" ?>
            </div>
       

            <div class="my-3 text-center">
              <a href="trilhaincaclassica.php" class="btn btn-danger" role="button">RESERVAR AGORA</a>
            </div>
            
            <p><b>Nota:</b> A estrada Inca estará fechada durante o mês de fevereiro devido a trabalhos de manutenção, por acordo do Ministério da Cultura. Alternativamente, você pode verificar a disponibilidade de outros meses.</p>

           </div>
           <div class="col-sm-3">
             <aside class="bg-light">


<!-- Modal -->

<div class="modal fade" id="promo" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header mb-1 pb-0">

        <h5 class="modal-title text-center mx-auto" id="exampleModal3Label"><b><span class="text-danger">PROMO:</span> <?=$title?> </b></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">×</span>

        </button>

      </div>

      <div class="modal-body mt-1 pt-2">

        <form id="contact-form2" method="post" action="promo.php" role="form">

        

            <div class="form-es">

          <h6 class="fond-form">INFORMAÇÕES DA VIAGEM</h6>

          <div class="form-group row">

              <div class="col-md-6"><label for="user-first-name">Data de saída:  </label> <input type="text" class="w-100 selectd p-1" id="datepicker1" name="date1"></div>

          </div>

          <div class="form-group row">

              <div class="col-md-6"><label for="user-first-name">N° Adultos: </label> 

                    <div class="form-input input-select">

                              <select class="w-100 selectd" id="adultos1" name="adultos1" title="nº de Adultos">

                                  <option value="01" selected="selected">1</option>

                                  <option value="02">2</option>

                                  <option value="03">3</option>

                                  <option value="04">4</option>

                                  <option value="05">5</option>

                                  <option value="06">6</option>

                                  <option value="07">7</option>

                                  <option value="08">8</option>

                                  <option value="09">9</option>

                                  <option value="10">10</option>

                              </select>

                          </div>

              </div>

              <div class="col-md-6"><label for="user-last-name">N° Crianças:</label>

                  <div class="form-input input-select">

                              <select class="w-100 selectd" id="criancas" name="criancas1" title="nº de Crianças">

                                  <option value="01" selected="selected">0</option>

                                  <option value="02">1</option>

                                  <option value="02">2</option>

                                  <option value="03">3</option>

                                  <option value="04">4</option>

                                  <option value="05">5</option>

                                  <option value="06">6</option>

                                  <option value="07">7</option>

                                  <option value="08">8</option>

                                  <option value="09">9</option>

                                  <option value="10">10</option>

                              </select>

                          </div>

            </div>

          </div>

          <div class="form-group row">

              <div class="col-md-6"><label for="user-first-name">Categoria do Hotel:  </label>

                  <div class="form-input input-select">

                              <select class="w-100 selectd" id="hotel1" name="hotel1" title="Categoria do Hotel">

                                  <option value="sem_hotel" selected="selected">Sem Hotel</option>

                                  <option value="clase_economico">Clase Economico</option>

                                  <option value="clase_turistica">Clase Turística</option>

                                  <option value="clase_superior">Clase Superior</option>

                                  <option value="clase_premiun">Clase Premium</option>

                                  <option value="premium_plus">Premium Plus</option>

                              </select>

                          </div>

               </div>

              <div class="col-md-6"><label for="user-last-name">Quantidade de apartamento: </label>

              <div class="form-input input-select">

                              <select class="w-100 selectd" id="apartamento1" name="apartamento1" title="Quantidade de apartamento:">

                                  <option value="01" selected="selected">0</option>

                                  <option value="02">1</option>

                                  <option value="02">2</option>

                                  <option value="03">3</option>

                                  <option value="04">4</option>

                                  <option value="05">5</option>

                                  <option value="06">6</option>

                                  <option value="07">7</option>

                                  <option value="08">8</option>

                                  <option value="09">9</option>

                                  <option value="10">10</option>

                              </select>

                          </div>  

              </div>

          </div>

          <br>

          <h6 class="fond-form">DADOS DO SOLICITANTE</h6>

          <div class="form-group row">

              <div class="col-md-6"><label for="user-first-name">Nome completo: </label>

              <input id="form_name" type="text" name="nombre1" class="w-100" required="required" data-error="digite seu nome">

                        <div class="help-block with-errors"></div>

              </div>

              <div class="col-md-6"><label for="user-last-name">E-mail:</label>

                <input type="email" class="w-100"  name="email1">

              </div>

          </div>

          <div class="form-group row">

              <div class="col-md-6"><label for="user-last-name">Celular:</label>

                <input type="tel" class="w-100" name="telefono1">

              </div>

          </div>

          <div class="form-group row">

              <div class="col-md-12"><label for="user-last-name">Observações: </label></div>

             <div class="col-md-12">

              <textarea class="w-100" name="comentario1" id="comentario1"  rows="3"></textarea>

             </div>

          </div>

          <div class="form-group row">

            <div class="col-md-12">

                   <div class="g-recaptcha" data-sitekey="6LcWlFIUAAAAAC-XlQRVu773qW__xjpqHNg5WseM" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>

                      <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">

                      <div class="help-block with-errors"></div>

                    </div>  

          </div>



          <input type="hidden" name="tour" value="<?=$title_tour?>">  

                <input type="hidden" name="url" value="<?=$url?>">



          <div class="form-group row">

                  <div class="col-md-12 text-center"><input type="submit" class="w-100 btn btn-dark btn-send" value="Enviar"></div>

          </div>



          <div class="messages"></div>

        </div>





        </form>



      </div>

    </div>

  </div>

</div>

  

<a href="../metodos-pagamento.php" target="_blank"><img src="../img/pagamento.png" class="img-thumbnail my-2" alt="pagamentos"></a>



<a href="../condicoes-gerais.php" target="_blank"><img src="../img/condiciones.jpg" class="img-thumbnail my-2" alt="condiciones"></a>



<img src="../img/trilhaincareservas.jpg" class="img-thumbnail my-1" alt="condiciones">



<hr>





  <h2 class="mb-2">VIAGENS NO PERU</h2>

  <ul class="list-group listchek listab text-uppercase">



      <li class="list-group-item"><a href="machupicchu.php" title="PACOTES MACHU PICCHU">PACOTES MACHU PICCHU</a></li>

    <li class="list-group-item"><a href="trilhainca.php" title="TRILHA INCA CLASSICA">TRILHA INCA CLASSICA</a></li>

    <li class="list-group-item"><a href="trilhaincaantisuyo.php" title="TRILHA INCA ANTISUYO">TRILHA INCA ANTISUYO</a></li>

    <li class="list-group-item"><a href="salkantay.php" title="TRILHA SALKANTAY">TRILHA SALKANTAY</a></li>

    <li class="list-group-item"><a href="incajungle.php" title="TRILHA INCA JUNGLE">TRILHA INCA JUNGLE</a></li>

    <li class="list-group-item"><a href="trilhachoquequirao.php" title="TRILHA CHOQUEQUIRAO">TRILHA CHOQUEQUIRAO</a></li>

    <li class="list-group-item"><a href="alternativas.php" title="ROTAS ALTERNATIVAS">ROTAS ALTERNATIVAS</a></li>

    <li class="list-group-item"><a href="vallesagrado.php" title="VALLE SAGRADO DOS INKAS">VALE SAGRADO DOS INKAS</a></li>

    <li class="list-group-item"><a href="marasmoraysalineras.php" title="MARAS - MORAY - SALINERAS">MARAS - MORAY - SALINERAS</a></li>

    <li class="list-group-item"><a href="cityarqueologico.php" title="CITY TOUR ARQUEOLÓGICO">CITY TOUR ARQUEOLÓGICO</a></li>

    <li class="list-group-item"><a href="lagotiticaca.php" title="PUNO - LAGO TITICACA">PUNO - LAGO TITICACA</a></li>



  </ul>



  <hr>

  <div id="fb-root"></div>

    <script>(function(d, s, id) {

      var js, fjs = d.getElementsByTagName(s)[0];

      if (d.getElementById(id)) return;

      js = d.createElement(s); js.id = id;

      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';

      fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/MachupicchuCusco/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MachupicchuCusco/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MachupicchuCusco/">NcTravelCusco</a></blockquote></div>

<hr>

<iframe class="iframe" src="https://www.youtube.com/embed/jkx8zXayUXU?wmode=transparent" allowfullscreen="" title="Depoimento Cusco Machu Picchu" width="100%" frameborder="0"></iframe>

<hr>

<iframe class="iframe" src="https://www.youtube.com/embed/PfHnkxQfM5I?wmode=transparent" allowfullscreen="" title="Depoimento Cusco Machu Picchu" width="100%" frameborder="0"></iframe>



</aside>

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
        <script type="text/javascript" src="nctraveldisponibilidad/js/disponibilidad.js"></script>


  </body>
</html>
