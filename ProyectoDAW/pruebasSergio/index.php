<?php
/**
 * Created by PhpStorm.
 * User: Sergio Santos
 * Date: 30/03/2015
 * Time: 10:29
 */
?>

<?php include_once('header.php')?>

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
            <article>
                <h1>Lorem imp?</h1>
                <!-- Incluir aboutUs.php -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            </article>
        </section>

        <section class="dos-columnas">
            <aside class="columna1">
                <h1>Ultimas Ofertas</h1>
                <!-- Incluir ofertas.php las tres o x ultimas ofertas -->
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </aside>
            <aside class="columna2">
                <div id="publi">
                    <img src="img/publicidad3.jpg"/ ><!-- Meter aleatorimanete un anuncio -->
                </div>

            </aside>

        </section>
    </div>


<?php include_once('footer.php')?>