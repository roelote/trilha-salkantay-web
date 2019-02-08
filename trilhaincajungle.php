<?php 

$title_tour = "Inca Jungle  Machu Picchu 4 Dias E 3 Noites"; // NO PONER EN MAYUSCULA
$title_seo = "TRILHA INCA JUNGLE MACHU PICCHU";  // TITULO SEO
$description_seo = "O Caminho Inca Jungle, é uma escolha de aventuras no ciclismo e na caminhada até Machu Picchu 4D/3N essa descida emocionante de BTT e caminhada pela selva Inca, será um passeio extraordinário e maravilhoso, onde se pode desfrutar de atividades diferentes e plantações nativas, tais como a secagem do café, bananais, e a sagrada folha de coca";  // DESCRIPCION SEO 

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

          <p>O Caminho Inca  Jungle, é uma escolha de aventuras no ciclismo e na caminhada até Machu Picchu  4D/3N essa descida emocionante de Bike e caminhada pela selva Inca, será um  passeio extraordinário e maravilhoso, onde se pode desfrutar de atividades  diferentes e plantações nativas, tais como a secagem do café, bananais, e a  sagrada folha de coca.&nbsp;<br>
          Esta Trilha Inca Jungle é uma grande alternativa  para pessoas que querem uma forma tranqüila e agradável, também para não ter  problemas na altitude, um pouco diferente de ter mais contato com os povos  locais que vivem do outro lado da cidade da região de Cusco. Esta opção é cheia  de adrenalina, excelentes vistas e passeios inesquecíveis!</p>

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
                    <td>4 DIAS E 3 NOITES</td>
                  </tr>
                  <tr>
                     <td class="first-td">TIPO DE CIRCUITO:</td>
                    <td>Aventura, Caminhada, hospedagem, Àguas Termais</td>
                  </tr>
                  <tr>
                     <td class="first-td">LOCAIS A VISITAR:</td>
                    <td>Nevados, ciclismo, Trilha Inca, as    plantações de coca,plantações de café, águas termais e povoados.</td>
                  </tr>
                  <tr>
                     <td class="first-td">TOTAL DA CAMINHADA</td>
                    <td>36 kilômetros.</td>
                  </tr>
                  <tr>
                     <td class="first-td">AVALIAÇÃO FISICA</td>
                    <td>Moderado a difícil</td>
                  </tr>
                  <tr>
                     <td class="first-td">DESCONTO PARA ESTUDANTES</td>
                    <td>Com Carteira Internacional de    Estudante (ISIC verde): - U$ 20.00. Tem que enviar cópia por email no ato da    reserva</td>
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
                          <li><i class="fa fa-book" aria-hidden="true"></i> Inf. Gerais</li>
                       <li><i class="fa fa-question-circle-o" aria-hidden="true"></i> Condições Gerais</li>
                       <li><i class="fa fa-credit-card" aria-hidden="true"></i> Pagamento</li>
                        <li class="bg-danger text-white"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Reserva</li>
                    
                 
                  </ul>

                   <div class="resp-tabs-container text-justify">
                    <div class="termin">
                      
                    <strong>ROTEIRO</strong>
                    
                    <h2>DIA 01: CUSCO - SANTA MARIA (BIKE)</h2>
                    <p>Primeiramente nosso transfer passará para buscá-los no hotel as 07h00 e depois nossa viagem durará por volta de 4h30m até chegar no ponto início e no decorrer da viagem observaremos impressionantes paisagens, como as montanhas mais altas da região, como o Nevado Veronica (5.650 m.s.n.m),  e Pitusiray, também vamos ver os pitorescos povoados de Poroy, Chinchero e Ollantaytambo onde tomaremos a pista pela margem direita para elevarmos até a altura de 4300 metros sobre o nivel do mar, encontraremos a Abra del Malaga (3.880 m.s.n.m), ponto místico onde se realiza cerimônias de agradecimento a Pachamama (Terra Mãe) com muita freqüência. Neste ponto já poderemos observar todo o Vale da Convencion, onde será nosso início de nossa aventura Full Adrenalina, mas no caso que esteja neblina baixa, desceremos com nosso van até um local que se chama San Luis onde nosso guia nos entregará as bicicletas, onde começaremos uma das excursões mais lindas do mundo comparada somente com a de Coroico na Bolivia, iremos descendo em Down Hill, observando a Imensidão do Vale da Convencion e conforme desceremos irão encontrar diferentes espécies da flora e fauna, visitaremos na metade do caminho as Ruínas dos Inkas do Wamanmarka.<br>
                    Iremos almoçar e seguiremos viagem por mais 4 horas de bike e logo chegaremos ao povoado de Santa Maria. (Nossa primeira noite em um lodge com serviços básicos). Onde teremos o jantar em uma região de floresta e teremos um pequeno resumo e comentário sobre o trekking do dia seguinte com todo o grupo.</p>

                    <ul>
                      <li><b>Altitude máxima:</b> 3.880 msnm.</li>
                      <li><b>Altitude mínima:</b> 1.280 msnm.</li>
                      <li><b>Distância:</b> Aproximadamente de 68 km.</li>
                      <li><b>Pernoite:</b> Lodge turístico.</li>
                      <li><b>Refeições:</b>  Almoço e Janta.</li>
                    </ul>
                    
                    <div class="text-center my-2 row">
                      <img class="img-thumbnail col-6"  src="img/tours/inca_jungle1.jpg" alt="TRILHA INCA JUNGLE">
                      <img class="img-thumbnail col-6"  src="img/tours/jungle.jpg" alt="TRILHA INCA JUNGLE">
                    </div>

                    <h2>DIA 02: SANTA MARIA - SANTA TERESA (TREKKING)</h2>
                    <p>Depois de um bom café da manhã, com muitas vitaminas a base de banana, laranjas, mamão e outras frutas da região, estaremos dispostos a começar a nossa fantástica caminhada cheia de aventuras, caminharemos por lugares cheios de vegetação onde podemos apreciar o cultivo e a secagem do café, assim como a planta sagrada dos Incas a folha de COCA, caminharemos por segmentos de caminhos incas originais, onde encontraremos com uma história ancestral e típica kapac ñan (redes de caninhos inca), hoje degradada pelo tempo, depois da energética caminhada com seu ar mais puro do mundo, teremos a oportunidade de ingressar aos Banhos Termos-Medicinais de COCALMAYO em Santa Teresa para relaxar depois de um dia de caminhada, chegaremos a Santa Teresa onde jantaremos e dormiremos, na hora do jantar teremos uma coordenação do guia para o dia seguinte.</p>
                    <p>coordenação do guia para o dia seguinte.</p>
                    <ul>
                      <li><b>Altitude máxima:</b> 1.900 msnm.</li>
                      <li><b>Altitude mínima:</b> 1.280 msnm.</li>
                      <li><b>Distância:</b> Aproximadamente de 18 km.</li>
                      <li><b>Pernoite:</b> Lodge turístico.</li>
                      <li><b>Refeições:</b> Café da Manhã, Almoço e Janta.</li>
                    </ul>

                    <div class="text-center my-2 row"><img class="img-thumbnail col-6"  src="img/tours/zip-line-min.jpg" alt="TRILHA INCA JUNGLE"><img class="img-thumbnail col-6"  src="img/tours/zip-line1-min.jpg" alt="TRILHA INCA JUNGLE"></div>
                    
                    <h2>DIA 03: SANTA TERESA - ÁGUAS CALIENTES (CAMINHADA)</h2>
                    <p>Depois de tomar um bom café da manhã, passaram buscar-nos para fazer o passeio mais impressionante da trilha inca jungle, onde ponemos a prova nossa aventura e adrenalina voando pela tirolesa no vale de Santa teresa e tambem este dia é memorável para poder ver sua variedade de flora e fauna, como borboletas, loros, iguanas, aves e insetos. Após pegaremos um transporte privado até Hidroectrica para poder visitarmos o complexo arqueológico de Inti Watana (relógio solar) e almoçaremos no povoado de Hidroelétrica com comidas típicas da zona. Depois teremos 2 horas de caminhada até o povoado de Águas Calientes, onde apreciaremos a paisagem da área protegida pelo estado Peruano e também teremos a oportunidade de observar as montanhas de Machu Picchu e Huaynapicchu<br>
                    Finalmente chegaremos a Águas Calientes, para passar a última noite da viagem, teremos um jantar e uma reunião com nosso guia para indicar sobre o dia mais grandioso de sua vida, a Visita a Cidade Sagrada de Machu Picchu.</p>
                    
                      <ul>
                        <li>Altitude máxima: 2.080 msnm.</li>
                        <li>Altitude mínima: 1.950 msnm.</li>
                        <li>Distância: Aproximadamente de 16 km.</li>
                        <li>Pernoite: Hotel turístico.</li>
                        <li>Refeições:  Café da Manhã, Almoço e Janta.</li>
                      </ul>
                    <div class="text-center my-2 row"><img class="img-thumbnail col-6"  src="img/tours/COCALMAYO.jpg" alt="aguas calientes"><img class="img-thumbnail col-6"  src="img/tours/COCALMAYO-2.jpg" alt="machu picchu pueblo"></div>
                    
                    <h2>DIA 04: MACHU PICCHU FULL DAY</h2>
                    <p>Depois do café da manhã, por volta de 05h00 da manhã. Pegaremos o ônibus de subida em direção a cidade inca de Machu Picchu. O objetivo é chegar cedo à cidade de Machu Picchu para ver o nascer do sol e tirar as melhores fotos clássicos de Machu Picchu, antes da chegada de outros turistas que começam a chegar com o primeiro ônibus às 07h00. Depois terão visita guiada por 2 horas pelos principais templos e complexos arqueológicos de Machu Picchu e depois se possui a entrada a Huaynapicchu – Wayna Pichu terá tempo livre para a subir a montanha de Huaynapicchu – Wayna Pichu para ver a paisagem e visitar o Templo da Lua. Após descerão ao povoado de Aguas Calientes para almoçar e logo pegar o trem de retorno de acordo ao horário de saída. Neste dia você estará retornando a Cusco, com trem de Águas Calientes à Ollantaytambo por 2 horas de viagem e depois nossa van estará esperando para transladar de Ollantaytambo até Cusco. </p>
                    <ul>
                      <li>Meals: Café da manhã</li>
                      <li>Tour: Visita a Machu Picchu</li>
                      <br>
                      <li>Tempo de Viagem:</li>
                      <li>Trem: Águas Calientes – Ollantaytambo = 1h45</li>
                      <li>Traslado: Ollantaytambo – Cusco = 2h00 </li>
                    </ul>

                    <div class="text-center my-2 row"><img class="img-thumbnail col-6"  src="img/tours/waynapicchu1-1.jpg" alt="machu picchu"><img class="img-thumbnail col-6"  src="img/tours/machu-picchu1.jpg" alt="TRILHA INCA JUNGLE"></div>
    
                    </div>
                    <div>
                
                      <div class="prices">
                                              
                            <table class="table table-sm shadow-sm text-center font-table table-bordered">
                                <thead>
                                  <tr>
                                   <th colspan="6" class="bg-dark text-white"><?=$title_tour?></th>
                                  </tr>
                                </thead>
                               <tbody>
                                 
                                <tr>
                                  <td>SERVICO REGULAR:</td>
                                  <td>PRECO POR PESSOA</td>

                                </tr>
                                <tr>
                                  <td>ADULTO :</td>
                                  <td>US$ 380</td>

                                </tr>
                                <tr>
                                  <td>ESTUDANTES :</td>
                                  <td>US$ 360</td>

                                </tr>
                               </tbody>
                             </table>

                             <ul class="termin listok listab">
                                <li>Serviço regular está formado por pessoas de diferentes nacionalidades, onde participarão a Trilha Inca Jungle Machupicchu 4 dias e 3 noites, para os quais o guia será no idioma espanhol e inglês.</li>
                                <li>Nossos guias para Trilha Inca Jungle Machu Picchu possuem uma autorização especial, para os quais eles portarão uma identifição no percurso da trilha Inca Jungle. Tambem eles são autorizados pelos órgãos competentes da área protegida pelo SERNANP e tambem por Ministerio de Cultura Cusco.</li>
                                <li>Na Trilha Inca Jungle Machu Picchu inclui um pernoite num hotel para ultima noite de pernoite no povoado de Aguas Calientes, O hotel que está incluído no pacote é Hotel Seven Machupicchu.</li>
                                <li>No caso voce deseja melhorar a categoria do hotel, voce pode solicitar-nos na hora de contato, para nos enviar as opções dos hotéis e cotação.</li>
                                <li>Para a Trilha Inca Jungle Machu Picchu o grupo estará formado da seguinte forma: 1 a 8 pessoas com 1 guia profissional e 9 a 16 pessoas, com 2 guias profissionais.</li>
                             </ul>
                      </div>

                    </div>
                      <div>
                        <div class="d-block d-sm-flex">
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE INCLUI :</h3>
                              <ul class="listok">
                                     <li>O primeiro dia vamos buscar por seu hotel de acordo ao horário combinado no briefing</li>
                                      <li>Transporte Turístico Privado Cusco - Puerto Malaga;</li>
                                      <li>Bicicletas com suspensão dianteira</li>
                                      <li>Alimentação 3 almoços, 3 cafés da manhã e 3 jantares</li>
                                      <li>3 noites de hospedagem</li>
                                      <li>Bilhete de Ingresso a Machu Picchu</li>
                                      <li>Guia Oficial (Espanhol e Inglês)</li>
                                      <li>Bilhete do Trem de retorno Aguas Calientes –Ollantaytambo (Classe Turístico)</li>
                                      <li>Bilhete de ônibus de Águas Calientes - Machu Picchu subida e descida</li>
                                      <li>Tirolesa em Santa Teres</li>
                                      <li>Maleta de primeiros socorros</li>
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE NAO INCLUI :​</h3>
                              <ul class="listnot">
                                     <li>Café da manhã no primeiro dia e almoço no último dia depois de visitar Machu Picchu</li>
                                      <li>Entrada aos Banhos Termais Cocalmayo (10 soles)</li>
                                      <li>Voo: Lima - Cusco – Lima.</li>
                              </ul>
                          </div>
                        </div>
                        </div>

                    <div>
                      <div class="d-block d-sm-flex">
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>RECOMENDAÇÕES :</h3>
                              <ul class="listot">
                                <li>Uma mochila pequena de 40 litros</li>
                                <li>Roupas adequadas para os banhos termais</li>
                                <li>Roupas adequadas para caminhar</li>
                                <li>Calça e bermuda</li>
                                <li>Máquina fotográfica, filmes e baterias (as pilhas são consumidas mais rapidamente sob condições frias)</li>
                                <li>Chapéu ou bonés para proteger contra o sol, chuva ou frio</li>
                                <li>Protetor Solar e Repelente</li>
                                <li>Lanterna</li>
                                <li>Capa da chuva</li>
                                <li>Snacks: biscoitos, barras energéticas, chocolates, etc</li>
                                <li>Garrafa de água</li>
                                <li>Passaporte ou RG Original</li>
                                <li>Dinheiro Extra soles</li>
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>SERVIÇOS OPCIONAIS :</h3>
                              <ul class="listot">
                                <li>Uma noite hotel em Àguas Calientes pode ser reservado com custo adicional, dependendo do hotel que você escolher;</li>
                                <li>Se você deseja visitar Machu picchu novamente no dia seguinte, o valor do bilhete é 60 dólares</li>
                                <li>Serviço do trem Vistadome (primeira classe) ao invés de (Classe turístico), o custo é adicional 57 dólares</li>
                              </ul>
                          </div>
                      </div>
                   </div>
                   <div>
                      <?php include('includes/infgenerais.php') ?>
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