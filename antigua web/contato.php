<?php

if ($_POST["Enviar"]=="ENVIAR" and $_POS["randon"]==$_POS["randone"]){
	
$header = 'From: ' . $_POST["nombres"] ."<niko@nctravelcusco.com>";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "NOMBRES: " . $_POST["nombres"] . " \r\n";
if($_POST["Telefono"] !=''){ $mensaje .= "TELEFONO: " . $_POST["Telefono"] . " \r\n";}
if($_POST["correo"] !=''){ $mensaje .= "CORREO: " . $_POST["correo"] . " \r\n";}
if($_POST["Country"] !=''){ $mensaje .= "PAIS: " . $_POST["Country"] . " \r\n";}
if($_POST["comentario"] !=''){ $mensaje .= "COMENTARIO: " . $_POST["comentario"] . " \r\n";}
if($_POST["referencia"] !=''){ $mensaje .= "REFERENCIA: " . $_POST["referencia"] . " \r\n";}

$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'info@nctravelcusco.com';
$asunto = 'Contacto "TRILHA INCA CUZCO"';
mail($para, $asunto, utf8_decode($mensaje), $header);

$confi= '<div style=" background:#FF6600; color:#FFFFFF; padding:20px;">
Sua mensagem foi enviada com sucesso!...<br />
Obrigado por suas perguntas ou comentários: <strong style="color:#FF0;">'.$_POST["nombres"].'</strong>, De aqui a pouco iremos responder a seu e-mail: <strong style="color:#FF0;">'.$_POST["correo"].'</strong><br />
não esqueça de adicionar nosso e-mail para seus contatos : <strong style="color:#FF0;"> info@nctravelcusco.com / reservas@nctravelcusco.com </strong></div>';
	
	}

?>


<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>contato trilha inca</title>
<meta name="keywords" content="contato trilha inca">
<meta name="description" content="contato trilha inca">
<?php include("include/head.php") ?>
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

if (formulario.Telefono.value.length < 1) { 
alert("Digite o seu número de telefone"); 
formulario.Telefono.focus();
return(false); }

if (isNaN(formulario.Telefono.value)) {
alert("Este campo deve ter apenas números.");
formulario.Telefono.focus();
return false;
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
</script>

</head>
<body>
<?php include("include/header.php") ?>
<div class="csc">
  
<div class="content col-xs-12- col-sm-12 col-md-12">
<h1> contato &quot; NC Travel Cusco &quot;</h1>
<br>
<?php echo $confi; ?>
  <br>

    <div class="col-xs-12 col-md-5 px-4 mb-4">
        <div class="textd">
            <h6 class="text-center"><i class="icon-heart"></i>nc travel Cusco information</h6>
              <p>Somos uma equipe que oferece experiências únicas e inesquecíveis nos mais belos destinos turísticos do mundo.</p>
                <div class="addres">
                   <div class="addres-r"></div>
                   <div class="addres-l"><i class="ico-append fa fa-phone"></i>&nbsp;&nbsp;Oficina Local:</div>
                   <div class="addres-r">Tel. Oficina:  +51 084235190 </div>
                   <div class="addres-r"></div>
                   <div class="addres-l"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;Numero de Celulare:</div>
                   <div class="addres-r">+51- 984606757 </div>
                   <div class="addres-l"><i class="glyphicon glyphicon-map-marker"></i>&nbsp;&nbsp;Dirección:</div>
                   <div class="addres-r">Pasaje San Martin X2 - 16 Dep 201 </div>
                   <div class="addres-r">CUSCO - PERU</div>
                   <div class="addres-l"><i class="ico-append fa fa-envelope"></i>&nbsp;&nbsp;E-mails:</div>
                   <div class="addres-r">Mas informacion: <a href="mailto:info@nctravelcusco.com"> info@nctravelcusco.com</a></div>
                   <div class="addres-r">Reservas: <a href="mailto:reservas@info@nctravelcusco.com"> reservas@nctravelcusco.com</a></div>
                 </div>
          </div>
    </div>
    
<div class="formulario-contactt col-xs-12 col-md-6 mb-5 pull-right">
  <form method = "POST" name = "registro" onSubmit = "return validar(this)" action = "contato.php">

    <div class="row">
        <div class="col-sm-6">
               <div class="col-xs-12 col-sm-6 p-1 text-form3 ">NOME : </div> 
               <div class="col-xs-12 col-sm-6 p-1"><input class="form-control" type="text" name="nombres"></div> 

        </div>
        <div class="col-sm-6">
               <div class="col-xs-12 col-sm-6 p-1 text-form3">TELEFONE: </div> 
               <div class="col-xs-12 col-sm-6 p-1"><input class="form-control" type="text" name="Telefono"></div> 
        </div>
        <div class="col-sm-6">
               <div class="col-xs-12 col-sm-6 p-1 text-form3">E-MAIL : </div> 
               <div class="col-xs-12 col-sm-6 p-1"><input class="form-control" name="correo" type="email" id="correo"></div> 
        </div>
        <div class="col-sm-6">
               <div class="col-xs-12 col-sm-6 p-1 text-form3">PAIS : </div> 
               <div class="col-xs-12 col-sm-6 p-1">
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
    
               </div> 
        </div>

         <div class="col-sm-12  p-1">
               <div class="text-center text-form3 fond-coment">COMENTÁRIOS OU REQUISITOS: </div>    
        </div>
        <div class="col-sm-12 mt-2" style="float: left;width: 100%;">
               <div class="text-center"><textarea name="comentario" id="comentario" cols="74" rows="10"></textarea></div>    
        </div>
        <div class="col-sm-6">
               <div class="col-xs-12 col-sm-6 p-1 text-form3">COMO NOS CONTATO :  </div> 
               <div class="col-xs-12 col-sm-6 p-1">
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
        <div class="col-sm-6">
               <div class="col-xs-12 col-sm-6 p-1 text-form3">Digite o número: </div> 
               <div class="col-xs-12 col-sm-6 p-1">
                      <input  name="randone" type="hidden" value="<?php echo $randon; ?>"> <span class="randon"><?php echo $randon; ?></span> <input  name="randon" type="text" id="randon" size="3" maxlength="3">
                     
              </div> 
        </div>
     <div class="col-sm-12">
        <div class="abg1 noinput">
            <input type="submit" value="ENVIAR" name="Enviar" style=" padding:4px 20px;">
        </div>
    </div>

    </div>

   
  
</form>
</div>
<br><br><br>
<a href="images/maps/Cusco.jpg" target="_blank" title="Map of Cusco, Mapa de Cusco"><img src="images/maps/Cusco.jpg" style="width:100%;" alt="Map of Cusco, Mapa de Cusco" title="Map of Cusco, Mapa de Cusco"></a>

</div>
<div class="clear"></div>
</div>


</div>

<?php include("include/footer.php") ?>


</body>
</html>