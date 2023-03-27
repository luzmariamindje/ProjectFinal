-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2023 a las 23:17:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cliente`
--

CREATE TABLE `usuario_cliente` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_cliente`
--

INSERT INTO `usuario_cliente` (`id_usuario`, `usuario`, `email`, `password`) VALUES
(1, 'lmindje', 'sabina2001@gmail.com', '12345'),
(3, 'Teresa', 'teresa@gmail.com', '99999'),
(4, 'paloma', 'palo@gmail.com', '444'),
(6, 'rosa', 'rosa@gmail.com', '777'),
(17, 'Susana', 'benjabenja100@gmail.com', 'susi'),
(18, 'Carmen', 'carmen@gmail.com', '2323');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cuidador`
--

CREATE TABLE `usuario_cuidador` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telefono` int(12) NOT NULL,
  `precios` int(10) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_cuidador`
--

INSERT INTO `usuario_cuidador` (`id_usuario`, `usuario`, `nombre`, `email`, `password`, `telefono`, `precios`, `descripcion`) VALUES
(1, 'alumno1', 'Marta', 'lucecita2001@gmail.com', '676767', 235435632, 12, 'cuidadora de perros'),
(2, 'cata', 'cta23', 'cata@gmail.com', '333', 675473735, 2, 'cuidadora de perros'),
(3, 'ella', 'carme lucia', 'ella@gmail.com', '1234', 767676764, 12, 'cuidadora de gatos'),
(4, 'ella', 'carme lucia', 'ella@gmail.com', '1234', 767676764, 12, 'cuidadora de gatos'),
(5, 'catalina', 'josefa', 'lucecita2001@gmail.com', '234', 564565725, 12, 'son una cuidador de '),
(6, 'almu23', 'Almudena', 'almu@gmail.com', 'almu', 54546565, 12, 'cuidadora de perros');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_cuidador`
--
ALTER TABLE `usuario_cuidador`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuario_cuidador`
--
ALTER TABLE `usuario_cuidador`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
