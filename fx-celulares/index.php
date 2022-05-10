<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - celulares</title>
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
                        </ul>
                </div>
    
                <div class="compra">
                    <button onclick = "location='../'">Sitio web</button>
                </div>
    
            </nav>
        </header>

</div>

    
    <div id="contenido">
        
    <?php require "../facilito_db/conexion.php"; ?>
<div class="contenedor">
    <br><br><br><br>
    <div class="espaciado"><h2 class="titulos">Reciente</h2></div>
        <?php
        $miconsulta1 = "SELECT * FROM publicaciones ORDER BY Fecha DESC LIMIT 3 ";

        if ($resultado = mysqli_query($miconexion, $miconsulta1)) {
            while ($registro = mysqli_fetch_array($resultado)) {
                echo '
        <div class="tarjetas-uso">
        ';

                if ($registro['Imagen'] != "") {
                    echo "<div class='img-trj'>";
                    echo "<a  href='../notas?Titulo=" . $registro['Titulo'] . "'>" . "<img src='../fx-contenido/img/noticias/" . $registro['Imagen'] . "' ></a>";
                    echo "</div>";
                }
                echo '<div class="contenido-trj">';
                echo "<a  href='../notas?Titulo=" . $registro['Titulo'] . "' ><h3 class='antesubtitulos'>" . $registro["Titulo"] . "</h3></a>";
                echo '<span> '.$registro['Fecha'].' </span>'; 
                echo "<p class='leer-mas'>" . $registro["Descripcion"] . "</p>";
                echo '</div>';

                echo "</div>";
            }
        }
        ?>
        <?php
        $miconsulta2 = "SELECT * FROM blog ORDER BY Fecha DESC LIMIT 3 ";

        if ($resultado = mysqli_query($miconexion, $miconsulta2)) {
            while ($registro = mysqli_fetch_array($resultado)) {
                echo '
        <div class="tarjetas-uso">
        ';

                if ($registro['Imagen'] != "") {
                    echo "<div class='img-trj'>";
                    echo "<a  href='../post?Titulo=" . $registro['Titulo'] . "'>" . "<img src='../fx-contenido/img/blog/" . $registro['Imagen'] . "' ></a>";
                    echo "</div>";
                }
                echo '<div class="contenido-trj">';
                echo "<a  href='../post?Titulo=" . $registro['Titulo'] . "' ><h3 class='antesubtitulos'>" . $registro["Titulo"] . "</h3></a>";
                echo '<span> '.$registro['Fecha'].' </span>';
                echo "<p class='leer-mas'>" . $registro["Descripcion"] . "</p>";
                echo '</div>';

                echo "</div>";
            }
        }
        mysqli_close($miconexion);
        ?>
    </div>
    </div>
    
</body>
</html>