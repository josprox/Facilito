<?php

require_once "../facilito_db/Base_DD.php";

	define("host", "localhost");
    define("usuario", $usuario);
    define("contraseña", $contraseña);
    define("Base_de_datos", $base);
 
    $miconexion = new mysqli(
        constant("host"),
        constant("usuario"),
        constant("contraseña"),
        constant("Base_de_datos")
    );

    $miconexion->set_charset("utf8");

    if(!$miconexion){
        echo "La conexion falló a la base";

        exit();
    }

$sql3 = "SELECT * FROM libros ORDER BY Fecha DESC";

$resultados3 = $miconexion->query($sql3);

header("Content-Type: text/xml");

echo "<?xml version='1.0' encoding='utf-8' ?>" .
"<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>";
    
    echo "<url>
        <loc>https://modern.josprox.com/libros?pagina=1</loc>
        <changefreq>weekly</changefreq>
        <priority>"."0.6"."</priority>
      </url>";

    if ($resultados3->num_rows > 0) {
 
	    while($row = $resultados3->fetch_assoc()) {
 
	    	echo "<url>
					<loc>https://modern.josprox.com/leer?Titulo=". $row["Titulo"]. "</loc>
					<changefreq>weekly</changefreq>
					<priority>"."0.5"."</priority>
				  </url>";
	    }
 
	}else {
	    echo "0 resultados";
	}

    echo "</urlset>";

    $miconexion->close(); 
?>