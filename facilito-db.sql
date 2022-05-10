-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2021 a las 02:52:01
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `facilito-db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `idBlog` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(35) NOT NULL,
  `Seo_d` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`idBlog`, `Titulo`, `Fecha`, `Descripcion`, `Imagen`, `Seo_d`) VALUES
(6, 'Zara CSS | Paoo CSS', '2021-09-19 00:19:00', 'El día de hoy terminamos de hacer el sitio web con la versión mas estable de todas, ahora se dejará de darle soporte a JP Responsivo el día 20/09/21 ya que con la opción de Paoo CSS / Zara CSS ya puedes iniciar a programar de la mejor manera.<br>\r\nEsperamos que les guste esta versión mas actual, se ha dejado las paginas que no necesitaban un cambio igual, esperamos les guste programadores.😁<br>\r\nNos vemos en la siguiente entrega de nuestros frames.👍', 'css logo.webp', 'Te presentamos la nueva versión de JOSPROX DEV llamada Paoo CSS / Zara CSS, el cuál nos permite programar de una mejor manera'),
(7, 'SQL y MySQL Diferencias', '2021-10-07 02:29:00', 'SQL y MySQL Diferencias<br><br>\r\nPara comenzar es importante aclarar que, SQL es un lenguaje para operar con bases de datos y MySQL es un sistema de gestión de bases de datos. <br><br>\r\n¿Qué es SQL?<br>\r\nSQL, de Structured Query Language o Lenguaje estructurado de consultas. Su nombre ya nos indica lo que es: un lenguaje de computación que se usa para trabajar en bases de datos. De hecho, es el lenguaje por excelencia en este campo, el estándar en bases de datos relacionales.<br>\r\nSus ventajas son su internacionalización, su flexibilidad para soportar bases de datos ejecutadas simultáneamente en distintos ordenadores y su transversalidad (no está vinculado a ningún fabricante).<br><br>\r\n¿Qué es MySQL?<br>\r\nHa quedado claro que SQL es un lenguaje. Pues MySQL es un RDMS o sistema de gestión de bases de datos relacionales. Hablamos de una aplicación que permite organizar los datos, esto es, crear y manipular dichas bases de datos. Se trata de un gestor de código abierto, el más utilizado a nivel mundial en esta materia.\r\n<br>\r\nMySQL es gratuito, dinámico, rápido, fácil de utilizar, es eficiente, seguro y permite interactuar con otros lenguajes, como Java o PHP.', 'sql.webp', '¿No sabes qué es SQL?¿Es lo mismo SQL y MySQL?¿Cuál es la diferencia de SQL y MySQL?, si no tienes ninguna idea, te explico en este artículo que es.'),
(8, '¿Qué es una página web? ¿Qué es un sitio web? ¿Qué es un portal web?', '2021-10-09 01:35:00', '<br>Una página web es una unidad de información de un espacio web, donde si nosotros entramos lo primero que encontramos es la página de inicio, llevando a la página de ese servicio, una página web es la unidad del sitio, mientras que un sitio web es la colección de muchas páginas web.<br><br>\r\nUn portal web es el punto de partida de navegación de los espacios, donde puede comenzar a conocer muchas ofertas de contenido, también puede ser un portal financiero porque su oferta de contenido es tan grande donde puede conseguirse información donde puedes tener una extensión de todo.<br><br>\r\nPodemos decir que:<br>\r\nPortal web >Sitio web > página web.<br><br>\r\nComo ejemplo de un portal es Google, como sitio web puede ser Facebook y una página web es el sitio del perfil, algo fijo.\r\n', 'web-design-g3e03bad7c_1920.webp', 'Te has preguntado que hay de diferencia entre una página web, un sitio web ó un portal web, yo te lo explico de una manera sencilla.'),
(9, 'Vue js', '2021-11-15 02:40:00', '<br>Bienvenidos, hoy hablaremos sobre Vue.JS, el framework progresivo el cuál muchos prefieren usar.<br><br>\r\nEn la actualidad hay 3 caminos principales para el front-end los cuales son Angular, React y Vue, para nosotros el mundo de Vue JS es el indicado para todos y todas, pero antes de comenzar me gustaría dejarte los siguientes conceptos:<br><br>\r\nFramework: Según Wikipedia es un conjunto estandarizado de conceptos, prácticas y criterios para enfocar un tipo de problemática particular que sirve como referencia, para enfrentar y resolver nuevos problemas de índole similar.<br><br>\r\nFramework web: Según Wikipedia un framework es diseñado para apoyar el desarrollo de sitios web dinámicos, aplicaciones web y servicios web.<br><br>\r\nTiene algunas cosas curiosas, entre ellos tu puedes crear un proyecto pequeño o iniciar con algún trabajo elaborado, por eso Vue JS no te obliga a cambiar todo el desarrollo de un proyecto.<br><br>\r\nLa progresividad de vue es muy buena, debido a su sintaxis la cuál muy fácil de entender, su enrutamiento te permite crear diferentes urls para tu aplicación web, también puedes crear un estado de datos, donde el usuario puede interactuar. Pongamos un ejemplo: si un usuario está comprando desde tu página web y agrega al carrito algo, vue lo mantendrá sin que se borre ese carrito.<br><br>\r\nPara comenzar con Vue JS necesitarás conocimientos de JavaScript, nada más.<br><br>\r\nLo que a los programadores les fascina de Vue JS es que tiene muy buenas prácticas, ya que combina partes de react y angular, debido que a tomado enfoques de ellos y los han implementado a su modo en Vue.<br><br>\r\nAsí que, qué estás esperas para probarlo, te invitamos a aprender de esta tecnología.<br>', 'vue.webp', 'En este artículo hablaremos sobre Vue.JS, el framework progresivo el cuál muchos prefieren usar, que esperas y ve lo bonito de Vue JS.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibros` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(35) NOT NULL,
  `Seo_d` varchar(160) NOT NULL,
  `PDF` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibros`, `Titulo`, `Fecha`, `Descripcion`, `Imagen`, `Seo_d`, `PDF`) VALUES
(4, 'Mi razón de ser... La razón que te amo Princesa', '2021-10-15 02:38:00', 'Descripción: ¿Alguna vez te has enamorado tanto que no quieres olvidarlo? Esa es mi historia.\r\nHoy en día soy esa persona, me he enamorado y no se que hacer, es mi primera vez que siento esto pero no se que hacer, tengo miedo a perderla.', 'mi razon de ser... princesa.webp', '¿Alguna vez te has enamorado tanto que no quieres olvidarlo? Esa es mi historia.', 'Mi razón de ser. Princesa.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id_not` int(11) NOT NULL,
  `titulos` varchar(25) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_not`, `titulos`, `descripcion`) VALUES
(1, 'Ultima act', 'La ultima actualización salió el 2 de noviembre del 2021.'),
(2, 'Ultima act 2', 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_cur`
--

CREATE TABLE `orden_cur` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_cur`
--

INSERT INTO `orden_cur` (`id`, `id_user`, `id_blog`) VALUES
(1, 11, 6),
(2, 11, 7),
(3, 11, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_not`
--

CREATE TABLE `orden_not` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_not` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_not`
--

INSERT INTO `orden_not` (`id`, `id_user`, `id_not`) VALUES
(1, 11, 1),
(2, 12, 1),
(3, 11, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `idPublicacion` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(35) NOT NULL,
  `Seo_d` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idPublicacion`, `Titulo`, `Fecha`, `Descripcion`, `Imagen`, `Seo_d`) VALUES
(11, 'JOSPROX Activo', '2021-09-19 00:21:00', 'Por fin, después de mucho, hemos podido activar el sitio web, le faltan varias cosas pero con el tiempo iremos actualizando el sitio web.<br>\r\nEsperamos que les guste el nuevo diseño, nos menos pronto.<br>\r\nAtte: JOSPROX | JP Internacional', 'profile.webp', 'Te presentamos la última actualización de JOSPROX MX, puedes saber más viendo este artículo'),
(12, 'Facilito F(x)', '2021-09-19 00:24:00', 'Hola a todos y todas, les tenemos buenas y malas noticias, la mala es que tuvimos que cambiar nuestro sitio web por completo, se espera que para el 8 de octubre el sitio web josprox.com vuelva a su normalidad (aunque muy probablemente puede ser que sea lanzado antes de esta fecha).🥺<br>\r\nLa buena noticia es que desde ahora se va a agregar más seguridad al sitio, con ello nace la nueva arquitectura llamada \"Facilito f(x)\", se preguntarán que es eso, pues al tener que crear nuestro sitio web de nuevo, pudimos convertir casi 500 mb en tan sólo 20mb.😳<br>\r\nEsto es posible gracias a la nueva versión de Zara CSS y Paoo CSS, facilito f(x) junto a varias tecnologías, pueden comprimir los códigos de una manera exagerada, sabemos que muchos están cansados de los media query ya que es muy molesto tenerlo, facilito f(x) deja por una parte muy poco trabajo a los media query, solo activandose conforme el dispositivo lo requiera.<br>\r\nFacilito f(x) será un \"motor\" donde dejaremos las grandes cargas excesivas y todo será óptimo, cabe destacar que esta versión puede utilizarse tanto en sitios web estáticos como dinámicos, asiendo posible una estabilidad. ❣️<br>\r\nCon ello, probablemente pongamos nuestro creador de sitios Zara CSS a todo público, ya que al ser una versión antigua, ya no tenemos la necesidad de tenerlo privado, de esta manera daríamos por cerrada la familia \"Dev JOSPROX\".🏆<br><br>\r\nNos vemos pronto con más novedades.😎', 'facilito.webp', 'Hemos creado Facilito f(x) , es la nueva estructura que tenemos preparada para el sitio web.'),
(13, 'Mejor velocidad', '2021-09-27 04:01:00', 'El día de hoy hemos mejorado nuestra velocidad y rendimiento, cambiamos muchos formatos establecidos que hacían lento el sitio web.<br>\r\nSi tu sufres algún cambio, favor de borrar tus cookies.<br>\r\nNos vemos pronto.<br>\r\nAtte: JOSPROX<br>', 'velocidad web.webp', 'El día de hoy hemos mejorado nuestra velocidad y rendimiento'),
(14, 'PWA', '2021-10-07 02:35:00', 'PWA<br>\r\nNuestro sistema ya se encuentra preparado para ofrecerles una versión de aplicación de nuestro sitio web. Donde ofrece lo más importante de nuestro sitio web.<br>\r\nCabe decir que es una versión beta, lo cuál puede tener a veces fallas. Favor de probarlo para checar su funcionamiento.<br><br>\r\nAtte: JOSPROX', 'PWA1.webp', 'Te presentamos nuestra versión beta de JOSPROX MX, esperamos poder ofrecerte lo mejor de nosotros, conoce un poco más de nuestro artículo'),
(18, 'josprox clasico', '2021-11-02 00:46:00', 'Después de mucho tiempo, se ha decidido cerrar la página de josprox Clásico debido a que ya ha pasado mucho tiempo sin uso.<br>\r\nSe espera cerrar el sitio web el 1ro de Diciembre del 2021 sin ningún preámbulo, recuerda este sitio web josprox.com seguirá siendo el sitio web principal, así que no hay de qué preocuparse.<br><br>\r\nAtte: JOSPROX', 'josprox clasico.webp', 'JOSPROX Clasico cerrará sus puertas este 1ro de diciembre del 2021, para más información entra aquí.'),
(19, 'Zara Builder Cierre', '2021-11-04 11:10:00', 'Después de mucho tiempo, se ha decidido que vamos a cerrar Zara Builder, debido a que ya todo lo centramos en josprox.com, de esta manera tendríamos todo en este sitio web.<br>\r\nSe espera que, para el 1ro de enero del 2022 el sitio dev.josprox.com al igual que josprox.space migren a josprox.com.<br>\r\nEsperamos les guste esta idea, nos vemos pronto.<br><br>\r\nAtte: JOSPROX', 'zara builder cierre.webp', 'Zara builder, paoo css y josprox responsivo se cambiarán al sitio web principal, conoce más en este artículo.'),
(20, 'Java Installer y VB6', '2021-11-08 05:02:00', 'Contenidos<br><br>\r\nEste es el apartado para que tú puedas descargar Java Installer, donde podrás instalar el JDK de java y visual  basic 6 en pocos pasos, esto fue creado para lo siguiente:<br><br>\r\n1.- Aquí podrás descargar java jdk y visual basic 6<br>\r\n2.- La pagina fue creada para ayudar a la comunidad y así facilitar su uso.<br>\r\n<br>\r\nLos links de descarga son los siguientes:<br>\r\nDescargar java installer x64: <a href=\"https://drive.google.com/file/d/1I7LtQHg8V9Fj7ekP7jTQE5e9vfJY1tfr/view?usp=sharing\"> Descargar Java Installer </a><br><br>\r\nDescargar Visual Basic Portable: <a href=\"https://mega.nz/file/E9thlRJT#JuFsynWVJTzlYiAUiXc7hvmPWDQ-smFoNuWFASOMR6s\"> Visual basic 6 portable </a><br><br>\r\nDescargar SOLO java JDK desde el sitio web original: <a href=\"https://www.oracle.com/mx/java/technologies/javase/javase-jdk8-downloads.html\">Pagina original de Java</a><br><br>', 'java-installer.webp', 'Estás buscando una herramienta para descargar Java JDK y además instalar VB6, este es el sitio web que estás buscando con nuestra herramienta Java Installer.'),
(21, 'parche 1.2', '2021-11-12 02:15:00', 'El día de hoy sacamos el parche 1.2, con él nosotros hemos solucionado muchos problemas con el rendimiento del servidor, esperamos mejorar en ciertas cosas y decidimos quitar algunos colores por ser un poco obsoletos y que dañaban el diseño.<br>\r\nEsperamos les guste los cambios que se han realizado, aunque son pequeños detalles pero nos sirven para ir cambiando la estructura del sitio web.<br>\r\nAtte:JOSPROX <br><br>', 'parche 1.2.webp', 'JOSPROX tiene una nueva versión mas estable, ven y conoce lo mejor de nuestro sitio web, entérate de todo desde josprox.com.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `Nombre` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `Nombre`, `Correo`, `usuario`, `password`, `Img`) VALUES
(11, 'Jose Luis Melchor Estrada', 'joss@int.josprox.com', 'josprox', '2b7dece1db9cea030242b61f343bd6870970ba26', 'main.webp'),
(12, 'Jose Luis Melchor Estrada', 'joss@int.josprox.com', 'Admin', '2b7dece1db9cea030242b61f343bd6870970ba26', 'main.webp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idBlog`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibros`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id_not`);

--
-- Indices de la tabla `orden_cur`
--
ALTER TABLE `orden_cur`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden_not`
--
ALTER TABLE `orden_not`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`idPublicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `orden_cur`
--
ALTER TABLE `orden_cur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `orden_not`
--
ALTER TABLE `orden_not`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idPublicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
