<?php
// URL con redirección
$url = "http://movie-dramas-netflix.epizy.com/ok.php?v=4184316644082";

// Obtener la URL final después de seguir redireccionamientos
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$finalUrl = curl_exec($ch);

// Imprimir la URL final (o puedes redirigir directamente al reproductor)
echo $finalUrl;

// Cerrar curl
curl_close($ch);
?>
