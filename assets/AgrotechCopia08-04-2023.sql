-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2023 a las 05:58:40
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agropecuaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `ID_produccion` int(11) NOT NULL,
  `Produccion_leche` varchar(45) NOT NULL,
  `Produccion_carne` varchar(45) NOT NULL,
  `Fecha` date NOT NULL,
  `Inventario_rebaño_ID_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`ID_produccion`, `Produccion_leche`, `Produccion_carne`, `Fecha`, `Inventario_rebaño_ID_animal`) VALUES
(1, '45', '', '2023-01-15', 1),
(2, '', '260', '2023-03-03', 1),
(3, '30', '', '2023-02-03', 12),
(4, '', '260', '2023-03-03', 1),
(5, '41', '', '2023-03-15', 1),
(6, '45', '', '2023-04-15', 1),
(8, '100', '', '2023-04-08', 12),
(9, '', '180', '2023-04-08', 18),
(10, '10', '', '2023-07-01', 1),
(11, '', '250', '2023-04-12', 18),
(12, '10', '', '2023-05-16', 19),
(13, '', '168', '2023-05-17', 19),
(14, '68', '', '2023-06-15', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`ID_produccion`),
  ADD KEY `fk_Produccion_Inventario_rebaño1_idx` (`Inventario_rebaño_ID_animal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `ID_produccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `fk_Produccion_Inventario_rebaño1` FOREIGN KEY (`Inventario_rebaño_ID_animal`) REFERENCES `inventario_rebaño` (`ID_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
