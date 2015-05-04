<?php
/**
 * Created by Sergio y Julio.
 * Date: 30/03/2015
 */
?>

    <!-- Slider de imágenes -->
    <div id='imageslider'>
        <ul class='slider'>
            <li class='slide-1'>
                <div class='caption'>Realizado con la Mejor Tecnología</div>
            </li>
            <li class='slide-2'>
                <div class='caption'>Gran Ligereza y Optimización</div>
            </li>
            <li class='slide-3'>
                <div class='caption'>100% Seguro</div>
            </li>
        </ul>
    </div>

    <!--Contenido general-->
    <div id="contenido">
        <!--Descripción del sitio -->
        <section class="una-columna">
            <article id="intro">
                <h1>¿Por qué SOJI?</h1>
                <div class="desc-intro">
                    <div class="imagen"><img src="<?php echo base_url()?>/externo/img/home1.png"></div>
                    <div class="texto"><h2>Es el buscador con <span>más usuarios registrados</span> de toda España</h2></div>
                </div>
                <div class="desc-intro">
                    <div class="texto"><h2>El <span>más veloz</span> a la hora de recibir todas tus notificaciones</h2></div>
                    <div class="imagen"><img src="<?php echo base_url()?>/externo/img/home2.png"></div>
                </div>
                <div class="desc-intro">
                    <div class="imagen"><img src="<?php echo base_url()?>/externo/img/home3.png"></div>
                    <div class="texto"><h2>Nuestra web es <span>adaptable a todos tus dispositivos</span></h2></div>
                </div>
                <div class="desc-intro">
                    <div class="texto"><h2>Si tienes algún problema, puedes <span>contactar con nosotros</span></h2></div>
                    <div class="imagen"><img src="<?php echo base_url()?>/externo/img/home4.png"></div>
                </div>
            </article>
        </section>

        <section class="dos-columnas">
            <aside class="columna1">
                <h1>Últimas Ofertas</h1>

                <!-- Incluir ofertas.php las tres o x ultimas ofertas -->
                <?php foreach ($lista as $item): ?>
                    <a href="<?php echo base_url() . 'ofertas/ver_oferta/' . $item->idOferta ?>"><div class="oferta">
                            <h3><?php echo $item->titulo ?></h3>
                            <div id="campos-oferta">
                                <?php if ($item->provincia): ?>
                                    <div class="provincia">
                                        <img src="<?php echo base_url()?>/externo/img/site.png"/><span><?php echo $item->provincia?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($item->salario): ?>
                                    <div class="salario">
                                        <img src="<?php echo base_url()?>/externo/img/money.png"/><span><?php echo $item->salario?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($item->experiencia): ?>
                                    <div class="experiencia">
                                        <img src="<?php echo base_url()?>/externo/img/experience.png"/><span><?php echo $item->experiencia." años"?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if ($item->idiomas): ?>
                                    <div class="lenguaje">
                                        <img src="<?php echo base_url()?>/externo/img/language.png"/><span><?php echo $item->idiomas?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div></a>
                <?php endforeach; ?>
                <div class="fila-3">
                    <a class="boton" href="<?php echo base_url() ?>ofertas"> Ver más ofertas</a>
                </div>
            </aside>
            <aside class="columna2">
                <div id="publi">
                    <img src="<?php echo base_url()?>externo/img/publicidad<?php echo $publi?>.jpg" alt="pubicidad Estrella Galicia"/><!-- Meter aleatorimanete un anuncio -->
                </div>

            </aside>

        </section>
    </div>
