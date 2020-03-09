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
    private $usuario_id;

    public function __construct($owner){
        $conexion = new Conexion();
        $this->conexion = $conexion;
        $this->usuario_id = $owner;

    }

    public function crearNotas($datosJSON){
        $query = "INSERT INTO notas (titulo, contenido, categoria, usuario_id)
        VALUES ('{$datosJSON["titulo"]}', '{$datosJSON["contenido"]}', '{$datosJSON["categoria"]}','{$this->usuario_id}')";
        $this->conexion->consultaSimple($query);
    }

    public function actualizarNota($datosJSON){
        $query = "UPDATE notas 
        SET titulo = '{$datosJSON["titulo"]}' , contenido = '{$datosJSON["contenido"]}', categoria = '{$datosJSON["categoria"]}'
        WHERE (nota_id = {$datosJSON["nota_id"]} AND usuario_id ='{$this->usuario_id}' )";
        $this->conexion->consultaSimple($query);
    }

    public function eliminarNota($datosJSON){
        $todayRightNow = date('Y-m-d H:i:s');
        $query = "UPDATE notas 
        SET fechaEliminacion = '{$todayRightNow}'
        WHERE nota_id = {$datosJSON["nota_id"]} ";
        $this->conexion->consultaSimple($query);
    }

    public function mostrarNotas(){
        $query = "SELECT * FROM notas WHERE usuario_id ='{$this->usuario_id}'";
        //echo $query;
        return $this->conexion->consultaRetorno($query);

    }

    public function __destruct(){


    }


}

?>