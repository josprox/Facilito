<?php

include "./facilito_db/Base_DD.php";

try {
    $pdo = new PDO('mysql:host=localhost;dbname='.$base.'', $usuario, $contraseña);
    //echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>