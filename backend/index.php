<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS );

require_once "Controlador/Autoload.php";
Controlador\Autoload::run();
header( 'Content-Type: application/json' );

$notas = new Modelos\Notas("1000");

$datos = array('titulo' => "Tercera Nota",
                'contenido' => "Esta es la nota de reemplazo",
                'categoria' => "Principal",
                'nota_id' => "2"
 );
 
$datos = array(array("titulo" => "Segunda nota","contenido"=>"Realización de API por microservicios"));
//$notas->crearNota($datos);
//print_r($notas->mostrarNotas());
echo json_encode($notas->mostrarNotas(), true);




?>
