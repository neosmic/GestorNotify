<?php  namespace Modelos;

class Notas{
    public $id;
    public $title;
    public $cateogoria;
    public $fechaCreacion;
    public $fechaEliminacion;
    public $contenido;
    public $imagen;
    private $conexion;
    private $owner;

    public function __construct(){
        $conexion = new Conexion();
        $this->conexion = $conexion;

    }

    public function crearNota($datosJSON){
        $query = "INSERT INTO notas (titulo, contenido, categoria)
        VALUES ('{$datosJSON["titulo"]}', '{$datosJSON["contenido"]}', '{$datosJSON["categoria"]}')";
        $this->conexion->consultaSimple($query);

    }

    public function actualizarNota($datosJSON){
        $query = "UPDATE notas 
        SET titulo = '{$datosJSON["titulo"]}' , contenido = '{$datosJSON["contenido"]}', categoria = '{$datosJSON["categoria"]}'
        WHERE nota_id = {$datosJSON["nota_id"]} ";
        $this->conexion->consultaSimple($query);
    }

    public function eliminarNota($datosJSON){
        $todayRightNow = date('Y-m-d H:i:s');
        $query = "UPDATE notas 
        SET fechaEliminacion = '{$todayRightNow}'
        WHERE nota_id = {$datosJSON["nota_id"]} ";
        $this->conexion->consultaSimple($query);
    }

    public function mostrarNota($datosJSON){
        $query = "SELECT * FROM notas WHERE nota_id = '{$datosJSON["nota_id"]}'";
        return $this->conexion->consultaSimple($query);

    }

    public function __destruct(){


    }


}

?>