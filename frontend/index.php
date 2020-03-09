<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="max-width:540px">
        <h1>Gestor de Notas</h1>
   
    <hr>

        </div>
    
        <?php
        session_start();
if (isset($_SESSION["usuario"])){
    require "notas.php";

}else{ include "login.php"; }



?>
</body>
