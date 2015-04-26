<?php

$video = isset($_REQUEST['video'])?$_REQUEST['video']:null;
$politica = isset($_REQUEST['politica'])?$_REQUEST['politica']:null;

/* Cookie de confirmacion a las politicas del sitio web */
if($politica!=null){
    setcookie('politica', 'esta COOKIE incluye la confirmación de las politicas de privacidad del sitio web www.SOJI.es', time()+3600*24*365);
}
$cookiePolitica = isset($_COOKIE['politica'])?$_COOKIE['politica']:null;

/* Cookie de la visualizacion del video de introduccion */
if($video!=null){
    setcookie('video', 'esta COOKIE indica que ya has visualizado el video de www.SOJI.es', time()+3600*24*365);
}
$cookieVideo = isset($_COOKIE['video'])?$_COOKIE['video']:null;

if($cookieVideo==null){
	echo '<video autoplay preload width="640" height="360">';
		echo '<source src="'.site_url("/externo").'/video/video.mp4" type="video/mp4"/>';
		echo '<source src="'.site_url("/externo").'/video/video.webm" type="video/webm"/>';
		echo '<source src="'.site_url("/externo").'/video/video.fvl" type="video/fvl"/>';
		echo '<source src="'.site_url("/externo").'/video/video.avi" type="video/avi"/>';
		echo '<source src="'.site_url("/externo").'/video/video.swf" type="video/swf"/>';
	echo '</video>';
	echo '<input id="quitar" type="button" value="Skip" onclick="eliminarVideo()"/>';
}

?>

