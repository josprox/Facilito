<?php

require_once "./../../facilito_db/Base_DD.php";

    define("host", "localhost");
    define("usuario", $usuario);
    define("contraseña", $contraseña);
    define("Base_de_datos", $base);
 
    $miconexion = new mysqli(
        constant("host"),
        constant("usuario"),
        constant("contraseña"),
        constant("Base_de_datos")
    );

    $miconexion->set_charset("utf8");

    if(!$miconexion){
        echo "La conexion falló a la base";

        exit();
    }
?> 