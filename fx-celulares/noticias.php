<!DOCTYPE html>
<html lang="es-MX">
<head>

<?php 

if (!$_GET) {
  header('location:noticias?pagina=1');
}

?> 
    <title>Noticias | JOSPROX</title>

    <?php
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
    <div class="contenedor">

    <br><br><br><br>

    <div class="espaciado">
      <h1 class="titulos">Noticias</h1>
    </div>
                
                <?php foreach ($resultado_articulos as $registro): ?>
    
    <div class="tarjetas-uso">
        <?php if ($registro['Imagen'] != "") {
            echo "<div class='img-trj'>";
            echo "<a  href='../notas?Titulo=" . $registro['Titulo'] . "'>" . "<img src='../fx-contenido/img/noticias/" . $registro['Imagen'] . "' ></a>";
            echo "</div>";
        } ?>
        <div class="contenido-trj">
            <?php echo "<a  href='../notas?Titulo=" . $registro['Titulo'] . "' ><h3 class='antesubtitulos'>" . $registro["Titulo"] . "</h3></a>"; ?>
          <?php
          echo '<span> '.$registro['Fecha'].' </span>';
          echo "<p class='leer-mas'>" . $registro["Descripcion"] . "</p>";
          echo '</div>';
          ?>
      </div>
    
    <?php endforeach; ?>
    
    <center>
    <nav aria-label="Page navigation example ">
      <ul class="pagination">
        <li class="page-item
        <?php echo $_GET["pagina"] <= 1 ? 'disabled' : ''; ?>
        "
        >
          <a class="page-link" href="noticiasv2?pagina=<?php echo $_GET["pagina"] - 1; ?>">
          <i class="fas fa-angle-left"></i>
          </a>
        </li>
    
        <?php for ($i = 0; $i < $paginas; $i++): ?>
    
        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : ''; ?>">
          <a class="page-link" href="noticiasv2?pagina=<?php echo $i + 1; ?>">
          <?php echo $i + 1; ?>
        </a></li>
        <?php endfor; ?>
    
        <li class="page-item
        <?php echo $_GET["pagina"] >= $paginas ? 'disabled' : ''; ?>
        ">
          <a class="page-link" href="noticiasv2?pagina=<?php echo $_GET["pagina"] + 1; ?>">
          <i class="fas fa-angle-right"></i>
        </a>
      </li>
      </ul>
    </nav>
    </center>
    
    </div>
    <?php include "fx-includes/script/script.php"; ?>
</body>
</html>