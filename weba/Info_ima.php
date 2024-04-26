<?php
session_start();


function obtenerFechaSubida($imagen) {
    return date("Y-m-d");
}


$imagen = $_GET['imagen'];


$archivo_contador = 'vistas/' . $imagen . '_vistas.txt';


if (!file_exists($archivo_contador)) {
    
    file_put_contents($archivo_contador, '0');
}

$vistas = file_get_contents($archivo_contador);
$vistas++;

$nombre_usuario = explode('_', $imagen)[1];
$fecha_subida = obtenerFechaSubida($imagen);
$nombre_usuario = "usuario";
echo "<img src='imagenes/$imagen'>";
echo "<p>Subido por: <a href='imagenes_usuario.php?usuario=$nombre_usuario'>$nombre_usuario</a></p>"; 
echo "<p>Fecha de subida: $fecha_subida</p>";
echo "<p>Vistas: $vistas</p>";
?>
