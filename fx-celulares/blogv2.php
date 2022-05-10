<!DOCTYPE html>
<html lang="es-MX">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="fx-contenido/css/facilito-fx-cel.css">
    <meta name="description" content="Esta es la zona de celulares y descargas.">
    <link rel="shortcut icon" href="../fx-contenido/img/JOSPROX.webp" type="image/x-icon">
    <script src="https://kit.fontawesome.com/c127faa481.js" crossorigin="anonymous"></script>

    <meta name="theme-color" content="#262629">
    <meta name="MobileOptimized" content="width">

    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    
		<script>
			$(document).ready(function(){
	    		$('#reciente').click(function(){
	       		$("#contenido").load("reciente");
	    									 });

	    		$('#noticias').click(function(){
	       		$("#contenido").load("noticias");
	    									 });

	    		$('#blog').click(function(){
	       		$("#contenido").load("blog");
	    									 });
										});
		</script>

<?php 

if (!$_GET) {
  header('location:blog?pagina=1');
}

?>
    <title>Noticias | JOSPROX</title>

    <?php
    include "facilito_db/pdo/config.php";

    //llamar a todos los articulos
    $sql = 'SELECT * FROM blog';
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
      header('location:blogv2?pagina=1');
  }    


    ?>

</head>
<body>

<div>
    <header class="header-flex">
            <nav class="nav-flex">
    
                <div class="menu">
                    <div class="logo">
                        <img src="../fx-contenido/img/logos-nuevos/logo.webp" alt="">
                    </div>
                </div>
    
                <div class="links-cel">
                    <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
                        <input type="checkbox" id="check">
                        <ul class="links">
                            <li><a id="reciente">Lo más nuevo</a></li>
                            <li><a id="blog">Blog</a></li>
                            <li><a id="noticias">Noticias</a></li>
                            <li><a href="#Contacto">Contacto</a></li>
                        </ul>
                </div>
    
                <div class="compra">
                    <button onclick = "location='../'">Sitio web</button>
                </div>
    
            </nav>
        </header>

</div>

    <div id="contenido">

    <?php

    $iniciar = ($_GET['pagina'] - 1) * $articulo_x_pagina;
    //echo $iniciar;

    $sql_articulos = 'SELECT * FROM blog ORDER BY Fecha DESC LIMIT :niniciar,:narticulos';
    $sentencia_articulos = $pdo->prepare($sql_articulos);
    $sentencia_articulos->bindParam(':niniciar', $iniciar, PDO::PARAM_INT);
    $sentencia_articulos->bindParam(':narticulos', $articulo_x_pagina, PDO::PARAM_INT);
    $sentencia_articulos->execute();

    $resultado_articulos = $sentencia_articulos->fetchAll();
    ?>

    <div class="contenedor">
      <br><br><br><br>

      <div class="espaciado">
        <h1 class="titulos">Blog</h1>
      </div>
                
                <?php foreach ($resultado_articulos as $registro): ?>
    
    <div class="tarjetas-uso">
    <?php if ($registro['Imagen'] != "") {
            echo "<div class='img-trj'>";
            echo "<a  href='../post?Titulo=" . $registro['Titulo'] . "'>" . "<img src='../fx-contenido/img/blog/" . $registro['Imagen'] . "' ></a>";
            echo "</div>";
        } ?>
        <div class="contenido-trj">
        <?php echo "<a  href='../post?Titulo=" . $registro['Titulo'] . "' ><h3 class='antesubtitulos'>" . $registro["Titulo"] . "</h3></a>"; ?>
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
          <a class="page-link" href="noticias?pagina=<?php echo $_GET["pagina"] - 1; ?>">
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
    </div>
    </div>
    <?php include "fx-includes/script/script.php"; ?>
</body>
</html>