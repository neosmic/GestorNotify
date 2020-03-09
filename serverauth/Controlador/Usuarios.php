<?php namespace Controlador;

class Usuarios{
    private $username;
    private $password;
    private $conn;
    

    public function __construct(){

    }

    public function comprobacion($usuario, $clave){
        
        $this->conn = new Conexion;

        $query = "SELECT id_ugn FROM usuarios WHERE name = '{$usuario}' AND password = '{$clave}' ";
        //echo "<br>".$query."<br>";
        $usuario_id = $this->conn->consultaRetorno($query);

        if ($usuario_id != false ){return $usuario_id;}else{return false;}
    }



}


?>