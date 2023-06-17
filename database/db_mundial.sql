-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-1995 a las 20:40:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_mundial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `posicion` varchar(250) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `id_pais` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `apellido`, `descripcion`, `posicion`, `foto`, `id_pais`) VALUES
(1, 'Damian Emiliano', 'Martinez', 'Damián Emiliano Martínez, conocido comúnmente como «Dibu» Martínez, es un futbolista argentino que se desempeña como arquero en el Aston Villa de la Premier League de Inglaterra. Es internacional absoluto con la selección argentina desde 2021', 'Arquero', 'https://s.hs-data.com/bilder/spieler/gross/192464.jpg', 1),
(2, 'Gonzalo Ariel \r\n\r\n', 'Montiel', 'Gonzalo Ariel Montiel es un futbolista argentino que juega como defensa en el Sevilla F.C de la Primera División de España', 'Defensa', 'https://images.pagina12.com.ar/styles/focal_content_1200x1050/public/2023-02/698649-whatsapp-20image-202023-02-17-20at-2018-26-25.jpeg?h=34bbd072&itok=lcNOmQJi', 1),
(3, 'Nicolás Hernán Gonzalo ', 'Otamendi ', 'Nicolás Hernán Gonzalo Otamendi es un futbolista argentino que juega como defensory su actual equipo es el S. L. Benfica de la Primeira Liga', 'Defensa', 'https://red92com.nyc3.cdn.digitaloceanspaces.com/adjuntos/galerias/000/124/0000124209.jpg', 1),
(4, 'Nicolás Alejandro ', 'Tagliafico', 'Nicolás Alejandro Tagliafico es un futbolista argentino que juega como defensor en el Olympique de Lyon de la Ligue 1', 'Defensor', 'https://media.tycsports.com/files/2022/12/13/515791/nicolas-tagliafico_862x485.webp', 1),
(5, 'Rodrigo Javier ', 'De Paul', 'Rodrigo Javier de Paul es un futbolista argentino que juega como centrocampista en el Atlético de Madrid, de la Primera División de España. Su carrera profesional comenzó en Racing Club en el año 2013', 'Medio campista', 'https://depor.com/resizer/woIrIls3EyUFydnHuxDBLIV7_Bk=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/NZ3NTYXRVFBRLINNMDYS4HD75Q.jfif', 1),
(6, 'Enzo Jeremías ', 'Ferndandez', 'Enzo Jeremías Fernández es un futbolista argentino que juega como centrocampista en el Chelsea F. C. de la Premier League. Su carrera como futbolista profesional comenzó en el 2020, en Club Atlético River Plate.', 'Medio campista', 'https://elcomercio.pe/resizer/_4rFUT07r-ONDCJJ40MyuFbrrhg=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/DOIITTYODVCL5MQQ3VKM6EL5TI.jpg', 1),
(7, 'Lautaro Javier ', 'Martinez', 'Lautaro Javier Martínez Gutiérrez es un futbolista argentino que juega como delantero en el Inter de Milán de la Serie A. Inició su carrera en su natal Argentina, debutando profesionalmente en 2015 con Racing Club.', 'Delantero', 'https://fotos.perfil.com/2022/11/22/trim/720/410/lautaro-martinez-1457647.jpg?webp', 1),
(8, 'Cristian Gabriel', 'Romero', 'Cristian Gabriel Romero, conocido como Cuti Romero, es un futbolista argentino. Juega de defensor y su equipo actual es el Tottenham Hotspur F. C. de la Premier League', 'Defensor', 'https://www.infobae.com/new-resizer/pW5GApmKayzw-G-kVxDlVpWGRro=/992x606/filters:format(webp):quality(85)/cloudfront-us-east-1.images.arcpublishing.com/infobae/INB6THGINNCFLNAEGADWU54EW4.JPG', 1),
(9, 'Julián', 'Alvarez', 'Julián Álvarez es un futbolista argentino que juega como delantero en el Manchester City F. C. de la Premier League. Surgió en Club Atlético Calchín, pero se formó y debutó profesionalmente en C. A. River Plate. En esta etapa ganó seis títulos profesionales.', 'Delantero', 'https://www.elgrafico.com.ar/media/cache/pub_news_details_large/media/i/74/58/74586b775de2f13315295265ddb40d4c8fb332fc.jfif', 1),
(10, 'Lionel Andrés', 'Messi', 'Lionel Andrés Messi Cuccittini, conocido como Leo Messi, es un futbolista argentino que juega como delantero o centrocampista. Jugador histórico del Fútbol Club Barcelona, al que estuvo ligado veinte años, desde 2021 integra el plantel del Paris Saint-Germain de la Ligue 1 de Francia.', 'Delantero', 'https://library.sportingnews.com/styles/crop_style_16_9_desktop_webp/s3/2022-12/Lionel%20Messi%20-%20World%20Cup%20Final%202022%20penalty%20celebration%20vs%20France%20-%20181222-16x9.jpg.webp?itok=VSk6gUGD', 1),
(11, 'Ángel Fabián ', 'Di Maria', 'Ángel Fabián Di María es un futbolista argentino. Juega de extremo en la Juventus de Turín de la Serie A de Italia. Es también internacional con su selección desde el año 2008.', 'Delantero', 'https://www.elgrafico.com.ar/media/cache/pub_news_details_large/media/i/11/b9/11b9852c03b580b842151c17ddbdb3c80b516384.jpg', 1),
(12, 'Alexis ', 'Mac Allister', 'Alexis Mac Allister es un futbolista argentino. Se desempeña como mediocampista ofensivo o volante mixto y su equipo es el Brighton & Hove Albion de la Premier League de Inglaterra', 'Medio campista', 'https://media.tycsports.com/files/2023/01/03/521512/alexis-mac-allister-seleccion-argentina_862x485.webp?v=1', 1),
(17, 'Hugo Hadrien Dominique', 'Lloris', 'Hugo Hadrien Dominique Lloris es un futbolista francés que juega como portero en el Tottenham Hotspur F. C. de la Premier League. Fue internacional con la selección de Francia en 145 partidos. Con la selección fue campeón de la Copa Mundial de 2018 y la Liga de Naciones 2020-21.\r\n', 'Arquero', 'https://www.elgrafico.com.ar/media/cache/pub_news_details_large/media/i/7c/21/7c21c62ae780473404730ad3b116d1a86227b870.jfif', 2),
(18, 'Lucas Francois Bernard', 'Hernandez', 'Lucas Francois Bernard Hernandez, más conocido como Lucas Hernández, es un futbolista francés que juega como defensa en el Bayern de Múnich de la 1. Bundesliga de Alemania. Además es internacional absoluto con la selección francesa. Es hermano mayor del también futbolista Theo Hernández.', 'Defensor', 'https://as00.epimg.net/tikitakas/imagenes/2018/10/17/portada/1539765341_884064_1539765555_noticia_normal.jpg', 2),
(19, 'Benjamin Jacques Marcel ', 'Pavard', 'Benjamin Jacques Marcel Pavard es un futbolista francés que juega en la posición de defensa en el Bayern de Múnich de la Bundesliga de Alemania.', 'Defensor', 'https://digitalhub.fifa.com/transform/da501e75-e1c6-4db6-8d90-1af57d0a3d2a/France-s-defender-Benjamin-Pavard-celebrates-the-win-in-the-UEFA-EURO-2020-Group-F-football-match-between-France-and-Germany-at-the-Allianz-Arena-in-Munich-on-June-15-2021-Photo-by-Matthias-Schrader-POOL-AFP-Photo-by-MATTHIAS-SCHRADER-POOL-AFP-via-Getty-Images?io=transform:fill,height:485,width:746&quality=100', 2),
(20, ' Raphaël Xavier ', 'Varane', ' Raphaël Xavier Varane es un futbolista francés de origen martiniqués que juega como defensa en el Manchester United F. C. de la Premier League de Inglaterra. Formado en las categorías inferiores del Racing Club de Lens, debutó en 2010 con el equipo del Paso de Calais en la Ligue 1, con apenas 17 años.', 'Defensor', ' https://estaticos-cdn.sport.es/clip/08a25de8-3c24-40c0-9e95-c78fb71e51dd_media-libre-aspect-ratio_default_0.jpg', 2),
(21, ' Eduardo Celmi ', ' Camavinga ', ' Eduardo Celmi Camavinga es un futbolista francés nacido en Angola,  que juega como centrocampista en el Real Madrid C. F. de la Primera División de España. Además de la francesa, posee la nacionalidad angoleña —por nacimiento— y la congoleña —por ascendencia—', 'Medio campista', ' https://depor.com/resizer/JcvsLGqlfTLjUOWLX5n8A6nXAN4=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/AEP4G32CONEBLIBT4CP2NE7XOI.jpg ', 2),
(22, ' Aurélien Djani', ' Tchouaméni ', ' Aurélien Djani Tchouaméni es un futbolista francés que juega como centrocampista en el Real Madrid C. F. de la Primera División de España.', 'Medio campista', ' https://media.tycsports.com/files/2022/06/07/437904/tchouameni-xavier-lainegetty-images_862x485.webp?v=2 ', 2),
(23, ' Adrien', ' Rabiot-Provost', ' Adrien Rabiot-Provost es un futbolista francés. Juega de centrocampista y su equipo es la Juventus de Turín de la Serie A.', 'Medio campista', ' https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blta46fb913fff14093/60dbc9665e51ad3b1d277ff4/1305f12004cca36b07f0935029cf48531782a1c7.jpg?auto=webp&format=pjpg&width=1080&quality=60 ', 2),
(24, ' Karim Mustafa ', 'Benzema', ' Karim Mustafa Benzema es un futbolista francés de ascendencia argelina que juega como delantero en el Real Madrid Club de Fútbol de la Primera División de España desde la temporada 2009-10. Fue internacional con selección de fútbol de Francia', 'Delantero', ' https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blte3ade1bfe6fcd20a/634d17b21f6f12784d5837da/GettyImages-1244015233.jpg?auto=webp&format=pjpg&width=1080&quality=60 ', 2),
(25, ' Masour Ousmane ', ' Dembélé', ' Masour Ousmane Dembélé es un futbolista francés que juega como delantero en el F. C. Barcelona de la Primera División de España. Nacido en Vernon, Francia, en el departamento de Eure, Dembélé inició su carrera en Rennes previamente a unirse al Borussia Dortmund en 2016', 'Delantero', ' https://www.fcbarcelona.com/photo-resources/2022/11/02/c065cb6b-56a0-42e5-b303-2e128eb6171f/07-OUSMANE_DEMBELE.jpg?width=640&height=400', 2),
(26, ' Antoine ', ' Griezmann ', ' Antoine Griezmann es un futbolista francés que juega como delantero en el Club Atlético de Madrid de la Primera División de España.', 'Delantero', ' https://upload.wikimedia.org/wikipedia/commons/d/d2/Antoine_Griezmann_2018.jpg ', 2),
(27, 'Kylian', ' Mbappé Lottin ', ' Kylian Mbappé Lottin es un futbolista francés que juega como delantero en el Paris Saint-Germain F. C. de la Ligue 1. Comenzó su carrera con el AS Mónaco de la liga francesa, haciendo su debut profesional en 2015, a los 16 años.', 'Delantero', ' https://es.coachesvoice.com/wp-content/uploads/2022/03/mbappemain-scaled.jpg ', 2),
(28, 'Benjamin Jacques Marcel ', 'Pavard', 'Benjamin Jacques Marcel Pavard es un futbolista francés que juega en la posición de defensa en el Bayern de Múnich de la Bundesliga de Alemania.', 'Defensor', 'https://digitalhub.fifa.com/transform/da501e75-e1c6-4db6-8d90-1af57d0a3d2a/France-s-defender-Benjamin-Pavard-celebrates-the-win-in-the-UEFA-EURO-2020-Group-F-football-match-between-France-and-Germany-at-the-Allianz-Arena-in-Munich-on-June-15-2021-Photo-by-Matthias-Schrader-POOL-AFP-Photo-by-MATTHIAS-SCHRADER-POOL-AFP-via-Getty-Images?io=transform:fill,height:485,width:746&quality=100', 2),
(29, 'Dominik', ' Livaković ', ' Dominik Livaković es un futbolista croata que juega como portero en el G. N. K. Dinamo de Zagreb de la Primera Liga de Croacia.', 'Arquero', ' https://media.tycsports.com/files/2022/12/08/514100/dominik-livakovic-croacia_862x485.webp?v=1', 3),
(30, 'Ivo', ' Grbić', ' Ivo Grbić es un futbolista croata. Juega de portero y su equipo es el Atlético de Madrid de la Primera División de España.', 'Arquero', ' https://assets.laliga.com/squad/2022/t175/p173268/2048x2225/p173268_t175_2022_1_001_000.png', 3),
(31, ' Domagoj', 'Vida', ' Domagoj Vida es un futbolista croata que juega como defensa en el AEK Atenas F. C. de la Superliga de Grecia y en la selección de su país.', 'Defensor', 'https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(webp):focal(1273x280:1275x278)/origin-imgresizer.eurosport.com/2020/11/12/2935471-60265388-2560-1440.jpg ', 3),
(32, ' Dejan', 'Lovren', ' Dejan Lovren es un futbolista croata. Juega de defensa en el Olympique de Lyon de la Ligue 1 de Francia. Lovren comenzó su carrera como futbolista profesional en 2006, jugando en el club de fútbol Dinamo Zagreb, de la Primera Liga de Croacia.', 'Defensa', ' https://e.rpp-noticias.io/xlarge/2020/09/08/541354_993633.jpg ', 3),
(33, ' Joško', 'Gvardiol', ' Joško Gvardiol es un futbolista croata que juega como defensa en el R. B. Leipzig de la 1. Bundesliga de Alemania.', 'Defensor', ' https://phantom-elmundo.unidadeditorial.es/3c08fe9a02cc18f3aca1e01d6f926622/resize/473/f/webp/assets/multimedia/imagenes/2022/12/11/16707748664993.jpg', 3),
(34, ' Marcelo', 'Brozović ', ' Marcelo Brozović es un futbolista croata que juega en la demarcación de centrocampista para el Inter de Milán de la Serie A.', 'Medio campista', ' https://assets-es.imgfoot.com/media/cache/1200x675/marcelo-brozovic-2223-1.jpg', 3),
(35, ' Luka', 'Modrić', ' Luka Modrić es un futbolista croata que desde 2012 juega como centrocampista en el Real Madrid C. F. de la Primera División de España. Fue ganador del Balón de Oro y obtuvo el Premio The Best al mejor jugador del mundo según la FIFA en 2018.', 'Medio campista', ' https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt2e6d86e4095385bb/642ad47b2808106ce90befb2/Modricc.jpg?auto=webp&format=pjpg&width=3840&quality=60 ', 3),
(37, ' Mateo', 'Kovačić ', ' Mateo Kovačić es un futbolista croata que juega como centrocampista en el Chelsea F. C. de la Premier League de Inglaterra.', 'Medio campista', ' https://assets-es.imgfoot.com/media/cache/1200x900/mateo-kovacic-2223.jpg', 3),
(38, ' Andrej', 'Kramarić', ' Andrej Kramarić es un futbolista croata que juega como delantero en el TSG 1899 Hoffenheim de la Bundesliga de Alemania.', 'Delantero', 'https://digitalhub.fifa.com/transform/e2305cef-0f63-4c4d-b3f5-a516888a337a/Andrej-Kramaric', 3),
(39, ' Ivan', 'Perišić', ' Ivan Perišić es un futbolista croata que juega de delantero o centrocampista en el Tottenham Hotspur F. C. de la Premier League de Inglaterra.', 'Delantero', ' https://img.bundesliga.com/tachyon/sites/2/2019/08/ivan-perisic-inter-fcb.jpg?crop=0px,0px,1920px,1080px', 3),
(40, ' Yassine', ' Bounou', ' Yassine Bounou, mejor conocido como Bono por la fonética de su apellido, es un futbolista marroquí. Juega como guardameta y su equipo es el Sevilla F. C. de la Primera División de España.', 'Arquero', ' https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2022/12/07/16703994577404.jpg', 4),
(41, ' Nayef', 'Aguerd', ' Nayef Aguerd es un futbolista marroquí que juega en la demarcación de defensa para el West Ham United F. C. de la Premier League', 'Defensa', ' https://i2-prod.football.london/west-ham-united-fc/article25328100.ece/ALTERNATES/s1200c/0_GettyImages-1412678361.jpg', 4),
(42, ' Achraf', 'Dari', ' Achraf Dari es un futbolista marroquí que juega como defensa en el Stade Brest 29 de la Ligue 1.', 'Defensa', ' https://assets-fr.imgfoot.com/media/cache/1200x900/modele-photo-centre-2-610c0d11d98e9.jpg', 4),
(43, ' Jawad', 'El Yamiq', ' Jawad El Yamiq es un futbolista marroquí que juega en la demarcación de defensa para el Real Valladolid C. F. de la Primera División de España.', 'Defensor', ' https://assets.laliga.com/squad/2022/t192/p241276/2048x2225/p241276_t192_2022_1_001_000.png', 4),
(44, ' Achraf', 'Hakimi Mouh ', ' Achraf Hakimi Mouh es un futbolista marroquí que juega como defensa en el Paris Saint-Germain F. C. de la Ligue 1 de Francia.', 'Defensor', ' https://a.espncdn.com/photo/2023/0303/r1138914_1296x729_16-9.jpg ', 4),
(45, ' Noureddine', 'Amrabat ', ' Noureddine Amrabat, conocido como Nordin Amrabat, es un futbolista marroquí que también posee la nacionalidad neerlandesa. Juega como delantero, es internacional con la selección nacional de Marruecos y su equipo es el AEK Atenas F. C. de la Superliga de Grecia.', 'Delantero', ' https://scontent.fmdq6-1.fna.fbcdn.net/v/t39.30808-6/315831126_664545185037820_1702818921955546545_n.jpg?stp=cp6_dst-jpg&_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=-Lp2Ipwqv6cAX_0hvNS&_nc_ht=scontent.fmdq6-1.fna&oh=00_AfDFHo_EDEY7pMz6p35ucVdOlqEZ_kBkPYwW8M4Pry6AaA&oe=647C7310', 4),
(46, ' Azzedine', 'Ounahi ', ' Azzedine Ounahi es un futbolista marroquí que juega de centrocampista en el Olympique de Marsella de la Ligue 1 de Francia', 'Medio campista', ' https://www.directvsports.com/__export/1675974004701/sites/dsports/img/2023/02/09/azzedine_ounahi.jpeg_1245337263.jpeg', 4),
(47, ' Abdelhamid', 'Sabiri', ' Abdelhamid Sabiri es un futbolista marroquí. Juega de centrocampista y su equipo es la U. C. Sampdoria de la Serie A de Italia.', 'Medio campista', ' https://cdn.vox-cdn.com/thumbor/gStsxLoaNedKq4R_f-z1HD8lQ64=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/24209013/1441761320.jpg', 4),
(48, ' Zakaria', 'Aboukhlal', ' Zakaria Aboukhlal es un futbolista neerlandés, nacionalizado marroquí, que juega en la demarcación de delantero para el Toulouse F. C. de la Ligue 1.', 'Delantero', ' https://cdn-kiosk-api.telegraaf.nl/338d4d88-f3fa-11ec-a6dc-02d1dbdc35d1.jpg', 4),
(49, ' Amine', 'Harit', ' Amine Harit es un futbolista marroquí. Juega de centrocampista y su equipo es el Olympique de Marsella de la Ligue 1.', 'Medio campista', ' https://e00-marca.uecdn.es/assets/multimedia/imagenes/2018/07/03/15306228524449.jpg', 4),
(50, ' Hakim', 'Ziyech', ' Hakim Ziyech es un futbolista Marroquí, que juega como delantero en el Chelsea F. C. de la Premier League de Inglaterra.', 'Delantero', ' https://www.calciomercatonews.com/wp-content/uploads/2023/04/Hakim-Ziyech-calciomercatonews.com-24423.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `continente` varchar(250) NOT NULL,
  `clasificacion` int(45) NOT NULL,
  `bandera` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`, `continente`, `clasificacion`, `bandera`) VALUES
(1, 'Argentina', 'America', 1, 'https://c.files.bbci.co.uk/D348/production/_95588045_178392703.jpg'),
(2, 'Francia', 'Europa', 2, 'https://banderas.top/wp-content/uploads/2022/09/Bandera-de-Napoleon.jpg'),
(3, 'Croacia', 'Europa', 3, 'https://c4.wallpaperflare.com/wallpaper/703/478/458/bandera-croacia-europa-wallpaper-preview.jpg'),
(4, 'Marruecos', 'Africa', 4, 'https://touringinmorocco.com/es/wp-content/uploads/2022/04/morocco-flag.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'Mariano', '$2a$12$nm7f7Qh51jf/8R9GAuqHr.79v/YLSqteK3KlYZJavWHcJDmQBe3AC'),
(2, 'Martin', '$2a$12$HoXUJIxcV1EdJfQxjv8uP.t9IszgfFA/embAqgGTdA.GQooYJ6.qa'),
(3, 'Creadores', '$2a$12$ePFGXnnINlHTuvCowuy9qe1/K51sp3BtRRAGnAv17Rg7rCGJYMbzO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clasificacion` (`clasificacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
