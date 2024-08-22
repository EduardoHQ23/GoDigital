    <section class="chat-whatsapp">
        <input type="checkbox" name="whatsapp" id="whatsapp">
        <label for="whatsapp">
            <div class="btn-whatsapp">
            </div>
        </label>
        <section class="contenedor-whatsapp">
            <div class="cabecera-whatsapp">
                <img src="img/principal/whats.png" alt="" class="logo-whatsapp">
                <div class="texto-cabecera">
                    <h4>Inicia una conversación</h4>
                    <p>Hola! click sobre un miembro para chat vía <strong> Whatsapp</strong></p>
                </div>
            </div>
            <h3>El equipo de GoDigital responde en minutos</h3>
            <div class="contenido-whatsapp">
                <a target="_blank" href="https://wa.link/ck3ihf" class="area gerencia">
                    <div class="foto-godigital g-adm"></div>
                    <div class="personal">
                        <h4>Juan Carlos Medina Delzo</h4>
                        <p>Gerente Administrativo</p>                   
                    </div>
                </a>
                <a class="area venta" href="https://wa.link/2c6ikz" target="_blank">
                    <div class="foto-godigital g-pro"></div>
                    <div class="personal">
                        <h4>Jorge A. Soto Mendoza</h4>
                        <p>Gerente de Producción y Desarrollo Web</p>                   
                    </div>
                </a>
                <a class="area venta" target="_blank" href="https://wa.link/mot3yj">
                    <div class="foto-godigital g-ven"></div>
                    <div class="personal">
                        <h4>Josimar J. Quispe Cardenas</h4>
                        <p>Gerente de Venta</p>                   
                    </div>
                </a>
            </div>
        </section>
    </section>
    <section class="chat-messenger">
        <div id="fb-root"></div>
                <script>
                    window.fbAsyncInit = function() {
                      FB.init({
                        xfbml            : true,
                        version          : 'v10.0'
                      });
                    };

                    (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));
                </script>

                  <!-- Your Chat Plugin code -->
        <div class="fb-customerchat" attribution="setup_tool" page_id="107641274359523" theme_color="#0A7CFF" logged_in_greeting="Hola! Cómo podemos ayudarte" logged_out_greeting="Hola! Cómo podemos ayudarte">
        </div> 
    </section>