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

return (true);
}
</script>

<form method = "POST" name = "registro" onSubmit = "return validar(this)" action = "trilhasalkantayitens.php">
  <table class="atable">
<tr>
  <td colspan="6"><h2>SOLICITACAO DOS ITENS PARA TRILHA SALKANTAY 5 DIAS E 4 NOITES</h2></td>
  </tr><tr>
  <td colspan="6"><strong>ALUGUEL.</strong></td>
  </tr>
    <td colspan="6"><em>Nota: Você deve reservar primeiro Trilha Salkantay, para ter a informação completa de você.</em></td>
<tr>
  <td colspan="3" class="abg2" style=" width:50%;">NOME</td>
  <td colspan="3" class="abg1">EMAIL</td>
  </tr>
  <tr>
  <td colspan="3" class="abg5"><input type="text" name="nombres" style="width:95%; padding:3px;"/></td>
  <td colspan="3" class="abg5"><input type="text" name="correo" style="width:95%; padding:3px;" id="correo"/></td>
  </tr>
<tr>
  <td class="abg3">Casaco polar USD 15</td>
  <td class="abg3">:</td>
  <td class="abg3">
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
  </td><td class="abg6">Botas de trekking  USD 20</td>
  <td class="abg6">:</td><td class="abg6"><span class="abg3">
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
  </span></td>
  </tr>
<tr><td class="abg6">Calca adequada para a trilha USD 15</td>
  <td class="abg6">:</td><td class="abg6"><span class="abg3">
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
  </span></td><td class="abg3">Gorra chapéu  USD 5</td>
  <td class="abg3">:</td><td class="abg3"><select name="GorraChapeu" id="GorraChapeu">
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
<tr><td class="abg3">Saco de dormir USD 20</td>
  <td class="abg3">:</td>
  <td class="abg3"><select name="SacoDormir" id="SacoDormir">
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
  </select></td><td class="abg6">Bastões USD 8 C/U</td>
  <td class="abg6">:</td>
  <td class="abg6"><span class="abg3">
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
  </span></td>
  </tr>
<tr>
  <td class="abg6">Capa de chuva USD 5</td>
  <td class="abg6">:</td>
  <td class="abg6"><span class="abg3">
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
  </span></td>
  <td class="abg3">Lanterna USD 5</td>
  <td class="abg3">:</td>
  <td class="abg3"><select name="Lanterna" id="Lanterna">
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
  <td class="abg3">Mochila 30 Ltros, 40Ltros, 60Ltros USD 15</td>
  <td class="abg3">:</td>
  <td class="abg3"><select name="Mochila" id="Mochila">
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
  <td colspan="3" class="center"><input type="submit" name="Enviar" id="Enviar" value="Enviar" style=" padding:5px 25px; font-weight:bold;"/></td>
  <td colspan="3" class="center"><input type="reset" name="button" id="button" value="Restaurar" style=" padding:5px 25px; font-weight:bold;" /></td>
  </tr>
</table>

</form>

