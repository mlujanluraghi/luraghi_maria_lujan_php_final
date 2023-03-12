-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2023 a las 15:45:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elecktricity_luraghi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE `administracion` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administracion`
--

INSERT INTO `administracion` (`id`, `usuario`, `contraseña`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `material` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `tipo`, `material`, `cantidad`, `imagen`, `estado`) VALUES
(6, 'Herramienta', 'Alicate', 3, 'conector.jpeg', 'NO DISPONIBLE'),
(7, 'Herramienta', 'Pinza', 100, 'destornilladorplano.jpeg', 'DISPONIBLE'),
(51, 'Insumo', 'cable negro', 6, 'cable.jpeg', 'DISPONIBLE'),
(53, 'Insumo', 'cable amarillo', 9, 'cable.jpeg', 'DISPONIBLE'),
(54, 'Insumo', 'conector azul', 3, 'conector.jpeg', 'DISPONIBLE'),
(55, 'Herramienta', 'lijadora', 3, 'lijadora.jpeg', 'DISPONIBLE'),
(56, 'Herramienta', 'lijadora de banco', 1, 'agu_banco.jpeg', 'NO DISPONIBLE'),
(57, 'Insumo', 'lijas', 140, 'lijas.jpeg', 'DISPONIBLE'),
(65, 'Herramienta', 'taladro', 4, 'agu_banco.jpeg', 'DISPONIBLE'),
(66, 'Herramienta', 'remachadora', 6, 'remachadora.jpeg', 'DISPONIBLE'),
(67, 'Insumo', 'tornillo', 1999, 'tornillo.jpeg', 'DISPONIBLE'),
(68, 'Insumo', 'tuerca', 222, 'contuerca.jpeg', 'DISPONIBLE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administracion`
--
ALTER TABLE `administracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administracion`
--
ALTER TABLE `administracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
