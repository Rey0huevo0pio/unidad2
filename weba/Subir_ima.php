<?php
$carpeta = "archivos/";

if(!empty($_FILES["archivo"]["name"])){
    $archivo = $_FILES["archivo"]["name"];
    $ruta_temporal = $_FILES["archivo"]["tmp_name"];
    $tipo_archivo = $_FILES["archivo"]["type"];
    $tamano_archivo = $_FILES["archivo"]["size"];
    if($tipo_archivo != "image/jpeg" && $tipo_archivo != "image/png" && $tipo_archivo != "image/gif"){
        echo "Error: solo se permiten imagenes jpg, png y gif";
        return;
    }
    if($tamano_archivo > 1000000){
        echo "Error: El archivo es demasiado grande";
        return;
    }
    move_uploaded_file($ruta_temporal,$carpeta . $archivo);
        echo "Se ha enviado el archivo al servidor";
}else{
    echo "no se ha enviado nada";
    }
?>