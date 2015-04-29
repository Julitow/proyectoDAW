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
        <h1>x ofertas disponibles</h1><!-- Indicar núemros de empelos encontrados -->

        <!--Descripción del sitio -->
        <section class="dos-columnas">

            <!-- Criterios de búsqueda -->
            <article id="filtrar">
                        <form name="filtrado">
                            <p>Palabras Clave</p>
                            <p><input type="text" name="palabra_clave"><input type="button" class="boton-2d" value="Filtrar"></p>
                            <p>Provincia</p> <!-- select o checkbox ?? -->
                            <p>
                                <select class="select">
                                    <option value="IDprovincia">Todas</option>
                                    <!-- foreach con las provincias de la bbdd -->
                                </select>
                            </p>
                            <p>Fecha</p>
                            <div id="fecha-filtro">
                                <div><input type="radio" id="fecha-filto1" name="fecha" value="todo" checked><label for="fecha-filto1">Cualquier fecha</label></div>
                                <div><input type="radio" id="fecha-filto2" name="fecha" value="1dia"><label for="fecha-filto2">Hace 24 horas</label></div>
                                <div><input type="radio" id="fecha-filto3" name="fecha" value="7dia"><label for="fecha-filto3">Ultimos 7 días</label></div>
                                <div><input type="radio" id="fecha-filto4" name="fecha" value="15dia"><label for="fecha-filto4">Ultimos 15 días</label></div>
                            </div><!-- radiobottom -->
                            <p>Experiencia</p>
                            <p>
                                <div id="slider-range"></div>
                                <div id="anos-slider"><span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>+10</span></div>
                            </p><!-- slider -->
                        </form>
            </article>

            <!-- Ofertas (10 máx) -->
            <article  class="columna2">
                <?php foreach ($lista as $item): ?>

                <a href="<?php echo base_url() . 'ofertas/ver_oferta/' . $item->id ?>"><div class="oferta">
                        <h3><?php echo $item->titulo ?></h3>
                        <div id="campos-oferta">
                            <div class="provincia"><img src="<?php echo base_url()?>/externo/img/site.png"/><span>Provincia</span></div>
                            <?php if ($item->salario): ?>
                            <div class="salario">
                                    <img src="<?php echo base_url()?>/externo/img/money.png"/><span><?php echo $item->salario?>€ mensuales</span>
                            </div>
                            <?php endif; ?>
                            <?php if ($item->experiencia): ?>
                            <div class="experiencia">
                                    <img src="<?php echo base_url()?>/externo/img/experience.png"/><span><?php echo $item->experiencia?> años</span>
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

            </article>
        </section>

    </div>
