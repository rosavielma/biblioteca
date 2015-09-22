-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2015 a las 19:02:06
-- Versión del servidor: 5.5.43-0+deb8u1
-- Versión de PHP: 5.6.7-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `biblioteca2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` int(11) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usuario`, `password`, `nivel`) VALUES
('daniela', 2, 1),
('rosa', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `editorial` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id`, `nombre`, `editorial`) VALUES
(7, 'kuai', 1),
(30, 'rosa', 3),
(39, 'rosita', 2),
(41, 'maria', 4),
(43, 'daniela', 5),
(44, 'paola', 3),
(45, 'yes', 5),
(46, 'hola1', 3),
(47, 'guajaja', 2),
(48, 'mariano', 7),
(49, 'dede', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(0, 'obras Generales'),
(1, 'huaia'),
(12, 'sosiaua'),
(100, 'filosofia y psicologia'),
(130, 'otrafisica'),
(231, 'edes'),
(300, 'educacion integral'),
(500, 'religion'),
(600, 'gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisiones`
--

CREATE TABLE IF NOT EXISTS `divisiones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `divisiones`
--

INSERT INTO `divisiones` (`id`, `nombre`, `categoria`) VALUES
(0, 'obras generales', 0),
(1, 'dsa', 12),
(10, 'ciencia y tecnicas bibliograficas', 0),
(32, 'paop', 500),
(110, 'metafisica', 100),
(120, 'teorias metafisicas', 100),
(130, 'otra fisica', 100),
(405, 'huesos', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE IF NOT EXISTS `editorial` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id`, `nombre`) VALUES
(1, '--'),
(2, 'santillana'),
(3, 'salesiana'),
(4, 'caracol'),
(5, 'vagos.com'),
(6, 'hoakl'),
(7, 'jejejojoojja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
`id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `nombre`) VALUES
(1, '4to'),
(2, '6to'),
(3, '1er'),
(4, '5to');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE IF NOT EXISTS `prestamo` (
`id` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fechaLimite` date NOT NULL,
  `prestado` enum('si') COLLATE utf8_spanish_ci DEFAULT 'si',
  `cota` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `devuelto` enum('si','no') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'no'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id`, `fecha_prestamo`, `fechaLimite`, `prestado`, `cota`, `usuario`, `fecha_devolucion`, `devuelto`) VALUES
(1, '2015-09-22', '2015-09-29', 'si', 'AC-01', '22989396', NULL, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE IF NOT EXISTS `texto` (
  `cota` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ano` year(4) NOT NULL,
  `numEdicion` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `grado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`cota`, `titulo`, `ano`, `numEdicion`, `autor`, `categoria`, `grado`) VALUES
('AC-01', 'literaturaaaa', 2005, 3, 39, 405, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
`id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`) VALUES
(3, 'administrador'),
(5, 'bibliotecario'),
(10, 'Docente'),
(1, 'estudiante'),
(2, 'obrero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `tipo`) VALUES
('22989396', 'rosa', 'vielma', 1),
('23497945', 'lilibeth', 'lacruz', 3),
('23498924', 'lilibeth', 'guillen', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre` (`nombre`), ADD KEY `editorial` (`editorial`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `divisiones`
--
ALTER TABLE `divisiones`
 ADD PRIMARY KEY (`id`), ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `prestado` (`prestado`,`cota`), ADD KEY `prestamo` (`cota`,`usuario`), ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `texto`
--
ALTER TABLE `texto`
 ADD PRIMARY KEY (`cota`), ADD KEY `autor` (`autor`), ADD KEY `categoria` (`categoria`), ADD KEY `grado` (`grado`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`cedula`), ADD KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor`
--
ALTER TABLE `autor`
ADD CONSTRAINT `autor_ibfk_2` FOREIGN KEY (`editorial`) REFERENCES `editorial` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `divisiones`
--
ALTER TABLE `divisiones`
ADD CONSTRAINT `divisiones_ibfk_3` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`cota`) REFERENCES `texto` (`cota`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `texto`
--
ALTER TABLE `texto`
ADD CONSTRAINT `texto_ibfk_6` FOREIGN KEY (`grado`) REFERENCES `grado` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `texto_ibfk_8` FOREIGN KEY (`autor`) REFERENCES `autor` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `texto_ibfk_9` FOREIGN KEY (`categoria`) REFERENCES `divisiones` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `usuario_ibfk_6` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
