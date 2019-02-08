<?php 

$title_tour = "Pacote 14 Dias : Lima - Paracas - Nazca - Arequipa - Puno - Cusco - Machu Picchu"; // NO PONER EN MAYUSCULA
$title_seo = "PACOTE 14 DIAS : Lima - Paracas - Nazca - Arequipa - Puno - Cusco - Machu Picchu";  // TITULO SEO
$description_seo = "Pacote 14 Dias: Lima - Paracas - Nazca - Arequipa - Puno - Cusco - Machu Picchu. Este Pacote e roteiro mais completo para conhecer os principais atrativos turísticos do país, capital, Lima Colonial e Lima moderna, Visita a Paracas, Conheceremos Nazca e suas Linhas Majestosas, 'Cidade Branca' Arequipa, Colca Canyon um dos mais profundos do mundo.Em seguida Puno e o Lago Titicaca, rota de Puno a Cusco, Cidade de Cusco e seus sítios arqueológicos, Valle Sagrados dos Incas - 7 maravilhas do mundo - Machu Picchu.";  // DESCRIPCION SEO 

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
            <p><strong>Pacotes Peru: Lima, Paracas, Nazca, Arequipa, Puno e Cusco - 14 Dias 13 Noites</strong>. Este pacote é um itinerário completo é feito para conhecer todas as principais <strong>atrações turísticas do Peru</strong>. Começando pela capital, Lima, visitando aos principais sitios turisticos, como: a <strong>city tour</strong> pela cidade colonial e moderna, ao complexo arqueológico de <strong>Huaca Pucllana</strong>, Circuito Magico das aguas e a gastronomia peruana. Imediatamente nós continuamos a outro ponto turístico que faz parte do circuito da costa peruana, Ilhas Balhestas, conhecido como as pequenas ilhas Galápagos no Peru, o lugar de várias espécies de flora e fauna.</p>
            <p>Dentro do pacote também temos incluído ao misterioso enigmático para sobre voar as Linhas de Nazca, localizado na cidade de Nazca.</p>
            <p>Continuando com o pacote, vamos ver a famosa Cidade Branca de Arequipa, com a sua bela Plaza de Armas e grandes museus. Em seguida vamos continuar ao Colca Canyon um dos cânions mais profundos do mundo e onde vamos ver o voo dos Condores.</p>
            <p>Seguindo a rota entramos na rota de Cusco a Puno, chamado de "Rota do Sol", com uma série de pontos importantes e finalmente visitaremos ao Lago Titicaca - Puno, lago navegável mais alto do mundo, onde conheceremos aos principais ilhas flutuante de Uros e Taquile.</p>
            <p>Após continuamos a cidade de Cuzco, conhecido "o umbigo do mundo e o império dos Incas" visitar aos principais sítios arqueológicos, como: City tours arqueológico, ao Vale Sagrado dos incas e opção de pernoitar a noite no povoado de Aguas Calientes ao lado de uma das maravilhas do mundo moderno Machu Picchu.</p>
          </article>

          

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
                          <strong>ROTEIRO:</strong><br>
                          <br>
                          <h2>DIA 01: RECEPÇÃO EM LIMA</h2>
                          <ul>
                        <li>Recepção no aeroporto de Lima e translado ao Hotel.</li>
                        <li>Tarde livre para aproveitar descansar.</li>
                        <li>Pernoite em Lima.</li>
                          </ul>
                          <h2>DIA 02: LIMA - CITY TOUR A CIDADE COLONIAL E MODERNA.</h2>
                          <ul type="disc">
                        <li>Café da manhã no hotel.</li>
                        <li>A manhã Livre.</li>
                        <li>Pela tarde City Tour na cidade começa as 14h00 até 18h00.</li>
                        <li>Visita: Ao complexo arqueológico de Huacapucllana, praça principal, praça San Martin, palácio do governo, Templo de San Francisco, San Isidro, Miraflores, parque do Amor e Larcomar.</li>
                        <li>Pela noite visitará o Circuito Mágico das aguas desde as 18h15 até 20h00 (opcional).</li>
                        <li>Pernoite em Lima.</li>
                         </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/citytourlima.jpg" alt="city tour lima"><img class="img-thumbnail m-1" src="img/tours/citytourlima2.jpg" alt="city tour lima"></div>
                          <br>
                          <h2>DIA 03: LIMA - PARACAS</h2>
                          <ul type="disc"> 
                        <li>Translado do seu hotel ao terminal de ônibus as 03h00 (<a href="http://www.cruzdelsur.com.pe/" target="_blank">Cruz del sur</a>).</li>
                        <li>Pegamos o ônibus de Lima – Paracas as 04h00.</li>
                        <li>Chegamos a Paracas e translado ao hotel as 07h00.</li>
                        <li>O passeio a Ilhas Balhestas começa as 08h00 até 10h30.</li>
                        <li>Depois o passeio a Reserva de Paracas começa às 12h00.</li>
                        <li>O retorno a Paracas será por volta das 16h00.</li>
                        <li>Pernoite em Paracas.</li>
                          </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/paracas.jpg" alt="paracas"><img class="img-thumbnail m-1" src="img/tours/paracas2.jpg" alt="paracas"></div>
                          <br>
                          <h2>DIA 04: PARACAS - NAZCA - AREQUIPA.</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Pela manhã passaremos por seu hotel e translado ao rodoviária as 07h00.</li>
                        <li>Depois pegaremos nosso ônibus de Paracas - Nazca as 07h30 (<a href="http://www.cruzdelsur.com.pe/" target="_blank">Cruz del sur</a>).</li>
                        <li>Chegada a Nazca será as 10h30 e recepção na rodoviária e translado ao aeródromo..</li>
                        <li>O sobre vôo começará as 12h00 até 12h35.</li>
                        <li>Tarde livre para aproveitar conhecer a cidade de Nazca.</li>
                        <li>Pela noite nosso ônibus sairá as 22h00 Nazca – Arequipa (<a href="http://www.cruzdelsur.com.pe/" target="_blank">Cruz del sur</a>).</li>
                        <li>Pernoite no Ônibus executivo.</li>
                          </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/nazca.jpg" alt="nazca"><img class="img-thumbnail m-1" src="img/tours/nazca2.jpg" alt="nazca lines"></div>
                          <h2>DIA 05: AREQUIPA - CITY TOURS PANORAMICO.</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Buscaremos em seu hotel as 08h40.</li>
                        <li>Siada ao City Tour Panorâmico que começa as 09h00 até as 14h00.</li>
                        <li>Visita: A Catedral de Arequipa, Mirador de Carmen Alto, Mirador de Yanahuara, Incalpaca, Sachaca, Balneário de Tingo, Mansion de Fundador, Molinho de Sabandia e Andenes de Paucarpata.</li>
                        <li>Pernoite em Arequipa.</li>
                          </ul>
                    <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/citytourarequipa.jpg" alt="arequipa city tour"><img class="img-thumbnail m-1" src="img/tours/citytourarequipa2.jpg" alt="arequipa city tour"></div>
                          <br>
                          <h2>DIA 06: AREQUIPA - CHIVAY</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Buscaremos em seu hotel as 08h00.</li>
                        <li>Saída ao Canyon de Colca as 08h30.</li>
                        <li>No percurso da viagem, passaremos pelos povoados históricos e alto andinos da região de Arequipa, onde nosso guia dará toda a informação sobre a cultura inca e também das culturas pre incas que habitaram nesses sítios.</li>
                        <li>A Chegada a Chivay será por volta das 12h30 e translado ao hotel.</li>
                        <li>Na tarde pode aproveitar ir aos banhos termais La Calera.</li>
                        <li>Pernoite em Chivay.</li>
                          </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/chivay.jpg" alt="arequipa chivay"><img class="img-thumbnail m-1" src="img/tours/chivay2.jpg" alt="arequipa chivay"></div>
                          <br>
                          <h2>DIA 07: CHIVAY - CANYON DE COLCA -  PUNO</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Pela manhã passará nosso guia a buscar por seu hotel.</li>
                        <li>A saída a Canyon de Colca será por volta das 07h30.</li>
                        <li>Visita. No percurso da viagem, visitaremos aos povoados de Chivay, ao Canyon mais profundo do mundo e observar o vôo dos Condores ao entorno das montanhas.</li>
                        <li>O retorno a Chivay será as 12h00 e depois vamos pegar nosso ônibus de Chivay – Puno (<a href="http://www.4m-peru.com/" target="_blank">onibus 4M</a>).</li>
                        <li>Chegaremos em Puno as 19h00.</li>
                        <li>Recepção em Puno e translado ao hotel.</li>
                        </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/colcacanyon.jpg" alt="colca canyon"><img class="img-thumbnail m-1" src="img/tours/colcacanyon2.jpg" alt="colca canyon"></div>
                          <br>
                          <h2>DIA 08: PUNO – LAGO TITICACA.</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Buscaremos em seu hotel às 07h00.</li>
                        <li>Nossa embarcação sairá as 07h30.</li>
                        <li>Visitaremos as principais Ilhas Flutuantes de Uros e Ilha Taquile, onde entraremos em contato com os moradores do lago Titicaca, que apresentarão os tradições e costumes do lago sagrado de Titicaca.</li>
                        <li>Após retornaremos a Puno, por volta das 17h00.</li>
                        <li>Pernoite em Puno.</li>
                         </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/punolaketiticaca.jpg" alt="puno lago titicaca"><img class="img-thumbnail m-1" src="img/tours/punolaketiticaca2.jpg" alt="puno lago titicaca"></div>
                          <br>
                          <h2>DIA 09: PUNO  - CUSCO / ROTA DO SOL.</h2>
                          <ul type="disc">  
                        <li>Café da manhã no Hotel.</li>
                        <li>Passaremos por seu hotel e Translado a rodoviária as 06h30.</li>
                        <li>Nosso ônibus executivo sairá as 07h00 de Puno – Cusco ( &nbsp;<a href="http://www.turismomer.com/" target="_blank">turismo Mer&nbsp;</a> ).</li>
                        <li>Visita: Ao museu de Pukara, La Raya(nevados mais altos), Sicuani (Almoco Buffet),  Raqchi (templo de wiracocha) e a Capela sextina de Andahuaylillas.</li>
                        <li>Chega em Cusco as 17h00.</li>
                        <li>Recepção em Cusco e translado ao hotel.</li>
                      </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/cuscopuno.jpg" alt="cusco puno"><img class="img-thumbnail m-1" src="img/tours/cuscopuno2.jpg" alt="cusco puno"></div>
                          <br>
                          <h2>DIA 10: CUSCO - CITY TOUR ARQUEOLÓGICO</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>A manhã livre, pode aproveitar conhecer a cidade ou fazer compras.</li>
                        <li>Buscaremos em seu hotel as 13h30.</li>
                        <li>Saída ao City Tour Arqueológico as 14h00 até as 18h30.</li>
                        <li>Visita ao Templo do Sol Qoricancha e as ruinas de Sacsayhuaman, Kenko, Pucapucara e Tambomachay.</li>
                        <li>Pernoite em Cusco.</li>
                          </ul>
                    <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/citytourcusco.jpg" alt="city tour cusco"><img class="img-thumbnail m-1" src="img/tours/citytourcusco2.jpg" alt="city tour cusco"></div>
                          <br>
                          <h2>DIA 11: CUSCO - VALE SAGRADO DOS INCAS / CONEXÃO AGUAS CALIENTES</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel</li>
                        <li>Buscaremos em seu Hotel as 08h15</li>
                        <li>Saída ao Vale Sagrado as 08h40</li>
                        <li>Visita: Aos Mercados de Corão e Mercado de Pisaq, ao complexo arqueológico de Pisaq e parque arqueológico de Ollantaytambo</li>
                        <li>Pela tarde pagaremos o Trem de Ollantaytambo – Aguas Calientes as 19h00 ou 21h00.</li>
                        <li>Recepção na estação de Aguas Calientes e translado ao hotel.</li>
                        <li>Pernoite em Aguas Calientes.</li>
                         </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/sacredvalley.jpg" alt="sacred valley cusco"><img class="img-thumbnail m-1" src="img/tours/sacredvalley2.jpg" alt="sacred valley"></div>
                          <br>
                          <h2>DIA 12: CUSCO - MACHU PICCHU FULL DAY</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Pela manhã a saída será às 05h20, para pegar o primeiro ônibus até Machu Picchu.</li>
                        <li>Porque Machu Picchu abre a porta as 06h00 e poderiam ingressar para aproveitar ver o nascer do Sol.</li>
                        <li>Depois visitarão à Machu Picchu com nosso guia profissional por volta de 2 horas.</li>
                        <li>Após terá tempo livre para tirar fotos e passar mais tempo em Machu Picchu.</li>
                        <li>Pela tarde descida de Machu Picchu até Àguas Calientes e aguardaremos nosso trem da volta.</li>
                        <li>Depois pegaremos o trem de Àguas Calientes atè Ollantaytambo as 14h55 ou 18h20.</li>
                        <li>Na hora de chegada ao povoado de Ollantaytambo, estará aguardando nosso transporte para levar até Cusco.</li>
                         </ul>
                          <div class="text-center my-2"><img class="img-thumbnail m-1" src="img/tours/machupicchuperu1.jpg" alt="Machu Picchu"><img class="img-thumbnail m-1" src="img/tours/machupicchupacote2.jpg" alt="Machu Picchu Peru"></div>
                          <br>
                          <h2>DIA 13: CUSCO – DIA LIVRE</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Dia livre pode aproveitar descansar ou fazer compras.</li>
                        <li>Pernoite em Cusco.</li>
                          </ul>
                          <h2>DIA 14: CUSCO  – TRANSLADO AO AEROPORTO</h2>
                          <ul type="disc">
                        <li>Café da manhã no Hotel.</li>
                        <li>Translado ao Aeroporto 2h antes da saída de seu voo.</li>
                          </ul>
    
                    </div>
                    <div>
                      <table class="table table-sm table-striped shadow-sm text-center font-table table-bordered">
                                <thead>
                                  <tr>
                                    <th colspan="8" class="text-white bg-dark">O VALOR TOTAL DO PACOTE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="abg1">
                                    <td colspan="6">HOTÈIS </td>
                                    <td >DUPLO</td>
                                    <td >TRIPLO</td>

                                  </tr>
                                  <tr class="abg1">
                                     <td>LIMA</td>
                                    <td>PARACAS</td>
                                    <td>AREQUIPA</td>
                                    <td>PUNO</td>
                                    <td>CUZCO</td>
                                    <td>MACHUPICCHU</td>
                                  </tr>
                                  <tr>
                                    <td><a href="http://www.hotelessanagustin.com.pe/es/hoteles/lima/miraflores/exclusive/" target="_blank">San Agustin Exclusive 4*</a></td>
                                    <td><a href="http://www.hotelessanagustin.com.pe/es/hoteles/paracas/" target="_blank">San Agustin Paracas</a></td>
                                    <td><a href="http://tierravivahoteles.com/es/tierra-viva-arequipa-plaza/" target="_blank">Hotel Terra Viva</a></td>
                                    <td><a href="http://www.royalinnhoteles.com/" target="_blank">Hotel Royal Inn</a></td>
                                    <td><a href="http://www.hotelessanagustin.com.pe/es/hoteles/cusco/el-dorado/" target="_blank">San Agusntin Dorado</a></td>
                                    <td><a href="http://www.intipunku.pe/es/" target="_blank">Inti Punku Mapi</a></td>
                                    <td>$ 1980</td>
                                    <td>$ 1930</td>
                                  </tr>
                                  <tr>
                                    <td><a href="http://www.hotelcarmel.com.pe/" target="_blank">Hotel Carmel 3*</a></td>
                                    <td><a href="http://www.elmiradorhotel.com/" target="_blank">El Mirador Hotel</a></td>
                                    <td><a href="http://www.hotelessanagustin.com.pe/es/hoteles/arequipa/posada-del-monasterio/" target="_blank">Hotel Posada Monasterio</a></td>
                                    <td><a href="http://www.solplazahotel.com/" target="_blank">Sol Plaza Inn</a></td>
                                    <td><a href="http://www.hotelessanagustin.com.pe/es/hoteles/cusco/internacional/" target="_blank">S.A Internacional.</a></td>
                                    <td><a href="http://www.hatunsamay.com/" target="_blank">Hotel Hatun Samay</a></td>
                                    <td>$ 1770</td>
                                    <td>$ 1730</td>
                                  </tr>
                                  <tr>
                                    <td><a href="http://www.montereal.com.pe/" target="_blank">Hotel Monte Real 2*</a></td>
                                    <td><a href="http://www.hostalsantamariaparacas.com/habitaciones/" target="_blank">Santa Maria</a></td>
                                    <td><a href="http://ensuenohotelarequipa.com/" target="_blank">Hotel Ensueño</a></td>
                                    <td><a href="http://www.hoteleshelenaaqp.com/" target="_blank">Hotel Helena</a></td>
                                    <td><a href="http://www.hotelprismacusco.com/" target="_blank">Hotel Prisma</a></td>
                                    <td><a href="http://hostalcontinentalperu.com/" target="_blank">Hotel Continental</a></td>
                                    <td>$ 1590</td>
                                    <td>$ 1560</td>
                                  </tr>
                                </tbody>
                       </table>

                      <p><em>Os precos estao em  dólares americanos e por pessoa, e estao de acordó ao tipo acomodacao e á  categoria dos hotéis, nos preços já esta incluso os passeios e hotéis.</em></p>
    
                    </div>
                      <div>
                        <div class="d-block d-sm-flex">
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE INCLUI :</h3>
                              <ul class="listok">
                                    <li>Translado Aeroporto - Hotel em Lima.</li>
                                    <li>Translado Hotel - Aeroporto em Cusco.</li>
                                    <li>O passeio City tours Lima.</li>
                                    <li>Os traslados em cada cidade..</li>
                                    <li>Ônibus executivo de Lima – Paracas.</li>
                                    <li>Passeio a Ilhas Balhestas e Reserva de Paracas.</li>
                                    <li>Ônibus Executivo de Paracas - Nazca.</li>
                                    <li>Guia profissional para cada passeio.</li>
                                    <li>Sobre voo as Linhas de Nazca.</li>
                                    <li>Ônibus executivo de Nazca – Arequipa.</li>
                                    <li>Passeio de City Tours em Arequipa.</li>
                                    <li>Passeio a Canyon de Colca em Arequipa.</li>
                                    <li>Ônibus Executivo de Chivay – Puno.</li>
                                    <li>Passeio ao lago titicaca/ Ilhas Flutuantes de Uros e Taquile.</li>
                                    <li>Passeio Rota do Sol de Puno - Cusco.</li>
                                    <li>Passeios em Cusco: City Tour Arqueológico, Vale Sagrado e Machu Picchu.</li>
                                    <li>2 noites Hotel em Lima.</li>
                                    <li>1 noites Hotel em Paracas.</li>
                                    <li>1 noite Hotel em Arequipa.</li>
                                    <li>1 noite Hotel em Chivay.</li>
                                    <li>2 Noites Hotel em Puno.</li>
                                    <li>4 Noites Hotel em Cusco.</li>
                                    <li>1 Noite Hotel em Águas Calientes.</li>
                                    <li>Ingresso a Machu Picchu para 1 dia.</li>
                                    <li>Serviço do Trem Ida e Volta Ollantaytambo – Aguas Calientes - Ollantaytambo (CLASSE TURISTICO).</li>
                                    <li>Ônibus Subida e Descida Àguas Calientes - Machu Picchu.</li>
                                    <li>Translado Ollantaytambo – Cusco.</li> 
    
                              
                                    
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>O QUE NAO INCLUI :​</h3>
                              <ul class="listnot">
                                  <li>Almoço e Jantar.</li>
                                  <li>Bilhete Turístico Cusco 45 Dólares.</li>
                                  <li>Bilhete Turístico Arequipa 27 Dólares.</li>
                                  <li>Taxa do Aeródromo de Nazca 8 Dólares.</li>
                                  <li>Boleto Turístico Rota do Sol 15 Dólares.</li>
                                    <li>Voo: Brasil - Lima - Brasil.</li>
                                    <li>Voo: Cusco – Lima.</li>
                                    <li>Seguro de Viagem.</li>
                                    <li>Outros que não estão acima.</li>
                                    
    
                              </ul>
                          </div>
                        </div>
                        </div>

                    <div>
                      <div class="d-block d-sm-flex">
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>RECOMENDAÇÕES :</h3>
                              <ul class="listot">
                                <li>Levar os documentos pessoais com qual fizeram a reserva do pacote (Passaporte ou RG).</li>
                                <li>Os estudantes devem levar a carteirinha internacional do estudante <a href="https://www.isic.org/" target="_blank">ISIC CARD</a></li> 
                                <li>Protetor solar na época de verão e inverno.</li>
                                <li>Repelente de mosquitos para Machu Picchu.</li>
                                <li>Capa de chuva, em época chuvosa.</li>
                                <li>Roupa adequada para época de frio.</li>
                                <li>Uma batería extra para a câmera.</li>
                                <li>Adquira seu seguro de viagem: <a href="https://www.assistcard.com/br" target="_blank">ASSIST CARD</a></li>
    
                              </ul>
                          </div>
                          <div class="col-12 col-sm-6 p-1 listab border p-2">
                              <h3>SERVIÇOS OPCIONAIS :</h3>
                              <ul class="listot">
                                <li>Circuito Magico das Aguas em Lima.</li>
                                <li>Médio dia hotel em Nazca até horário de saída de ônibus.</li>
                                <li>Para o Trem Vistadome, Primeira Classe adicionar U$ 89.</li>
                                <li>Entrada a Huaynapicchu 30 dólares. (Solicitar com antecedência, porque as vagas são limitadas).</li>
                                <li>Serviço do guia no idioma Português.</li>
                                <li>Serviço Privado.</li>
                                <li>Outros hotéis para escolher.</li>
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