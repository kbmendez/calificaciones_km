-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-09-2017 a las 20:59:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nit` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `con` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nit`, `nombre`, `apellido`, `ciudad`, `correo`, `con`, `tipo`, `estado`, `carrera`) VALUES
(1, '14141202', 'KAREN', 'MENDEZ', 'MEXICO', 'KMENDEZ@HOTMAIL.COM', 'ZGNjY2VmZmY=', 'alumno', 's', '7'),
(2, '123223445', 'IVAN', 'GUITIERREZ', 'CARTAGENA@COLOMBIA', 'GUITIERREZ@HOTMAIL.COM', 'ZGNlZWRlZ2hp', 'alumno', 's', '7'),
(3, '11233212', 'MIGUEL', 'LAYUN', 'QUERETARO ', 'MIGUE@HOTMAIL.COM', 'ZGJjZWZlY2M=', 'alumno', 's', '7'),
(4, '5454666', 'HOMERO', 'SIMPSONS', 'MEXICO', 'IP@HOTMAIL.COM', 'aGlpaWpsbA==', 'alumno', 's', '7'),
(5, '1200', 'CASTRO', 'RICARDO', 'QUERETARO', 'JL@HOTMAIL.COM', '1200', 'alumno', 's', '7'),
(6, '1234567', 'JAIME LUIS', 'GIMENEZ', 'MEXICO', 'GIMENEZ@GMAIL.COM', '1234567', 'alumno', 's', '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_horario` int(4) NOT NULL,
  `nc` int(8) NOT NULL,
  `nit` int(8) NOT NULL,
  `nmateria` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `creditos` int(2) NOT NULL,
  `horario` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nc` int(8) NOT NULL,
  `id` int(3) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `genero` char(1) NOT NULL COMMENT 'AUTO_INCREMENT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nc`, `id`, `nombre`, `apellido`, `correo`, `genero`) VALUES
(14141202, 0, 'Karen', 'Mendez', 'karen@gmail.com', 'M'),
(15161702, 0, 'Maria', 'MartÃ­nez', 'MM@gmail.com', 'M'),
(17172323, 0, 'Santiago', 'Martinez ', 'scdu@gmail.com', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nit` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `facultad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nit`, `nombre`, `apellido`, `ciudad`, `correo`, `estado`, `facultad`) VALUES
(1, '17262734', 'Karla', 'Castillo Mendez', '', 'karlacm@gmail.com', '', ''),
(2, '867496543', 'Eduardo', 'Lopez', '', 'Edulo@gmail.com', '', ''),
(3, '24612038', 'Maria', 'Guitierrez', '', 'Mary@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('karen', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_horario`),
  ADD UNIQUE KEY `nc` (`nc`),
  ADD UNIQUE KEY `nit` (`nit`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`nc`) USING BTREE;

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_horario` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_2` FOREIGN KEY (`nc`) REFERENCES `persona` (`nc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materias_ibfk_3` FOREIGN KEY (`nit`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
