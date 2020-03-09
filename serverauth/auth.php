<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS );

require_once "Controlador/Autoload.php";
Controlador\Autoload::run();
header( 'Content-Type: application/json' );

$method = strtoupper( $_SERVER['REQUEST_METHOD'] );

$token = sha1("leusnerdus");
//echo $token;
//echo "<br>".sha1("jav12")."<br>";
//print_r($_SERVER);
if ( $method === 'POST' && !array_key_exists( 'HTTP_X_TOKEN', $_POST ) ) {
    if ( !array_key_exists( 'HTTP_X_CLIENT_ID', $_POST ) || !array_key_exists( 'HTTP_X_SECRET', $_POST ) ) {
        http_response_code( 400 );

        die( 'Faltan parametros' );
    }

    $clientId = $_POST['HTTP_X_CLIENT_ID'];
    $secret = $_POST['HTTP_X_SECRET'];

    ///validación con la base de usuarios
    $comprobacion = new Controlador\Usuarios;
    if ($comprobacion->comprobacion($clientId,$secret)){
        echo $token;
    } else {
        http_response_code( 403 );
        die ( "No autorizado");
    }

    

    //echo "$token";
} elseif ( $method === 'GET' ) {
    //print_r($_GET);
    if ( !array_key_exists( 'HTTP_X_TOKEN', $_GET ) ) {
        http_response_code( 400 );

        die ( 'Faltan parametros aqui' );
    }

}elseif(array_key_exists( 'HTTP_X_TOKEN', $_POST )){
    //echo $_POST["HTTP_X_TOKEN"];
    if ($_POST["HTTP_X_TOKEN"] == $token ){
        echo 'true';
    }else {
        echo 'false';
    }
    
}
 else {
    echo 'false';
}