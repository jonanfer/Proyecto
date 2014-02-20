-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-02-2014 a las 02:09:17
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jhonathan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenos`
--

CREATE TABLE IF NOT EXISTS `disenos` (
  `cod_diseno` int(11) NOT NULL AUTO_INCREMENT,
  `tip_diseno` varchar(32) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_adelanto` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  PRIMARY KEY (`cod_diseno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `cod_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `tip_solicitud` varchar(32) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `ima_solicitud` varchar(32) NOT NULL,
  `des_solicitud` varchar(128) NOT NULL,
  `est_solicitud` varchar(32) NOT NULL,
  PRIMARY KEY (`cod_solicitud`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_us` int(11) NOT NULL AUTO_INCREMENT,
  `document_us` int(11) NOT NULL,
  `firstName_us` varchar(32) NOT NULL,
  `lastName_us` varchar(32) NOT NULL,
  `phone_us` bigint(20) NOT NULL,
  `email_us` varchar(32) NOT NULL,
  `user_us` varchar(32) NOT NULL,
  `password_us` varchar(32) NOT NULL,
  `state_us` varchar(32) NOT NULL,
  `rol_us` varchar(32) NOT NULL,
  PRIMARY KEY (`id_us`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_us`, `document_us`, `firstName_us`, `lastName_us`, `phone_us`, `email_us`, `user_us`, `password_us`, `state_us`, `rol_us`) VALUES
(1, 1053797940, 'Jhonathan Fernando', 'Beltran Gonzalez', 8902887, 'jfdobg-18@hotmail.com', 'Jonanfer', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Administrador'),
(2, 1056953654, 'Luisa Fernanda', 'Aristizabal Aguirre', 8752564, 'luferaristi@hotmail.com', 'Luisa', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(3, 1054789652, 'Juan David', 'Rivera Giraldo', 8873800, 'juan_faclo17@hotmail.com', 'Juan', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Empleado'),
(4, 1053123489, 'Marcela', 'Sanchez Manrique', 8874530, 'msmanrique@misena.edu.co', 'Marcela', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(5, 1054789253, 'Yeny Paola', 'Cardona Marin', 8785420, 'yanypaoc@misena.edu.co', 'Yeny', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Diseñador'),
(6, 1054620182, 'Diego Alejandro', 'Hernandez', 8751236, 'dahored@hotmail.com', 'Diego', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Empleado'),
(7, 1054231045, 'Dayana Andrea ', 'Marin Gallego', 8741108, 'dayaan@hotmail.com', 'Dayana', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Diseñador'),
(8, 1054825450, 'Yamileth', 'Erazo Becerra', 8874523, 'yamierzo@misena.edu.co', 'Yamileth', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(9, 1016254684, 'Sergio Daniel', 'Duque Gutierrez', 8882004, 'checho45@misena.edu.co', 'Sergio', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(10, 1053003698, 'Viviana Carolina', 'Martinez Osorio', 8780030, 'vicamaos@misena.edu.co', 'Viviana', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario'),
(11, 1013546246, 'Christian Felipe', 'Buitrago Hoyos', 8752100, 'christian25@misena.edu.co', 'Christian', 'e10adc3949ba59abbe56e057f20f883e', 'Activo', 'Usuario');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `user` (`id_us`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
