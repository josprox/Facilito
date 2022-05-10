<!DOCTYPE html>
<html lang="es-MX">
<head>
    <?php include "fx-includes/metas/metas.php"; ?>
    <title>
    <?php
    require "facilito_db/conexion.php";

    $id =$_GET["Titulo"];

    $miconsulta = "SELECT * FROM blog WHERE Titulo='$id' ";

    if($resultado=mysqli_query($miconexion,$miconsulta)){
        while($registro = mysqli_fetch_array($resultado)){

            echo $registro["Titulo"];

        }
    }

    ?>
    </title>
    <meta name="description" content="'<?php 
    if($resultado=mysqli_query($miconexion,$miconsulta)){
        while($registro = mysqli_fetch_array($resultado)){

            echo $registro["Seo_d"];

        }
    }
    ?>'"/>
</head>
<body>

    <?php
    include "fx-includes/cabecera/cabecera.php";

    ?>

    <div class="contenedor">

        <div class="grid-cuerpo">
        
            <section class="contenido">
            <?php

$id =$_GET["Titulo"];

$miconsulta = "SELECT * FROM blog WHERE Titulo='$id' ";

if($resultado=mysqli_query($miconexion,$miconsulta)){
    while($registro = mysqli_fetch_array($resultado)){

        echo "<h1 class= 'titulos'>" . $registro["Titulo"] . "</h1>";

        if($registro['Imagen']!=""){
            echo "<div class='img-active'><center>";
            echo "<img alt='".$registro['Titulo'] ."' src='fx-contenido/img/blog/". $registro['Imagen'] ."' ></a>";
            echo "</center></div>";
        }
        echo "<p class='content3-post'>" . $registro["Descripcion"] . "</p>";

    }
}

?>
<center>
    <?php include "fx-includes/regresar-btn1.php"; ?>
</center>
                
            </section>
        
            <aside class="relacion">
                <h1 class="titulos">Noticia nuevas</h1>
                <?php include "fx-includes/contenido/nuevos-en-noticias.php"; ?>
                <h1 class="titulos">Nuevo en blog</h1>
                <?php include "fx-includes/contenido/nuevos-en-blog.php"; mysqli_close($miconexion); ?>
            </aside>

            <div class="semi-cierre">
                <div class="contenido-semi">
                    <div class="parte1-semi">
                    <h2 class="subtitulos">Gracias por su visita</h2>
                        Este sitio web fue creado con la tecnología de:
                    </div>
                    <div class="parte2-semi">
                        <br>
                        <div class="logos-corp">
                            <img src="fx-contenido/img/logos-corp/facilito.webp" alt="">
                            <img src="fx-contenido/img/logos-corp/builder.webp" alt="">
                            <img src="fx-contenido/img/JOSPROX.webp" alt="">
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <?php include "fx-includes/footer/footer.php"; include "fx-includes/script/script.php"; ?>
</body>
</html>