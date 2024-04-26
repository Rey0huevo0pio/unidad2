<?php
session_start();

if(isset($_POST["id_usuario"])) {

    $id_usuario = $_POST["id_usuario"];
    $usuario = $_POST["user"];
    $contraseña = $_POST["pass"];
    $email = $_POST["email"];

 
    $conexion = new mysqli("localhost", "root", "", "pioliom");

  
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $consulta_actualizar = "UPDATE usuarios SET Nombre='$usuario', Contrase='$contraseña', emill='$email' WHERE ID='$id_usuario'";

    if ($conexion->query($consulta_actualizar) === TRUE) {
        echo "Datos actualizados exitosamente";
    } else {
        echo "Error al actualizar datos: " . $conexion->error;
    }


    $conexion->close();
} else {
    echo "Error: No se recibió el ID de usuario correctamente.";
}
?>
