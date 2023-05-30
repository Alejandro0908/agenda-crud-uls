<?php

    // Creo la conexión utilizando distintas variables

    $servidor="localhost";
    $baseDatos="agenda";
    $usuario="root";
    $contraseña="";

    // Realizamos la conexión dentro de un try, para poder verificar los errores
    try{
        $conexion= new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$contraseña);
        //echo "Conexión realizada con éxito";

    }catch(Exception $ex){
        echo $ex->getMessage();
    }

?>
