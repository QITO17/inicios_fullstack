-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 11:49:31
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
-- Base de datos: `rappi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `correo_electronico` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`correo_electronico`, `clave`, `user_type`) VALUES
('', '', NULL),
('', '', NULL),
('', '', NULL),
('', 'brasil883', NULL),
('aguapanla@gmail.com', 'brasil883', NULL),
('aguapanla@gmail.com', 'brasil883', NULL),
('aguapanla@gmail.com', 'arley', NULL),
('aguapanla@gmail.com', 'brasil883', 'admin'),
('aguapanla@gmail.com', 'brasil883', 'admin'),
('aguapanla@gmail.com', '12141', 'admin'),
('aguapanla@gmail.com', '12141', 'admin'),
('LUISITO@GMAIL.COM', 'brasil883', 'admin'),
('', '', ''),
('aguapanla@gmail.com', 'brasil883', 'admin'),
('re123', 're123', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `referencia` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `tiempo_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`referencia`, `nombre`, `descripcion`, `image1`, `precio`, `tiempo_pedido`) VALUES
(1, 'Pancakes', 'Ricos y deliciosos', 'upload/descarga_1687199557.jfif', 2000, NULL),
(2, 'Pancakes', 'Ricos y deliciosos', 'upload/descarga_1687200139.jfif', 2000, NULL),
(3, 'Pancakes', 'Ricos y deliciosos', 'upload/descarga1_1687200149.png', 2000, NULL),
(4, 'Rosa', 'Ricos y deliciosos aaaaaaaaaaaaa', 'upload/_1687200387.', 9000, NULL),
(5, 'Rosa', 'Ricos y deliciosos aaaaaaaaaaaaa', 'upload/descarga1_1687200419.png', 9000, NULL),
(6, 'Rosa', 'Ricos y deliciosos aaaaaaaaaaaaa', 'upload/descarga1_1687200685.png', 9000, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`referencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `referencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
