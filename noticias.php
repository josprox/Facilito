<!DOCTYPE html>
<html lang="es-MX">
<head>

<meta name="description" content="Enterate de todo lo nuevo de JOSPROX MX | Internacional, actualizaciones, las secciones dev y más."/>

<?php 

if (!$_GET) {
  header('location:noticias?pagina=1');
}

?>
    
    <title>Noticias | JOSPROX</title>

    <?php
    include "fx-includes/metas/metas.php";
    include "facilito_db/pdo/config.php";

    //llamar a todos los articulos
    $sql = 'SELECT * FROM publicaciones';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    //var_dump($resultado);

    $articulo_x_pagina = 4;
    $total_articulos = $sentencia->rowCount();
    $paginas = $total_articulos / 4;
    //echo $paginas;
    $paginas = ceil($paginas);

    if ($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
      header('location:noticias?pagina=1');
  }    


    ?>

</head>
<body>

    <?php

    $iniciar = ($_GET['pagina'] - 1) * $articulo_x_pagina;
    //echo $iniciar;

    $sql_articulos = 'SELECT * FROM publicaciones ORDER BY Fecha DESC LIMIT :niniciar,:narticulos';
    $sentencia_articulos = $pdo->prepare($sql_articulos);
    $sentencia_articulos->bindParam(':niniciar', $iniciar, PDO::PARAM_INT);
    $sentencia_articulos->bindParam(':narticulos', $articulo_x_pagina, PDO::PARAM_INT);
    $sentencia_articulos->execute();

    $resultado_articulos = $sentencia_articulos->fetchAll();
    ?>

    <?php
    include "fx-includes/cabecera/cabecera.php";

    ?>

    <div class="contenedor">

        <div class="grid-cuerpo">
        
            <section class="contenido">

            <?php include "fx-includes/contenido/noticias.php"; ?>

            
            
            </section>
        
            <aside class="relacion">

                <h1 class="titulos">Noticia nuevas</h1>
                <?php include "facilito_db/conexion.php"; 
                include "fx-includes/contenido/nuevos-en-noticias.php"; ?>
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