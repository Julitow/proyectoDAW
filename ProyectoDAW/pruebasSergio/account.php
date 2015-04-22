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
        <h1>Mi Perfil</h1><!--Titulo de articulo-->

        <!--Descripción del sitio -->
        <section class="dos-columnas">

            <!-- Foto nombre y apellidos -->
            <article  class="columna1">
                <div id="perfil">
                    <img src="img/account.png">
                    <div>
                        <p>Nombre</p>
                        <p>Apellidos</p>
                        <p>Residencia</p>
                    </div>
                </div>
            </article>

            <!-- Formación -->
            <article  class="columna2">
                <div class="formacion">
                    <h3>Formación</h3>
                    <p>...</p>
                </div>
                <div class="formacion">
                    <h3>Conocimientos</h3>
                    <p>...</p>
                </div>
                <div class="formacion">
                    <h3>Experiencia</h3>
                    <p>...</p>
                </div>
                <div class="formacion">
                    <h3>Idiomas</h3>
                    <p>...</p>
                </div>
            </article>
        </section>

    </div>

<?php include_once('footer.php')?>