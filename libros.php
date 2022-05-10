<!DOCTYPE html>
<html lang="es-MX">
<head>

<?php if (!$_GET) {
    header('location:libros?pagina=1');
} ?>
    
    <title>Libros | JOSPROX</title>

    <?php
    include "fx-includes/metas/metas.php";
    include "facilito_db/pdo/config.php";

    //llamar a todos los articulos
    $sql = 'SELECT * FROM libros';
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
        header('location:libros?pagina=1');
    }
    ?>
    <meta name="description" content="¿Quieres leer un libro? en JOSPROX te presentamos libros de mi autoría, donde te podemos asegurar que nunca te aburrirás."/>

</head>
<body>

    <?php
    $iniciar = ($_GET['pagina'] - 1) * $articulo_x_pagina;
    //echo $iniciar;

    $sql_articulos = 'SELECT * FROM libros ORDER BY Fecha DESC LIMIT :niniciar,:narticulos';
    $sentencia_articulos = $pdo->prepare($sql_articulos);
    $sentencia_articulos->bindParam(':niniciar', $iniciar, PDO::PARAM_INT);
    $sentencia_articulos->bindParam(':narticulos', $articulo_x_pagina, PDO::PARAM_INT);
    $sentencia_articulos->execute();

    $resultado_articulos = $sentencia_articulos->fetchAll();
    ?>

    <?php include "fx-includes/cabecera/cabecera.php"; ?>

    <div class="contenedor">

        <div class="grid-cuerpo">
        
            <section class="contenido">

            <h1 class="titulos">Libros</h1>
                
            <?php foreach ($resultado_articulos as $registro): ?>

              <div class="trj-medios1">
    <?php if ($registro['Imagen'] != "") {
        echo "<div class='trj-img'>";
        echo "<a  href='leer?Titulo=" . $registro['Titulo'] . "'>" . "<img alt='".$registro['Titulo'] ."' src='fx-contenido/img/libros-leer/" . $registro['Imagen'] . "' ></a>";
        echo "</div>";
    } ?>
    <div class="trj-txt">
        <?php
        echo "<a  href='leer?Titulo=" . $registro['Titulo'] . "' ><h1>" . $registro["Titulo"] . "</h1></a>";
        echo "<span>" . $registro["Fecha"] . "</span>";
        echo "<p>" . $registro["Seo_d"] . "</p>";
        echo "<a href='leer?Titulo=" . $registro['Titulo'] . "' ><i class='fas fa-info-circle'></i> Leer más...</a>";
        ?>
      </div>
    </div>

<?php endforeach; ?>

<center>
<div aria-label="Page navigation example ">
  <ul class="pagination">
    <li class="page-item
    <?php echo $_GET["pagina"] <= 1 ? 'disabled' : ''; ?>
    "
    >
      <a class="page-link" href="noticias?pagina=<?php echo $_GET["pagina"] - 1; ?>">
      <i class="fas fa-angle-left"></i>
      </a>
    </li>

    <?php for ($i = 0; $i < $paginas; $i++): ?>

    <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : ''; ?>">
      <a class="page-link" href="libros?pagina=<?php echo $i + 1; ?>">
      <?php echo $i + 1; ?>
    </a></li>
    <?php endfor; ?>

    <li class="page-item
    <?php echo $_GET["pagina"] >= $paginas ? 'disabled' : ''; ?>
    ">
      <a class="page-link" href="libros?pagina=<?php echo $_GET["pagina"] + 1; ?>">
      <i class="fas fa-angle-right"></i>
    </a>
  </li>
  </ul>
</div>
</center>
            
            
            </section>
        
            <aside class="relacion">

                <h1 class="titulos">Noticia nuevas</h1>
                <?php
                include "facilito_db/conexion.php";
                include "fx-includes/contenido/nuevos-en-noticias.php";
                ?>
                <h1 class="titulos">Nuevo en blog</h1>
                <?php
                include "fx-includes/contenido/nuevos-en-blog.php";
                mysqli_close($miconexion);
                ?>

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
    <?php
    include "fx-includes/footer/footer.php";
    include "fx-includes/script/script.php";
    ?>
</body>
</html>