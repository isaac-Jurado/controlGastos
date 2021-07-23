-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2021 a las 19:41:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gastos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_dias`
--

CREATE TABLE `t_dias` (
  `id_dias` int(11) NOT NULL,
  `dias` date NOT NULL,
  `diasInsert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_dias`
--

INSERT INTO `t_dias` (`id_dias`, `dias`, `diasInsert`) VALUES
(11, '2021-07-22', '2021-07-23 07:01:16'),
(12, '2021-07-23', '2021-07-23 07:01:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_gastos`
--

CREATE TABLE `t_gastos` (
  `id_gastos` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `hora` time NOT NULL,
  `descripcion` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `t_gastos`
--

INSERT INTO `t_gastos` (`id_gastos`, `monto`, `hora`, `descripcion`) VALUES
(1, 1, '01:01:00', '1'),
(2, 1, '01:11:00', '2'),
(3, 3, '03:33:00', '4'),
(4, 22, '23:03:00', 'tercera');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_dias`
--
ALTER TABLE `t_dias`
  ADD PRIMARY KEY (`id_dias`);

--
-- Indices de la tabla `t_gastos`
--
ALTER TABLE `t_gastos`
  ADD PRIMARY KEY (`id_gastos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_dias`
--
ALTER TABLE `t_dias`
  MODIFY `id_dias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `t_gastos`
--
ALTER TABLE `t_gastos`
  MODIFY `id_gastos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
