<?php namespace Controlador;

class Usuarios{
    private $username;
    private $password;
    private $conn;
    

    public function __construct(){

    }

    public function comprobacion($usuario, $clave){
        
        $this->conn = new Conexion;

        $query = "SELECT * FROM usuarios WHERE name = '{$usuario}' AND password = '{$clave}' ";
        //echo "<br>".$query."<br>";
        $this->conn->consultaRetorno($query);
        if ($this->conn->consultaRetorno($query) != false ){return true;}
    }



}


?>