<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS );

require_once "Controlador/Autoload.php";
Controlador\Autoload::run();
header( 'Content-Type: application/json' );

$nota = new Modelos\Notas;
/*$datos = array('titulo' => "Segunda Nota",
                            'contenido' => "Esta es la nota de reemplazo",
                            'categoria' => "Principal",
                            'nota_id' => "2"
 );*/
 $datos = array("nota_id" => "1");
$nota->eliminarNota($datos);

?>
