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

        <h1>Publicidad</h1>

        <!--Descripción del sitio -->
        <section id="columna-centrada">

            <!-- Criterios de búsqueda -->
            <article class="unica-columna">

                <div class="texto-publi">
                    <p><strong>¿Por qué anunciarse en <span>SOJI</span>?</strong></p>
                    <ol>
                        <li>Permite comunicar tu estrategia de marca a nuestra audiencia (más de 15 millones de visitas al mes)</li>
                        <li>Permite conseguir hacer llegar tu mensaje al target que buscas (más de 25 criterios de segmentación con una fiabilidad única)</li>
                        <li>Prestigio de marca líder del mercado de empleo en España</li>
                    </ol>
                </div>
                <div class="texto-publi">
                    <p><strong>¿Que servicios te ofrecemos?</strong></p>
                    <ol>
                        <li>Acciones de marca y cobertura (Brand Day, Robapáginas en Home)</li>
                        <li>Acciones de afinidad al consumidor (Campañas segmentadas en posiciones destacadas)</li>
                        <li>Acciones Exclusivas (E-mail marketing, Doble Impacto, Microsite)</li>
                        <li>Acciones BtoB (E-mail marketing, Patrocinios)</li>
                    </ol>
                </div>
                <div class="formulario-contacto">
                    <p>Si quieres publicitarte con nosotros, rellene el siguiente <span>formulario</span>:</p>
                    <!-- Formulario con campo de nombre, email, telefono y textarea comentarios -->
                    <form id="form-contacto" name="contacto" action="<?=base_url("publicidad/enviar")?>" method="post" onsubmit="return formPubli()">
                        <div><label for="nombre">Nombre: </label><input id="nombre" type="text" name="nombre" onkeyup="quitarError(this)"/></div>
                        <div id="errornombre" class="error"></div>
                        <div><label for="email">Email: </label><input id="email" type="text" name="email" onkeyup="quitarError(this)"/></div>
                        <div id="erroremail" class="error"></div>
                        <div><label for="comentarios">Comentarios: </label><textarea id="comentarios" name="comentarios" rows="5" cols="30" placeholder="Escriba aquí su consulta" onkeyup="quitarError(this)"></textarea></div>
                        <div id="errorcomentarios" class="error"></div>
                        <input type="submit" class="boton-2d" value="Enviar"/>
                    </form>
                </div>

            </article>
        </section>

    </div>