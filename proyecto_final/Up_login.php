<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>subir archivos al servidor</title>
</head>
<body>
    <h1 class="titulo">subir archivos</h1>
    <form action="Subir_image.php" enctype="multipart/form-data" method="post">
        <input type="file" name="archivo" id="">
        <input type="submit" value="Enviar">
    </form>
    <form action="cerrar_sesion.php" method="post">
            
            <input type="submit" value="Cerrar sesión">
        </form>
</body>
</html>
<?php
}else{
    header("Location: login.php");
}
?>