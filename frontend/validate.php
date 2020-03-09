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
    



/*
$ch = curl_init("http://localhost/gestornotify/gestornotify/serverauth/auth.php");
$fp = fopen("", "");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 1);

echo curl_exec($ch);
curl_close($ch);
fclose($fp);
*/
/*
$params=['HTTP_X_CLIENT_ID'=>$user, 'HTTP_X_SECRET'=>$pwd];
$options = array(
    CURLOPT_RETURNTRANSFER => true,         // return web page
    CURLOPT_HEADER         => true
);

$defaults = array(
CURLOPT_URL => '../serverauth/auth.php',
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $params,
);
$options;
$ch = curl_init();
curl_setopt_array($ch, ($options + $defaults));

*/
if ($respuesta == ""){ die;}
session_start();

$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["token"] = $respuesta;
//print_r($_POST);


$validacion = true;

if ($validacion !== true){ die; }
header("location: index.php");


?>