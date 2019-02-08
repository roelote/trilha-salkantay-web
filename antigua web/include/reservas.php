    <link rel="stylesheet" href="/tooltips/css/tip-yellow.css" type="text/css" />
    <!--<script type="text/javascript" src="/tooltips/js/jquery-1.4.2.min.js"></script>  -->
    <script type="text/javascript" src="/tooltips/js/jquery.poshytip.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript">
		$(function(){
			$('.demo-basic').poshytip();
		});
		//]]>
	</script>
    
      <script>
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "dd/mm/yy" }).val()
       });
   </script>

<script language="javascript"> 
function validar(formulario) {
	
if (formulario.nombres.value.length < 4) { 
alert("Digite no mínimo 4 caracteres nos nomes de campo"); 
formulario.nombres.focus();
return(false); }

var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ" + "abcdefghijklmnñopqrstuvwxyzáéíóú ";
var checkStr = formulario.nombres.value;
var allValid = true;
for (i = 0; i < checkStr.length; i++) {
    ch = checkStr.charAt(i);
    for (j = 0; j < checkOK.length; j++)
        if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length) {
       allValid = false;
    break; }
}
if (!allValid) {
alert("Digite as letras simples em nomes");
formulario.nombres.focus();
return(false);
}

if (formulario.apellido.value.length < 1) { 
alert("digite seu sobrenome"); 
formulario.apellido.focus();
return(false); }
 
if (formulario.correo.value.length < 1) { 
alert("Digite o seu e-mail pessoal!"); 
formulario.correo.focus();
return(false); }

if (formulario.Telefono.value.length < 1) { 
alert("Digite seu número de telefone"); 
formulario.Telefono.focus();
return(false); }

if (formulario.ciudad.value.length < 1) {
alert("Digite sua cidade.");
formulario.ciudad.focus();
return false;
 }

 if (formulario.fllegada.value.length < 1) {
alert("Digite a data de inicio.");
formulario.fllegada.focus();
return false;
 }

if (formulario.randon.value != <?php echo $randon; ?>) { 
alert("Digite o números: <?php echo $randon; ?>"); 
formulario.randon.focus();
return(false); }



return (true);
}
</script>




<?php

$promo=$_GET['promo'];

if($promo=="TIS - 01"){$title="Promoção TIS - 01 (Trilha Salkantay)";}
if($promo=="TIM - 01"){$title="Promoção TIM - 01 (Trilha Inca)";}

if ($title=="" and $promo==""){
	$title="Escolha um pacote de turismo";
	$btour='
	<select id="tour" name="tour" class="validate-selection" style="width:160px;">
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
		  
	';}else{
			$btour='<input type="text" name="tour" class="f11" value="'.$title.'">';
		}
?>


<h4>Reserve o seu pacote: <strong><?php echo $title; ?></strong></h4><br />

   <form method = "POST" name = "registro" onSubmit = "return validar(this)" action = "reservas2.php">
    <div class="formularioc">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">NOME</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input"><input type="text" name="nombres"></div>
                </div>
            </div>

           <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">SOBRENOME</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input"><input name="apellido" type="text" id="apellido"></div>
                </div>
            </div>

           <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">TELEFONE</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input"><input type="text" name="Telefono"></div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">E-MAIL</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input"><input name="correo" type="email" id="correo"></div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">PAIS</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input">
                    <span class="field-widget input-select">
          <select id="Country" name="Country" class="validate-selection" title="Choose your country">
            <option value="Afganistan">Afganistan</option>
            <option value="Albania">Albania</option>
            <option value="Argentina">Argentina</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Brazil">Brazil</option>
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
            <option value="USA" selected="selected">USA</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Other">Other</option>
          </select>
        </span>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">CIDADE</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input"><input name="ciudad" type="text" id="ciudad"></div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">Nº DE PASSAGEIROS</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input input-select">
                        <select id="npasajeros" name="npasajeros" title="nº de passageiros">
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
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">RESERVAR PACOTE</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input">
                         <?php echo $btour; ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">DATA DE INICIO</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input">
                         <input name="fllegada" type="text" id="datepicker" size="30">
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-9">
                <div class="col-sm-4 p-1">
                    <div class="form-text">TIPO DE SERVIÇO</div>
                </div> 
                <div class="col-sm-8 p-1">
                    <div class="form-input">
                         <label class="demo-basic toolques" title="
                            <strong>SERVIÇO REGULAR OU SERVIÇO EM GRUPO:</strong><br />
                            Todos os nossos Passeios / Tours s&atilde;o feitos em sistema Regular, onde ser&aacute; compartido com outras pessoas. Normalmente este grupo &eacute; formado por at&eacute; 15 Pessoas, por&eacute;m poder&aacute; haver casos que seja at&eacute; 25 pessoas. Os guias sao em espanhol ou Ingles. Os hor&aacute;rios s&atilde;o fixos e n&atilde;o pode mudar.
                            "><input type="radio" value="grupal" name="tservicio" checked="checked" />
                                      Serviço em grupo</label>
                                            &nbsp; &nbsp; &nbsp;
                                       <label class="demo-basic toolques" title="
                            <strong>SERVIÇO PRIVATIVO: </strong><br />
                            São ideais para quem não abre mão de serviços personalizados. Os passeios são feitos em automóveis privados e os guias são em Português. Os horários dos tours podem ter maior flexibilidade, os passeios podem ser adequados de acordo com a escolha do passageiro. Os preços tem custos adicionais e podem variar de acordo ao número de passageiros.
                            "><input type="radio" value="privado" name="tservicio" />Serviço privado</label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-9">
                <div class="col-sm-4 p-1">
                    <div class="form-text">FORMA PRÉ-PAGAMENTO</div>
                </div> 
                <div class="col-sm-8 p-1">
                    <div class="form-input input-select">
                        <select id="fpago" name="fpago">
                            <option value="" selected="selected">Selecionar</option>
                            <option value="WESTERN UNION">WESTERN UNION (taxa 4.5%)</option>
                            <option value="PAGO COM CARTÂO DE CREDITO VISA">PAGO COM CARTÂO DE CREDITO VISA (taxa 8.4%)</option>
                            <option value="TRANSFERENCIA A NOSSO BANCO NO PERU">TRANSFERENCIA A NOSSO BANCO NO PERU (taxa 6%)</option>
                            <option value="PAYPAL">PAYPAL (taxa 9%)</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <div class="row mt-4">
            <div class="col-xs-12">
                <div class="form-text">COMENTÁRIOS OU REQUISITOS</div>
            </div>
            <div class="col-xs-12 mb-4 mt-4 text-center">
                 <textarea name="comentario" id="comentario" cols="74" rows="10"></textarea>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">COMO NOS CONTATO :</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input input-select">
                                <select id="field17" name="referencia" title="Reference">
                                    <option value="Mochileiros.com">Mochileiros.com</option>
                                    <option value="Orkut">Orkut</option>
                                    <option value="FaceBook">FaceBook</option>
                                    <option value="Google">Google</option>
                                    <option value="Yahoo">Yahoo</option>
                                    <option value="Others">Outros</option>
                                  </select>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="col-sm-6 p-1">
                    <div class="form-text">Digite o número:</div>
                </div> 
                <div class="col-sm-6 p-1">
                    <div class="form-input captcha">
                                       <input name="randone" type="hidden" value="<?php echo $randon; ?>"> <span class="randon"><?php echo $randon; ?></span> 
                                        <input name="randon" type="text" id="randon" size="3" maxlength="3">
                    </div>
                </div>
            </div>

            <div class="col-xs-12 mt-3">
                <div class="abg1"><input type="submit" value="ENVIAR" name="Enviar" style=" padding:4px 20px; color:#000"></div>
            </div>


        </div>

    </div>

  </form>
  