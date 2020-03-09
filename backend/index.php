<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS );

require_once "Controlador/Autoload.php";
Controlador\Autoload::run();
//header( 'Content-Type: application/json' );

function validacionToken($tokenEntra){
    $dueToken = date('Y-m-d H');
    $dueToken = $dueToken."leusnerdus";
    //echo sha1($dueToken);
    if ($tokenEntra == sha1($dueToken) ){ return true; }else{return false; }
}

$method = strtoupper( $_SERVER['REQUEST_METHOD'] );
//print_r($_POST);


    switch ( $method ) {
        case 'GET':
            $user_id = $_GET["user_id"];
            $token = $_GET["token"];
            if ( !empty( $user_id ) && validacionToken($token) ) {
                $notas = new Modelos\Notas($user_id);
                echo json_encode($notas->mostrarNotas(), true);

            } else {
                echo "Error de acceso";
            }

        break;
        case 'POST':
            //echo "el método es POST";
            //print_r($_POST["user_id"]);
            $user_id = $_POST["usuario_id"];
            $intoken = $_POST["token"];
            $data = $_POST;
            //echo $intoken;
            if ( !empty( $user_id ) && validacionToken($intoken) ) {
                $notas = new Modelos\Notas($user_id);
                echo json_encode($notas->crearNotas($data), true);

            } else {
                echo "Error en POST";
            } 

            
        break;
        case 'PUT':
            
        break;
        case 'DELETE':
            
        break;


    }



$datos = array('titulo' => "Tercera Nota",
                'contenido' => "Esta es la nota de reemplazo",
                'categoria' => "Principal",
                'nota_id' => "2"
 );
 
//$datos = array(array("titulo" => "Segunda nota","contenido"=>"Realización de API por microservicios"));
//$notas->crearNota($datos);
//print_r($notas->mostrarNotas());





?>
