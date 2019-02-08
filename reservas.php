<?php 

$title_tour = 'Reserve o seu pacote'; // NO PONER EN MAYUSCULA
$title_seo = "Reserve o seu pacote";  // TITULO SEO
$description_seo = "Reserve o seu pacote, reservas trilha inca cuzco";  // DESCRIPCION SEO 

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
  <style>
      .col-12.col-md-6
      {
        background-color: #e9e9e9;
            border-left: 4px solid #f35e0c;
            padding-left: 4px;
            margin-left: 0px;
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
        <div class="col-sm-9">
          <h1 class="mt-1"><?=$title_tour?></h1>

          <article class="text-justify my-3 my-ms-5 termin">

            <section class="formulariot">
              <div class="form-book  border mx-3 mt-0 p-4">

                  <form id="contact-form4" method="post" action="reserve.php" role="form">


                        <div class="form-group row">
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-6 d-flex align-items-center">
                                <label>RESERVAR PACOTE <span>*</span> </label>
                            </div>
                            <div class="col-12 col-md-6">
                                
                                <div class="form-input">
                                <span class="field-widget input-select">
                                  <select id="pacote" name="pacote" class="w-100 selectd" >
                                    <option value="Cusco Machu Picchu 1 Dia">Cusco Machu Picchu 1 Dia</option>
                                    <option value="Cusco Classico Opcional 2 Dias">Cusco Classico Opcional 2 Dias e 1 Noite</option>
                                    <option value="Cusco Classico Cultural 2 Dias">Cusco Classico Cultural 2 Dias e 1 Noite</option>
                                    <option value="Cusco Classico Moderno 3 Dias">Cusco Classico Moderno 3 Dias e 2 Noites</option>
                                    <option value="Cusco Classico Tradicional 4 Dias">Cusco Classico Tradicional 4 Dias e 3 Noites</option>
                                    <option value="Cusco Classico Com Pernoite 4 Dias">Cusco Classico Com Pernoite 4 Dias e 3 Noites</option>
                                    <option value="Cusco Classico Convencional 5 Dias">Cusco Classico Convencional 5 Dias e 4 Noites</option>
                                    <option value="Cusco Classic Imperial 6 Dias">Cusco Classic Imperial 6 Dias e 5 Noites</option>
                                    <option value="Cusco Classico Arqueológico 5 Dias">Cusco Classico Arqueológico 5 Dias e 4 Noites</option>
                                    <option value="Cusco e Puno Alternativo 7 Dias">Cusco e Puno Alternativo 7 Dias</option>
                                    <option value="Pacote: Lima - Cusco - Puno 9 Dias">Pacote: Lima - Cusco - Puno 9 Dias</option>
                                    <option value="Pacote: Lima - Cusco - Puno 11 Dias">Pacote: Lima - Cusco - Puno 11 Dias</option>
                                    <option value="Cusco - Puno - Arequipa - Lima 12 Dias">Cusco - Puno - Arequipa - Lima 12 Dias</option>
                                    <option value="Lima - Paracas - Nazca - Arequipa - Puno - Cusco 14 Dias">Lima - Paracas - Nazca - Arequipa - Puno - Cusco 14 Dias</option>
                                    <option value="Trilha Inca 2 Dias">Trilha Inca 2 Dias</option>
                                    <option value="Trilha Inca 4 Dias">Trilha Inca 4 Dias</option>
                                    <option value="Trilha Antisuyo 1 Dia">Trilha Antisuyo 1 Dia</option>
                                    <option value="Trilha Antisuyo a Machu Picchu 2 Dias">Trilha Antisuyo a Machu Picchu 2 Dias</option>
                                    <option value="Trilha Antisuyo a Machu Picchu 3 Dias">Trilha Antisuyo a Machu Picchu 3 Dias</option>
                                    <option value="Trilha Salkantay Machu Picchu 4 Dias">Trilha Salkantay Machu Picchu 4 Dias</option>
                                    <option value="Trilha Salkantay Machu Picchu 5 Dias">Trilha Salkantay Machu Picchu 5 Dias</option>
                                    <option value="Trilha Inca Jungle 4 Dias">Trilha Inca Jungle 4 Dias</option>
                                    <option value="Trilha Choquequirao 5 Dias">Trilha Choquequirao 5 Dias</option>
                                    <option value="Vale Sagrado Dos Inkas">Vale Sagrado Dos Inkas</option>
                                    <option value="Maras - Moray - Salineras">Maras - Moray - Salineras</option>
                                    <option value="City Tour Arqueologico">City Tour Arqueologico</option>
                                    <option value="Rafting no rio Urubamba">Rafting no rio Urubamba</option>
                                    <option value="Cabalgata">Cabalgata</option>
                                    <option value="Puno - Lago Titicaca">Puno - Lago Titicaca</option>
                                  </select>
                                    </span>
                                </div>
                            
                            </div>
                           
                        </div>


                        <div class="form-group row">
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center">
                                <label>NOME: <span>*</span> </label>
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="nombre" class="w-100" required="required" data-error="digite seu nome">
                               <div class="help-block with-errors"></div>
                            </div>
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center">
                                <label>CORREIO: <span>*</span> </label></div>
                            <div class="col-12 col-md-4">
                                <input type="email" class="w-100"  name="email" >

                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center"><label for="user-first-name">PAÍS: </label></div>
                            <div class="col-12 col-md-4">
                                <div class="form-input">
                                <span class="field-widget input-select">
                                  <select id="country" name="country" class="w-100 selectd" >
                                    <option value="Afganistan">Afganistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Brasil" selected="selected">Brasil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Costa_Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="El_Salvador">El Salvador</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French_Guinea">French Guinea</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Grece">Grece</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Holand">Holand</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Island">Island</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Korea">Korea</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Moroco">Moroco</option>
                                    <option value="Norway">Norway</option>
                                    <option value="New_Zeland">New Zeland</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Paquistan">Paquistan</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipins">Phillipins</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Singapur">Singapur</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ucrania">Ucrania</option>
                                    <option value="United_Kingdom">United Kingdom</option>
                                    <option value="USA">USA</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Other">Other</option>
                                  </select>
                                    </span>
                                </div>
                            </div>
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center"><label for="user-first-name">TELEFONE: </label></div>
                            <div class="col-12 col-md-4"><input type="tel" class="w-100" name="telefono"></div>
                        </div>
                        <div class="form-group row">
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center"><label for="user-first-name">N° PASSAGEIROS: </label></div>
                            <div class="col-12 col-md-4">
                                <div class="form-input input-select">
                                    <select class="w-100 selectd" id="npasajeros" name="npasajeros" title="nº de passageiros">
                                        <option value="01" selected="selected">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center"><label for="user-first-name">DATA DE INÍCIO: </label></div>
                            <div class="col-12 col-md-4"><input type="text" class="w-100 selectd p-1" id="datepicker" name="calendario"></div>
                        </div>
                        <div class="form-group row">
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center"><label for="user-first-name">TIPO DE SERVIÇO: </label></div>
                            <div class="col-12 col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tservicio" id="exampleRadios1" value="grupal" checked>
                                     <label class="form-check-label" for="exampleRadios1">
                                       Serviço em grupo <span class="badge badge-danger" data-toggle="tooltip" data-placement="top" title=" Todos os nossos Passeios / Tours são feitos em sistema Regular, onde será compartido com outras pessoas. Normalmente este grupo é formado por até 15 Pessoas, porém poderá haver casos que seja até 25 pessoas. Os guias sao em espanhol ou Ingles. Os horários são fixos e não pode mudar.">?</span>

                                    </label><br>

                                    <input class="form-check-input" type="radio" name="tservicio" id="exampleRadios2" value="privado">
                                     <label class="form-check-label" for="exampleRadios2">
                                       Serviço privado <span class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="São ideais para quem não abre mão de serviços personalizados. Os passeios são feitos em automóveis privados e os guias são em Português. Os horários dos tours podem ter maior flexibilidade, os passeios podem ser adequados de acordo com a escolha do passageiro. Os preços tem custos adicionais e podem variar de acordo ao número de passageiros.">?</span>
                                    </label>

                               </div>
                                

                            </div>
                            <div class="py-1 py-sm-0 my-1 my-sm-0 col-12 col-md-2 d-flex align-items-center"><label for="user-first-name">FORMA PAGAMENTO: </label></div>
                            <div class="col-12 col-md-4">
                                <select class="w-100 selectd" id="fpago" name="fpago">
                                        <option value="" disabled selected>Selecionar</option>
                                        <option value="WESTERN UNION">Western union (taxa 4.5%)</option>
                                        <option value="PAGO COM CARTÂO DE CREDITO VISA">Pago com cartâo de credito visa (taxa 8.4%)</option>
                                        <option value="TRANSFERENCIA A NOSSO BANCO NO PERU">Transferencia a nosso banco no peru (taxa 6%)</option>
                                        <option value="PAYPAL">Paypal (taxa 9%)</option>
                                </select>
                              
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-12"><label for="user-last-name">Observações: </label></div>
                           <div class="col-12 col-md-12"><textarea class="w-100" name="comentario" id="comentario"  rows="3"></textarea></div>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcWlFIUAAAAAC-XlQRVu773qW__xjpqHNg5WseM" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>
                         <input type="hidden" name="tour" value="<?=$title_tour?>">  
                        <input type="hidden" name="url" value="<?=$url?>">

                        <div class="form-group row">
                                <div class="col-12 col-md-12 text-center"><input type="submit" class="w-100 btn btn-dark btn-send" value="Enviar"></div>
                        </div>
                                
                        <div class="messages"></div>
             
                        </form>
              </div>
            </section>
          </article>
            

             
        </div>
        <div class="col-sm-3">
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

  <script>
     $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
  </script>
  <script>
    $(function () {

          window.verifyRecaptchaCallback = function (response) {
              $('input[data-recaptcha]').val(response).trigger('change');
          }

          window.expiredRecaptchaCallback = function () {
              $('input[data-recaptcha]').val("").trigger('change');
          }

          $('#contact-form4').validator();

          $('#contact-form4').on('submit', function (e) {
              if (!e.isDefaultPrevented()) {
                  var url = "reserve.php";

                  $.ajax({
                      type: "POST",
                      url: url,
                      data: $(this).serialize(),
                      success: function (data) {
                          var messageAlert = 'alert-' + data.type;
                          var messageText = data.message;

                          var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                          if (messageAlert && messageText) {
                              $('#contact-form4').find('.messages').html(alertBox);
                              $('#contact-form4')[0].reset();
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