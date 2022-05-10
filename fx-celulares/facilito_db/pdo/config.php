<?php

require "./../facilito_db/Base_DD.php";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=facilito-db', $usuario, $contraseña);
    //echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>