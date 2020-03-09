<?php 
print_r($_POST);
echo "se están validando los datos en el servidor";
session_start();

//Se valida con el microservicio del servidor de validación.

$_SESSION["usuario"] = $_POST["usuario"];
print_r($_POST);


$validacion = true;

if ($validacion !== true){ die; }
header("location: index.php");


?>