





<section class="formulariot">

	<div class="form-book  border mx-sm-3 mt-0 p-sm-4">

					<h5 class="mb-3 h5 mt-sm-0 m-2 text-center text-uppercase"><?=$title_tour?></h5>



			<form id="contact-form" method="post" action="conta.php" role="form">



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