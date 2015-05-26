/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `galeria`
--
CREATE DATABASE IF NOT EXISTS `galeria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `galeria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `obra_id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Autor` varchar(45) NOT NULL,
  `Descripcion` varchar(150) NOT NULL,
  `Anio` int(11) NOT NULL,
  PRIMARY KEY (`obra_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`obra_id`, `Nombre`, `Autor`, `Descripcion`, `Anio`) VALUES
(2, 'La gioconda', 'Leonardo Da vinci', 'Pintura la gioconda de Leonardo Da Vinci', 1911),
(3, 'las seÃ±oritas de avignon', 'Pablo Picasso', 'Pintura las seÃ±oritas de avignon de pablo picasso', 1907),
(4, 'Broadway boogie-woogie', 'Piet Mondrian', 'pintura Broadway boogie-woogie de piet mondrian', 1942),
(5, 'El pensador', 'Auguste Rodin', 'Escultura el pensador de auguste rodin', 1902),
(6, 'Perseo con la cabeza de medusa', 'Benvenuto Cellini', 'Escultura perseo con la cabeza de medusa de Benvenuto Cellini', 1545),
(7, 'Gray Tree', 'Piet Mondrian', 'pintura Gray Tree de Piet Mondrian', 1912);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
