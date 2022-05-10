<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar datos</title>
</head>
<body>

<?php
include "./conexion.php";

if (isset($_POST["noticias"])) {

    $imagen1 = $_FILES['imagen']['name'];

    if($_FILES['imagen']['error']){

        switch($_FILES['imagen']['error']){
            case 1: // Error exceso de tamaño de archivo php.ini
                echo"Tamaño del Archivo excede lo permitido por el server";
            break;

            case 2: //Excede la directiva MAX_FILE
                echo "EL TAMAÑO DEL ARCHIVO EXCEDE";
            break;
            case 3: //El fichero fue solo parcialmente subido
                echo "Corrupción de archivo";
            break;
            case 4: //No se subio el fichero
                echo "No se envió archivo de imagen";
            break;
        }

    }else{
        echo "<br>Entrada correcta<br>";
        if ((isset($_FILES['imagen']['name'])&&($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

            $destino_de_ruta ="../fx-contenido/img/noticias/";

            move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta . $_FILES['imagen']['name']);

            echo "El archivo " . $_FILES['imagen']['name'] . " se ha copiado en el directorio de imagenes";
        }else{
            echo "El archivo no se ha podido copiar a imagenes";
        }
    }

    $Titulo = $_POST['campo_titulo'];
    $fecha= date("Y-m-d H:i:S");
    $descripcion = $_POST["area_descripcion"];
    $seo_d = $_POST["Seo_d"];


    $myconsulta ="INSERT INTO publicaciones (Titulo, Fecha, Descripcion, Imagen, Seo_d) 
    VALUES ('". $Titulo ."','". $fecha ."','". $descripcion ."', '". $imagen1 ."','".$seo_d."')";

    $resultado = mysqli_query($conexion, $myconsulta);

    /* Cerramos conexion */

    mysqli_close($conexion);

    echo "<br> Se ha agregado con éxito<br><br>";
}

?>

<center><h1>Noticias</h1></center>

<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data" name="form1">
    <table>
                <tr>
                    <td>Título: <label for="campo_titulo"></label></td>
                    <td><input type="text" name="campo_titulo" id="campo_titulo" /></td>
                </tr>
                <tr>
                    <td>Descripcion: <label for="area_comentarios"></label></td>
                    <td><textarea name="area_descripcion" id="area_descripcion" rows="10" cols="50"></textarea></td>
                </tr>
                <input type="hidden" name="MAX_TAM" value="2097152" />
                <tr>
                    <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td>
                </tr>
                <tr>
                    <td colspan="2" align="left"><input type="file" name="imagen" id="imagen" /></td>
                </tr>
                <tr>
                    <td>Seo Descripción: <label for="Seo_d"></label></td>
                    <td><input type="text" name="Seo_d" maxlength="160" id="Seo_d" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="noticias" id="btn_enviar" value="Enviar" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="../blog">Página de visualización del blog</a></td>
                </tr>
            </table>
</form>
    
</body>
</html>