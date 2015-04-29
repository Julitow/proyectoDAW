<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */
?>


<div id="contenido-oferta">

        <!-- Criterios de búsqueda -->
        <article class="fila-1">

            <div>
                <?php if ($oferta): ?>
                    <h1> <?php echo $oferta->titulo ?> </h1>
                <?php else: ?>
                    <h1> Oferna inexistente! </h1>
                <?php endif; ?>
            </div>

        </article>

        <!-- Ofertas (10 máx) -->
        <article  class="fila-2">
            <div>
                <?php if ($oferta): ?>
                <p> <?php echo $oferta->descripcion ?> </p>
                <?php endif; ?>
            </div>

            <div>
                <ul class="lista">
                    <li><span>Empresa/Particular: </span>nombre</li>
                    <li><span>Localidad: </span></li>
                    <li><span>Fecha: </span><?php echo $oferta->fecha?></li>
                    <li><span>Salario: </span>
                        <?php if (! $oferta->salario): echo "Sin especificar"; else: echo $oferta->salario."€ mensuales"; endif;?>
                    </li>
                    <li><span>Experiencia: </span>
                        <?php if (! $oferta->experiencia): echo "Ninguna"; else: echo $oferta->experiencia; endif;?>
                    </li>
                    <li><span>Idiomas: </span>
                        <?php if (! $oferta->idiomas): echo "No exige ninguno"; else: echo $oferta->idiomas; endif;?>
                    </li>
                </ul>
            </div>
        </article>

        <div class="fila-3">
            <a class="boton" href="#">Solicitar</a>
            <a class="boton2" href="<?php echo base_url() ?>ofertas"> Volver a las ofertas</a>
        </div>

</div>