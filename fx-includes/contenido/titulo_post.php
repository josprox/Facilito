<?php
require "facilito_db/conexion.php";

$id =$_GET["Titulo"];

$miconsulta = "SELECT * FROM publicaciones WHERE Titulo='$id' ";

if($resultado=mysqli_query($miconexion,$miconsulta)){
    while($registro = mysqli_fetch_array($resultado)){

        echo $registro["Titulo"];

    }
}

?>