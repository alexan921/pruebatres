-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2025 a las 23:52:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compramotos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra de motos`
--

CREATE TABLE `compra de motos` (
  `Documento` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(11) NOT NULL,
  `Telefono` text NOT NULL,
  `Marca` varchar(11) NOT NULL,
  `Tipo-Moto` varchar(11) NOT NULL,
  `Cilindrada` varchar(11) NOT NULL,
  `Fecha-compra` date NOT NULL,
  `Unidades` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra de motos`
--

INSERT INTO `compra de motos` (`Documento`, `Nombre`, `Apellido`, `Telefono`, `Marca`, `Tipo-Moto`, `Cilindrada`, `Fecha-compra`, `Unidades`) VALUES
(122332123, 'Camilo', 'Snaches', '3213637789', 'Yamaha', 'YBR', '125', '2025-08-01', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios y compras`
--

CREATE TABLE `propietarios y compras` (
  `Documento` int(15) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propietarios y compras`
--

INSERT INTO `propietarios y compras` (`Documento`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Contraseña`) VALUES
(1107976688, 'Jordan Alexander', 'Caicedo Rengifo ', '3228890909', 'alexander.20.jordi@gmail.com', '123456789'),
(1107987654, 'camilo', 'lopez', '3228897907', 'camilo@gmai.com', '321456'),
(2147483647, 'luna', 'roa', '321456733', 'luna@gmail.com', '3212344');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra de motos`
--
ALTER TABLE `compra de motos`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `propietarios y compras`
--
ALTER TABLE `propietarios y compras`
  ADD PRIMARY KEY (`Documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
