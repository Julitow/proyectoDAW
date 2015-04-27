<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */
?>

<?php if ($oferta): ?>
    <h1> <?php echo $oferta->titulo ?> </h1>
    <p> <?php echo $oferta->descripcion ?> </p>
<?php else: ?>
    <h1> Oferna inexistente! </h1>
<?php endif; ?>
<p> <a class="boton" href="<?php echo base_url() ?>ofertas"> Volver a las ofertas </a> </p>