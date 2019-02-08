<aside class="bg-light">





<?php 



if($title<>"" and $pprice<>""){

    $pprincipales='

      <img src="img/orcamento.png" class="img-fluid w-100 mt-1">

      <div class="pricetour px-3">

        <div class="h6"><b>'.$title.'</b></div>

        <div class="mt-3"><p class="text-left mb-0"> A partir de </p> 

        <strong> USD $ </strong><span class="h1"> '.$pprice.'</span><p>PARA ESTUDANTES</p></div>



        <div><button type="button" class="btn btn-nc w-100" data-toggle="modal" data-target="#promo"> QUERO MEU  ORÇAMENTO</button></div>

      </div>

    ';

    }



  echo $pprincipales;



 ?>



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

<div class="text-center">
	 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="W9V4QMPW455BJ">
                <input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira mais fácil e segura de efetuar pagamentos online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
</div>


<a href="../condicoes-gerais.php" target="_blank"><img src="../img/condiciones.jpg" class="img-thumbnail my-2" alt="condiciones"></a>



<a href="../trilhaincaclassica.php" target="_blank"><img src="../img/trilhaincareservas.jpg" class="img-thumbnail my-1" alt="condiciones"></a>



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
<!-- 
		<script>(function(d, s, id) {

		  var js, fjs = d.getElementsByTagName(s)[0];

		  if (d.getElementById(id)) return;

		  js = d.createElement(s); js.id = id;

		  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';

		  fjs.parentNode.insertBefore(js, fjs);

		}(document, 'script', 'facebook-jssdk'));</script>
 -->
<!-- <div class="fb-page" data-href="https://www.facebook.com/MachupicchuCusco/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MachupicchuCusco/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MachupicchuCusco/">NcTravelCusco</a></blockquote></div> -->

<hr>
<a href="https://www.youtube.com/watch?v=jkx8zXayUXU" target="_blank"><img src="../img/trilha-inca-video01.jpg" class="img-fluid my-2" alt="video trilha inca"></a>
<h>
<a href="https://www.youtube.com/watch?v=3yyf7rYU_eo" target="_blank"><img src="../img/trilha-inca-video02.jpg" class="img-fluid my-2" alt="video trilha inca"></a>	



</aside>

