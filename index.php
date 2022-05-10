<!DOCTYPE html>
<html lang="es-MX">
<head>
    <?php include "fx-includes/metas/metas.php"; ?>
    <title>Inicio | JOSPROX</title>
    <meta name="description" content="Bienvenidos a JOSPROX. Hola, te presento mi mundo de programación, 
    aquí encontrarás todo de mi, al igual que noticias, y mi propio blog."/>
</head>
<body>

<?php
    include "fx-includes/cabecera/cabecera.php";

    ?> 

    <div class="contenedor">

        <div class="grid-cuerpo">
        
            <section class="contenido">

            <!-- Presentación -->
                <h1 class="titulos">Bienvenidos a JOSPROX</h1>

                <div class="presentacion-bloque">
                    <div class="primer-presentacion">
                        <img alt="Melchor Estrada José Luis" src="fx-contenido/img/Melchor Estrada José Luis.webp">
                    </div>
                    <div class="segunda-presentacion">
                        Hola, te presento mi mundo de programación, aquí encontrarás todo de mi, 
                        al igual que noticias, y mi propio blog. Con ello busco convencerte de programar
                        de manera fácil y rápida, tambien puedes saber un poco más de mi en el siguiente botón.
                        <a class="boton3D" href="creador">ver</a>
                    </div>
                </div>
                <!-- Tarjetas -->
                <div class="tarjetas-bloque">

                    <div class="tarjeta1">
                        <div class="imagen-tarjeta">
                            <img alt="Paoo CSS" src="fx-contenido/img/paoo css.webp" alt="">
                        </div>
                        <div class="texto-tarjeta">
                            <h2 class="subtitulos">Paoo CSS</h2>
                            <p>Esta es una de nuestras versiones de programación, en él encontrarás
                            muchas formas de programar de una manera sencilla, ven y conócelo.</p>
                            <a href="https://josprox.space" class="leer-mas"><i class="far fa-question-circle"></i> Más información...</a>
                        </div>
                    </div>
                    <div class="tarjeta2">
                        <div class="imagen-tarjeta">
                            <img alt="Radio JOSS" src="fx-contenido/img/radio-josprox.webp" alt="">
                        </div>
                        <div class="texto-tarjeta">
                            <h2 class="subtitulos">Radio JOSS</h2>
                            <p>Si lo tuyo es escuchar música, aquí te ofrecemos una gran variedad de
                                música para no aburrirte de manera gratuita sin anuncios.</p>
                            <a href="https://radio.josprox.com/" class="leer-mas"><i class="fas fa-music"></i> Vamos allá</a>
                        </div>
                    </div>
                    <div class="tarjeta3">
                        <div class="imagen-tarjeta">
                            <img alt="Mi razón de ser... La razón que te amo princesa" src="fx-contenido/img/libros/mi razon de ser... princesa.webp" alt="">
                        </div>
                        <div class="texto-tarjeta">
                            <h2 class="subtitulos">Libros</h2>
                            <p>¿Te gusta leer? pues te ofrezco una sección de mis libros, donde podrás
                                seguir mi historia de vida, espero les guste mucho.</p>
                            <a href="libros" class="leer-mas"><i class="fas fa-book-reader"></i> Hora de leer...</a>
                        </div>
                    </div>
                    
                </div>

                <!-- Información -->

                <div class="divisor-2">
                    <div class="contenido1-divisor">
                        <h2 class="subtitulos">Mis conocimientos</h2>
                        Yo puedo crear increibles aplicaciones web, tengo la posibilidad de trabajar sin 
                        ningún frame ya que así me acomodo mejor, pero en caso de necesitarlo si los se usar,
                        también tengo proyectos que puedes visualizar en 
                        <a href="https://dev.josprox.com" class="leer-mas">dev</a>.<br>
                        Si necesitas algun trabajo no dudes en contactarme, 
                        <a href="contacto" class="leer-mas">estoy a su dispocisión</a> y dispuesto
                        a trabajar.
                    </div>
                    <div class="contenido2-divisor">
                        <h2 class="antesubtitulos">Lenguajes que uso</h2>
                        <div class="contenedor-min">
                            <img src="fx-contenido/img/html.webp" alt="HTML JOSPROX" class="lenguajes-min">
                            <img src="fx-contenido/img/css.webp" alt="CSS JOSPROX" class="lenguajes-min">
                            <img src="fx-contenido/img/js.webp" alt="JS JOSPROX" class="lenguajes-min">
                            <img src="fx-contenido/img/php.webp" alt="PHP JOSPROX" class="lenguajes-min">
                        </div>
                        <p class="parrafo-especial">entre otros</p>
                    </div>
                </div>
                
            </section>
        
            <aside class="relacion">
                <h1 class="titulos">Noticia nuevas</h1>
                <?php
                include "facilito_db/conexion.php";
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