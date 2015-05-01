
var geocoder;
var map;
// eliminar las tildes de las cadenas
//var query = 'Roma,IT';
//var query = 'San fernando de henares';
var query="avenida de irun, 13, san fernando de henares, madrid";// SPAIN";
function initialize() {
// Una clase para crear un servicio para la conversión entre una dirección y un LatLng.
    geocoder = new google.maps.Geocoder();
    var mapOptions = {
        zoom:18,
        /*
         A continuación se indican los tipos de mapas que se encuentran disponibles en el API de Google Maps.
         •	MapTypeId.ROADMAP muestra la vista de mapa de carretera predeterminada.
         •	MapTypeId.SATELLITE muestra imágenes de satélite de Google Earth.
         •	MapTypeId.HYBRID muestra una mezcla de vistas normales y de satélite.
         •	MapTypeId.TERRAIN muestra un mapa físico basado en información del relieve.
         */
        mapTypeId:google.maps.MapTypeId.HYBRID,
        /*	Google Street View proporciona vistas panorámicas de 360 grados desde las carreteras designadas en todas las áreas donde tiene cobertura.*/
        streerViewControl:true
    }
    /*Crea un nuevo mapa en el interior del contenedor HTML dado, que es un elemento DIV.*/
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    codeAddress();
}

function codeAddress() {
    /*
     query, es la dirección que se va a codificar de forma geográfica.
     */
    /*
     function(results, status)
     results, matriz que contiene múltiples resultados. Consultaremos el elemento primero
     status, estado en el que se encuenta la respuesta.
     */
    var address = query;
    geocoder.geocode( { 'address': address}, function(results, status) {
        /* Si el resultado ha sido correcto */

        if (status == google.maps.GeocoderStatus.OK) {
            /* centramos la búsqueda en el mapa*/
            map.setCenter(results[0].geometry.location);
            /*creamos una marca en el mapa*/
            var marker = new google.maps.Marker({
                /*opciones*/
                /*mapa donde se va a visualizar*/
                map: map,
                /* posición donde se va a ver la marca*/
                position: results[0].geometry.location
            });
        } else {
            alert('Se ha producido un error por la siguiente razon: ' + status);
        }
    });
}
/*el API de Google Maps proporciona el método estático addDomListener() para detectar y vincular eventos DOM.
 addDomListener(instance:Object, eventName:string, handler:Function)
 donde instance puede ser cualquier elemento DOM que admita el navegador*/
google.maps.event.addDomListener(window, 'load', initialize);
