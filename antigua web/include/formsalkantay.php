<script language="javascript"> 
function validar(formulario) {
	
if (formulario.nombres.value.length < 4) { 
alert("Digite pelo menos 4 caracteres nos nomes de campo"); 
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
alert("Digite únicas letras em nomes");
formulario.nombres.focus();
return(false);
}



if (formulario.correo.value.length < 1) { 
alert("Digite o seu e-mail pessoal!"); 
formulario.correo.focus();
return(false); }



if (formulario.randon.value != <?php echo $randon; ?>) { 
alert("Digite o números: <?php echo $randon; ?>"); 
formulario.randon.focus();
return(false); }

return (true);
}



//mostrar campo pasajeros
function mostrar(id) {
	if (id == "1") {
		$("#1").show();
		$("#2").hide();
		$("#3").hide();
		$("#4").hide();
		$("#5").hide();
		$("#6").hide();
		$("#7").hide();
		$("#8").hide();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "2") {
		$("#1").show();
		$("#2").show();
		$("#3").hide();
		$("#4").hide();
		$("#5").hide();
		$("#6").hide();
		$("#7").hide();
		$("#8").hide();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "3") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").hide();
		$("#5").hide();
		$("#6").hide();
		$("#7").hide();
		$("#8").hide();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "4") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").show();
		$("#5").hide();
		$("#6").hide();
		$("#7").hide();
		$("#8").hide();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "5") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").show();
		$("#5").show();
		$("#6").hide();
		$("#7").hide();
		$("#8").hide();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "6") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").show();
		$("#5").show();
		$("#6").show();
		$("#7").hide();
		$("#8").hide();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "7") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").show();
		$("#5").show();
		$("#6").show();
		$("#7").show();
		$("#8").hide();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "8") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").show();
		$("#5").show();
		$("#6").show();
		$("#7").show();
		$("#8").show();
		$("#9").hide();
		$("#10").hide();
	}
	if (id == "9") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").show();
		$("#5").show();
		$("#6").show();
		$("#7").show();
		$("#8").show();
		$("#9").show();
		$("#10").hide();
	}
	if (id == "10") {
		$("#1").show();
		$("#2").show();
		$("#3").show();
		$("#4").show();
		$("#5").show();
		$("#6").show();
		$("#7").show();
		$("#8").show();
		$("#9").show();
		$("#10").show();
	}
	
}
</script>
<h4>O nosso formulário de reserva para: <strong>Trilha Salkantay</strong></h4><br />
<em>Todos los datos <strong>(*)</strong> son obligatorios por ser requerimiento del Ministerio de Cultura</em><br /><br />
<form method = "POST" name = "registro" onSubmit = "return validar(this)" action = "trilhasalkantayitens.php">
  <div class="table-responsive">
  <table class="atable">
<tr>
  <td colspan="6" class="center abg5">As informações pessoais da pessoa responsável</td>
  </tr>
  <input name="tour" type="hidden" value="Trilha Salkantay Machu Picchu 5 Dias">
  <tr>
  <td class="tt3">NOME COMPLETO <strong>(*)</strong></td>
  <td>:</td>
  <td class="abg4">
    <input type="text" name="nombres" />
  </td>
  <td class="tt3">E-MAIL <strong>(*)</strong></td>
  <td>:</td><td class="abg4"><input name="correo" type="text" id="correo" /></td>
  </tr>
  <tr>
  <td class="tt3">TELEFONE</td>
  <td>:</td>
  <td class="abg4">
    <input type="text" name="Telefono" />
  </td>
  <td class="tt3"># PESSOAS <strong>(*)</strong></td>
  <td>:</td><td class="abg4">
  <select name="npasajeros" id="npasajeros" onchange="mostrar(this.value);">
    <option value="1" selected="selected">1 Pessoa</option>
    <option value="2">2 Pessoas</option>
    <option value="3">3 Pessoas</option>
    <option value="4">4 Pessoas</option>
    <option value="5">5 Pessoas</option>
    <option value="6">6 Pessoas</option>
    <option value="7">7 Pessoas</option>
    <option value="8">8 Pessoas</option>
    <option value="9">9 Pessoas</option>
    <option value="10">10 Pessoas</option>
  </select></td>
   

  </tr>
  <tr>
  <td class="tt3">PAIS <strong>(*)</strong></td>
  <td>:</td>
  <td class="abg4">
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
  </td><td class="tt3">CIDADE</td>
  <td>:</td><td class="abg4">
    <input name="ciudad" type="text" id="ciudad" />
  </td>
  </tr>
  <tr>
    <td class="tt3">DATA DA CHEGADA <strong>(*)</strong></td>
    <td>:</td>
    <td class="abg4"><input name="fllegada" type="text" id="fllegada" /></td>
    <td class="tt3">DATA DA INICIO DA CAMINHADA <strong>(*)</strong></td>
    <td>:</td><td class="abg4"><input name="finicio" type="text" id="finicio" /></td>
  </tr>
  <!--<tr>
  <td class="tt3">HOTEL EM MACHU PICCHU <strong>(*)</strong></td>
  <td>:</td>
  <td class="abg4"><input name="hotel" type="text" id="hotel" /></td>
  <td class="tt3">TIPO DE ACOMODAÇÃO <strong>(*)</strong></td>
  <td>:</td><td class="abg4">
  <select name="tipohotel" id="tipohotel">
  <option selected="selected" value="--">Selecionar</option>
  <option value="INDIVIDUAL">INDIVIDUAL</option>
  <option value="DUPLO OU CASAL">DUPLO OU CASAL</option>
  <option value="TRIPLO">TRIPLO</option>
  </select>
  </td>
  </tr> -->
  <tr>
  <td colspan="6">
  <table cellspacing="0" class="table002">
        <tr class="tt1 bold">
          <td colspan="2">NOME COMPLETO</td>
          <td class="tw21"># DE PASSAPORTE</td>
          <td class="tw21">NACIONALIDADE</td>
          <td class="tw21">VEGETARIANO</td>
          <td class="tw21">DATA DE NASCIMENTO</td>
        </tr>
        <tr id="1" class="tt2">
          <td>1.-</td>
          <td><input type="text" name="nombre1"></td>
          <td><input type="text" name="pasoporte1"></td>
          <td><input type="text" name="nacionalidad1"></td>
          <td><select name="vegetariano1" id="vegetariano1"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto1"></td>
        </tr>
        <tr id="2" style="display:none;">
          <td>2.-</td>
          <td><input type="text" name="nombre2"></td>
          <td><input type="text" name="pasoporte2"></td>
          <td><input type="text" name="nacionalidad2"></td>
          <td><select name="vegetariano2" id="vegetariano2"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto2"></td>
        </tr>
        <tr class="tt2" id="3" style="display:none;">
          <td>3.-</td>
          <td><input type="text" name="nombre3"></td>
          <td><input type="text" name="pasoporte3"></td>
          <td><input type="text" name="nacionalidad3"></td>
          <td><select name="vegetariano3" id="vegetariano3"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto3"></td>
        </tr>
        <tr id="4" style="display:none;">
          <td>4.-</td>
          <td><input type="text" name="nombre4"></td>
          <td><input type="text" name="pasoporte4"></td>
          <td><input type="text" name="nacionalidad4"></td>
          <td><select name="vegetariano4" id="vegetariano4"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto4"></td>
        </tr>
        <tr class="tt2" id="5" style="display:none;">
          <td>5.-</td>
          <td><input type="text" name="nombre5"></td>
          <td><input type="text" name="pasoporte5"></td>
          <td><input type="text" name="nacionalidad5"></td>
          <td><select name="vegetariano5" id="vegetariano5"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto5"></td>
        </tr>
        <tr id="6" style="display:none;">
          <td>6.-</td>
          <td><input type="text" name="nombre6"></td>
          <td><input type="text" name="pasoporte6"></td>
          <td><input type="text" name="nacionalidad6"></td>
          <td><select name="vegetariano6" id="vegetariano6"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto6"></td>
        </tr>
        <tr class="tt2" id="7" style="display:none;">
          <td>7.-</td>
          <td><input type="text" name="nombre7"></td>
          <td><input type="text" name="pasoporte7"></td>
          <td><input type="text" name="nacionalidad7"></td>
          <td><select name="vegetariano7" id="vegetariano7"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto7"></td>
        </tr>
        <tr id="8" style="display:none;">
          <td>8.-</td>
          <td><input type="text" name="nombre8"></td>
          <td><input type="text" name="pasoporte8"></td>
          <td><input type="text" name="nacionalidad8"></td>
          <td><select name="vegetariano8" id="vegetariano8"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto8"></td>
        </tr>
        <tr class="tt2" id="9" style="display:none;">
          <td>9.-</td>
          <td><input type="text" name="nombre9"></td>
          <td><input type="text" name="pasoporte9"></td>
          <td><input type="text" name="nacionalidad9"></td>
          <td><select name="vegetariano9" id="vegetariano9"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto9"></td>
        </tr>
        <tr id="10" style="display:none;">
          <td>10.-</td>
          <td><input type="text" name="nombre10"></td>
          <td><input type="text" name="pasoporte10"></td>
          <td><input type="text" name="nacionalidad10"></td>
          <td><select name="vegetariano10" id="vegetariano10"><option value="No" selected>NO</option><option value="Yes">YES</option></select></td>
          <td><input type="text" name="nacimineto10"></td>
        </tr>
        
      </table>
  </td>
  </tr>
  <tr>
  <td colspan="6" class="center abg5">SOLICITACAO DOS ITENS PARA TRILHA SALKANTAY</td>
  </tr>
<tr>
  <td class="abg4">Casaco polar USD 15</td>
  <td class="abg4">:</td>
  <td class="abg4">
  <select name="CasacoPolar" id="CasacoPolar">
  <option value="--" selected="selected">--</option>
  <option value="01">01</option>
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
  </td><td class="abg4">Botas de trekking  USD 20</td>
  <td class="abg4">:</td><td class="abg4"><span class="abg3">
    <select name="BotasTrekking" id="BotasTrekking">
      <option value="--" selected="selected">--</option>
      <option value="01">01</option>
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
  </td>
  </tr>
<tr><td class="abg4">Calca adequada para a trilha USD 15</td>
  <td class="abg4">:</td><td class="abg4">
    <select name="CalcaAdequada" id="CalcaAdequada">
      <option value="--" selected="selected">--</option>
      <option value="01">01</option>
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
  </td><td class="abg4">Gorra chapéu  USD 5</td>
  <td class="abg4">:</td><td class="abg4"><select name="GorraChapeu" id="GorraChapeu">
    <option value="--" selected="selected">--</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
  </select></td>
  </tr>
<tr><td class="abg4">Saco de dormir USD 20</td>
  <td class="abg4">:</td>
  <td class="abg4"><select name="SacoDormir" id="SacoDormir">
    <option value="--" selected="selected">--</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
  </select></td><td class="abg4">Bastões USD 8 C/U</td>
  <td class="abg4">:</td>
  <td class="abg4">
    <select name="Bastoes" id="Bastoes">
      <option value="--" selected="selected">--</option>
      <option value="01">01</option>
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
  </td>
  </tr>
<tr>
  <td class="abg4">Capa de chuva USD 5</td>
  <td class="abg4">:</td>
  <td class="abg4">
    <select name="CapaChuva" id="CapaChuva">
      <option value="--" selected="selected">--</option>
      <option value="01">01</option>
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
  </td>
  <td class="abg4">Lanterna USD 5</td>
  <td class="abg4">:</td>
  <td class="abg4"><select name="Lanterna" id="Lanterna">
    <option value="--" selected="selected">--</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
  </select></td>
  </tr>
<tr>
  <td class="abg4">Mochila 30 Ltros, 40Ltros, 60Ltros USD 15</td>
  <td class="abg4">:</td>
  <td class="abg4"><select name="Mochila" id="Mochila">
    <option value="--" selected="selected">--</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
  </select></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td colspan="6" class="center abg5">COMENTÁRIOS OU REQUISITOS:</td>
  </tr>
<tr>
  <td colspan="6" class="center abg3"><textarea name="comentario" id="comentario" style="width:98%;" rows="10"></textarea></td>
  </tr>
  
<tr>
  <td colspan="3" class="center">
  Digite o número: 
  <input name="randone" type="hidden" value="<?php echo $randon; ?>"> <span class="randon"><?php echo $randon; ?></span> <input name="randon" type="text" id="randon" size="3" maxlength="3">
  
  </td>
  <td colspan="3" class="center">
  <input type="submit" name="Enviar" id="Enviar" value="Enviar" style=" padding:5px 25px; font-weight:bold;"/>
  </td>
  </tr>
</table>
</div>

</form>
