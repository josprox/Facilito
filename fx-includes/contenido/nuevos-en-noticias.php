
<?php

$miconsulta = "SELECT * FROM publicaciones ORDER BY Fecha DESC LIMIT 2 ";

if($resultado=mysqli_query($miconexion,$miconsulta)){
  while($registro = mysqli_fetch_array($resultado)){

      echo '
      <div class="trj-medios">
      ';

      if($registro['Imagen']!=""){
          echo "<div class='trj-img'>";
      echo "<a  href='notas?Titulo=" . $registro['Titulo'] . "'>" . "<img alt=".$registro['Titulo']." src='fx-contenido/img/noticias/" . $registro['Imagen'] . "' ></a>";
      echo "</div>";
      }
      echo '<div class="trj-txt">';//NO TOCAR
      echo "<a  href='notas?Titulo=" . $registro['Titulo'] . "' ><h1>" . $registro["Titulo"] . "</h1></a>";
      echo "<p>" . $registro["Seo_d"] . "</p><br>";
      echo "<a href='notas?Titulo=" . $registro['Titulo'] . "' ><i class='fas fa-info-circle'></i> Leer más...</a>";
      echo '</div>';

    echo "</div>";
  }
}

?>