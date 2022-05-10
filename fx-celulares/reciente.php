<?php require "../facilito_db/conexion.php"; ?>
<div class="contenedor">
    <br><br><br><br>
    <div class="espaciado">
        <h2 class="titulos">Reciente</h2>
    </div>
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