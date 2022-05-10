<?php

header("Content-Type: text/xml");

echo "<?xml version='1.0' encoding='utf-8' ?>" .
"<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>";
    echo "<url>
    <loc>https://modern.josprox.com</loc>
    <changefreq>daily</changefreq>
    <priority>"."1.0"."</priority>
 </url>";

 echo "<url>
			<loc>https://modern.josprox.com/contacto</loc>
			<changefreq>weekly</changefreq>
			<priority>"."0.8"."</priority>
		  </url>";
echo "<url>
          <loc>https://modern.josprox.com/creador</loc>
          <changefreq>weekly</changefreq>
          <priority>"."0.8"."</priority>
        </url>";
        echo "<url>
        <loc>https://modern.josprox.com/politicas</loc>
        <changefreq>weekly</changefreq>
        <priority>"."0.8"."</priority>
      </url>";
	
    

    echo "</urlset>";
?>