-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2023 a las 10:46:43
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
(2, 'Gonzalo Ariel \r\n\r\n', 'Montiel', 'Gonzalo Ariel Montiel es un futbolista argentino que juega como defensa en el Sevilla F.C de la Primera División de España', 'Defensa', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QEiRXhpZgAASUkqAAgAAAACAA4BAgDfAAAAJgAAAJiCAgAVAAAABQEAAAAAAABHb256YWxvIE1vbnRpZWwgb2YgU2V2aWxsYSBGQyBsb29rcyBvbiBwcmlvciB0byB0aGUgTGEgTGlnYSBTYW50YW5kZXIgbWF0Y2ggYmV0d2VlbiBMZXZhbnRlIFVEIGFuZCBTZXZpbGxhIEZDIGF0IENpdXRhdCBkZSBWYWxlbmNpYSBzdGFkaXVtLCBBcHJpbCAyMSwgMjAyMiwgVmFsZW5jaWEsIFNwYWluLiAoUGhvdG8gYnkgRGF2aWQgQWxpYWdhL051clBob3RvIHZpYSBHZXR0eSBJbWFnZXMpRGF2aWQgQWxpYWdhL051clBob3Rv/+0BRlBob3Rvc2hvcCAzLjAAOEJJTQQEAAAAAAEpHAJQAAhOdXJQaG90bxwCeADfR29uemFsbyBNb250aWVsIG9mIFNldmlsbGEgRkMgbG9va3Mgb24gcHJpb3IgdG8gdGhlIExhIExpZ2EgU2FudGFuZGVyIG1hdGNoIGJldHdlZW4gTGV2YW50ZSBVRCBhbmQgU2V2aWxsYSBGQyBhdCBDaXV0YXQgZGUgVmFsZW5jaWEgc3RhZGl1bSwgQXByaWwgMjEsIDIwMjIsIFZhbGVuY2lhLCBTcGFpbi4gKFBob3RvIGJ5IERhdmlkIEFsaWFnYS9OdXJQaG90byB2aWEgR2V0dHkgSW1hZ2VzKRwCdAAVRGF2aWQgQWxpYWdhL051clBob3RvHAJuABlOdXJQaG90byB2aWEgR2V0dHkgSW1hZ2VzAP/hBgVodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+Cjx4Onhtc', 1),
(3, 'Nicolás Hernán Gonzalo ', 'Otamendi ', 'Nicolás Hernán Gonzalo Otamendi es un futbolista argentino que juega como defensory su actual equipo es el S. L. Benfica de la Primeira Liga', 'Defensa', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJAAZQMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAGAAMEBQcBAv/EAD4QAAIBAwIDBQQGCQMFAAAAAAECAwAEEQUSBiExE0FRYXEigZHBBxQyUqGxFSMkM0JDYoLRcuHxNWNzssL/xAAZAQADAQEBAAAAAAAAAAAAAAAAAwQCBQH/xAAjEQACAwACAQQDAQAAAAAAAAAAAQIDEQQSIRMxMjMiQVEj/9oADAMBAAIRAxEAPwCVikRXrFLFOMDe2ubacNKg9GitQNS1ax00ftU6qx6IObH3U1xTrK6Lp/aqu+eU7IlPTOM5NZ5a6dqWrOzC2uLh5GyzYJJrEpJGlFsL5uM9MjI2pO47yqj8s1b6fqVlqKFrOdZMdQOo91Ak/B2rrNtXTrtR1H6hiPiBimn0HU7B+2jjuILiMb87SpIHhWPUX9PfTf8ADSiteCtVfC2tnWLZlnUJcwgbwP4gejCrsrTV5MEbbXClSNlIpXuARdtKnynOuUYBYYpYr1iuUAcIpAV2ligAM46TtdV0pHGYwsjEeJ5UWcHhdkfLyxihrW51vtSXZGf2ctGp+8cjOKk6Q+rki3tDexSBsb4o07NB5luZqK7JMso/FGv2qgL7S9a830Ecqc0B8mGc0O8K6lqF/olwzyftELbQxGckeIqFpuv63dzSQ3cU2VchC1phG7/tA8vhScWDtegqNIh0/jW8FqCsIt/ZTuBJUkVc7astVsR9ee9CkMVCNnzxj8hUPbVtEtgRXR6yG', 1),
(4, 'Nicolás Alejandro ', 'Tagliafico', 'Nicolás Alejandro Tagliafico es un futbolista argentino que juega como defensor en el Olympique de Lyon de la Ligue 1', 'Defensor', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAGQAZAMBIgACEQEDEQH/xAAcAAEAAwACAwAAAAAAAAAAAAAABQYHAgQBAwj/xAA7EAACAQMCBAQEAwQKAwAAAAABAgMABBEFEgYhMUEHE1FhFCKBoXGR8BYysdEVI0JigpKiwcLhCCVS/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAMEAgH/xAAhEQACAwABBAMBAAAAAAAAAAAAAQIDESESMTJRBDNBIv/aAAwDAQACEQMRAD8A3GlKUAKUrPPErxHj4Y/9fpax3GqOPmLH5YB2JHdvb6n0IBeNR1Ox0yHztQu4LaP/AOpZAufwz1qs3fiZwvbsVF5LNjvFAxH5kCvny/1G91S8e81G4knuXOWkkPP6e3t0rxbyZbDgIB0x+udZ6jfSb4vixwlu2yXVzFz6tauR9gandF4u4f1xxHperWs8p6Q79sn+RsH7V8x3tt5ibklbI7E8vpUQzvG6lZCCpyrDqCO4966mcaw+z6V89cH+Mer6XFFZatAuqRL8qyu5SYDtk8931GfevoKGQTRJIucOoYAjB510yc6UpQApSlAClKUAVbxI4m/Zfhee7idReSkQ2oIz85749gCfpXzDLdPJcvcysXd2LM7HLMSck/iTzJrTP/Ia4uf6fsIHmLW62u+KEDAVixDH3J2isjUFm+bJrjNInIZ0dSWzz+9c/lGeROegK4rqWnmR43/KewIqSt7Se7lWKFXkZvToKw8NpNkdOZYhlS5B9QK9drp93qD4jjyM8zjkPrWl6LwLA', 1),
(5, 'Rodrigo Javier ', 'De Paul', 'Rodrigo Javier de Paul es un futbolista argentino que juega como centrocampista en el Atlético de Madrid, de la Primera División de España. Su carrera profesional comenzó en Racing Club en el año 2013', 'Medio campista', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAH0AZAMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAGAwQFBwABAgj/xAA8EAABAwMCAggDBgUDBQAAAAABAgMEAAUREiEGMRMiQVFhcYGRBxShFSMyQrHBYoKy0fFDUnIzkqLh8P/EABkBAAMBAQEAAAAAAAAAAAAAAAECAwQABf/EADARAAIBAwICBwcFAAAAAAAAAAECAAMEERIhMUEFIjJhgbHwFCNCcZGhwRMVUdHh/9oADAMBAAIRAxEAPwCrAnwpVvnWl1oHFdLE5i/ZXOkVx0laLtdEjqFGXKfDTRQknmpasJHn2+wNSrX2fAyl5PSPgZ1q3TnfkjzBB1ZFNGWS3DRg6S6jUojme0Dy/tTZ1xR6ilYI2xyxQikyaZv8RepuTDjkBGGwlltQCu/CgMd2xx4DnSThtj+kpkBIWnOEpAUkntKRsEjPfnvAwcQi2QnCjkHnW21KSg7nB2I8KMEWfjLYfU0vGU9xBBrpAwK7Z67IyclHhWlbCmE6aWNqaOjel1L3pJW6qWUGIjpNZS4SKyuh2iBGTWadq7ArYGaOImYiU7VwU05Ke6u4LLT05huRrLSnAFhsgK053xntxTY2zBJ5uEp+Db32j1iwEnbnt/cUlD4aly1qy4ljfYKSc476JokaPBtgCysR4+rmnKgMk48TvUczxfbVy+jVEW2CcckEeZAqGo8pZUUdqNZPCdzekJCVoDQATuDpAA9+/spGXwvOi5WhxtwDnpB5d+DRXIu0COwZK', 1),
(6, 'Enzo Jeremías ', 'Ferndandez', 'Enzo Jeremías Fernández es un futbolista argentino que juega como centrocampista en el Chelsea F. C. de la Premier League. Su carrera como futbolista profesional comenzó en el 2020, en Club Atlético River Plate.', 'Medio campista', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAH0AZAMBEQACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgEAB//EADgQAAIBAwIEBAQEBQMFAAAAAAECAwAEEQUhBhIxQRMiUWEUMnGBkaHB8CNCUrHRJDPhBxUWcoL/xAAaAQACAwEBAAAAAAAAAAAAAAAAAQIDBAUG/8QAMREAAgIBAwEECwABBQAAAAAAAAECEQMEITESMkFRYQUTInGBkaGx0eHwUiMzNELx/9oADAMBAAIRAxEAPwD5sDmpMtRYoqJIsUGkQZ40AUXM/gR5C8xOwFAhXLfXDHmZ2Tt0xQKycV7MCOaRiM96ATGMcplUsVwPXtQMlnamB7xKdiOM+aLArO9IZzApATRakySLlpBZb2pCPBc0xBGmaI+t3y2aFUGOZnboo+g3NRlLpJRj1bDP/wAHsld/EvJiATgqgQ/2ql5X3F6wRrcHm4T00eVXmjbsxf8ATFQWWRN6eFA2o6DLp9qiyTLJC7HlcD5e5Bzt+Rq6E7M+TH0i2NCIwGz7Z9KtRUVuCDQM4AaYjwWkM7y0gChHimM9igCa4NAEwKYjScLpFptleazPzMEPKFUgZ6bZrPle9F+FbWV2vFr6rfG3jsVCk4DLIXAPvsMVXKNIthk6nQJqXEiWt/8ADSWLMwPXmxn6bURhaCWXpdUFzwR67py3EDScoYhkJ+Ru3fvQvZZGftIzKW8luGilOWRiM1pi7Rmaopcb1IRDFAEsUAd5aADpFwKbGCM2KQHkfegAlN6QG', 1),
(7, 'Lautaro Javier ', 'Martinez', 'Lautaro Javier Martínez Gutiérrez es un futbolista argentino que juega como delantero en el Inter de Milán de la Serie A. Inició su carrera en su natal Argentina, debutando profesionalmente en 2015 con Racing Club.', 'Delantero', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHAAhQMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAFBgMEBwACAf/EADgQAAIBAwMDAgMGBAYDAQAAAAECAwAEEQUSIQYxQRNRFCJhIzJxgZGhB1KxwRUzQmLR4XLw8Rb/xAAZAQADAQEBAAAAAAAAAAAAAAACAwQBAAX/xAAjEQACAgIBBAMBAQAAAAAAAAAAAQIRAyESBBMxQSJRYZEy/9oADAMBAAIRAxEAPwAZcX/xd6FH3R5pmtH2Wg55IrP9Jd5Lo8ECmqS+SCIZPApfMbxYwW7rHGSWxmrVvKH5XtSbb6i1xOoz8tN9moNuMHBxTI2xUqR5u7aKYgkc+9U2sB5wfoaIf6hk15nmC/dGaZoCmQ2tpHASVUVeFxsGNvFVkmFeZ5V9M4ooxo5sX+qtYECEb6RLrVnmnVlf5RVrrWV2lITnNKcIYvtyc0TpBIbrvXTFp2fvscqOe3B5pfu+pLxrlmifYpPCr4HirNpoeo9SzSR6dEqwWpCPcO2Fzjt+P0orH/DK9Iw2owhj3AQn+9S5Mqv5MdDHJ/5RSs+pYxcq81vGRgFm5H/2tH0YwajZpc2/3HHAPesz1DobWtPJeJUuQOxQ4P6GiXQF5e2esFJ02BmMMpkGPmHjPv5oU1LaZ0oyjqSH3VrSP4VtwxxSLBHGZnHG5X704dS3RSBmJ4xWe6Ust7rO1D8u4k0Yuh/0ku0ByO2K6iem2xhtgCOa+1qZtC6uklLklBtWqeuRHaoBwAf1ppuUZ', 1),
(8, 'Cristian Gabriel', 'Romero', 'Cristian Gabriel Romero, conocido como Cuti Romero, es un futbolista argentino. Juega de defensor y su equipo actual es el Tottenham Hotspur F. C. de la Premier League', 'Defensor', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIAAZAMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQMGAAIHAf/EAD4QAAIBAwMCAwQHBgQHAQAAAAECAwAEEQUSITFBBhNRFCJhcSMyQlKBkaEHFZKxwfBigtHhJENTcoOy8TT/xAAZAQADAQEBAAAAAAAAAAAAAAACAwQAAQX/xAApEQACAgEDAgUEAwAAAAAAAAAAAQIDEQQSITFhEyJRcZEyQYGhI0JS/9oADAMBAAIRAxEAPwCqyaZepA7pdtv9N9aWVjqrZM9zICOh3V5JpSvCRDdAuegMlQ6fpN2JXFzde4O4loMrsdwTKLmW7a0jvpDKoztzRPsmp4I9skPrzTfw94StLuWWe7nkYlSEKPgg+uRSa70aW2mkRbyRgGwCX5NLjdXObhHGUbDR5Jb6tHGSty7H7tLkk15ZQpWULnglaYfuu7xuF24YDn3+lL5LbWjcKI5pXjz13Ux/g3yMBDrIXc1weexHStvJ1Ye952SB6VoLDUmX/wDXJ8t1aG11RThbyQnuM134Nn3J9+tIvDZ+aUwtPBVx4g043UmqwpeEEiApgAehOaU+TrCqP+KfPYUd4fF7a3Ms19PLs27QB1z60VW1S5SBknLhBOlRal4K1aDT7mVbqK4BdEhPfvWmra5q2ptHNbqq2x3NHGeWUDgkjqBQUWmalevd3dyZJJHbyYXCkjbnkj0HT9ajngu4BI1mXDv7iBPujjkf6+lLnVV4m+MeRkantzIwXergfY/grK0I1', 1),
(9, 'Julián', 'Alvarez', 'Julián Álvarez es un futbolista argentino que juega como delantero en el Manchester City F. C. de la Premier League. Surgió en Club Atlético Calchín, pero se formó y debutó profesionalmente en C. A. River Plate. En esta etapa ganó seis títulos profesionales.', 'Delantero', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QEsRXhpZgAASUkqAAgAAAADAA4BAgDfAAAAMgAAAJiCAgATAAAAEQEAABIBAwABAAAAAQAAAAAAAABCVUVOT1MgQUlSRVMsIEFSR0VOVElOQSAtIEpVTkUgMTA6IEp1bGlhbiBBbHZhcmV6IG9mIEFyZ2VudGluYSBwb3NlcyBkdXJpbmcgdGhlIG9mZmljaWFsIHBvcnRyYWl0IHNlc3Npb24gYWhlYWQgb2YgQ29wYSBBbWVyaWNhIEJyYXppbCAyMDIxIG9uIEp1bmUgMTAsIDIwMjEgaW4gQnVlbm9zIEFpcmVzLCBBcmdlbnRpbmEuIChQaG90byBieSBHdXN0YXZvIFBhZ2Fuby9HZXR0eSBJbWFnZXMpMjAyMSBHdXN0YXZvIFBhZ2Fub//tATxQaG90b3Nob3AgMy4wADhCSU0EBAAAAAABIBwCUAAOR3VzdGF2byBQYWdhbm8cAngA30JVRU5PUyBBSVJFUywgQVJHRU5USU5BIC0gSlVORSAxMDogSnVsaWFuIEFsdmFyZXogb2YgQXJnZW50aW5hIHBvc2VzIGR1cmluZyB0aGUgb2ZmaWNpYWwgcG9ydHJhaXQgc2Vzc2lvbiBhaGVhZCBvZiBDb3BhIEFtZXJpY2EgQnJhemlsIDIwMjEgb24gSnVuZSAxMCwgMjAyMSBpbiBCdWVub3MgQWlyZXMsIEFyZ2VudGluYS4gKFBob3RvIGJ5IEd1c3Rhdm8gUGFnYW5vL0dldHR5IEltYWdlcykcAnQAEzIwMjEgR3VzdGF2byBQYWdhbm8cAm4ADEdldHR5IEltYWdlc//hBfxodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+Cjx4Onhtc', 1),
(10, 'Lionel Andrés', 'Messi', 'Lionel Andrés Messi Cuccittini, conocido como Leo Messi, es un futbolista argentino que juega como delantero o centrocampista. Jugador histórico del Fútbol Club Barcelona, al que estuvo ligado veinte años, desde 2021 integra el plantel del Paris Saint-Germain de la Ligue 1 de Francia.', 'Delantero', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJAAtAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAIDBQYBB//EADwQAAIBAwMCBAMFBgUEAwAAAAECAwAEEQUSIQYxE0FRYRQicQcygZGhI0JSscHRFWJy4fAzQ6LiFiSS/8QAGQEAAgMBAAAAAAAAAAAAAAAAAQIAAwQF/8QAJBEAAgMAAgICAgMBAAAAAAAAAAECAxESIQQxE0EiYVGh4RT/2gAMAwEAAhEDEQA/APM1ORxzROn2cd3dCOR9o9aGthinxgsx2ttNWiNNrESaxYpY3IjjfcuPPvQ6LxUVxu8X5iSfUmiE+7QfZIppLXpqenbmC5tZLS6iRQqBQ78rz7Vnr6JIb+4WMAIHIGPSo7e5lt5SYZChPGRTJ3YsSxySck+tVqDT0scuh/iKvlThOuO1DOTkU91wFNPxByYWGjI5IrjiPaeRUJyIwaQB2Z9anEnLrCIoM8Vo9Gs9Kk0l5LtoxLyCW7j0xWdyKemdpGalkeUc3AVvi/WkKucA4rviE1IFVVyajVcgkVA6dDZpwGaagzk0+HLMahNOYpEV0nkio3z5GoQlUJtNMxzXEbJxUjLtGahCaNlVckio5J8rx2qKQkLTG/6VDCaTi4bHAzSqGM/KKVNiByY6L5c12M7SSfOltpFCRSch8IWw8pqUdsUO8bI+Tmp0BYZotgSEB82afJhjmm7TS2mpyDxFLtCiuyMCgwahnBCiljKjA5o6LgSXXwQD6UzxAI8ZqBQ27kcVyUYGc', 1),
(11, 'Ángel Fabián ', 'Di Maria', 'Ángel Fabián Di María es un futbolista argentino. Juega de extremo en la Juventus de Turín de la Serie A de Italia. Es también internacional con su selección desde el año 2008.', 'Delantero', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIUAmQMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQADBgcCAf/EAD8QAAIBAwMCBAMFBAcJAQAAAAECAwAEEQUSIQYxE0FRYRQicRUjgZGhMkJS0QcWQ1SxweEzYnKCkpOkwvAX/8QAGQEAAgMBAAAAAAAAAAAAAAAAAgMAAQQF/8QAIxEAAgMAAgMAAgMBAAAAAAAAAAECAxESIQQxMhNBIjNRI//aAAwDAQACEQMRAD8A5zYxRlMEV4uGWLJUc1WkpjGBXsR/EJREKgS4486gt2Iy1E2dsTLsHNF3drIm3auRirKFu0kbcVU8LrzRkfyMdwwaKgAmUgge9U2TBSjZ4qOSKKlthFIcDg1dawrJIFYVCAKDC5r7kuO+DT660+NIQVwD50l2bXIqyFCAsduahjYHHkKhDeJhaJlOxFDdzVEKFHcUVp7iGTMnIoNA5YHacE8US6Zj7gfjRJ4yZo3nuIHhO0DOKSIwEpPlmiYkXYF3c0amlh03DAopy0GKwWuS3avEasHBbtRlxElqcVX4iyYA70KCGFpMqx4r549fIbWRYS3lQ2xvWq0hQtnuXNSIeB3ppeNHCm1cfhSe6+dc8ip+iy+ymxc5HanIlV1y3as5aMVlGKYz3PhIPpU0opvipchaltKYouQKrVWf5zznmvLyA/LiqwsthlEsv3namMMUYJdcClqwEqCg5ry0kseFzUIE3VyWYpk4oSRcLurwpLHJq5nXw8edQh60q1a6uAEXcxOAu', 1),
(12, 'Alexis ', 'Mac Allister', 'Alexis Mac Allister es un futbolista argentino. Se desempeña como mediocampista ofensivo o volante mixto y su equipo es el Brighton & Hove Albion de la Premier League de Inglaterra', 'Medio campista', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHAAiwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAGAgMEBQcBAAj/xAA9EAACAQMDAwIDBQUECwAAAAABAgMABBEFEiEGMVETQSJhcRQygZGxByNSwfBCQ6HhFRYlRGJyc4KS0fH/xAAaAQACAwEBAAAAAAAAAAAAAAAEBQABAgMG/8QAJREAAgEEAgEFAAMAAAAAAAAAAQIAAwQRIRITMQUUIkFRIzJx/9oADAMBAAIRAxEAPwC8HQkPshHz5p1ehYUXJUmtH9JfFd9JfAo73jQjuaZueh4SuShz9KhT9D45QVqjRLt7U36K+KsXjS+5pmNv0Irr+8znzipC/s+hY4P6VpCQKGzinfTXxVNdtMGo0zcdC2yjAj5804vQNoRu9P4q0L0lz2pYjUe1YN08rmZnbdCW207oxn5CoI6HgWXcyZT3HmtRaNSO1Q7+LbZztEuZFjZlHkgHA/Or902NyBzMi1m7sNFumjggidowAz4yFb2UD8P65oB1PUbrUbr1ZbmV3kJ+FGPHyAo21boTVp0e73mUsAwDkZ5oQj0XVLK7Oy2cXADKp74J4yKVu5duTeZ3IYypdZo1JL4bPu2SDSYbiWEerG54wXAPBHmr6XpTWJt0ohZ2PJGMc/8A2q1dG1BWyVZT/XvUBE5lGEMul+oNOmnhttZlRxKdiTsCDHwOG8j5/wDrnQr3pG2KHCDmsQi0iQbI3JUlgFbHY5719O+isVtHFn7ihfyFG21d1HEHUhdhiYh1N', 1),
(13, 'Hugo Hadrien Dominique ', 'LLoris', 'Hugo Hadrien Dominique Lloris es un futbolista francés que juega como portero en el Tottenham Hotspur F. C. de la Premier League. Fue internacional con la selección de Francia en 145 partidos. Con la selección fue campeón de la Copa Mundial de 2018 y la Liga de Naciones 2020-21.', 'Arquero', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJAAhQMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQMGAAECB//EADgQAAIBAwMCBAMGBAYDAAAAAAECAwAEEQUSITFBBhMiUTJhcVKBkaGxwRQjQvAVJGJy0eEWsvH/xAAZAQACAwEAAAAAAAAAAAAAAAABAwACBAX/xAAjEQACAgICAgIDAQAAAAAAAAAAAQIRAyESMRNBBCIyUYFh/9oADAMBAAIRAxEAPwDxpOCDTCGY4FCImSBRyW+BTJRorB2bM42kZqFDk/fW5IcciuIslvvqqWy7QfCSCMUWVJXgc1HaQFiOMmm0do23lDT4rRjnkp0IpLck9K5TSriY/wAqCR+f6VJ/vpT66a2sVDIySz43eroo+nc/lS+417UAcfx0rxDJ+Ln7j+1LlP8AQ6MLVsEm0S9iUl7WTGcZAz+n1oNo3jYArhuuDT/SNcjWSFGZnCjaFJ+Hrz+n503k1qwlcpdwIyq2cyRiQfn0+6lc/wDC/j/RVbWU4olpTimM1nplwpltHFu5PwM4CH6ZpdLCyDkdeQferXZNoFm9Vat4gZBXTDmpIDhhRRX2OLSEbc0S6Dy6HtZMLiis5Sg0aouhXcR+usqecZasoUHkVi2jzIBT2O2jKDNLLOJlbmmy5CgU7J2ZMMqQLc2yjpUNvbLu5FE3DNnmsth6s1RIvOeh7pdqgh34GSaYSlIYHd+y55oPTp1WMI5xUl6DNEEQnJOBtPOTTX+JgtOeysX9tf30/wDItpPKH', 2),
(14, 'Lucas Francois Bernard ', 'Hernandez', 'Lucas Francois Bernard Hernandez, más conocido como Lucas Hernández, es un futbolista francés que juega como defensa en el Bayern de Múnich de la 1. Bundesliga de Alemania. Además es internacional absoluto con la selección francesa. Es hermano mayor del también futbolista Theo Hernández.', 'Defensor', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJAAlAMBEQACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAgQFBgcDAf/EAEQQAAIBAwICBgcDCAgHAAAAAAECAwAEEQUhEjEGE0FRYXEHFCKBkaGxMsHRFSMkUoKSlPA0NUJERVVi8VNUcnOy0uH/xAAbAQEAAwEBAQEAAAAAAAAAAAAAAgMEAQUGB//EADsRAAIBAgMDCQcDAwQDAAAAAAABAgMRBBIhMUGhBRNRYXGBkbHRFCIyUpLB8FOi4TNCQwYVYvFygrL/2gAMAwEAAhEDEQA/ANxoAoAoAoAoAoAoCP1vWtN0Kxa81a6S3gXbibJLHuAG5PgKAxPpl6W9Rv5JIej4ksLdGwlzxZkkHivIZ+PlQFRh6X9KoJBcLrN67bNgz8XLvBoC59HPTNqNswj123S8TO8keEl7vs4C8vL30Bt2n30Go2MF5aPxwToHRh2gjNAOaAKAKAKAKAKAKAKAKAKAKAKAKA8NAYb6YtZn1bpGujQyMLaxGWjAGHlK8WT5Db499RbsSSuZn+T7vAkigYjPaNqZkdyM5z2sqqxltnQgEniGc+XZXVJM44sRbWczsOrTftAH2f52rjkgos2D0HdI5Fu7jQLtyFkzNbhychh9pRnsxvjwNEzjRs1SOBQBQBQBQBQBQBQBQBQBQBQBQHhoDCtcsxJ021eWQH27h1Jz2ZA+grPVlbQ00I32ktZWVm6KZIVLL9nbas6kbHFHe5sLCdeGaAMuCMHsFFIOKeg0udOsY4QkE', 2);

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
