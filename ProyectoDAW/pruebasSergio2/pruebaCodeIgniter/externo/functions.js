
/* Expresiones regulares */

var expEmail = /^([a-zA-Z\-\d]+[.]*)+@([a-zA-Z\d]+[.]*)+\.([a-zA-Z]{2,4})$/;
var expTelefono = /^[6-9]\d{8}$/;

/*
 if(exp.test(usuario)){
 alert("Usuario valido");
 }else{
 alert("Usuario NO valido");
 }
 */

/*************************************************************************************/

/* Funciones de jQuery */
$(document).ready(function(){

    $('#cookie .boton').on(
            'click', function () {
                $('#cookie').slideUp(2000);
                politicas();
    })

    /* BUSCAR
    $("#as").on('ended', function(){
        alert('El video ha finalizado!!!');
    });*/

});
/*************************************************************************************/

/* Comprobar cookie */
var cookie = document.cookie.split("; ");
for(i=0; i<cookie.length; i++) {
    if (!cookie[i].search("politica")) {
        document.getElementById('cookie').style.display = "none";
    }
}
/*************************************************************************************/

/* AJAX */
var conexion;

// Cookie de politicas
function politicas() {
    conexion = new XMLHttpRequest();
    conexion.open('GET', 'cookies.php?politica=politica', true);
    conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    conexion.send();
    conexion.onreadystatechange = function () {
        if (conexion.readyState == 4 && conexion.status == 200) {
            document.getElementById('cookie').style.display = "none";
        }
    }
}

function comprobarCookieVideo() {
		conexion = new XMLHttpRequest();
		conexion.open('GET', 'cookies.php?video=video', true);
		conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		conexion.send();
		conexion.onreadystatechange = function() {
			if (conexion.readyState==4 && conexion.status==200) {
                mostrarVideo();
			}
		}
}
/*************************************************************************************/

/* Funciones para el video */

function deshabilitarContenedor(){
    document.onmousedown = function(){
        return false;
    }
    for(var i = 0; i<document.getElementsByTagName('a').length; i++){
        document.getElementsByTagName('a')[i].onclick = function(){
            return false;
        }
    }
}

function mostrarVideo() {
    texto = conexion.responseText;
    document.getElementById('video').innerHTML = texto;
    if(document.getElementById('quitar').value=="Skip"){
        document.getElementById('contenedor').style.opacity = 0.1;
        document.getElementById('video').style.zIndex = 1000000;
        document.getElementsByTagName('body')[0].style.backgroundColor = "black";
        deshabilitarContenedor();
    }
}

function eliminarVideo(){
    document.onmousedown = function(){
        return true;
    }
    for(var i = 0; i<document.getElementsByTagName('a').length; i++){
        document.getElementsByTagName('a')[i].onclick = function(){ return true; }
    }
    document.getElementById('video').style.zIndex= -10000;
    document.getElementById('video').innerHTML = "";
    document.getElementsByTagName('body')[0].removeChild(document.getElementsByTagName('body')[0].childNodes[1]);
    document.getElementsByTagName('body')[0].style.backgroundColor = 'white';
    document.getElementById('contenedor').style.opacity = 1;
}

/*************************************************************************************/

/* Funciones del menú */

$(window).scroll(function(){
    if($('#menu').css("display")=="block"){
        if ($(this).scrollTop() > 200){
            $('#menu').addClass("fixed").fadeIn();
        }
        else {
            $('#menu').removeClass("fixed");
        }
    }
});

$('.item').click(function(){
    $('.item').removeClass('active');
    $(this).addClass('active');
    $("#menu").load($(this).attr("id") + ".html");
});

$('#menu-responsive').on(
    'click', function () {
    $('#menu').toggle();
});

/*************************************************************************************/

/* Funcion del slider de imagenes */

$(function(){
    $('#imageslider .slider li:gt(0)').hide();
    setInterval(function(){
        $('#imageslider .slider li:first-child').fadeOut(0)
            .next('li').fadeIn(1000)
            .end().appendTo('#imageslider .slider');}, 4000);
});


/* Funciones para estilo de jQueryUI */

$(function() {

    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 6,
        values: [ 0, 6],
        slide: function( event, ui ) {
            // aquí la función
        }
    });

    $('.boton-2d').button();

    $('.select').selectmenu();

    $('#fecha-filtro').buttonset();

});

/*************************************************************************************/
