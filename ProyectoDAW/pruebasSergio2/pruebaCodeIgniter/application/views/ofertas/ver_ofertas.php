<?php
/**
 * Created by PhpStorm.
 * User: Sergio Santos
 * Date: 30/03/2015
 * Time: 10:29
 */
?>

    <div id="contenido">
        <h1><?php echo $numero ?> ofertas disponibles</h1>

        <section class="dos-columnas">

            <!-- Criterios de búsqueda -->
            <article id="filtrar">

                    <div id="filtrar-responsive">
                        <a class="boton-2d">Filtrar</a>
                    </div>

                        <form name="filtrado">
                            <p>Palabras Clave</p>
                            <p><input type="text" name="palabra_clave"><input type="button" class="boton-2d" value="Filtrar"></p>
                            <p>Provincia</p> <!-- select o checkbox ?? -->
                            <p>
                                <select class="select">
                                    <option selected="selected" value="todas">Todas</option>
                                    <?php foreach ($provincia as $p): ?>
                                        <option value="<?php echo $p->idProvincia?>"><?php echo $p->nombre?></option>
                                    <?php endforeach;?>
                                </select>
                            </p>
                            <p>Fecha</p>
                            <div id="fecha-filtro">
                                <div><input type="radio" id="fecha-filto1" name="fecha" value="todo" checked><label for="fecha-filto1">Cualquier fecha</label></div>
                                <div><input type="radio" id="fecha-filto2" name="fecha" value="1dia"><label for="fecha-filto2">Hace 24 horas</label></div>
                                <div><input type="radio" id="fecha-filto3" name="fecha" value="7dia"><label for="fecha-filto3">Ultimos 7 días</label></div>
                                <div><input type="radio" id="fecha-filto4" name="fecha" value="15dia"><label for="fecha-filto4">Ultimos 15 días</label></div>
                            </div>
                            <p>Experiencia</p>
                            <p>
                                <div id="slider-range"></div>
                                <div id="anos-slider"><span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>+10</span></div>
                            </p>
                        </form>
            </article>

            <!-- Ofertas (10 máx) -->
            <article  class="columna2">

                <div id="paginados">
                    <?php if($ofertas): ?>
                        <?php foreach ($ofertas as $item):?>

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
                    <?php endif; ?>
                </div>
                <?=$this->pagination->create_links()?>

            </article>
        </section>

    </div>
