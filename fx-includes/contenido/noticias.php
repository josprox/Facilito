<h1 class="titulos">Noticias</h1>
                
            <?php foreach ($resultado_articulos as $registro): ?>

              <div class="trj-medios1">
    <?php if ($registro['Imagen'] != "") {
        echo "<div class='trj-img'>";
        echo "<a  href='notas?Titulo=" . $registro['Titulo'] . "'>" . "<img alt='".$registro['Titulo']."' src='fx-contenido/img/noticias/" . $registro['Imagen'] . "' ></a>";
        echo "</div>";
    } ?>
    <div class="trj-txt">
        <?php echo "<a  href='notas?Titulo=" . $registro['Titulo'] . "' ><h1>" . $registro["Titulo"] . "</h1></a>"; 
        echo "<span>" . $registro["Fecha"] . "</span>";
        echo "<p>" . $registro["Seo_d"] . "</p>";
        echo "<a href='notas?Titulo=" . $registro['Titulo'] . "' ><i class='fas fa-info-circle'></i> Leer más...</a>";
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
      <a class="page-link" href="noticias?pagina=<?php echo $i + 1; ?>">
      <?php echo $i + 1; ?>
    </a></li>
    <?php endfor; ?>

    <li class="page-item
    <?php echo $_GET["pagina"] >= $paginas ? 'disabled' : ''; ?>
    ">
      <a class="page-link" href="noticias?pagina=<?php echo $_GET["pagina"] + 1; ?>">
      <i class="fas fa-angle-right"></i>
    </a>
  </li>
  </ul>
</div>
</center>