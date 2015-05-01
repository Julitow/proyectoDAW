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
                    <li><span>Empresa/Particular: </span><?php echo $cliente->nombre." ".$cliente->apellidos?></li>
                    <li><span>Localidad: </span><?php echo $oferta->provincia?></li>
                    <li><span>Fecha: </span><?php echo $oferta->fecha?></li>
                    <li><span>Salario: </span>
                        <?php if (! $oferta->salario): echo "Sin especificar"; else: echo $oferta->salario; endif;?>
                    </li>
                    <li><span>Experiencia: </span>
                        <?php if (! $oferta->experiencia): echo "Ninguna"; else: echo $oferta->experiencia." años"; endif;?>
                    </li>
                    <li><span>Idiomas: </span>
                        <?php if (! $oferta->idiomas): echo "No exige ninguno"; else: echo $oferta->idiomas; endif;?>
                    </li>
                </ul>
            </div>
        </article>


        <div id="map-canvas">
            <!-- Mapa del anunciante -->
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&region=ES"></script>
            <script>
                var geocoder;
                var map;
                // eliminar las tildes de las cadenas
                var query="<?php echo $cliente->direccion?>, <?php echo $cliente->ciudad?>, <?php echo $cliente->provincia?>";// SPAIN";
                function initialize() {
                    geocoder = new google.maps.Geocoder();
                    var mapOptions = {
                        zoom:16,
                        mapTypeId:google.maps.MapTypeId.HYBRID,
                        streerViewControl:true
                    }
                    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                    codeAddress();
                }

                function codeAddress() {
                    var address = query;
                    geocoder.geocode( { 'address': address}, function(results, status) {

                        if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            var marker = new google.maps.Marker({
                                map: map,
                                position: results[0].geometry.location
                            });
                        } else {
                            alert('Se ha producido un error por la siguiente razon: ' + status);
                        }
                    });
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        </div>


        <div class="fila-3">
            <a class="boton" href="#">Solicitar</a>
            <a class="boton2" href="<?php echo base_url() ?>ofertas"> Volver a las ofertas</a>
        </div>
</div>
