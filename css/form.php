<form id="modal_mailchimp" class="modal_mailchimp" method="post" target="_blank" >
                            <div class="close-lightbox" id="close_mailchimp_1" role="button" on="tap:btn_registro_1_amp_light.close">✕</div>
                        <h2>Registrate Aquí</h2>
                        <input type="text" name="name" placeholder="Nombre" required="">
                        <input type="tel" name="phone" placeholder="Teléfono (10 dígitos)" required="" minlength="10">
                        <input type="hidden" name="btn_activador" value="QuieroMiDescuento-Desktop">
                        <input type="hidden" name="message_response" value="response_mailchimp">
                        <p style="text-align:left;">Elige una sucursal:</p>
                        <ul>
                            <li>
                                <label>
                                    <input name="sucursal" value="Santa Fe" type="radio" required="">
                                    Santa Fe
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input name="sucursal" value="Angel de la Independencia" type="radio" required="">
                                    Ángel de la Independencia
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input name="sucursal" value="Del Valle" type="radio" required="">
                                    Del Valle
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input name="sucursal" value="Polanco" type="radio" required="">
                                    Polanco
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input name="sucursal" value="Metepec" type="radio" required="">
                                    Metepec
                                </label>
                            </li>
                        </ul>
                        <div class="check_container">
                            <input type="checkbox" name="check" required="" checked/>
                            <p>Acepto <a href="http://innate.mx/Innate-Aviso_de_privacidad.pdf" target="_blank">Aviso de Privacidad</a></p>
                        </div>
                        <input type="submit" value="ENVIAR">
                        <div class="response-mesage" id="response_mailchimp">
                            
                        </div>
                    </form>

                    <script type="text/javascript">
                        const form1 = document.querySelector(".modal_mailchimp");
            
            document.querySelector(".modal_mailchimp").addEventListener("submit", function(event){
                event.preventDefault();
                const name = form1.elements['name'].value;
                const phone = form1.elements['phone'].value;
                const btn_activador = form1.elements['btn_activador'].value;
                const message_response = form1.elements['message_response'].value;
                const sucursal = form1.elements['sucursal'].value;
                var xhttp = new XMLHttpRequest();
                 xhttp.onreadystatechange = function() {
                     if (this.readyState == 4 && this.status == 200) {
                         const res = JSON.parse(this.responseText);
                        document.getElementById(message_response).innerHTML = "<p>GRACIAS</p>";
                        document.getElementById(message_response).innerHTML += "<p>"+res.message+"</p>";
                        dataLayer.push({'event': 'EnviarFormularioModal-QuieroMiDescuento-Desktop','landingPage':{'btn_activador':btn_activador}});
                        setTimeout(function(){document.querySelector("#close_mailchimp_1").click();},3000);
                     }
                     else{
                         const errorMessage = JSON.parse(this.responseText);
                         document.getElementById(message_response).innerHTML = errorMessage.message;
                     }
                 };
                 xhttp.open("POST", "//innate.mx/include/add_audience.php", true);
                 xhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');
                 xhttp.send("name="+name+"&phone="+phone+"&btn_activador="+btn_activador+"&sucursal="+sucursal);
                 
            });
                    </script>