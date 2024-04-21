<?php
session_start();
$usuario = $_POST["user"];
$contrasena = $_POST["pass"];

$usuarios = array(
    "admin" => "123",
    "brian" => "123"
);
if(isset($usuarios[$usuario]) && $usuarios[$usuario] == $contrasena){
    $_SESSION["usuario"] = $usuario;
    header("Location: Up_login.php");

}else{
    echo "Error: Usuario y/o contrasena son incorrectos.";
}
?>