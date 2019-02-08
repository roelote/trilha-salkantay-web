<?php 

$title_tour = "Trilha Inca Clàssica 4 Dias e 3 Noites"; // NO PONER EN MAYUSCULA
$title_seo = "TRILHA INCA CLÀSSICA";  // TITULO SEO
$description_seo = "Trilha Inca clàssica é o trekking mais famoso da América do Sul e é classificado por muitas revistas, como uma das 5 melhores trilhas do mundo";  // DESCRIPCION SEO 

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
            <p>A <strong>Trilha Inca</strong> é um trecho de uma antiga  estrada inca pavimentada com pedras que atravessam as montanhas acima do rio  Urubamba e chega até a cidade de Machupicchu no Peru.</p>

          <p>Entretanto as estradas incas não se restringiram  a este trajeto. Elas ligavam Cusco em todas as direções da América do Sul  formando uma rede de comunicação de mais de 30.000 km,de <strong>Trilha Inca</strong>.</p>

          <p>Esta rede de estradas de <strong>Trilha Inca</strong> se estendia do centro do Equador até a região central  do Chile, ao sul, e da costa do oceano Pacífico até as encostas orientais dos  Andes.</p>

          <p>A <strong>Trilha  Inca</strong> é o trekking mais famoso da América do Sul e é classificado por muitos  como uma das 5 melhores trilhas do mundo.  Uma experiência única e quem o fez tem a certeza de que o esforço vale a pena!</p>

          <p>A <strong>Trilha  Inca</strong> em 45 km consegue combinar a bela paisagem das montanhas, exuberante  floresta e da selva sub-tropical. E claro, uma mistura impressionante de  construções, ruínas e túneis Incas.&nbsp;
          O destino final da <strong>Trilha Inca</strong> é Machu Picchu, a misteriosa "cidade perdida dos  Incas".&nbsp;</p>
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
                    <td>Complexos Arqueológico, Natureza,  Caminhada, Acampamento</td>
                  </tr>
                  <tr>
                     <td class="first-td">LOCAIS A VISITAR:</td>
                    <td>Cusco, Trilha Inca (Km 82), Trilha    Inca (Huayllabamba) (Pacaymayo) Trilha Inca (Wiñayhuayna), Machu Picchu,    Àguas Calientes</td>
                  </tr>
                  <tr>
                     <td class="first-td">TOTAL DA CAMINHADA</td>
                    <td>44 Quilômetros.</td>
                  </tr>
                  <tr>
                     <td class="first-td">O GRUPO ESTA FORMADO:</td>
                    <td>&nbsp;01 ate 12 pessoas.</td>
                  </tr>
                  <tr>
                     <td class="first-td">DESCONTO DISPONIVEIS PARA ESTUDANTE</td>
                    <td>Os estudantes que possuem uma carteira    internacional ISIC CARS  de cor verde    conseguem um desconto de <strong>30 dólares</strong>, Más tem que enviar a cópia por email no    ato da reserva.</td>
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
                    <div>
                      <strong>Dia 01: TRILHA INCA</strong>
                        <h2>CUSCO - KM 82 - HUAYLLABAMBA </h2>
                        <p>
                           Buscaremos vocês no Hotel às 6:00 com nosso bus e nos  dirigiremos a Piscakucho (2700) Povoado conhecida como o Km 82 por onde passa a  via Ferroviária de trem de Cusco a MachuPicchu. Começando nossa trekking desde  o posto de controle da ponte e caminharemos ao lado esquerdo do Rio Urubamba  que flui ao noroeste do Vale Sagrado. Depois de passar por alguns terraços  planos, chegaremos a Miskay (2800 ma.n.m) para logo subirmos e finalmente ver a  Cidade Inca de Patallacta (2750 m.a.n.m) , continuaremos nossa caminhada no  trajeto do vale criado pelo Rio Kusichaca, subiremos gradualmente até chegar ao  nosso primeiro acampamento de Wayllabamba (3000 m.a.n.m) onde teremos as vistas  mais espetaculares do canto do Rio Vilcanota, no lado oposto do Rio Urubamba se  pode ver o impressionante Nevado verônica (5832 m.a.n.m) ainda não e possível  calcular a diversidade de flora e fauna que se pode encontrar no local.
                        </p>
                        <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/huayllabamba.jpg" alt="HUAYLLABAMBA"><img class="img-thumbnail m-1" src="img/tours/patallacta.jpg" alt="HUAYLLABAMBA"></div>
                        <br>
                        <strong>Dia 02: TRILHA INCA</strong>
                        <h2>HUAYLLABAMBA - WARMIWANUSCA - PACAYMAYU </h2>
                        <p>Depois de um bom café da manhã, estaremos dispostos a  continuar a nossa caminhada (considerada a mais forte da viagem), consiste em  uma subida estreita e próxima a precipícios de (9 km). Ao longo desta subida a  paisagem vai se modificando de Serras Puna (área seca e alta com pouca  vegetação). Este será o momento que chegaremos ao primeiro passo da montanha  conhecida como Abra de Warmihuañuska (Passo da mulher morta) podemos observar  Llamas e Alpacas domésticas que pastam pelo Ichu ( uma das poucas plantas que  crescem nesta altitude). Também cruzaremos por uma área de bosque onde habitam  diversas classes de animais como o pardais , passarinhos e o ursos Andino.  Sugerimos levar balas, chocolates e folhas de coca, e assim mantenham o nível  alto de açúcar e controlar seu nível de Glicerina na altitude. Imediatamente  depois do passo descemos ao Vale de Pacaymayu (3600msnm) onde acamparemos  depois de 6 horas de caminhada.</p>
                        <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/huayllabamba1.jpg" alt="WARMIWANUSCA"><img class="img-thumbnail m-1" src="img/tours/warmiwanusca.jpg" alt="TRILHA INCA"></div>
                        <br>
                        <strong>Dia 03: TRILHA INCA</strong>
                        <h2>PACAYMAYU - CHAQICOCHA - WINAHUAYNA </h2>
                        <p>
                          Este dia é memorável por seu número de sítios  arqueológicos que visitaremos e receberemos maiores informações de nosso guia.  De Pacaymayu subiremos ao segundo passo o Abra de Runcurakay (3970 m.a.n.m ),  no meio da manhã visitaremos o complexo arqueológico do mesmo nome, este sitio  está situado a 3800 m.a.n.m, consiste em uma estrutura oval pequena que está  constituída como uma atalaia (torre de vigia). Depois de passar pelo Passo  descemos até Yanacocha (Lagoa Negra) e entraremos no Bosque nublado e  finalmente para chegar a Sayacmarca (3624 m.a.n.m). Este é um complexo lindo  feito de uma construção semi-circular com diversos níveis, de ruas estreitas,  de fontes litúrgicas, pátios e canais de irrigação. Continuaremos por uma  subida fácil, chegaremos ao terceiro passo o Abra Phuyupamarca (3700 m.a.n.m).  Ao longo da nossa caminhada podemos apreciar a magnitude da arte antiga dos  incas e ver as rochas que chegaram ao barranco em ordem perfeita. Seguiremos  nossa caminhada para logo passar por um túnel Inca e chegar ao passo já  mencionado, este é um dos complexos arqueológicos, mas completos e conservados  e se encontra no ponto mais alto da montanha. Phuyupamarca significa &quot; A  nuvem sobre a Cidade&quot; de onde poderemos observar um sofisticado complexo e  composto das fontes de águas com uma fundação sólida e com vistas  impressionantes do Rio Urubamba ao longo dele que continuaremos subindo até  Wiñayhuayna (2700 m.a.n.m). Neste sitio encontraremos uma casa de campo com um  restaurante, habitações com banheiro e chuveiro quentes. A cinco minutos do  lugar de acampamento no complexo arqueológico de Wiñayhuayna do qual è composto  de um centro agrícola com numerosos terraços religiosos e urbanos.&nbsp;
                        </p>
                        <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/pacaymayu.jpg" alt="WINAHUAYNA"><img class="img-thumbnail m-1" src="img/tours/chaqicocha.jpg" alt="trilha inca machu picchu"></div>
                        <br>
                        <strong>Dia 04: TRILHA INCA</strong>
                        <h2> WINAYHUAYNA - MACHU PICCHU - CUSCO </h2>
                        <p>
                          Este dia nos levantaremos às 4h00 da manhã para deixar  Wiñayhuayna na hora indicada, subiremos até o Inti Punku (porta do sol ou  nascer do Sol). O passeio nos tomará uma hora aproximadamente, depois vamos  caminhar sobre as pedras planas que se encontram na borda da montanha onde  podemos observar a saída do sol sobre a cidade de MachuPicchu. De Intipunku  desceremos até Machpichu, chegando em 40 min. Chegando em MachuPicchu teremos  uma visita guiada de aproximadamente 2 horas. Depois terão tempo livre para  caminhar aos arredores da cidadela ou subir a montanha de HuaynaPicchu de onde  poderá ver espetaculares vistas de vales e montanhas que rodeiam a cidadela de  Machupicchu ou também visitar o Templo da Lua e a famosa Ponte Inca. A tarde  desceremos ao povoado de Águas Calientes onde vocês poderão visitar os banhos  termais para relaxar depois de 4 dias de caminhada. Aqui lhe entregaremos os  Tickets de Trem de retorno ao povoado de Ollantaytambo, logo nosso ônibus lhe  estará esperando para transportar a Cidade de Cusco, chegando por volta das  19h00 ou 21h30.
                        </p>
                        <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/winayhuayna.jpg" alt="WINAYHUAYNA"><img class="img-thumbnail m-1" src="img/tours/machupicchuperu1.jpg" alt="MACHU PICCHU"></div>
                        <br>
    
                    </div>
                    <div>
                
                      <div class="prices">
                      
                        <ul class="nav nav-tabs justify-content-center">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#grupal">SERVIÇO GRUPAL</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#privado">SERVIÇO PRIVADO</a>
                          </li>
                        </ul>

                        <div class="tab-content">
                          <div id="grupal" class="container tab-pane active"><br>

                              <table class="table table-sm table-bordered table-striped shadow-sm text-center">

                                <thead>
                                  <tr>
                                    <th colspan="2">TRILHA INCA CLASSICA 4 DIAS E 3 NOITES</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr><td>SERVICO REGULAR:​</td><td>PRECO POR PESSOA</td></tr>
                                  <tr><td>ADULTO :</td><td>US $ 550</td></tr>
                                  <tr><td>ESTUDANTES :</td><td>US $ 510</td></tr>
                                </tbody>
                                   
                                </table>
                                <ul class="termin listok listab">
                                  <li>Serviço regular estará formado por pessoas de diferentes nacionalidades, onde participarão na Trilha Inca 4 dias e 3 noites, com guia falando no idioma espanhol e inglês.</li>
                                  <li>Nossos guias são profissionais, com autorização para a trilha inca clássica, para os quais portarão um cartão profissional de identificao no percurso da trilha inca e tambem são autorizados pelos órgãos competentes da área protegida pelo SERNANP da cidade de Cusco e tambem por Ministerio de Cultura Cusco.</li>
                                  <li>A reserva a trilha inca clássica 4 dias e 3 noites é de acordo a disponibilidade das vagas no sistema da prefeitura de Cusco, onde voce pode ver as vagas em tempo real, clique nesse link: Veja mais.</li>  
                                </ul>
                                
                          </div>
                          <div id="privado" class="container tab-pane fade"><br>

                            <table class="table table-sm table-bordered table-striped shadow-sm text-center">

                                <thead>
                                  <tr>
                                    <th colspan="7">TRILHA INCA CLASSICA 4 DIAS E 3 NOITES</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>SERVICO PRIVADO:​</td>
                                    <td>02 pessoas​</td>
                                    <td>03 pessoas​</td>
                                    <td>04 pessoas​</td>
                                    <td>05 pessoas​</td>
                                    <td>06 pessoas​</td>
                                    <td>07 pessoas a mais​</td>
                                  </tr>
                                  <tr>
                                    <td>ADULTOS</td>
                                    <td>$ 780</td>
                                    <td>$ 740</td>
                                    <td>$ 700</td>
                                    <td>$ 660</td>
                                    <td>$ 620</td>
                                    <td>$ 580</td>
                                  </tr>
                                  <tr>
                                    <td>ESTUDANTES</td>
                                    <td>$ 750</td>
                                    <td>$ 710</td>
                                    <td>$ 670</td>
                                    <td>$ 630</td>
                                    <td>$ 590</td>
                                    <td>$ 550</td>
                                  </tr>
                                </tbody>

                                </table>
                                <ul class="termin listok listab">
                                  <li>O serviço privado está considerado um serviço personalizado, onde o grupo estará formado apenas das pessoas que voce deseja como: familiares, amigos, acompanhantes, etc. Ao mesmo tempo, o serviço será mais confortável no equipamento da trilha inca, flexível no horario da saída, os carregadores levarão suas coisas até 7 quilos, isolante inflável, saco de dormir, o guia será um só idioma, a agência vai providenciar uma camiseta da trilha inca para cada um e a comida será variada, com opção de comida vegetariano ou glúten.</li>
                                  <li>Nossos guias são profissionais, com autorização para a trilha inca clássica, para os quais portarão um cartão profissional de identificao no percurso da trilha inca e tambem são autorizados pelos órgãos competentes da área protegida pelo SERNANP e tambem por Ministerio de Cultura Cusco.</li>
                                  <li>O grupo mínimo para abrir a Trilha Inca Clássica está considerado a partir de 2 pessoas a mais, de acordo na tabela acima.</li>
                                  <li>A reserva a trilha inca clássica 4 dias e 3 noites é de acordo a disponibilidade das vagas no sistema da prefeitura de Cusco, onde voce pode ver as vagas em tempo real, clique nesse link: Veja mais </li>
                                </ul>

                          </div>
                        </div>
                      </div>

                    </div>
                      <div>
                        <div class="d-block d-sm-flex">
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE INCLUI :</h3>
                              <ul class="listok">
                                <li>Transporte do seu       hotel até o Km 82</li>
                                <li>Bilhete de ingresso       ao Caminho Inca e Machupicchu</li>
                                <li>Guia profissional       Inglês, Espanhol ou Portugues.</li>
                                <li>Cozinheiro: Especializado</li>
                                <li>Porteadores: Os       carregadores das Barracas, alimentação e equipamento</li>
                                <li>Acomodação para os       guias, cozinheiro e portadores</li>
                                <li>Alimentação 3 Cafés       da manhã / 3 Almoços / 3 Jantares</li>
                                <li>Ticket de trem Águas       Calientes - Ollantaytambo </li>
                                <li>Onibus de Ollantaytambo - Cusco</li>
                                <li>Barracas, mesas,       cadeiras, refeitório, Barraca cozinha</li>
                                <li>Balão de Oxigênio</li>
                                <li>Kit  de primeiros socorros</li>
                                <li>Isolante térmico</li>
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE NAO INCLUI :​</h3>
                              <ul class="listnot">
                                  <li>Café da manhã no       primeiro dia</li>
                                  <li>Almoço e janta no       último dia</li>
                                  <li>Entrada aos banhos       termais de Águas Calientes</li>
                                  <li>Saco de dormir</li>
                                  <li>Montanha  Huaynapicchu.</li>
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
                                <li>Uma mochila 50 a 70L</li>
                                <li>Passaporte ou RG       original, o mesmo documento da reserva</li>
                                <li>Blusas, Bermudas e       algumas roupas quentes para os 4 dias de caminhada</li>
                                <li>Corta Vento ou Capa       de Chuva</li>
                                <li>Sapatos de caminhada ou trekking</li>
                                <li>Máquina fotográfica, filmes       e baterias (as pilhas sao consumidas mais rapidamente sobre condições       frias)</li>
                                <li>Chapéu ou Gorros       bonés para se proteger</li>
                                <li>Produtos de higiene       pessoal, papel higiênico</li>
                                <li>Bloqueador Solar</li>
                                <li>Repelente,</li>
                                <li>Lanterna</li>
                                <li>Snacks: biscoitos, barras energéticas,       chocolates, etc.</li>
                                <li>Garrafa de água e       comprimidos de purificação</li>
                                <li>Bolsa de dormir</li>
                                <li>Carteirinha ISIC en       caso de estudante</li>
                                <li>Pequena toalha, roupa       de banho( caso necessite para os banhos)</li>
                                <li>Dinheiro  extra</li>
          
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>SERVIÇOS OPCIONAIS :</h3>
                              <ul class="listot">
                                      <li>Carregador adicional       para os itens pessoais (U$ 120,00 pelos 4 dias), 01 transportador pode       transportar até 15 quilos,</li>
                                      <li>Noite adicional em       Aguas Calientes (U$ 40,00 Básico)</li>
                                      <li>Entrada adicional a Machu Picchu (U$ 60,00)</li>
                                      <li>Ticket de bus de Machu Picchu - Águas       Calientes (U$ 10,00)</li>
                                      <li>Ingresso para subir a        Huaynapicchu (U$ 70,00)</li>
                                      <li>Saco de dormir ( Aluguel) U$ 20,00)</li>
                                      <li>Bastões  durante a caminhada devem ser cobertos por borracha, aluguel U$ 8,00</li>
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