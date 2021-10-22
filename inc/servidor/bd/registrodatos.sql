-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 20:44:57
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `med`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrodatos`
--

CREATE TABLE `registrodatos` (
  `id_Paciente` int(10) NOT NULL,
  `cedula` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `residencia` varchar(30) NOT NULL,
  `escolaridad` varchar(30) NOT NULL,
  `imagen_historia` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrodatos`
--

INSERT INTO `registrodatos` (`id_Paciente`, `cedula`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `edad`, `ocupacion`, `correo`, `fecha_nacimiento`, `estado_civil`, `nacionalidad`, `residencia`, `escolaridad`, `imagen_historia`) VALUES
(2748634, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f696e632f7365727669646f722f636f6e6578696f6e2f696d6167656e65732f696d6167656e7072756562612e6a7067),
(2748635, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f50726f796563746f2d53656e61536f66742f696e632f7365727669646f722f636f6e6578696f6e2f696d6167656e65732f696d6167656e7072756562612e6a7067),
(2748636, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f50726f796563746f2d53656e61536f66742f696e632f7365727669646f722f636f6e6578696f6e2f696d6167656e65732f696d6167656e7072756562612e6a7067),
(2748637, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f696e632f7365727669646f722f636f6e6578696f6e2f696d6167656e65732f436170747572612064652070616e74616c6c61202835292e706e67),
(2748638, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f696e632f7365727669646f722f636f6e6578696f6e2f696d6167656e65732f696d6167656e7072756562612e6a7067),
(2748639, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f696e632f7365727669646f722f636f6e6578696f6e2f696d6167656e65732f696d6167656e7072756562612e6a7067),
(2748640, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f696e632f7365727669646f722f636f6e6578696f6e2f696d6167656e65732f696d6167656e7072756562612e6a7067),
(2748641, 0, '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0x2e2f696d6167656e65732f696d6167656e7072756562612e6a7067);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrodatos`
--
ALTER TABLE `registrodatos`
  ADD PRIMARY KEY (`id_Paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrodatos`
--
ALTER TABLE `registrodatos`
  MODIFY `id_Paciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2748642;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
