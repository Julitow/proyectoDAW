<?php
/**
 * Created by PhpStorm.
 * User: Sergio Santos
 * Date: 30/03/2015
 * Time: 10:29
 */
?>

    <!--Contenido general-->
    <div id="contenido">
        <?php if($this->session->flashdata('envio')){ echo $this->session->flashdata('envio'); }?>

        <h1>Contacto</h1>

        <section id="columna-centrada">

            <article class="unica-columna">
                <div id="contacto">

                    <p><span>Dirección</span><b>: C/ Alameda, 10 - 28821 Coslada, Madrid</b></p>
                    <p><span>Teléfono</span><b>: +(34) 902 121 201</b></p>
                    <p><span>Fax</span><b>: +(34) 902 121 202</b></p>
                    <p><span>Correo Electrónico</span><b>: info@soji.es</b></p>

                    <div id="mapa-contacto">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3420.6400265674524!2d-3.5608401999999404!3d40.429807499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42306d2b58b165%3A0x36c50c96e164833b!2sCalle+Alameda%2C+10%2C+28821+Coslada%2C+Madrid!5e1!3m2!1ses!2ses!4v1430731850163" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    </div>
                    <div id="form">
                            <form id="form-contacto" name="contacto" action="<?=base_url("contacto/enviar")?>" method="post" onsubmit="return formPubli()">
                                <p>Si tiene alguna duda, un imprevisto o cualquier otro tema, contacta con nosotros y le contestaremos lo antes posible.</p>
                                <div><label for="nombre">Nombre: </label><input id="nombre" type="text" name="nombre" onkeyup="quitarError(this)"/></div>
                                <div id="errornombre" class="error"></div>
                                <div><label for="email">Email: </label><input id="email" type="text" name="email" onkeyup="quitarError(this)"/></div>
                                <div id="erroremail" class="error"></div>
                                <div><label for="comentarios">Comentarios: </label><textarea id="comentarios" name="comentarios" rows="5" cols="30" placeholder="Escriba aquí su consulta" onkeyup="quitarError(this)"></textarea></div>
                                <div id="errorcomentarios" class="error"></div>
                                <input type="submit" class="boton-2d" value="Enviar"/>
                            </form>
                    </div>
                </div>
            </article>

        </section>

    </div>