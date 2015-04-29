
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
                $('#cookie').slideUp(2000, function(){politicas();});
    })

    /* BUSCAR
    $("#as").on('ended', function(){
        alert('El video ha finalizado!!!');
    });*/

});
/*************************************************************************************/

/* Comprobar cookies */
$(document).ready(function(){
    if(!leeCookie("video")){
        mostrarVideo();
    }
    if(leeCookie("politica")){
        document.getElementById('cookie').style.display = "none";
    }
});

function leeCookie(nombre){
    // Obtengo la cadena arrojada por document.cookies, si es nula retorno false
    var cookies=document.cookie;
    if(!cookies){
        return false;
    }
    // Guardo en comienzo la posición del 1º caracter del nombre de la cookie que se busca
    var comienzo=cookies.indexOf(nombre);
    console.log(comienzo);
    // Si la posición obtenida es inválida es porque no existe una cookie con ese nombre; se retorna false
    if(comienzo==-1){
        return false;}
    // Guardo en comienzo la posición del 1º caracter del valor que pretendo retornar
    comienzo=comienzo+nombre.length+1;
    console.log(comienzo);
    // Guardo en cantidad la cantidad de caracteres de largo que posee el valor a retornar
    cantidad=cookies.indexOf("; ", comienzo)-comienzo;
    if(cantidad<=0)cantidad=cookies.length;
    // Fracciono la cadena para retornar solo el valor de la cookie de interés
    return cookies.substr(comienzo, cantidad);
}
/*************************************************************************************/

// Cookie de politicas
function politicas() {
    var date = new Date()
    date.setTime(date.getTime()+(365*24*60*60*1000));
    document.cookie="politica=esta COOKIE incluye la confirmación de las politicas de privacidad del sitio web www.SOJI.es; expires="+date.toGMTString();
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
    texto = '<video autoplay preload width="640" height="360">' +
    '<source src="http://localhost/pruebaCodeIgniter/externo/video/video.mp4" type="video/mp4"/>'+
    '</video>'+
    '<input id="quitar" type="button" value="Skip" onclick="eliminarVideo()"/>';
    document.getElementById('video').innerHTML = texto;
    if(document.getElementById('quitar').value=="Skip"){
        document.getElementById('contenedor').style.opacity = 0.1;
        document.getElementById('video').style.zIndex = 1000000;
        document.getElementsByTagName('body')[0].style.backgroundColor = "black";
        deshabilitarContenedor();
    }
}

function eliminarVideo(){
    var date = new Date()
    date.setTime(date.getTime()+(365*24*60*60*1000))
    document.cookie="video=esta COOKIE incluye la confirmación de las politicas de privacidad del sitio web www.SOJI.es; expires="+date.toGMTString();
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

$(document).ready(function() {
        var pathname = window.location.pathname; //Obtener la URL
        var element = pathname.split("/"); // Separamos la URL "/"
        var array = $('#menu ul a li'); // Todos los "li" del menú

        $.each(array, function() { // Recorremos todos los "li"
            // element[2] obtiene el controlador de CodeIgniter
            if(element[2] == $(this).html().toLowerCase()){
                // Si el controlador tiene el mismo texto que el "li" se le añade la clase "active"
                $(this).addClass('active');
            }
            // Si el controlador está vacío (home), se le añade al "li" de "Inicio"
            else if(element[2] == ""){
                $('#menu ul a li').eq(0).addClass('active');
            };
        });

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
