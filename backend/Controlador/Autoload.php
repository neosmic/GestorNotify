<?php namespace Controlador;
//echo "cargando";
  class Autoload{
    public static function run(){
      spl_autoload_register(function($class){
        $ruta = str_replace("\\",DIRECTORY_SEPARATOR,$class).".php";
        //echo $ruta;
        include_once $ruta;
      });
    }
  }


 ?>
