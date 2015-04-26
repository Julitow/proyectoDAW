<?php
/**
 * Created by Sergio y Julio.
 * Date: 15/04/2015
*/
?>

<html>
<head>
    <title>SOJI - Tu buscador óptimo</title>
    <meta charset="utf-8" author="Sergio Santos & Julio Hontangas" http-equiv="content-type" content="text/html"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-2.1.3.min.js"></script>
</head>

<body onload="comprobarCookieVideo()">

<div id="video"></div>

<div id="contenedor">

    <header><!--Cabecera principal del sitio-->

        <div class="logo">
            <a href="#">
                <img src="img/logo.png" alt="SOJI"/>
            </a>
        </div>

        <div id="login">
            <div>
                <img src="img/account.png" alt="foto_perfil"/> <!-- Imagen de perfil -->
                <button class="acceder">Acceder</button>
                <button class="registrar">Registrarse</button><!-- Botón con Registrarse / Botón con Cerrar Sesión -->
            </div>
        </div>

    </header>

    <span id="menu-responsive"><img src="img/menu.png"></span>

    <nav id="menu"><!--Menu-->
        <ul>
            <li class='active'><a href="#">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Ofertas</a></li>
            <li><a href="#">Acerca de</a></li>

            <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input id="buscar" name="buscar" type="search" placeholder="Buscar..."/>
            </form>
        </ul>
    </nav>