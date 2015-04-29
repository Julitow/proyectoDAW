<?php
/**
 * Created by Sergio y Julio.
 * Date: 15/04/2015
*/
?>

<html>
<head>
    <title>SOJI - <?php echo $title ?></title>
    <meta charset="utf-8" author="Sergio Santos & Julio Hontangas" http-equiv="content-type" content="text/html"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/externo/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/externo/jquery-ui-SOJI/jquery-ui.css"/>
    <script src="<?php echo base_url() ?>/externo/jquery-2.1.3.min.js"></script>
</head>

<body onload="comprobarCookieVideo()">

<div id="video"></div>

<div id="contenedor">

    <header><!--Cabecera principal del sitio-->

        <div class="logo">
            <a href="<?php echo base_url() ?>">
                <img src="<?php echo base_url() ?>/externo/img/logo.png" alt="SOJI"/>
            </a>
        </div>

        <div id="login">
            <div>
                <img src="<?php echo base_url() ?>/externo/img/account.png" alt="foto_perfil"/> <!-- Imagen de perfil -->
                <button class="acceder">Acceder</button>
                <button class="registrar">Registrarse</button><!-- Botón con Registrarse / Botón con Cerrar Sesión -->
            </div>
        </div>

    </header>

    <span id="menu-responsive"><img src="<?php echo base_url() ?>/externo/img/menu.png"></span>

    <nav id="menu"><!--Menu-->
        <ul>
            <a href="<?php echo base_url() ?>"><li>Inicio</li></a>
            <a href="<?php echo base_url() ?>perfil"><li>Perfil</li></a>
            <a href="<?php echo base_url() ?>ofertas"><li>Ofertas</li></a>
            <a href="<?php echo base_url() ?>contacto"><li>Contacto</li></a>

            <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input id="buscar" name="buscar" type="search" placeholder="Buscar..."/>
            </form>
        </ul>
    </nav>