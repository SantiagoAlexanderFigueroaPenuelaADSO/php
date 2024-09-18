<?php


require_once(__DIR__."/libs/Database.php");
require_once(__DIR__."/libs/modelo.php");
include_once("clases/aprendiz.php");



$datebase =new Database();
$connection= $datebase->getConnection();

$aprendiz = new Aprendiz($connection);

if(
    !isset($_POST['first_name'])
    &&!isset($_POST['last_name'])
    &&!isset ($_POST['email'])
    &&!isset ($_POST['phone'])
    && !isset ($_POST['dni']));

// $nombre = $_POST['first_name'];
// $apellido = $_POST['last_name'];
// $correo = $_POST['email'];
// $telefono = $_POST['phone'];
// $dni= $_POST['dni'];


$aprendiz->store([
    'first_name'  => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email'  => $_POST['email'],
    'phone' => $_POST['phone'],
    'dni' => $_POST['dni'],
    'user_account' => isset($_POST['user_account'])?$_POST['user_account']: '',
    'average' => isset($_POST['average'])?$_POST['average']: ''
]); 

// $aprendiz->update(3 ,[
//     'first_name'  => 'Cristian',
//     'adrress' => 'Sena Giron',
//     'user_acount' => 2696521
// ]
// );
// // echo "<pre>";
// // print_r($results);
// // echo "</pre>";

// // var_dump($aprendiz);

// $aprendiz->delete(2);