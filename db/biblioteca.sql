-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 08-03-2007 a las 03:48:05
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `biblioteca`
-- 
CREATE DATABASE `biblioteca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biblioteca`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `administradores`
-- 

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL auto_increment,
  `nomb_admin` varchar(12) NOT NULL,
  `clave_admin` varchar(12) NOT NULL,
  `nivel_admin` varchar(1) NOT NULL,
  PRIMARY KEY  (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `administradores`
-- 

INSERT INTO `administradores` VALUES (2, 'rosa', 'rosa', 'a');
INSERT INTO `administradores` VALUES (3, 'paola', 'paola', 'o');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `material`
-- 

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL auto_increment,
  `codigo_material` varchar(20) NOT NULL,
  `descrip_material` varchar(255) NOT NULL,
  PRIMARY KEY  (`id_material`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `material`
-- 

INSERT INTO `material` VALUES (1, '', '');
INSERT INTO `material` VALUES (2, '1233', 'dsds');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `prestamos`
-- 

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL auto_increment,
  `fecha_prestamo` date NOT NULL,
  `fecha_limite` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_admin` int(11) default NULL,
  PRIMARY KEY  (`id_prestamo`),
  KEY `id_admin` (`id_admin`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `prestamos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `prestamos_materiales`
-- 

CREATE TABLE `prestamos_materiales` (
  `id_prestamo` int(11) NOT NULL,
  `id_material` int(11) NOT NULL default '0',
  `id_texto` int(11) NOT NULL default '0',
  `estatus` varchar(1) NOT NULL,
  `fecha_entrega` date NOT NULL,
  PRIMARY KEY  (`id_prestamo`,`id_material`,`id_texto`),
  KEY `id_material` (`id_material`),
  KEY `id_texto` (`id_texto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `prestamos_materiales`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `textos`
-- 

CREATE TABLE `textos` (
  `id_texto` int(11) NOT NULL auto_increment,
  `cota_texto` varchar(20) NOT NULL,
  `titulo_texto` varchar(40) NOT NULL,
  `autor_texto` varchar(30) NOT NULL,
  `edito_texto` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_texto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `textos`
-- 

INSERT INTO `textos` VALUES (1, '', '', '', '');
INSERT INTO `textos` VALUES (3, '323', 'eff', 'rss', 'wqe');
INSERT INTO `textos` VALUES (4, '66', 'rosis', 'rosa', 'santillana');
INSERT INTO `textos` VALUES (5, '', '', '', '');
INSERT INTO `textos` VALUES (6, '', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_usuario`
-- 

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL auto_increment,
  `nomb_tipo_usuario` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tipo_usuario`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `cedula_usuario` varchar(12) NOT NULL,
  `nomb_usuario` varchar(15) NOT NULL,
  `ape_usuario` varchar(15) NOT NULL,
  `id_tipo_usuario` int(11) default NULL,
  PRIMARY KEY  (`id_usuario`),
  KEY `id_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, '323', 'ddd', 'ss', NULL);
INSERT INTO `usuarios` VALUES (2, '44', 'de', 'ww', NULL);
INSERT INTO `usuarios` VALUES (3, '66', 'adolfo', 'romero', NULL);
INSERT INTO `usuarios` VALUES (4, '', '', '', NULL);

-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `prestamos`
-- 
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `administradores` (`id_admin`) ON DELETE SET NULL ON UPDATE NO ACTION;

-- 
-- Filtros para la tabla `prestamos_materiales`
-- 
ALTER TABLE `prestamos_materiales`
  ADD CONSTRAINT `prestamos_materiales_ibfk_3` FOREIGN KEY (`id_prestamo`) REFERENCES `prestamos` (`id_prestamo`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `prestamos_materiales_ibfk_4` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `prestamos_materiales_ibfk_5` FOREIGN KEY (`id_texto`) REFERENCES `textos` (`id_texto`) ON UPDATE NO ACTION;

-- 
-- Filtros para la tabla `usuarios`
-- 
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE SET NULL ON UPDATE NO ACTION;
