<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/archivos/login.css">
    <script src="acomodo.js"></script>
    <title class=titulo>Mi galeria de imagenes</title>

</head>
<body>
    <div class=cuerpo>
        <center>
    <h1 class=titulo>Mi galeria de imagenes</h1>
    </center>
    <hr>
    <nav>
        <ul class=acomodo>
            <li class="lik"><a href="Up_login.php">Subir imagen</a></li>
            <li class="lik"><a href="#">Registrar</a></li>
        </ul>
    </nav>
    <div class=galeria>
    <?php
    $ruta_imagenes="imagen_k/";
    $imagenes = opendir($ruta_imagenes);
    $hay_imagenes = false;
    if($imagenes){
        while($imagen = readdir($imagenes)){
            if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
                echo "<img src= '$ruta_imagenes$imagen'>";
                $hay_imagenes = true;
            } 
        }
        closedir($imagenes);
      echo '<center>';
    }else{
        echo "Error: al cargar carpeta de imagenes";
    
    }
    if(!$hay_imagenes){
        echo "No hay imagenes aun. sube la primera";
    }
    echo '</center>';
  
    ?>
      </div>
    </div>
</body>
</html>