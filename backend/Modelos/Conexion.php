<?php namespace Modelos;

class Conexion{
    private $datos = array(
      "host" => "localhost",
      "user" => "usergnotas",
      "db" => "gnotas",
      "pass" => "anotaciones de usuario"
    );
    private $conn;

    public function __construct(){
      $this->conn = new \mysqli($this->datos['host'],
                                $this->datos['user'],
                                $this->datos['pass'],
                                $this->datos['db']
                              );


    }
      
      public function get($atributo){
        return $this->$atributo;
    }
    public function set($atributo, $contenido){
      $this->$atributo = $contenido;
      //falta el método para actualizar a la base de datos.
    }



    public function consultaSimple($sql){
      $this->conn->query($sql);
    }
    public function consultaRetorno($sql){
      $datos = $this->conn->query($sql);
      if ($datos){
        $raw_data_out = mysqli_fetch_all($datos,MYSQLI_ASSOC);
        //print_r($datos);
      }else{
        $raw_data_out = false;
      }

      return $raw_data_out;

    }
}


 ?>
