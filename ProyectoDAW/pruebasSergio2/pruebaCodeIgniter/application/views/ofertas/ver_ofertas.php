<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */
?>

<ul>
    <?php foreach ($lista as $item): ?>
        <li> <a href="
                <?php echo base_url() . 'oferta/ver_oferta/' . $item['id'] ?>"> <!-- base_url() = obtiene la URL del proyecto -->
                <?php echo $item['nombre'] ?> </a>
        </li>
    <?php endforeach; ?>
    <span><?php echo index_page(); ?></span>
</ul>