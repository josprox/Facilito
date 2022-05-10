<?php

include "../../facilito_db/Base_DD.php";
$conexion = new mysqli('localhost',$usuario,$contraseña,$base);
if (mysqli_connect_errno()){
    echo "No conectado",mysqli_connect_error();
    exit();
}//else{
//    echo "Conectado";
//}

?> 