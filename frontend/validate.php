<?php 
//print_r($_POST);
//echo "se están validando los datos en el servidor";


//Se valida con el microservicio del servidor de validación.
$user = $_POST["usuario"];
$pwd = sha1($_POST["pswd"]);

$url = "http://localhost/gestornotify/gestornotify/serverauth/auth.php";
$ch = curl_init($url);
/*
$parametros = array(
    "CLIENT_ID"=>"$user",
    "SECRET"=>"$pwd");
    */
$parametros=['HTTP_X_CLIENT_ID'=>$user, 'HTTP_X_SECRET'=>$pwd];
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$respuesta = curl_exec($ch);
//echo "aquí debe salir la respuesta: ";
//print_r($respuesta);
curl_close($ch);
    


//print_r($respuesta);
if ($respuesta == ""){ die;}
session_start();
$respuesta = json_decode($respuesta, true);

$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["token"] = $respuesta["token"];
$_SESSION["user_id"] = $respuesta["user_id"];


//print_r($_POST);


$validacion = true;

if ($validacion !== true){ die; }
header("location: index.php");


?>