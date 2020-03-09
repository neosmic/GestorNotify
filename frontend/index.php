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
//echo $_SESSION["token"];



/*
$remotetoken = sha1("leusnerdus");
echo "<br>remote: ".$remotetoken."<br>";
echo "local: ".$_SESSION["token"]."<br>";
*/
$respuesta = "false";

if ($_SESSION["token"] != ""){
    $url = "http://localhost/gestornotify/gestornotify/serverauth/auth.php";
    $ch = curl_init($url);
    
    $token =$_SESSION["token"];
    $parametros=['HTTP_X_TOKEN'=>$token];
  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);
    curl_close($ch);
    
}
//echo "respuesta: ".$respuesta;






if ($respuesta == "true"){
    require "notas.php";
}else{ include "login.php"; }



?>
</body>
