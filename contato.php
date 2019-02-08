<?php 

$title_tour = ' contato "NC Travel Cusco" '; // NO PONER EN MAYUSCULA
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
        <div class="col">
          <h1 class="mt-1"><?=$title_tour?></h1>

          <article class="text-justify my-3 my-ms-5 termin">
            <div class="row">
            <div class="col-sm-6">
              <div class="inform termin border border-dark shadow p-3 my-3 mr-2 ml-5">
               <h4 class="text-center"><i class="icon-heart"></i>Nc Travel Cusco Information</h4>
                <p>Somos uma equipe que oferece experiências únicas e inesquecíveis nos mais belos destinos turísticos do mundo.</p>
                  <div class="addres">
                   <div class="addres-r"></div>
                   <div class="addres-l"><i class="ico-append fa fa-phone"></i>&nbsp;&nbsp;Oficina Local:</div>
                   <div class="addres-r">Tel. Oficina:  +51 084235190 </div>
                   <div class="addres-r"></div>
                   <div class="addres-l"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;Numero de Celulare:</div>
                   <div class="addres-r">+51- 984606757 </div>
                   <div class="addres-l"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Dirección:</div>
                   <div class="addres-r">Pasaje San Martin X2 - 16 Dep 201  </div>
                   <div class="addres-r">CUSCO - PERU</div>
                   <div class="addres-l"><i class="ico-append fa fa-envelope"></i>&nbsp;&nbsp;E-mails:</div>
                   <div class="addres-r">Mas informacion: <a href="mailto:info@nctravelcusco.com"> info@nctravelcusco.com</a></div>
                   <div class="addres-r">Reservas: <a href="mailto:reservas@info@nctravelcusco.com"> reservas@nctravelcusco.com</a></div>
                 </div>
          
              </div>
            </div>
            <div class="col-sm-6">
                <div class="formu-contato">
                      <form id="contact-form3" method="post" action="contas.php" role="form">
                        <div class="messages"></div>

                           <div class="form-group">
                                <label>Nome completo: </label>
                                <input id="form_name" type="text" name="nombre2" class="form-control form-control-sm" required="required" data-error="digite seu nome">
                                <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                                <label>E-mail:</label>
                                <input type="email" class="form-control form-control-sm" required="required"  name="email2" data-error="digite seu email">
                                <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                                <label>Sujeito</label>
                                <input type="text" class="form-control form-control-sm"  name="sujeito2">
                          </div>
                          <div class="form-group">
                                <label for="user-last-name">Message</label>
                                <textarea class="form-control form-control-sm" name="comentario2" id="comentario2"  rows="3"></textarea>
                          </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LcWlFIUAAAAAC-XlQRVu773qW__xjpqHNg5WseM" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                    <div class="text-center"><input type="submit" class="w-100 btn btn-dark btn-send" value="Enviar"></div>
                            </div>
                      </form>
                </div>

            </div>
      </div>
      </article>
<br><br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d969.7625861470573!2d-71.96605737310344!3d-13.532501925028365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd67345ad021f%3A0x5bd777d45ae78f8c!2sNc+Travel+Cusco!5e0!3m2!1ses!2spe!4v1545324603526" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
             
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
  <script>
    $(function () {

          window.verifyRecaptchaCallback = function (response) {
              $('input[data-recaptcha]').val(response).trigger('change');
          }

          window.expiredRecaptchaCallback = function () {
              $('input[data-recaptcha]').val("").trigger('change');
          }

          $('#contact-form3').validator();

          $('#contact-form3').on('submit', function (e) {
              if (!e.isDefaultPrevented()) {
                  var url = "contas.php";

                  $.ajax({
                      type: "POST",
                      url: url,
                      data: $(this).serialize(),
                      success: function (data) {
                          var messageAlert = 'alert-' + data.type;
                          var messageText = data.message;

                          var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                          if (messageAlert && messageText) {
                              $('#contact-form3').find('.messages').html(alertBox);
                              $('#contact-form3')[0].reset();
                              grecaptcha.reset();
                          }
                      }
                  });
                  return false;
              }
          })
      });

        </script>

  </body>
</html>