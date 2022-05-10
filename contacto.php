<!DOCTYPE html>
<html lang="es-MX">
<head>
    <?php include "fx-includes/metas/metas.php"; ?>
    <title>Contacto | JOSPROX</title>
    <meta name="description" content="Si deseas contactarme, pudes hacerlo en este sitio web."/>
</div>
</head>
<body>

    <?php
    include "fx-includes/cabecera/cabecera.php";

    ?>
    
    <div class="contenedor">

        <div class="grid-contacto">
        
            <section class="contenido">
                <div class="contact-form12">
                  <h1 class="logo12">Forma de <span>contacto</span></h1>
                  <form action="fx-plugins/smtp/correo.php" method="post">
                      <p>
                          <label>Nombre</label>
                          <input type="text" name="nombre" required>
                      </p>
                      <p>
                          <label>Apellidos</label>
                          <input type="text" name="apellidos" required>
                      </p>
                      <p>
                          <label>Correo</label>
                          <input type="email" name="correo" required>
                      </p>
                      <p>
                          <label>Asunto</label>
                          <input type="text" name="Asunto" required>
                      </p>
                      <p class="block">
                         <label>Mensaje</label> 
                          <textarea name="Mensaje" rows="3" required></textarea>
                      </p>
                      <p class="block">
                          <input type="submit" class="buttonpro" value="enviar">
                      </p>
                  </form>
              </div>
            </section>
        
        </div>
    </div>
    <?php include "fx-includes/footer/footer.php"; include "fx-includes/script/script.php"; ?>
</body>
</html>