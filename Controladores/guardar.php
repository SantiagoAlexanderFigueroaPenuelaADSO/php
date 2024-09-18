<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$nombre = isset($_POST['first_name']) ? 
($_POST["first_name"] != "" ? $_POST["first_name"]  : false) : false;

$apellido = isset($_POST['last_name']) ? 
($_POST["last_name"] != "" ? $_POST["last_name"]  : false) : false;

$correo = isset($_POST['email']) ? 
($_POST["email"] != "" ? $_POST["email"]  : false) : false;

$telefono = isset($_POST['phone']) ? 
($_POST["phone"] != "" ? $_POST["phone"]  : false) : false;

$dni = isset($_POST['dni']) ? 
($_POST["dni"] != "" ? $_POST["dni"]  : false) : false;

if ($nombre && $apellido && $correo && $telefono && $dni) {
    $database = new Database();
    $connection = $database->getConnection();
    $aprendiz = new Aprendiz($connection);
    $aprendiz -> store ([
        'first_name' => $nombre,
        'last_name' => $apellido,
        'email' => $correo,
        'phone' => $telefono,
        'dni' => $dni,
        'user_account' => isset($_POST["user_account"]) ? $_POST["user_account"] : '' ,
        'average' => isset($_POST["average"]) ? $_POST["user_account"] : ''
]);

if ($valor) 

} else{
    echo "Faltan campos obligatorios";
}