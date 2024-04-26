<?php
session_start();

// Datos del formulario de registro
$usuario = $_POST["user"];
$contraseña = $_POST["pass"];
$email = $_POST["email"];

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "pioliom");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para validar el usuario y la contraseña
$consulta = "SELECT nombre FROM usuarios WHERE Nombre='$usuario' AND Contrase='$contraseña'";
$resultado = $conexion->query($consulta);

// Si el usuario existe, inicia sesión y redirige
if ($resultado->num_rows > 0) {
    $_SESSION["usuario"] = $usuario;
    header("Location: upload.php");
    exit;
}

// Si el usuario no existe, intenta registrarlo
$consulta_registro = "INSERT INTO usuarios (Nombre, Contrase, Emill) VALUES ('$usuario', '$contraseña', '$email')";
if ($conexion->query($consulta_registro) === TRUE) {
    echo "Usuario registrado exitosamente";
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>

