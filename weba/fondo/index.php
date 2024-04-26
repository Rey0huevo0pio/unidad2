<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_css/Index.css">
    <title>Mi galería de imágenes</title>
</head>
<body>

<header>
    <div class="header-content">
        <div class="header-left">
        </div>
        <div class="header-right">
            <h1>Mis Fotos y Imagenes</h1>
        </div>
    </div>
</header>

<div class="buton">
    <a href="suBire.php" class="button">Subir imagen</a>
    <a href="#" id="registerButton" class="button" onclick="changeButton()">Registrar</a>
    <a href="login.php" class="button">Cerrar sesión</a>
</div>
<br><br><br>

<div class="galeria">
    <center>
    <?php
    $ruta_imagenes = "imagenes/"; 
    $imagenes = opendir($ruta_imagenes);
    $hay_imagenes = false;
    if($imagenes){
        while($imagen = readdir($imagenes)){
            if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
             
                echo "<a href='info_ima.php?imagen=$imagen'><img src='$ruta_imagenes$imagen' class='small-image'></a>";
                $hay_imagenes = true;
            } 
        }
        closedir($imagenes);
    } else {
        echo "Error: No se pudo abrir la carpeta de imágenes";
    }
    if(!$hay_imagenes){
        echo "<p>No hay imágenes aún. Sube la primera.</p>";
    }
    ?>
    </center>

    <?php
        $ruta_imagenes = "archivos/";
        $imagenes = opendir($ruta_imagenes);
        while($imagen = readdir($imagenes)){
            if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
                echo "<img src='$ruta_imagenes$imagen'>";
            } 
        }
        closedir($imagenes);
        ?>
</div>

</body>
</html>
