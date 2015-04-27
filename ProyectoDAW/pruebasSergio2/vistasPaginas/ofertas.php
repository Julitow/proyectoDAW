<?php
/**
 * Created by PhpStorm.
 * User: Sergio Santos
 * Date: 30/03/2015
 * Time: 10:29
 */
?>

<?php include_once('header.php')?>


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
                <a href="#"><div class="oferta">
                        <h3>Título de Oferta</h3>
                        <!-- Campos opcionales -->
                        <div id="campos-oferta">
                            <div class="provincia"><img src="img/site.png"/><span>Provincia</span></div>
                            <div class="salario"><img src="img/money.png"/><span>Salario</span></div>
                            <div class="experiencia"><img src="img/experience.png"/><span>Experiencia</span></div>
                            <div class="lenguaje"><img src="img/language.png"/><span>Idioma</span></div>
                        </div>
                        <p>Descripción del anuncio</p>
                </div></a>

                <a href="#"><div class="oferta">
                        <h3>Título de Oferta</h3>
                        <!-- Campos opcionales -->
                        <div id="campos-oferta">
                            <div class="provincia"><img src="img/site.png"/><span>Provincia</span></div>
                            <div class="salario"><img src="img/money.png"/><span>Salario</span></div>
                            <div class="experiencia"><img src="img/experience.png"/><span>Experiencia</span></div>
                            <div class="lenguaje"><img src="img/language.png"/><span>Idioma</span></div>
                        </div>
                        <p>Descripción del anuncio</p>
                </div></a>

                <a href="#"><div class="oferta">
                        <h3>Título de Oferta</h3>
                        <!-- Campos opcionales -->
                        <div id="campos-oferta">
                            <div class="provincia"><img src="img/site.png"/><span>Provincia</span></div>
                            <div class="salario"><img src="img/money.png"/><span>Salario</span></div>
                            <div class="experiencia"><img src="img/experience.png"/><span>Experiencia en años</span></div>
                            <div class="lenguaje"><img src="img/language.png"/><span>Idioma</span></div>
                        </div>
                        <p>Descripción del anuncio</p>
                 </div></a>
            </article>
        </section>

    </div>

<?php include_once('footer.php')?>