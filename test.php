<?php
include_once 'admin/bd.php';

// ingresar un nuevo usuario.
$nombre = "Dylan";
$apellido = "Quintanilla";
$usuario = "admin";
$password = "1234";
$correo = "dylanquintanilla12@gmail.com";
$rol = 1;

$password_hasheada = password_hash($password, PASSWORD_BCRYPT);

$sql = " INSERT INTO usuarios(nombre, apellido, usuario, password, correo, id_rol) 
             VALUES(:nombre, :apellido, :usuario, :password, :correo, :id_rol) ";
$sentencia = $conexion->prepare($sql);
$sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
$sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);
$sentencia->bindParam(':password', $password_hasheada);
$sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);
$sentencia->bindParam(':id_rol', $rol, PDO::PARAM_INT);
$sentencia->execute();

if ( $sentencia->execute() ) {
    echo "Usuario guardado con éxito";
} else {
    echo "No se pudo guardar el usuario";
}
